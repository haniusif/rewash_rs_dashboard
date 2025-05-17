<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\General_status;



class General_statusController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$general_statuses = \App\Models\REWASH\General_status::get();
   
   $data = $request->all();


  $general_statuses = General_status::orderby('id','DESC')

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

                
  if(isset($data['type']) &&  $data['type'] != null ){
                   $query->where('type' , 'like'  , '%' .$data['type']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.general_statuses.general_statuses')

->with('general_statuses',$general_statuses)
;

//searchfun


                        return view('REWASH.general_statuses.general_statuses' , compact('general_statuses'));

    }





        public function create()
    {

          return view('REWASH.general_statuses.general_status_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',

       'type' => 'required',]);
    $general_status = new General_status ();

         $general_status->name = $request->name;
  $general_status->en_name = $request->en_name;
  $general_status->type = $request->type;


    $save = $general_status->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('general_statuses.show', $general_status->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:general_statuses,id',]);

    $general_status = General_status::find($id);
    $next = General_status::where('id','>',$id)->min('id');
    $previous = General_status::where('id','<',$id)->max('id');
       return view('REWASH.general_statuses.general_status_view')
        ->with('general_status',$general_status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $general_status = General_status::find($id); 

      $general_status->name = $request->name;
  $general_status->en_name = $request->en_name;
  $general_status->type = $request->type;

    $update = $general_status->update();

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
    $model = General_status::find($id);

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
