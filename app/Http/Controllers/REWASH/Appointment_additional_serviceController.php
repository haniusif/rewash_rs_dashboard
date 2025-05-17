<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Appointment_additional_service;



class Appointment_additional_serviceController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$appointment_additional_services = \App\Models\REWASH\Appointment_additional_service::get();
   
   $data = $request->all();


  $appointment_additional_services = Appointment_additional_service::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['appointment_id']) &&  $data['appointment_id'] != null ){
                   $query->where('appointment_id' , 'like'  , '%' .$data['appointment_id']. '%' );   
               }

                
  if(isset($data['appointment_schedule_id']) &&  $data['appointment_schedule_id'] != null ){
                   $query->where('appointment_schedule_id' , 'like'  , '%' .$data['appointment_schedule_id']. '%' );   
               }

                
  if(isset($data['additional_service_id']) &&  $data['additional_service_id'] != null ){
                   $query->where('additional_service_id' , 'like'  , '%' .$data['additional_service_id']. '%' );   
               }

                
  if(isset($data['additional_service_price']) &&  $data['additional_service_price'] != null ){
                   $query->where('additional_service_price' , 'like'  , '%' .$data['additional_service_price']. '%' );   
               }

                
  if(isset($data['quantity']) &&  $data['quantity'] != null ){
                   $query->where('quantity' , 'like'  , '%' .$data['quantity']. '%' );   
               }

                
  if(isset($data['total_price']) &&  $data['total_price'] != null ){
                   $query->where('total_price' , 'like'  , '%' .$data['total_price']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.appointment_additional_services.appointment_additional_services')

->with('appointment_additional_services',$appointment_additional_services)
;

//searchfun


                        return view('REWASH.appointment_additional_services.appointment_additional_services' , compact('appointment_additional_services'));

    }





        public function create()
    {

          return view('REWASH.appointment_additional_services.appointment_additional_service_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'appointment_id' => 'required',

       'appointment_schedule_id' => 'required',

       'additional_service_id' => 'required',

       'additional_service_price' => 'required',

       'quantity' => 'required',

       'total_price' => 'required',]);
    $appointment_additional_service = new Appointment_additional_service ();

         $appointment_additional_service->branch_id = $request->branch_id;
  $appointment_additional_service->appointment_id = $request->appointment_id;
  $appointment_additional_service->appointment_schedule_id = $request->appointment_schedule_id;
  $appointment_additional_service->additional_service_id = $request->additional_service_id;
  $appointment_additional_service->additional_service_price = $request->additional_service_price;
  $appointment_additional_service->quantity = $request->quantity;
  $appointment_additional_service->total_price = $request->total_price;


    $save = $appointment_additional_service->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('appointment_additional_services.show', $appointment_additional_service->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:appointment_additional_services,id',]);

    $appointment_additional_service = Appointment_additional_service::find($id);
    $next = Appointment_additional_service::where('id','>',$id)->min('id');
    $previous = Appointment_additional_service::where('id','<',$id)->max('id');
       return view('REWASH.appointment_additional_services.appointment_additional_service_view')
        ->with('appointment_additional_service',$appointment_additional_service)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $appointment_additional_service = Appointment_additional_service::find($id); 

      $appointment_additional_service->branch_id = $request->branch_id;
  $appointment_additional_service->appointment_id = $request->appointment_id;
  $appointment_additional_service->appointment_schedule_id = $request->appointment_schedule_id;
  $appointment_additional_service->additional_service_id = $request->additional_service_id;
  $appointment_additional_service->additional_service_price = $request->additional_service_price;
  $appointment_additional_service->quantity = $request->quantity;
  $appointment_additional_service->total_price = $request->total_price;

    $update = $appointment_additional_service->update();

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
    $model = Appointment_additional_service::find($id);

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
