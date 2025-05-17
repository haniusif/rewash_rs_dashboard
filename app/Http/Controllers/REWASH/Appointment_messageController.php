<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Appointment_message;



class Appointment_messageController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$appointment_messages = \App\Models\REWASH\Appointment_message::get();
   
   $data = $request->all();


  $appointment_messages = Appointment_message::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['key']) &&  $data['key'] != null ){
                   $query->where('key' , 'like'  , '%' .$data['key']. '%' );   
               }

                
  if(isset($data['value']) &&  $data['value'] != null ){
                   $query->where('value' , 'like'  , '%' .$data['value']. '%' );   
               }

                
  if(isset($data['description']) &&  $data['description'] != null ){
                   $query->where('description' , 'like'  , '%' .$data['description']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.appointment_messages.appointment_messages')

->with('appointment_messages',$appointment_messages)
;

//searchfun


                        return view('REWASH.appointment_messages.appointment_messages' , compact('appointment_messages'));

    }





        public function create()
    {

          return view('REWASH.appointment_messages.appointment_message_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'key' => 'required',

       'value' => 'required',

       'description' => 'required',]);
    $appointment_message = new Appointment_message ();

         $appointment_message->branch_id = $request->branch_id;
  $appointment_message->key = $request->key;
  $appointment_message->value = $request->value;
  $appointment_message->description = $request->description;
  $appointment_message->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $appointment_message->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('appointment_messages.show', $appointment_message->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:appointment_messages,id',]);

    $appointment_message = Appointment_message::find($id);
    $next = Appointment_message::where('id','>',$id)->min('id');
    $previous = Appointment_message::where('id','<',$id)->max('id');
       return view('REWASH.appointment_messages.appointment_message_view')
        ->with('appointment_message',$appointment_message)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $appointment_message = Appointment_message::find($id); 

      $appointment_message->branch_id = $request->branch_id;
  $appointment_message->key = $request->key;
  $appointment_message->value = $request->value;
  $appointment_message->description = $request->description;
  $appointment_message->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $appointment_message->update();

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
    $model = Appointment_message::find($id);

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
