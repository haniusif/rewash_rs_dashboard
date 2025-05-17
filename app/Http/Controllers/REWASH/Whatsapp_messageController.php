<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Whatsapp_message;



class Whatsapp_messageController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$whatsapp_messages = \App\Models\REWASH\Whatsapp_message::get();
   
   $data = $request->all();


  $whatsapp_messages = Whatsapp_message::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['sent_status']) &&  $data['sent_status'] != null ){
                   $query->where('sent_status' , 'like'  , '%' .$data['sent_status']. '%' );   
               }

                
  if(isset($data['template']) &&  $data['template'] != null ){
                   $query->where('template' , 'like'  , '%' .$data['template']. '%' );   
               }

                
  if(isset($data['message']) &&  $data['message'] != null ){
                   $query->where('message' , 'like'  , '%' .$data['message']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.whatsapp_messages.whatsapp_messages')

->with('whatsapp_messages',$whatsapp_messages)
;

//searchfun


                        return view('REWASH.whatsapp_messages.whatsapp_messages' , compact('whatsapp_messages'));

    }





        public function create()
    {

          return view('REWASH.whatsapp_messages.whatsapp_message_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'sent_status' => 'required',

       'template' => 'required',

       'message' => 'required',]);
    $whatsapp_message = new Whatsapp_message ();

         $whatsapp_message->user_id = $request->user_id;
  $whatsapp_message->sent_status = $request->sent_status;
  $whatsapp_message->template = $request->template;
  $whatsapp_message->message = $request->message;


    $save = $whatsapp_message->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('whatsapp_messages.show', $whatsapp_message->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:whatsapp_messages,id',]);

    $whatsapp_message = Whatsapp_message::find($id);
    $next = Whatsapp_message::where('id','>',$id)->min('id');
    $previous = Whatsapp_message::where('id','<',$id)->max('id');
       return view('REWASH.whatsapp_messages.whatsapp_message_view')
        ->with('whatsapp_message',$whatsapp_message)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $whatsapp_message = Whatsapp_message::find($id); 

      $whatsapp_message->user_id = $request->user_id;
  $whatsapp_message->sent_status = $request->sent_status;
  $whatsapp_message->template = $request->template;
  $whatsapp_message->message = $request->message;

    $update = $whatsapp_message->update();

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
    $model = Whatsapp_message::find($id);

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
