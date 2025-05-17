<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Scheduled_notification;



class Scheduled_notificationController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$scheduled_notifications = \App\Models\REWASH\Scheduled_notification::get();
   
   $data = $request->all();


  $scheduled_notifications = Scheduled_notification::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['notification_title']) &&  $data['notification_title'] != null ){
                   $query->where('notification_title' , 'like'  , '%' .$data['notification_title']. '%' );   
               }

                
  if(isset($data['notification_massage']) &&  $data['notification_massage'] != null ){
                   $query->where('notification_massage' , 'like'  , '%' .$data['notification_massage']. '%' );   
               }

                
  if(isset($data['notification_date']) &&  $data['notification_date'] != null ){
                   $query->where('notification_date' , 'like'  , '%' .$data['notification_date']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.scheduled_notifications.scheduled_notifications')

->with('scheduled_notifications',$scheduled_notifications)
;

//searchfun


                        return view('REWASH.scheduled_notifications.scheduled_notifications' , compact('scheduled_notifications'));

    }





        public function create()
    {

          return view('REWASH.scheduled_notifications.scheduled_notification_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'notification_title' => 'required',

       'notification_massage' => 'required',

       'notification_date' => 'required',]);
    $scheduled_notification = new Scheduled_notification ();

         $scheduled_notification->branch_id = $request->branch_id;
  $scheduled_notification->notification_title = $request->notification_title;
  $scheduled_notification->notification_massage = $request->notification_massage;
  $scheduled_notification->notification_date = $request->notification_date;


    $save = $scheduled_notification->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('scheduled_notifications.show', $scheduled_notification->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:scheduled_notifications,id',]);

    $scheduled_notification = Scheduled_notification::find($id);
    $next = Scheduled_notification::where('id','>',$id)->min('id');
    $previous = Scheduled_notification::where('id','<',$id)->max('id');
       return view('REWASH.scheduled_notifications.scheduled_notification_view')
        ->with('scheduled_notification',$scheduled_notification)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $scheduled_notification = Scheduled_notification::find($id); 

      $scheduled_notification->branch_id = $request->branch_id;
  $scheduled_notification->notification_title = $request->notification_title;
  $scheduled_notification->notification_massage = $request->notification_massage;
  $scheduled_notification->notification_date = $request->notification_date;

    $update = $scheduled_notification->update();

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
    $model = Scheduled_notification::find($id);

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
