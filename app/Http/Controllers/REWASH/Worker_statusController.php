<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Worker_status;



class Worker_statusController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$worker_statuses = \App\Models\REWASH\Worker_status::get();
   
   $data = $request->all();


  $worker_statuses = Worker_status::orderby('id','DESC')

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

                
  if(isset($data['color']) &&  $data['color'] != null ){
                   $query->where('color' , 'like'  , '%' .$data['color']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.worker_statuses.worker_statuses')

->with('worker_statuses',$worker_statuses)
;

//searchfun


                        return view('REWASH.worker_statuses.worker_statuses' , compact('worker_statuses'));

    }





        public function create()
    {

          return view('REWASH.worker_statuses.worker_status_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',

       'color' => 'required',]);
    $worker_status = new Worker_status ();

         $worker_status->name = $request->name;
  $worker_status->en_name = $request->en_name;
  $worker_status->color = $request->color;


    $save = $worker_status->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('worker_statuses.show', $worker_status->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:worker_statuses,id',]);

    $worker_status = Worker_status::find($id);
    $next = Worker_status::where('id','>',$id)->min('id');
    $previous = Worker_status::where('id','<',$id)->max('id');
       return view('REWASH.worker_statuses.worker_status_view')
        ->with('worker_status',$worker_status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $worker_status = Worker_status::find($id); 

      $worker_status->name = $request->name;
  $worker_status->en_name = $request->en_name;
  $worker_status->color = $request->color;

    $update = $worker_status->update();

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
    $model = Worker_status::find($id);

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
