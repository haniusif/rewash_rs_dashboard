<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Dashboard_notification;



class Dashboard_notificationController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$dashboard_notifications = \App\Models\REWASH\Dashboard_notification::get();
   
   $data = $request->all();


  $dashboard_notifications = Dashboard_notification::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['last_seen_support_messages']) &&  $data['last_seen_support_messages'] != null ){
                   $query->where('last_seen_support_messages' , 'like'  , '%' .$data['last_seen_support_messages']. '%' );   
               }

                
  if(isset($data['last_seen_web_appointments']) &&  $data['last_seen_web_appointments'] != null ){
                   $query->where('last_seen_web_appointments' , 'like'  , '%' .$data['last_seen_web_appointments']. '%' );   
               }

                
  if(isset($data['last_seen_reviews']) &&  $data['last_seen_reviews'] != null ){
                   $query->where('last_seen_reviews' , 'like'  , '%' .$data['last_seen_reviews']. '%' );   
               }

                
  if(isset($data['last_seen_gift_appointments']) &&  $data['last_seen_gift_appointments'] != null ){
                   $query->where('last_seen_gift_appointments' , 'like'  , '%' .$data['last_seen_gift_appointments']. '%' );   
               }

                
  if(isset($data['last_customer_suggestion']) &&  $data['last_customer_suggestion'] != null ){
                   $query->where('last_customer_suggestion' , 'like'  , '%' .$data['last_customer_suggestion']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.dashboard_notifications.dashboard_notifications')

->with('dashboard_notifications',$dashboard_notifications)
;

//searchfun


                        return view('REWASH.dashboard_notifications.dashboard_notifications' , compact('dashboard_notifications'));

    }





        public function create()
    {

          return view('REWASH.dashboard_notifications.dashboard_notification_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'user_id' => 'required',

       'last_seen_support_messages' => 'required',

       'last_seen_web_appointments' => 'required',

       'last_seen_reviews' => 'required',

       'last_seen_gift_appointments' => 'required',

       'last_customer_suggestion' => 'required',]);
    $dashboard_notification = new Dashboard_notification ();

         $dashboard_notification->branch_id = $request->branch_id;
  $dashboard_notification->user_id = $request->user_id;
  $dashboard_notification->last_seen_support_messages = $request->last_seen_support_messages;
  $dashboard_notification->last_seen_web_appointments = $request->last_seen_web_appointments;
  $dashboard_notification->last_seen_reviews = $request->last_seen_reviews;
  $dashboard_notification->last_seen_gift_appointments = $request->last_seen_gift_appointments;
  $dashboard_notification->last_customer_suggestion = $request->last_customer_suggestion;


    $save = $dashboard_notification->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('dashboard_notifications.show', $dashboard_notification->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:dashboard_notifications,id',]);

    $dashboard_notification = Dashboard_notification::find($id);
    $next = Dashboard_notification::where('id','>',$id)->min('id');
    $previous = Dashboard_notification::where('id','<',$id)->max('id');
       return view('REWASH.dashboard_notifications.dashboard_notification_view')
        ->with('dashboard_notification',$dashboard_notification)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $dashboard_notification = Dashboard_notification::find($id); 

      $dashboard_notification->branch_id = $request->branch_id;
  $dashboard_notification->user_id = $request->user_id;
  $dashboard_notification->last_seen_support_messages = $request->last_seen_support_messages;
  $dashboard_notification->last_seen_web_appointments = $request->last_seen_web_appointments;
  $dashboard_notification->last_seen_reviews = $request->last_seen_reviews;
  $dashboard_notification->last_seen_gift_appointments = $request->last_seen_gift_appointments;
  $dashboard_notification->last_customer_suggestion = $request->last_customer_suggestion;

    $update = $dashboard_notification->update();

    if ($update) {
        Session::flash('alert-success', true);
        Session::flash('message', __('The record has been successfully updated.'));
    } else {
        Session::flash('alert-danger', true);
        Session::flash('message', __('Unable to update the record. Please try again.'));
    }

    return back();
}

public function destroy($id)
{
    $model = Dashboard_notification::find($id);

    if ($model && $model->delete()) {
        Session::flash('alert-success', true);
        Session::flash('message', __('The record has been successfully deleted.'));
    } else {
        Session::flash('alert-danger', true);
        Session::flash('message', __('Failed to delete the record. Please try again.'));
    }

    return back();
}

}
