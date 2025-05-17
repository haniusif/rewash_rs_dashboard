<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Worker_notification;



class Worker_notificationController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$worker_notifications = \App\Models\REWASH\Worker_notification::get();
   
   $data = $request->all();


  $worker_notifications = Worker_notification::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['team_id']) &&  $data['team_id'] != null ){
                   $query->where('team_id' , 'like'  , '%' .$data['team_id']. '%' );   
               }

                
  if(isset($data['type']) &&  $data['type'] != null ){
                   $query->where('type' , 'like'  , '%' .$data['type']. '%' );   
               }

                
  if(isset($data['message']) &&  $data['message'] != null ){
                   $query->where('message' , 'like'  , '%' .$data['message']. '%' );   
               }

                
  if(isset($data['amount']) &&  $data['amount'] != null ){
                   $query->where('amount' , 'like'  , '%' .$data['amount']. '%' );   
               }

                
  if(isset($data['image_path']) &&  $data['image_path'] != null ){
                   $query->where('image_path' , 'like'  , '%' .$data['image_path']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['title']) &&  $data['title'] != null ){
                   $query->where('title' , 'like'  , '%' .$data['title']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                     if(isset($data['is_read']) && $data['is_read'] != 'all' ){
            
                 $query->where('is_read' , $data['is_read']);   
            }
 
 
 })
  ->paginate(50);

return view('REWASH.worker_notifications.worker_notifications')

->with('worker_notifications',$worker_notifications)
;

//searchfun


                        return view('REWASH.worker_notifications.worker_notifications' , compact('worker_notifications'));

    }





        public function create()
    {

          return view('REWASH.worker_notifications.worker_notification_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'team_id' => 'required',

       'type' => 'required',

       'message' => 'required',

       'amount' => 'required',

       'image_path' => 'required',

       'title' => 'required',

       'user_id' => 'required',

       'is_read' => 'required',]);
    $worker_notification = new Worker_notification ();

         $worker_notification->team_id = $request->team_id;
  $worker_notification->type = $request->type;
  $worker_notification->message = $request->message;
  $worker_notification->amount = $request->amount;
  $worker_notification->image_path = $request->image_path;
  $worker_notification->title = $request->title;
  $worker_notification->user_id = $request->user_id;
  $worker_notification->is_read = $request->is_read;


    $save = $worker_notification->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('worker_notifications.show', $worker_notification->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:worker_notifications,id',]);

    $worker_notification = Worker_notification::find($id);
    $next = Worker_notification::where('id','>',$id)->min('id');
    $previous = Worker_notification::where('id','<',$id)->max('id');
       return view('REWASH.worker_notifications.worker_notification_view')
        ->with('worker_notification',$worker_notification)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $worker_notification = Worker_notification::find($id); 

      $worker_notification->team_id = $request->team_id;
  $worker_notification->type = $request->type;
  $worker_notification->message = $request->message;
  $worker_notification->amount = $request->amount;
  $worker_notification->image_path = $request->image_path;
  $worker_notification->title = $request->title;
  $worker_notification->user_id = $request->user_id;
  $worker_notification->is_read = $request->is_read;

    $update = $worker_notification->update();

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
    $model = Worker_notification::find($id);

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
