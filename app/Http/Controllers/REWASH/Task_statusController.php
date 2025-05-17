<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Task_status;



class Task_statusController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$task_statuses = \App\Models\REWASH\Task_status::get();
   
   $data = $request->all();


  $task_statuses = Task_status::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['en_name']) &&  $data['en_name'] != null ){
                   $query->where('en_name' , 'like'  , '%' .$data['en_name']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.task_statuses.task_statuses')

->with('task_statuses',$task_statuses)
;

//searchfun


                        return view('REWASH.task_statuses.task_statuses' , compact('task_statuses'));

    }





        public function create()
    {

          return view('REWASH.task_statuses.task_status_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',]);
    $task_status = new Task_status ();

         $task_status->branch_id = $request->branch_id;
  $task_status->name = $request->name;
  $task_status->en_name = $request->en_name;


    $save = $task_status->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('task_statuses.show', $task_status->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:task_statuses,id',]);

    $task_status = Task_status::find($id);
    $next = Task_status::where('id','>',$id)->min('id');
    $previous = Task_status::where('id','<',$id)->max('id');
       return view('REWASH.task_statuses.task_status_view')
        ->with('task_status',$task_status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $task_status = Task_status::find($id); 

      $task_status->branch_id = $request->branch_id;
  $task_status->name = $request->name;
  $task_status->en_name = $request->en_name;

    $update = $task_status->update();

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
    $model = Task_status::find($id);

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
