<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Appointment;
use App\Models\REWASH\User;



class AppointmentController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$appointments = \App\Models\REWASH\Appointment::get();

$users = \App\Models\REWASH\User::get();
   
   $data = $request->all();


  $appointments = Appointment::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['zone_id']) &&  $data['zone_id'] != null ){
                   $query->where('zone_id' , 'like'  , '%' .$data['zone_id']. '%' );   
               }

                     if(isset($data['user_id']) && $data['user_id'] != 'all' ){
            
                 $query->where('user_id' , $data['user_id']);   
            }
 
  if(isset($data['number_of_vehicles']) &&  $data['number_of_vehicles'] != null ){
                   $query->where('number_of_vehicles' , 'like'  , '%' .$data['number_of_vehicles']. '%' );   
               }

                
  if(isset($data['vehicle_company_id']) &&  $data['vehicle_company_id'] != null ){
                   $query->where('vehicle_company_id' , 'like'  , '%' .$data['vehicle_company_id']. '%' );   
               }

                
  if(isset($data['vehicle_modal_id']) &&  $data['vehicle_modal_id'] != null ){
                   $query->where('vehicle_modal_id' , 'like'  , '%' .$data['vehicle_modal_id']. '%' );   
               }

                
  if(isset($data['vehicle_types_id']) &&  $data['vehicle_types_id'] != null ){
                   $query->where('vehicle_types_id' , 'like'  , '%' .$data['vehicle_types_id']. '%' );   
               }

                
  if(isset($data['vehicle_id']) &&  $data['vehicle_id'] != null ){
                   $query->where('vehicle_id' , 'like'  , '%' .$data['vehicle_id']. '%' );   
               }

                
  if(isset($data['washing_plan_id']) &&  $data['washing_plan_id'] != null ){
                   $query->where('washing_plan_id' , 'like'  , '%' .$data['washing_plan_id']. '%' );   
               }

                
  if(isset($data['washing_plan_validity_date']) &&  $data['washing_plan_validity_date'] != null ){
                   $query->where('washing_plan_validity_date' , 'like'  , '%' .$data['washing_plan_validity_date']. '%' );   
               }

                
  if(isset($data['number_of_washes']) &&  $data['number_of_washes'] != null ){
                   $query->where('number_of_washes' , 'like'  , '%' .$data['number_of_washes']. '%' );   
               }

                
  if(isset($data['status_id']) &&  $data['status_id'] != null ){
                   $query->where('status_id' , 'like'  , '%' .$data['status_id']. '%' );   
               }

                
  if(isset($data['appointment_date']) &&  $data['appointment_date'] != null ){
                   $query->where('appointment_date' , 'like'  , '%' .$data['appointment_date']. '%' );   
               }

                
  if(isset($data['slot_id']) &&  $data['slot_id'] != null ){
                   $query->where('slot_id' , 'like'  , '%' .$data['slot_id']. '%' );   
               }

                
  if(isset($data['restore_slots']) &&  $data['restore_slots'] != null ){
                   $query->where('restore_slots' , 'like'  , '%' .$data['restore_slots']. '%' );   
               }

                
  if(isset($data['vehicle_no']) &&  $data['vehicle_no'] != null ){
                   $query->where('vehicle_no' , 'like'  , '%' .$data['vehicle_no']. '%' );   
               }

                
  if(isset($data['time_frame']) &&  $data['time_frame'] != null ){
                   $query->where('time_frame' , 'like'  , '%' .$data['time_frame']. '%' );   
               }

                
  if(isset($data['time_frame_id']) &&  $data['time_frame_id'] != null ){
                   $query->where('time_frame_id' , 'like'  , '%' .$data['time_frame_id']. '%' );   
               }

                
  if(isset($data['appx_hour']) &&  $data['appx_hour'] != null ){
                   $query->where('appx_hour' , 'like'  , '%' .$data['appx_hour']. '%' );   
               }

                
  if(isset($data['remark']) &&  $data['remark'] != null ){
                   $query->where('remark' , 'like'  , '%' .$data['remark']. '%' );   
               }

                
  if(isset($data['location']) &&  $data['location'] != null ){
                   $query->where('location' , 'like'  , '%' .$data['location']. '%' );   
               }

                
  if(isset($data['notes']) &&  $data['notes'] != null ){
                   $query->where('notes' , 'like'  , '%' .$data['notes']. '%' );   
               }

                
  if(isset($data['tax_avlue']) &&  $data['tax_avlue'] != null ){
                   $query->where('tax_avlue' , 'like'  , '%' .$data['tax_avlue']. '%' );   
               }

                
  if(isset($data['total_price']) &&  $data['total_price'] != null ){
                   $query->where('total_price' , 'like'  , '%' .$data['total_price']. '%' );   
               }

                
  if(isset($data['total_price_befor_payment']) &&  $data['total_price_befor_payment'] != null ){
                   $query->where('total_price_befor_payment' , 'like'  , '%' .$data['total_price_befor_payment']. '%' );   
               }

                
  if(isset($data['wallet_amount']) &&  $data['wallet_amount'] != null ){
                   $query->where('wallet_amount' , 'like'  , '%' .$data['wallet_amount']. '%' );   
               }

                
  if(isset($data['promo_code_id']) &&  $data['promo_code_id'] != null ){
                   $query->where('promo_code_id' , 'like'  , '%' .$data['promo_code_id']. '%' );   
               }

                
  if(isset($data['promo_code_discount_value']) &&  $data['promo_code_discount_value'] != null ){
                   $query->where('promo_code_discount_value' , 'like'  , '%' .$data['promo_code_discount_value']. '%' );   
               }

                
  if(isset($data['payment_mode_id']) &&  $data['payment_mode_id'] != null ){
                   $query->where('payment_mode_id' , 'like'  , '%' .$data['payment_mode_id']. '%' );   
               }

                
  if(isset($data['payment_status_id']) &&  $data['payment_status_id'] != null ){
                   $query->where('payment_status_id' , 'like'  , '%' .$data['payment_status_id']. '%' );   
               }

                
  if(isset($data['payment_time']) &&  $data['payment_time'] != null ){
                   $query->where('payment_time' , 'like'  , '%' .$data['payment_time']. '%' );   
               }

                
  if(isset($data['created_by']) &&  $data['created_by'] != null ){
                   $query->where('created_by' , 'like'  , '%' .$data['created_by']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['partner_id']) &&  $data['partner_id'] != null ){
                   $query->where('partner_id' , 'like'  , '%' .$data['partner_id']. '%' );   
               }

                
  if(isset($data['accrued_loyalty_point']) &&  $data['accrued_loyalty_point'] != null ){
                   $query->where('accrued_loyalty_point' , 'like'  , '%' .$data['accrued_loyalty_point']. '%' );   
               }

                
  if(isset($data['transaction_id']) &&  $data['transaction_id'] != null ){
                   $query->where('transaction_id' , 'like'  , '%' .$data['transaction_id']. '%' );   
               }

                
  if(isset($data['platform_id']) &&  $data['platform_id'] != null ){
                   $query->where('platform_id' , 'like'  , '%' .$data['platform_id']. '%' );   
               }

                     if(isset($data['double_check_payment']) && $data['double_check_payment'] != 'all' ){
            
                 $query->where('double_check_payment' , $data['double_check_payment']);   
            }
 
  if(isset($data['double_check_data']) &&  $data['double_check_data'] != null ){
                   $query->where('double_check_data' , 'like'  , '%' .$data['double_check_data']. '%' );   
               }

                
  if(isset($data['double_check_payment_status']) &&  $data['double_check_payment_status'] != null ){
                   $query->where('double_check_payment_status' , 'like'  , '%' .$data['double_check_payment_status']. '%' );   
               }

                
  if(isset($data['qoyod_invoice_id']) &&  $data['qoyod_invoice_id'] != null ){
                   $query->where('qoyod_invoice_id' , 'like'  , '%' .$data['qoyod_invoice_id']. '%' );   
               }

                
  if(isset($data['qoyod_reference']) &&  $data['qoyod_reference'] != null ){
                   $query->where('qoyod_reference' , 'like'  , '%' .$data['qoyod_reference']. '%' );   
               }

                
  if(isset($data['platform_order_id']) &&  $data['platform_order_id'] != null ){
                   $query->where('platform_order_id' , 'like'  , '%' .$data['platform_order_id']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.appointments.appointments')

->with('appointments',$appointments)
->with('users',$users)
;

//searchfun


                        return view('REWASH.appointments.appointments' , compact('appointments'));

    }






        public function create()
    {

   $users = User::all();
       return view('REWASH.appointments.appointment_add')->with('users' , $users)

       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'zone_id' => 'required',

       'user_id' => 'required',

       'number_of_vehicles' => 'required',

       'vehicle_company_id' => 'required',

       'vehicle_modal_id' => 'required',

       'vehicle_types_id' => 'required',

       'vehicle_id' => 'required',

       'washing_plan_id' => 'required',

       'washing_plan_validity_date' => 'required',

       'number_of_washes' => 'required',

       'status_id' => 'required',

       'appointment_date' => 'required',

       'slot_id' => 'required',

       'restore_slots' => 'required',

       'vehicle_no' => 'required',

       'time_frame' => 'required',

       'time_frame_id' => 'required',

       'appx_hour' => 'required',

       'remark' => 'required',

       'location' => 'required',

       'notes' => 'required',

       'tax_avlue' => 'required',

       'total_price' => 'required',

       'total_price_befor_payment' => 'required',

       'wallet_amount' => 'required',

       'promo_code_id' => 'required',

       'promo_code_discount_value' => 'required',

       'payment_mode_id' => 'required',

       'payment_status_id' => 'required',

       'payment_time' => 'required',

       'partner_id' => 'required',

       'accrued_loyalty_point' => 'required',

       'transaction_id' => 'required',

       'platform_id' => 'required',

       'double_check_payment' => 'required',

       'double_check_data' => 'required',

       'double_check_payment_status' => 'required',

       'qoyod_invoice_id' => 'required',

       'qoyod_reference' => 'required',

       'platform_order_id' => 'required',]);
    $appointment = new Appointment ();

         $appointment->branch_id = $request->branch_id;
  $appointment->zone_id = $request->zone_id;
  $appointment->user_id = $request->user_id;
  $appointment->number_of_vehicles = $request->number_of_vehicles;
  $appointment->vehicle_company_id = $request->vehicle_company_id;
  $appointment->vehicle_modal_id = $request->vehicle_modal_id;
  $appointment->vehicle_types_id = $request->vehicle_types_id;
  $appointment->vehicle_id = $request->vehicle_id;
  $appointment->washing_plan_id = $request->washing_plan_id;
  $appointment->washing_plan_validity_date = $request->washing_plan_validity_date;
  $appointment->number_of_washes = $request->number_of_washes;
  $appointment->status_id = $request->status_id;
  $appointment->appointment_date = $request->appointment_date;
  $appointment->slot_id = $request->slot_id;
  $appointment->restore_slots = $request->restore_slots;
  $appointment->vehicle_no = $request->vehicle_no;
  $appointment->time_frame = $request->time_frame;
  $appointment->time_frame_id = $request->time_frame_id;
  $appointment->appx_hour = $request->appx_hour;
  $appointment->remark = $request->remark;
  $appointment->location = $request->location;
  $appointment->notes = $request->notes;
  $appointment->tax_avlue = $request->tax_avlue;
  $appointment->total_price = $request->total_price;
  $appointment->total_price_befor_payment = $request->total_price_befor_payment;
  $appointment->wallet_amount = $request->wallet_amount;
  $appointment->promo_code_id = $request->promo_code_id;
  $appointment->promo_code_discount_value = $request->promo_code_discount_value;
  $appointment->payment_mode_id = $request->payment_mode_id;
  $appointment->payment_status_id = $request->payment_status_id;
  $appointment->payment_time = $request->payment_time;
  $appointment->created_by = Auth::user()->id; 
  $appointment->partner_id = $request->partner_id;
  $appointment->accrued_loyalty_point = $request->accrued_loyalty_point;
  $appointment->transaction_id = $request->transaction_id;
  $appointment->platform_id = $request->platform_id;
  $appointment->double_check_payment = $request->double_check_payment;
  $appointment->double_check_data = $request->double_check_data;
  $appointment->double_check_payment_status = $request->double_check_payment_status;
  $appointment->qoyod_invoice_id = $request->qoyod_invoice_id;
  $appointment->qoyod_reference = $request->qoyod_reference;
  $appointment->platform_order_id = $request->platform_order_id;


    $save = $appointment->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('appointments.show', $appointment->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:appointments,id',]);

    $appointment = Appointment::find($id);
    $next = Appointment::where('id','>',$id)->min('id');
    $previous = Appointment::where('id','<',$id)->max('id');
$users = User::all();
       return view('REWASH.appointments.appointment_view')
        ->with('appointment',$appointment)
        ->with('next',$next)
        ->with('previous',$previous)->with('users' , $users)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $appointment = Appointment::find($id); 

      $appointment->branch_id = $request->branch_id;
  $appointment->zone_id = $request->zone_id;
  $appointment->user_id = $request->user_id;
  $appointment->number_of_vehicles = $request->number_of_vehicles;
  $appointment->vehicle_company_id = $request->vehicle_company_id;
  $appointment->vehicle_modal_id = $request->vehicle_modal_id;
  $appointment->vehicle_types_id = $request->vehicle_types_id;
  $appointment->vehicle_id = $request->vehicle_id;
  $appointment->washing_plan_id = $request->washing_plan_id;
  $appointment->washing_plan_validity_date = $request->washing_plan_validity_date;
  $appointment->number_of_washes = $request->number_of_washes;
  $appointment->status_id = $request->status_id;
  $appointment->appointment_date = $request->appointment_date;
  $appointment->slot_id = $request->slot_id;
  $appointment->restore_slots = $request->restore_slots;
  $appointment->vehicle_no = $request->vehicle_no;
  $appointment->time_frame = $request->time_frame;
  $appointment->time_frame_id = $request->time_frame_id;
  $appointment->appx_hour = $request->appx_hour;
  $appointment->remark = $request->remark;
  $appointment->location = $request->location;
  $appointment->notes = $request->notes;
  $appointment->tax_avlue = $request->tax_avlue;
  $appointment->total_price = $request->total_price;
  $appointment->total_price_befor_payment = $request->total_price_befor_payment;
  $appointment->wallet_amount = $request->wallet_amount;
  $appointment->promo_code_id = $request->promo_code_id;
  $appointment->promo_code_discount_value = $request->promo_code_discount_value;
  $appointment->payment_mode_id = $request->payment_mode_id;
  $appointment->payment_status_id = $request->payment_status_id;
  $appointment->payment_time = $request->payment_time;
  $appointment->partner_id = $request->partner_id;
  $appointment->accrued_loyalty_point = $request->accrued_loyalty_point;
  $appointment->transaction_id = $request->transaction_id;
  $appointment->platform_id = $request->platform_id;
  $appointment->double_check_payment = $request->double_check_payment;
  $appointment->double_check_data = $request->double_check_data;
  $appointment->double_check_payment_status = $request->double_check_payment_status;
  $appointment->qoyod_invoice_id = $request->qoyod_invoice_id;
  $appointment->qoyod_reference = $request->qoyod_reference;
  $appointment->platform_order_id = $request->platform_order_id;

    $update = $appointment->update();

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
    $model = Appointment::find($id);

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
