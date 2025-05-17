<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\All_appointment;



class All_appointmentController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$all_appointments = \App\Models\REWASH\All_appointment::get();
   
   $data = $request->all();


  $all_appointments = All_appointment::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['zone_id']) &&  $data['zone_id'] != null ){
                   $query->where('zone_id' , 'like'  , '%' .$data['zone_id']. '%' );   
               }

                
  if(isset($data['zone_name']) &&  $data['zone_name'] != null ){
                   $query->where('zone_name' , 'like'  , '%' .$data['zone_name']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['mobile']) &&  $data['mobile'] != null ){
                   $query->where('mobile' , 'like'  , '%' .$data['mobile']. '%' );   
               }

                
  if(isset($data['number_of_vehicles']) &&  $data['number_of_vehicles'] != null ){
                   $query->where('number_of_vehicles' , 'like'  , '%' .$data['number_of_vehicles']. '%' );   
               }

                
  if(isset($data['vehicle_types_id']) &&  $data['vehicle_types_id'] != null ){
                   $query->where('vehicle_types_id' , 'like'  , '%' .$data['vehicle_types_id']. '%' );   
               }

                
  if(isset($data['vehicle_id']) &&  $data['vehicle_id'] != null ){
                   $query->where('vehicle_id' , 'like'  , '%' .$data['vehicle_id']. '%' );   
               }

                
  if(isset($data['vehicle_no']) &&  $data['vehicle_no'] != null ){
                   $query->where('vehicle_no' , 'like'  , '%' .$data['vehicle_no']. '%' );   
               }

                
  if(isset($data['washing_plan_id']) &&  $data['washing_plan_id'] != null ){
                   $query->where('washing_plan_id' , 'like'  , '%' .$data['washing_plan_id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['washing_plan_price']) &&  $data['washing_plan_price'] != null ){
                   $query->where('washing_plan_price' , 'like'  , '%' .$data['washing_plan_price']. '%' );   
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

                
  if(isset($data['status']) &&  $data['status'] != null ){
                   $query->where('status' , 'like'  , '%' .$data['status']. '%' );   
               }

                
  if(isset($data['appointment_date']) &&  $data['appointment_date'] != null ){
                   $query->where('appointment_date' , 'like'  , '%' .$data['appointment_date']. '%' );   
               }

                
  if(isset($data['slot_id']) &&  $data['slot_id'] != null ){
                   $query->where('slot_id' , 'like'  , '%' .$data['slot_id']. '%' );   
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

                
  if(isset($data['promo_code']) &&  $data['promo_code'] != null ){
                   $query->where('promo_code' , 'like'  , '%' .$data['promo_code']. '%' );   
               }

                
  if(isset($data['discount_type']) &&  $data['discount_type'] != null ){
                   $query->where('discount_type' , 'like'  , '%' .$data['discount_type']. '%' );   
               }

                
  if(isset($data['discount_value']) &&  $data['discount_value'] != null ){
                   $query->where('discount_value' , 'like'  , '%' .$data['discount_value']. '%' );   
               }

                
  if(isset($data['promo_code_discount_value']) &&  $data['promo_code_discount_value'] != null ){
                   $query->where('promo_code_discount_value' , 'like'  , '%' .$data['promo_code_discount_value']. '%' );   
               }

                
  if(isset($data['additional_service_total']) &&  $data['additional_service_total'] != null ){
                   $query->where('additional_service_total' , 'like'  , '%' .$data['additional_service_total']. '%' );   
               }

                
  if(isset($data['payment_mode_id']) &&  $data['payment_mode_id'] != null ){
                   $query->where('payment_mode_id' , 'like'  , '%' .$data['payment_mode_id']. '%' );   
               }

                
  if(isset($data['payment_mode_name']) &&  $data['payment_mode_name'] != null ){
                   $query->where('payment_mode_name' , 'like'  , '%' .$data['payment_mode_name']. '%' );   
               }

                
  if(isset($data['payment_status_id']) &&  $data['payment_status_id'] != null ){
                   $query->where('payment_status_id' , 'like'  , '%' .$data['payment_status_id']. '%' );   
               }

                
  if(isset($data['payment_status_name']) &&  $data['payment_status_name'] != null ){
                   $query->where('payment_status_name' , 'like'  , '%' .$data['payment_status_name']. '%' );   
               }

                
  if(isset($data['payment_time']) &&  $data['payment_time'] != null ){
                   $query->where('payment_time' , 'like'  , '%' .$data['payment_time']. '%' );   
               }

                
  if(isset($data['created_by']) &&  $data['created_by'] != null ){
                   $query->where('created_by' , 'like'  , '%' .$data['created_by']. '%' );   
               }

                
  if(isset($data['creator']) &&  $data['creator'] != null ){
                   $query->where('creator' , 'like'  , '%' .$data['creator']. '%' );   
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

                
  if(isset($data['platform_name']) &&  $data['platform_name'] != null ){
                   $query->where('platform_name' , 'like'  , '%' .$data['platform_name']. '%' );   
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

                
 
 })
  ->paginate(50);

return view('REWASH.all_appointments.all_appointments')

->with('all_appointments',$all_appointments)
;

//searchfun


                        return view('REWASH.all_appointments.all_appointments' , compact('all_appointments'));

    }





        public function create()
    {

          return view('REWASH.all_appointments.all_appointment_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'zone_id' => 'required',

       'zone_name' => 'required',

       'user_id' => 'required',

       'mobile' => 'required',

       'number_of_vehicles' => 'required',

       'vehicle_types_id' => 'required',

       'vehicle_id' => 'required',

       'vehicle_no' => 'required',

       'washing_plan_id' => 'required',

       'name' => 'required',

       'washing_plan_price' => 'required',

       'washing_plan_validity_date' => 'required',

       'number_of_washes' => 'required',

       'status_id' => 'required',

       'status' => 'required',

       'appointment_date' => 'required',

       'slot_id' => 'required',

       'location' => 'required',

       'notes' => 'required',

       'tax_avlue' => 'required',

       'total_price' => 'required',

       'total_price_befor_payment' => 'required',

       'wallet_amount' => 'required',

       'promo_code_id' => 'required',

       'promo_code' => 'required',

       'discount_type' => 'required',

       'discount_value' => 'required',

       'promo_code_discount_value' => 'required',

       'additional_service_total' => 'required',

       'payment_mode_id' => 'required',

       'payment_mode_name' => 'required',

       'payment_status_id' => 'required',

       'payment_status_name' => 'required',

       'payment_time' => 'required',

       'creator' => 'required',

       'partner_id' => 'required',

       'accrued_loyalty_point' => 'required',

       'transaction_id' => 'required',

       'platform_id' => 'required',

       'platform_name' => 'required',

       'double_check_payment' => 'required',

       'double_check_data' => 'required',

       'double_check_payment_status' => 'required',]);
    $all_appointment = new All_appointment ();

         $all_appointment->zone_id = $request->zone_id;
  $all_appointment->zone_name = $request->zone_name;
  $all_appointment->user_id = $request->user_id;
  $all_appointment->mobile = $request->mobile;
  $all_appointment->number_of_vehicles = $request->number_of_vehicles;
  $all_appointment->vehicle_types_id = $request->vehicle_types_id;
  $all_appointment->vehicle_id = $request->vehicle_id;
  $all_appointment->vehicle_no = $request->vehicle_no;
  $all_appointment->washing_plan_id = $request->washing_plan_id;
  $all_appointment->name = $request->name;
  $all_appointment->washing_plan_price = $request->washing_plan_price;
  $all_appointment->washing_plan_validity_date = $request->washing_plan_validity_date;
  $all_appointment->number_of_washes = $request->number_of_washes;
  $all_appointment->status_id = $request->status_id;
  $all_appointment->status = $request->status;
  $all_appointment->appointment_date = $request->appointment_date;
  $all_appointment->slot_id = $request->slot_id;
  $all_appointment->location = $request->location;
  $all_appointment->notes = $request->notes;
  $all_appointment->tax_avlue = $request->tax_avlue;
  $all_appointment->total_price = $request->total_price;
  $all_appointment->total_price_befor_payment = $request->total_price_befor_payment;
  $all_appointment->wallet_amount = $request->wallet_amount;
  $all_appointment->promo_code_id = $request->promo_code_id;
  $all_appointment->promo_code = $request->promo_code;
  $all_appointment->discount_type = $request->discount_type;
  $all_appointment->discount_value = $request->discount_value;
  $all_appointment->promo_code_discount_value = $request->promo_code_discount_value;
  $all_appointment->additional_service_total = $request->additional_service_total;
  $all_appointment->payment_mode_id = $request->payment_mode_id;
  $all_appointment->payment_mode_name = $request->payment_mode_name;
  $all_appointment->payment_status_id = $request->payment_status_id;
  $all_appointment->payment_status_name = $request->payment_status_name;
  $all_appointment->payment_time = $request->payment_time;
  $all_appointment->created_by = Auth::user()->id; 
  $all_appointment->creator = $request->creator;
  $all_appointment->partner_id = $request->partner_id;
  $all_appointment->accrued_loyalty_point = $request->accrued_loyalty_point;
  $all_appointment->transaction_id = $request->transaction_id;
  $all_appointment->platform_id = $request->platform_id;
  $all_appointment->platform_name = $request->platform_name;
  $all_appointment->double_check_payment = $request->double_check_payment;
  $all_appointment->double_check_data = $request->double_check_data;
  $all_appointment->double_check_payment_status = $request->double_check_payment_status;


    $save = $all_appointment->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('all_appointments.show', $all_appointment->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:all_appointments,id',]);

    $all_appointment = All_appointment::find($id);
    $next = All_appointment::where('id','>',$id)->min('id');
    $previous = All_appointment::where('id','<',$id)->max('id');
       return view('REWASH.all_appointments.all_appointment_view')
        ->with('all_appointment',$all_appointment)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $all_appointment = All_appointment::find($id); 

      $all_appointment->zone_id = $request->zone_id;
  $all_appointment->zone_name = $request->zone_name;
  $all_appointment->user_id = $request->user_id;
  $all_appointment->mobile = $request->mobile;
  $all_appointment->number_of_vehicles = $request->number_of_vehicles;
  $all_appointment->vehicle_types_id = $request->vehicle_types_id;
  $all_appointment->vehicle_id = $request->vehicle_id;
  $all_appointment->vehicle_no = $request->vehicle_no;
  $all_appointment->washing_plan_id = $request->washing_plan_id;
  $all_appointment->name = $request->name;
  $all_appointment->washing_plan_price = $request->washing_plan_price;
  $all_appointment->washing_plan_validity_date = $request->washing_plan_validity_date;
  $all_appointment->number_of_washes = $request->number_of_washes;
  $all_appointment->status_id = $request->status_id;
  $all_appointment->status = $request->status;
  $all_appointment->appointment_date = $request->appointment_date;
  $all_appointment->slot_id = $request->slot_id;
  $all_appointment->location = $request->location;
  $all_appointment->notes = $request->notes;
  $all_appointment->tax_avlue = $request->tax_avlue;
  $all_appointment->total_price = $request->total_price;
  $all_appointment->total_price_befor_payment = $request->total_price_befor_payment;
  $all_appointment->wallet_amount = $request->wallet_amount;
  $all_appointment->promo_code_id = $request->promo_code_id;
  $all_appointment->promo_code = $request->promo_code;
  $all_appointment->discount_type = $request->discount_type;
  $all_appointment->discount_value = $request->discount_value;
  $all_appointment->promo_code_discount_value = $request->promo_code_discount_value;
  $all_appointment->additional_service_total = $request->additional_service_total;
  $all_appointment->payment_mode_id = $request->payment_mode_id;
  $all_appointment->payment_mode_name = $request->payment_mode_name;
  $all_appointment->payment_status_id = $request->payment_status_id;
  $all_appointment->payment_status_name = $request->payment_status_name;
  $all_appointment->payment_time = $request->payment_time;
  $all_appointment->creator = $request->creator;
  $all_appointment->partner_id = $request->partner_id;
  $all_appointment->accrued_loyalty_point = $request->accrued_loyalty_point;
  $all_appointment->transaction_id = $request->transaction_id;
  $all_appointment->platform_id = $request->platform_id;
  $all_appointment->platform_name = $request->platform_name;
  $all_appointment->double_check_payment = $request->double_check_payment;
  $all_appointment->double_check_data = $request->double_check_data;
  $all_appointment->double_check_payment_status = $request->double_check_payment_status;

    $update = $all_appointment->update();

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
    $model = All_appointment::find($id);

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
