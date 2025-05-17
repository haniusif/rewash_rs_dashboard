<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Activity_log;



class Activity_logController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$activity_logs = \App\Models\REWASH\Activity_log::get();
   
   $data = $request->all();


  $activity_logs = Activity_log::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['appointment_id']) &&  $data['appointment_id'] != null ){
                   $query->where('appointment_id' , 'like'  , '%' .$data['appointment_id']. '%' );   
               }

                
  if(isset($data['appointment_schedule_id']) &&  $data['appointment_schedule_id'] != null ){
                   $query->where('appointment_schedule_id' , 'like'  , '%' .$data['appointment_schedule_id']. '%' );   
               }

                
  if(isset($data['description']) &&  $data['description'] != null ){
                   $query->where('description' , 'like'  , '%' .$data['description']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.activity_logs.activity_logs')

->with('activity_logs',$activity_logs)
;

//searchfun


                        return view('REWASH.activity_logs.activity_logs' , compact('activity_logs'));

    }





        public function create()
    {

          return view('REWASH.activity_logs.activity_log_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'appointment_id' => 'required',

       'appointment_schedule_id' => 'required',

       'description' => 'required',

       'user_id' => 'required',]);
    $activity_log = new Activity_log ();

         $activity_log->branch_id = $request->branch_id;
  $activity_log->appointment_id = $request->appointment_id;
  $activity_log->appointment_schedule_id = $request->appointment_schedule_id;
  $activity_log->description = $request->description;
  $activity_log->user_id = $request->user_id;


    $save = $activity_log->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('activity_logs.show', $activity_log->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:activity_logs,id',]);

    $activity_log = Activity_log::find($id);
    $next = Activity_log::where('id','>',$id)->min('id');
    $previous = Activity_log::where('id','<',$id)->max('id');
       return view('REWASH.activity_logs.activity_log_view')
        ->with('activity_log',$activity_log)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $activity_log = Activity_log::find($id); 

      $activity_log->branch_id = $request->branch_id;
  $activity_log->appointment_id = $request->appointment_id;
  $activity_log->appointment_schedule_id = $request->appointment_schedule_id;
  $activity_log->description = $request->description;
  $activity_log->user_id = $request->user_id;

    $update = $activity_log->update();

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
    $model = Activity_log::find($id);

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
