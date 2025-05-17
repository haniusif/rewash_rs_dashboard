<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Material_request;



class Material_requestController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$material_requests = \App\Models\REWASH\Material_request::get();
   
   $data = $request->all();


  $material_requests = Material_request::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['text']) &&  $data['text'] != null ){
                   $query->where('text' , 'like'  , '%' .$data['text']. '%' );   
               }

                
  if(isset($data['material_request_status_id']) &&  $data['material_request_status_id'] != null ){
                   $query->where('material_request_status_id' , 'like'  , '%' .$data['material_request_status_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.material_requests.material_requests')

->with('material_requests',$material_requests)
;

//searchfun


                        return view('REWASH.material_requests.material_requests' , compact('material_requests'));

    }





        public function create()
    {

          return view('REWASH.material_requests.material_request_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'text' => 'required',

       'material_request_status_id' => 'required',]);
    $material_request = new Material_request ();

         $material_request->user_id = $request->user_id;
  $material_request->text = $request->text;
  $material_request->material_request_status_id = $request->material_request_status_id;


    $save = $material_request->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('material_requests.show', $material_request->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:material_requests,id',]);

    $material_request = Material_request::find($id);
    $next = Material_request::where('id','>',$id)->min('id');
    $previous = Material_request::where('id','<',$id)->max('id');
       return view('REWASH.material_requests.material_request_view')
        ->with('material_request',$material_request)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $material_request = Material_request::find($id); 

      $material_request->user_id = $request->user_id;
  $material_request->text = $request->text;
  $material_request->material_request_status_id = $request->material_request_status_id;

    $update = $material_request->update();

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
    $model = Material_request::find($id);

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
