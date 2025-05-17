<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Scheduled_fcm_notification;



class Scheduled_fcm_notificationController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$scheduled_fcm_notifications = \App\Models\REWASH\Scheduled_fcm_notification::get();
   
   $data = $request->all();


  $scheduled_fcm_notifications = Scheduled_fcm_notification::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['title']) &&  $data['title'] != null ){
                   $query->where('title' , 'like'  , '%' .$data['title']. '%' );   
               }

                
  if(isset($data['notification']) &&  $data['notification'] != null ){
                   $query->where('notification' , 'like'  , '%' .$data['notification']. '%' );   
               }

                
  if(isset($data['start_date']) &&  $data['start_date'] != null ){
                   $query->where('start_date' , 'like'  , '%' .$data['start_date']. '%' );   
               }

                
  if(isset($data['end_date']) &&  $data['end_date'] != null ){
                   $query->where('end_date' , 'like'  , '%' .$data['end_date']. '%' );   
               }

                
  if(isset($data['time']) &&  $data['time'] != null ){
                   $query->where('time' , 'like'  , '%' .$data['time']. '%' );   
               }

                
  if(isset($data['neighborhood_ids']) &&  $data['neighborhood_ids'] != null ){
                   $query->where('neighborhood_ids' , 'like'  , '%' .$data['neighborhood_ids']. '%' );   
               }

                     if(isset($data['for_all_users']) && $data['for_all_users'] != 'all' ){
            
                 $query->where('for_all_users' , $data['for_all_users']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.scheduled_fcm_notifications.scheduled_fcm_notifications')

->with('scheduled_fcm_notifications',$scheduled_fcm_notifications)
;

//searchfun


                        return view('REWASH.scheduled_fcm_notifications.scheduled_fcm_notifications' , compact('scheduled_fcm_notifications'));

    }





        public function create()
    {

          return view('REWASH.scheduled_fcm_notifications.scheduled_fcm_notification_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'title' => 'required',

       'notification' => 'required',

       'start_date' => 'required',

       'end_date' => 'required',

       'time' => 'required',

       'neighborhood_ids' => 'required',

       'for_all_users' => 'required',]);
    $scheduled_fcm_notification = new Scheduled_fcm_notification ();

         $scheduled_fcm_notification->title = $request->title;
  $scheduled_fcm_notification->notification = $request->notification;
  $scheduled_fcm_notification->start_date = $request->start_date;
  $scheduled_fcm_notification->end_date = $request->end_date;
  $scheduled_fcm_notification->time = $request->time;
  $scheduled_fcm_notification->neighborhood_ids = $request->neighborhood_ids;
  $scheduled_fcm_notification->for_all_users = $request->for_all_users;


    $save = $scheduled_fcm_notification->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('scheduled_fcm_notifications.show', $scheduled_fcm_notification->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:scheduled_fcm_notifications,id',]);

    $scheduled_fcm_notification = Scheduled_fcm_notification::find($id);
    $next = Scheduled_fcm_notification::where('id','>',$id)->min('id');
    $previous = Scheduled_fcm_notification::where('id','<',$id)->max('id');
       return view('REWASH.scheduled_fcm_notifications.scheduled_fcm_notification_view')
        ->with('scheduled_fcm_notification',$scheduled_fcm_notification)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $scheduled_fcm_notification = Scheduled_fcm_notification::find($id); 

      $scheduled_fcm_notification->title = $request->title;
  $scheduled_fcm_notification->notification = $request->notification;
  $scheduled_fcm_notification->start_date = $request->start_date;
  $scheduled_fcm_notification->end_date = $request->end_date;
  $scheduled_fcm_notification->time = $request->time;
  $scheduled_fcm_notification->neighborhood_ids = $request->neighborhood_ids;
  $scheduled_fcm_notification->for_all_users = $request->for_all_users;

    $update = $scheduled_fcm_notification->update();

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
    $model = Scheduled_fcm_notification::find($id);

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
