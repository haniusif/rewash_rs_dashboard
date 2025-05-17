<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Material_additional_service;



class Material_additional_serviceController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$material_additional_services = \App\Models\REWASH\Material_additional_service::get();
   
   $data = $request->all();


  $material_additional_services = Material_additional_service::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['material_request_id']) &&  $data['material_request_id'] != null ){
                   $query->where('material_request_id' , 'like'  , '%' .$data['material_request_id']. '%' );   
               }

                
  if(isset($data['additional_service_id']) &&  $data['additional_service_id'] != null ){
                   $query->where('additional_service_id' , 'like'  , '%' .$data['additional_service_id']. '%' );   
               }

                
  if(isset($data['quantity']) &&  $data['quantity'] != null ){
                   $query->where('quantity' , 'like'  , '%' .$data['quantity']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['product_id']) &&  $data['product_id'] != null ){
                   $query->where('product_id' , 'like'  , '%' .$data['product_id']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.material_additional_services.material_additional_services')

->with('material_additional_services',$material_additional_services)
;

//searchfun


                        return view('REWASH.material_additional_services.material_additional_services' , compact('material_additional_services'));

    }





        public function create()
    {

          return view('REWASH.material_additional_services.material_additional_service_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'material_request_id' => 'required',

       'additional_service_id' => 'required',

       'quantity' => 'required',

       'product_id' => 'required',]);
    $material_additional_service = new Material_additional_service ();

         $material_additional_service->material_request_id = $request->material_request_id;
  $material_additional_service->additional_service_id = $request->additional_service_id;
  $material_additional_service->quantity = $request->quantity;
  $material_additional_service->product_id = $request->product_id;


    $save = $material_additional_service->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('material_additional_services.show', $material_additional_service->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:material_additional_services,id',]);

    $material_additional_service = Material_additional_service::find($id);
    $next = Material_additional_service::where('id','>',$id)->min('id');
    $previous = Material_additional_service::where('id','<',$id)->max('id');
       return view('REWASH.material_additional_services.material_additional_service_view')
        ->with('material_additional_service',$material_additional_service)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $material_additional_service = Material_additional_service::find($id); 

      $material_additional_service->material_request_id = $request->material_request_id;
  $material_additional_service->additional_service_id = $request->additional_service_id;
  $material_additional_service->quantity = $request->quantity;
  $material_additional_service->product_id = $request->product_id;

    $update = $material_additional_service->update();

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
    $model = Material_additional_service::find($id);

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
