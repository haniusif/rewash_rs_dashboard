<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Worker_help_request;



class Worker_help_requestController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$worker_help_requests = \App\Models\REWASH\Worker_help_request::get();
   
   $data = $request->all();


  $worker_help_requests = Worker_help_request::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['subject_id']) &&  $data['subject_id'] != null ){
                   $query->where('subject_id' , 'like'  , '%' .$data['subject_id']. '%' );   
               }

                
  if(isset($data['text']) &&  $data['text'] != null ){
                   $query->where('text' , 'like'  , '%' .$data['text']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.worker_help_requests.worker_help_requests')

->with('worker_help_requests',$worker_help_requests)
;

//searchfun


                        return view('REWASH.worker_help_requests.worker_help_requests' , compact('worker_help_requests'));

    }





        public function create()
    {

          return view('REWASH.worker_help_requests.worker_help_request_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'subject_id' => 'required',

       'text' => 'required',]);
    $worker_help_request = new Worker_help_request ();

         $worker_help_request->user_id = $request->user_id;
  $worker_help_request->subject_id = $request->subject_id;
  $worker_help_request->text = $request->text;


    $save = $worker_help_request->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('worker_help_requests.show', $worker_help_request->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:worker_help_requests,id',]);

    $worker_help_request = Worker_help_request::find($id);
    $next = Worker_help_request::where('id','>',$id)->min('id');
    $previous = Worker_help_request::where('id','<',$id)->max('id');
       return view('REWASH.worker_help_requests.worker_help_request_view')
        ->with('worker_help_request',$worker_help_request)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $worker_help_request = Worker_help_request::find($id); 

      $worker_help_request->user_id = $request->user_id;
  $worker_help_request->subject_id = $request->subject_id;
  $worker_help_request->text = $request->text;

    $update = $worker_help_request->update();

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
    $model = Worker_help_request::find($id);

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
