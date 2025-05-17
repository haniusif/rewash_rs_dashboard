<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Team_task;



class Team_taskController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$team_tasks = \App\Models\REWASH\Team_task::get();
   
   $data = $request->all();


  $team_tasks = Team_task::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['team_id']) &&  $data['team_id'] != null ){
                   $query->where('team_id' , 'like'  , '%' .$data['team_id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['task']) &&  $data['task'] != null ){
                   $query->where('task' , 'like'  , '%' .$data['task']. '%' );   
               }

                
  if(isset($data['status_id']) &&  $data['status_id'] != null ){
                   $query->where('status_id' , 'like'  , '%' .$data['status_id']. '%' );   
               }

                
  if(isset($data['appointment_id']) &&  $data['appointment_id'] != null ){
                   $query->where('appointment_id' , 'like'  , '%' .$data['appointment_id']. '%' );   
               }

                
  if(isset($data['appointment_schedule_id']) &&  $data['appointment_schedule_id'] != null ){
                   $query->where('appointment_schedule_id' , 'like'  , '%' .$data['appointment_schedule_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.team_tasks.team_tasks')

->with('team_tasks',$team_tasks)
;

//searchfun


                        return view('REWASH.team_tasks.team_tasks' , compact('team_tasks'));

    }





        public function create()
    {

          return view('REWASH.team_tasks.team_task_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'team_id' => 'required',

       'user_id' => 'required',

       'task' => 'required',

       'status_id' => 'required',

       'appointment_id' => 'required',

       'appointment_schedule_id' => 'required',]);
    $team_task = new Team_task ();

         $team_task->branch_id = $request->branch_id;
  $team_task->team_id = $request->team_id;
  $team_task->user_id = $request->user_id;
  $team_task->task = $request->task;
  $team_task->status_id = $request->status_id;
  $team_task->appointment_id = $request->appointment_id;
  $team_task->appointment_schedule_id = $request->appointment_schedule_id;


    $save = $team_task->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('team_tasks.show', $team_task->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:team_tasks,id',]);

    $team_task = Team_task::find($id);
    $next = Team_task::where('id','>',$id)->min('id');
    $previous = Team_task::where('id','<',$id)->max('id');
       return view('REWASH.team_tasks.team_task_view')
        ->with('team_task',$team_task)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $team_task = Team_task::find($id); 

      $team_task->branch_id = $request->branch_id;
  $team_task->team_id = $request->team_id;
  $team_task->user_id = $request->user_id;
  $team_task->task = $request->task;
  $team_task->status_id = $request->status_id;
  $team_task->appointment_id = $request->appointment_id;
  $team_task->appointment_schedule_id = $request->appointment_schedule_id;

    $update = $team_task->update();

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
    $model = Team_task::find($id);

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
