<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Rsa_service;



class Rsa_serviceController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$rsa_services = \App\Models\REWASH\Rsa_service::get();
   
   $data = $request->all();


  $rsa_services = Rsa_service::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['category_id']) &&  $data['category_id'] != null ){
                   $query->where('category_id' , 'like'  , '%' .$data['category_id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['en_name']) &&  $data['en_name'] != null ){
                   $query->where('en_name' , 'like'  , '%' .$data['en_name']. '%' );   
               }

                
  if(isset($data['price']) &&  $data['price'] != null ){
                   $query->where('price' , 'like'  , '%' .$data['price']. '%' );   
               }

                
  if(isset($data['promotional_price']) &&  $data['promotional_price'] != null ){
                   $query->where('promotional_price' , 'like'  , '%' .$data['promotional_price']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['sorting']) &&  $data['sorting'] != null ){
                   $query->where('sorting' , 'like'  , '%' .$data['sorting']. '%' );   
               }

                
  if(isset($data['expected_duration']) &&  $data['expected_duration'] != null ){
                   $query->where('expected_duration' , 'like'  , '%' .$data['expected_duration']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.rsa_services.rsa_services')

->with('rsa_services',$rsa_services)
;

//searchfun


                        return view('REWASH.rsa_services.rsa_services' , compact('rsa_services'));

    }





        public function create()
    {

          return view('REWASH.rsa_services.rsa_service_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'category_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',

       'price' => 'required',

       'promotional_price' => 'required',

       'sorting' => 'required',

       'expected_duration' => 'required',]);
    $rsa_service = new Rsa_service ();

         $rsa_service->category_id = $request->category_id;
  $rsa_service->name = $request->name;
  $rsa_service->en_name = $request->en_name;
  $rsa_service->price = $request->price;
  $rsa_service->promotional_price = $request->promotional_price;
  $rsa_service->is_active = ($request->is_active) ? $request->is_active : 0;
  $rsa_service->sorting = $request->sorting;
  $rsa_service->expected_duration = $request->expected_duration;


    $save = $rsa_service->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('rsa_services.show', $rsa_service->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:rsa_services,id',]);

    $rsa_service = Rsa_service::find($id);
    $next = Rsa_service::where('id','>',$id)->min('id');
    $previous = Rsa_service::where('id','<',$id)->max('id');
       return view('REWASH.rsa_services.rsa_service_view')
        ->with('rsa_service',$rsa_service)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $rsa_service = Rsa_service::find($id); 

      $rsa_service->category_id = $request->category_id;
  $rsa_service->name = $request->name;
  $rsa_service->en_name = $request->en_name;
  $rsa_service->price = $request->price;
  $rsa_service->promotional_price = $request->promotional_price;
  $rsa_service->is_active = ($request->is_active) ? $request->is_active : 0;
  $rsa_service->sorting = $request->sorting;
  $rsa_service->expected_duration = $request->expected_duration;

    $update = $rsa_service->update();

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
    $model = Rsa_service::find($id);

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
