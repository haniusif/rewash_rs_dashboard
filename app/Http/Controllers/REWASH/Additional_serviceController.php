<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Additional_service;



class Additional_serviceController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$additional_services = \App\Models\REWASH\Additional_service::get();
   
   $data = $request->all();


  $additional_services = Additional_service::orderby('id','DESC')

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

                
  if(isset($data['image']) &&  $data['image'] != null ){
                   $query->where('image' , 'like'  , '%' .$data['image']. '%' );   
               }

                
  if(isset($data['price']) &&  $data['price'] != null ){
                   $query->where('price' , 'like'  , '%' .$data['price']. '%' );   
               }

                
  if(isset($data['promotional_price']) &&  $data['promotional_price'] != null ){
                   $query->where('promotional_price' , 'like'  , '%' .$data['promotional_price']. '%' );   
               }

                
  if(isset($data['type']) &&  $data['type'] != null ){
                   $query->where('type' , 'like'  , '%' .$data['type']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['loyalty_points']) &&  $data['loyalty_points'] != null ){
                   $query->where('loyalty_points' , 'like'  , '%' .$data['loyalty_points']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.additional_services.additional_services')

->with('additional_services',$additional_services)
;

//searchfun


                        return view('REWASH.additional_services.additional_services' , compact('additional_services'));

    }





        public function create()
    {

          return view('REWASH.additional_services.additional_service_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',

       'image' => 'required',

       'price' => 'required',

       'promotional_price' => 'required',

       'type' => 'required',

       'loyalty_points' => 'required',]);
    $additional_service = new Additional_service ();

         $additional_service->branch_id = $request->branch_id;
  $additional_service->name = $request->name;
  $additional_service->en_name = $request->en_name;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/additional_services';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $additional_service->image = '/'.$destinationPath."/".$fileName;

      }}
  $additional_service->price = $request->price;
  $additional_service->promotional_price = $request->promotional_price;
  $additional_service->type = $request->type;
  $additional_service->is_active = ($request->is_active) ? $request->is_active : 0;
  $additional_service->loyalty_points = $request->loyalty_points;


    $save = $additional_service->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('additional_services.show', $additional_service->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:additional_services,id',]);

    $additional_service = Additional_service::find($id);
    $next = Additional_service::where('id','>',$id)->min('id');
    $previous = Additional_service::where('id','<',$id)->max('id');
       return view('REWASH.additional_services.additional_service_view')
        ->with('additional_service',$additional_service)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $additional_service = Additional_service::find($id); 

      $additional_service->branch_id = $request->branch_id;
  $additional_service->name = $request->name;
  $additional_service->en_name = $request->en_name;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/additional_services';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $additional_service->image = '/'.$destinationPath."/".$fileName;

      }}
  $additional_service->price = $request->price;
  $additional_service->promotional_price = $request->promotional_price;
  $additional_service->type = $request->type;
  $additional_service->is_active = ($request->is_active) ? $request->is_active : 0;
  $additional_service->loyalty_points = $request->loyalty_points;

    $update = $additional_service->update();

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
    $model = Additional_service::find($id);

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
