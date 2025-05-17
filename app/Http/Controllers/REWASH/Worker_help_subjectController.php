<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Worker_help_subject;



class Worker_help_subjectController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$worker_help_subjects = \App\Models\REWASH\Worker_help_subject::get();
   
   $data = $request->all();


  $worker_help_subjects = Worker_help_subject::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
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

return view('REWASH.worker_help_subjects.worker_help_subjects')

->with('worker_help_subjects',$worker_help_subjects)
;

//searchfun


                        return view('REWASH.worker_help_subjects.worker_help_subjects' , compact('worker_help_subjects'));

    }





        public function create()
    {

          return view('REWASH.worker_help_subjects.worker_help_subject_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',]);
    $worker_help_subject = new Worker_help_subject ();

         $worker_help_subject->name = $request->name;
  $worker_help_subject->en_name = $request->en_name;


    $save = $worker_help_subject->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('worker_help_subjects.show', $worker_help_subject->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:worker_help_subjects,id',]);

    $worker_help_subject = Worker_help_subject::find($id);
    $next = Worker_help_subject::where('id','>',$id)->min('id');
    $previous = Worker_help_subject::where('id','<',$id)->max('id');
       return view('REWASH.worker_help_subjects.worker_help_subject_view')
        ->with('worker_help_subject',$worker_help_subject)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $worker_help_subject = Worker_help_subject::find($id); 

      $worker_help_subject->name = $request->name;
  $worker_help_subject->en_name = $request->en_name;

    $update = $worker_help_subject->update();

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
    $model = Worker_help_subject::find($id);

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
