<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Status;



class StatusController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$statuses = \App\Models\REWASH\Status::get();
   
   $data = $request->all();


  $statuses = Status::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['status']) &&  $data['status'] != null ){
                   $query->where('status' , 'like'  , '%' .$data['status']. '%' );   
               }

                
  if(isset($data['en_status']) &&  $data['en_status'] != null ){
                   $query->where('en_status' , 'like'  , '%' .$data['en_status']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.statuses.statuses')

->with('statuses',$statuses)
;

//searchfun


                        return view('REWASH.statuses.statuses' , compact('statuses'));

    }





        public function create()
    {

          return view('REWASH.statuses.status_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'status' => 'required',

       'en_status' => 'required',]);
    $status = new Status ();

         $status->branch_id = $request->branch_id;
  $status->status = $request->status;
  $status->en_status = $request->en_status;


    $save = $status->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('statuses.show', $status->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:statuses,id',]);

    $status = Status::find($id);
    $next = Status::where('id','>',$id)->min('id');
    $previous = Status::where('id','<',$id)->max('id');
       return view('REWASH.statuses.status_view')
        ->with('status',$status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $status = Status::find($id); 

      $status->branch_id = $request->branch_id;
  $status->status = $request->status;
  $status->en_status = $request->en_status;

    $update = $status->update();

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
    $model = Status::find($id);

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
