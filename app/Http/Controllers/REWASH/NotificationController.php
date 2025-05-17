<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Notification;



class NotificationController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$notifications = \App\Models\REWASH\Notification::get();
   
   $data = $request->all();


  $notifications = Notification::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                     if(isset($data['is_read']) && $data['is_read'] != 'all' ){
            
                 $query->where('is_read' , $data['is_read']);   
            }
 
  if(isset($data['title']) &&  $data['title'] != null ){
                   $query->where('title' , 'like'  , '%' .$data['title']. '%' );   
               }

                
  if(isset($data['notification']) &&  $data['notification'] != null ){
                   $query->where('notification' , 'like'  , '%' .$data['notification']. '%' );   
               }

                
  if(isset($data['en_title']) &&  $data['en_title'] != null ){
                   $query->where('en_title' , 'like'  , '%' .$data['en_title']. '%' );   
               }

                
  if(isset($data['en_notification']) &&  $data['en_notification'] != null ){
                   $query->where('en_notification' , 'like'  , '%' .$data['en_notification']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.notifications.notifications')

->with('notifications',$notifications)
;

//searchfun


                        return view('REWASH.notifications.notifications' , compact('notifications'));

    }





        public function create()
    {

          return view('REWASH.notifications.notification_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'is_read' => 'required',

       'title' => 'required',

       'notification' => 'required',

       'en_title' => 'required',

       'en_notification' => 'required',]);
    $notification = new Notification ();

         $notification->user_id = $request->user_id;
  $notification->is_read = $request->is_read;
  $notification->title = $request->title;
  $notification->notification = $request->notification;
  $notification->en_title = $request->en_title;
  $notification->en_notification = $request->en_notification;


    $save = $notification->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('notifications.show', $notification->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:notifications,id',]);

    $notification = Notification::find($id);
    $next = Notification::where('id','>',$id)->min('id');
    $previous = Notification::where('id','<',$id)->max('id');
       return view('REWASH.notifications.notification_view')
        ->with('notification',$notification)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $notification = Notification::find($id); 

      $notification->user_id = $request->user_id;
  $notification->is_read = $request->is_read;
  $notification->title = $request->title;
  $notification->notification = $request->notification;
  $notification->en_title = $request->en_title;
  $notification->en_notification = $request->en_notification;

    $update = $notification->update();

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
    $model = Notification::find($id);

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
