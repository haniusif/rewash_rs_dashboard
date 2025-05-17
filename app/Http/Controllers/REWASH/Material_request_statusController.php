<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Material_request_status;



class Material_request_statusController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$material_request_statuses = \App\Models\REWASH\Material_request_status::get();
   
   $data = $request->all();


  $material_request_statuses = Material_request_status::orderby('id','DESC')

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

return view('REWASH.material_request_statuses.material_request_statuses')

->with('material_request_statuses',$material_request_statuses)
;

//searchfun


                        return view('REWASH.material_request_statuses.material_request_statuses' , compact('material_request_statuses'));

    }





        public function create()
    {

          return view('REWASH.material_request_statuses.material_request_status_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',

       'color' => 'required',]);
    $material_request_status = new Material_request_status ();

         $material_request_status->name = $request->name;
  $material_request_status->en_name = $request->en_name;
  $material_request_status->color = $request->color;


    $save = $material_request_status->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('material_request_statuses.show', $material_request_status->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:material_request_statuses,id',]);

    $material_request_status = Material_request_status::find($id);
    $next = Material_request_status::where('id','>',$id)->min('id');
    $previous = Material_request_status::where('id','<',$id)->max('id');
       return view('REWASH.material_request_statuses.material_request_status_view')
        ->with('material_request_status',$material_request_status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $material_request_status = Material_request_status::find($id); 

      $material_request_status->name = $request->name;
  $material_request_status->en_name = $request->en_name;
  $material_request_status->color = $request->color;

    $update = $material_request_status->update();

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
    $model = Material_request_status::find($id);

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
