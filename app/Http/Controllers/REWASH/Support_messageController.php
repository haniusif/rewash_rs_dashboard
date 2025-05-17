<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Support_message;



class Support_messageController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$support_messages = \App\Models\REWASH\Support_message::get();
   
   $data = $request->all();


  $support_messages = Support_message::orderby('id','DESC')

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

                
  if(isset($data['email']) &&  $data['email'] != null ){
                   $query->where('email' , 'like'  , '%' .$data['email']. '%' );   
               }

                
  if(isset($data['message']) &&  $data['message'] != null ){
                   $query->where('message' , 'like'  , '%' .$data['message']. '%' );   
               }

                
  if(isset($data['status']) &&  $data['status'] != null ){
                   $query->where('status' , 'like'  , '%' .$data['status']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['updated_by']) &&  $data['updated_by'] != null ){
                   $query->where('updated_by' , 'like'  , '%' .$data['updated_by']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.support_messages.support_messages')

->with('support_messages',$support_messages)
;

//searchfun


                        return view('REWASH.support_messages.support_messages' , compact('support_messages'));

    }





        public function create()
    {

          return view('REWASH.support_messages.support_message_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'user_id' => 'required',

       'email' => 'required',

       'message' => 'required',

       'status' => 'required',]);
    $support_message = new Support_message ();

         $support_message->branch_id = $request->branch_id;
  $support_message->user_id = $request->user_id;
  $support_message->email = $request->email;
  $support_message->message = $request->message;
  $support_message->status = $request->status;
  $support_message->updated_by = Auth::user()->id; 


    $save = $support_message->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('support_messages.show', $support_message->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:support_messages,id',]);

    $support_message = Support_message::find($id);
    $next = Support_message::where('id','>',$id)->min('id');
    $previous = Support_message::where('id','<',$id)->max('id');
       return view('REWASH.support_messages.support_message_view')
        ->with('support_message',$support_message)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $support_message = Support_message::find($id); 

      $support_message->branch_id = $request->branch_id;
  $support_message->user_id = $request->user_id;
  $support_message->email = $request->email;
  $support_message->message = $request->message;
  $support_message->status = $request->status;
  $support_message->updated_by = Auth::user()->id; 

    $update = $support_message->update();

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
    $model = Support_message::find($id);

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
