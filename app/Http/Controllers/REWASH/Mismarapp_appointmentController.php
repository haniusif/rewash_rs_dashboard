<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Mismarapp_appointment;



class Mismarapp_appointmentController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$mismarapp_appointments = \App\Models\REWASH\Mismarapp_appointment::get();
   
   $data = $request->all();


  $mismarapp_appointments = Mismarapp_appointment::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['appointment_id']) &&  $data['appointment_id'] != null ){
                   $query->where('appointment_id' , 'like'  , '%' .$data['appointment_id']. '%' );   
               }

                
  if(isset($data['mismar_order_id']) &&  $data['mismar_order_id'] != null ){
                   $query->where('mismar_order_id' , 'like'  , '%' .$data['mismar_order_id']. '%' );   
               }

                
  if(isset($data['order_date']) &&  $data['order_date'] != null ){
                   $query->where('order_date' , 'like'  , '%' .$data['order_date']. '%' );   
               }

                
  if(isset($data['mismarapp_status_id']) &&  $data['mismarapp_status_id'] != null ){
                   $query->where('mismarapp_status_id' , 'like'  , '%' .$data['mismarapp_status_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.mismarapp_appointments.mismarapp_appointments')

->with('mismarapp_appointments',$mismarapp_appointments)
;

//searchfun


                        return view('REWASH.mismarapp_appointments.mismarapp_appointments' , compact('mismarapp_appointments'));

    }





        public function create()
    {

          return view('REWASH.mismarapp_appointments.mismarapp_appointment_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'appointment_id' => 'required',

       'mismar_order_id' => 'required',

       'order_date' => 'required',

       'mismarapp_status_id' => 'required',]);
    $mismarapp_appointment = new Mismarapp_appointment ();

         $mismarapp_appointment->appointment_id = $request->appointment_id;
  $mismarapp_appointment->mismar_order_id = $request->mismar_order_id;
  $mismarapp_appointment->order_date = $request->order_date;
  $mismarapp_appointment->mismarapp_status_id = $request->mismarapp_status_id;


    $save = $mismarapp_appointment->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('mismarapp_appointments.show', $mismarapp_appointment->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:mismarapp_appointments,id',]);

    $mismarapp_appointment = Mismarapp_appointment::find($id);
    $next = Mismarapp_appointment::where('id','>',$id)->min('id');
    $previous = Mismarapp_appointment::where('id','<',$id)->max('id');
       return view('REWASH.mismarapp_appointments.mismarapp_appointment_view')
        ->with('mismarapp_appointment',$mismarapp_appointment)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $mismarapp_appointment = Mismarapp_appointment::find($id); 

      $mismarapp_appointment->appointment_id = $request->appointment_id;
  $mismarapp_appointment->mismar_order_id = $request->mismar_order_id;
  $mismarapp_appointment->order_date = $request->order_date;
  $mismarapp_appointment->mismarapp_status_id = $request->mismarapp_status_id;

    $update = $mismarapp_appointment->update();

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
    $model = Mismarapp_appointment::find($id);

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
