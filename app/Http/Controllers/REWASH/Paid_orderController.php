<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Paid_order;



class Paid_orderController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$paid_orders = \App\Models\REWASH\Paid_order::get();
   
   $data = $request->all();


  $paid_orders = Paid_order::orderby('id','DESC')

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

                
  if(isset($data['user_name']) &&  $data['user_name'] != null ){
                   $query->where('user_name' , 'like'  , '%' .$data['user_name']. '%' );   
               }

                
  if(isset($data['user_mobile']) &&  $data['user_mobile'] != null ){
                   $query->where('user_mobile' , 'like'  , '%' .$data['user_mobile']. '%' );   
               }

                
  if(isset($data['number_of_vehicles']) &&  $data['number_of_vehicles'] != null ){
                   $query->where('number_of_vehicles' , 'like'  , '%' .$data['number_of_vehicles']. '%' );   
               }

                
  if(isset($data['vehicle_id']) &&  $data['vehicle_id'] != null ){
                   $query->where('vehicle_id' , 'like'  , '%' .$data['vehicle_id']. '%' );   
               }

                
  if(isset($data['washing_plan_id']) &&  $data['washing_plan_id'] != null ){
                   $query->where('washing_plan_id' , 'like'  , '%' .$data['washing_plan_id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
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

                
  if(isset($data['vehicle_no']) &&  $data['vehicle_no'] != null ){
                   $query->where('vehicle_no' , 'like'  , '%' .$data['vehicle_no']. '%' );   
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

                
  if(isset($data['payment_status']) &&  $data['payment_status'] != null ){
                   $query->where('payment_status' , 'like'  , '%' .$data['payment_status']. '%' );   
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

                
  if(isset($data['report_id']) &&  $data['report_id'] != null ){
                   $query->where('report_id' , 'like'  , '%' .$data['report_id']. '%' );   
               }

                
  if(isset($data['payment_id']) &&  $data['payment_id'] != null ){
                   $query->where('payment_id' , 'like'  , '%' .$data['payment_id']. '%' );   
               }

                
  if(isset($data['status']) &&  $data['status'] != null ){
                   $query->where('status' , 'like'  , '%' .$data['status']. '%' );   
               }

                
  if(isset($data['description']) &&  $data['description'] != null ){
                   $query->where('description' , 'like'  , '%' .$data['description']. '%' );   
               }

                
  if(isset($data['amount']) &&  $data['amount'] != null ){
                   $query->where('amount' , 'like'  , '%' .$data['amount']. '%' );   
               }

                
  if(isset($data['fee']) &&  $data['fee'] != null ){
                   $query->where('fee' , 'like'  , '%' .$data['fee']. '%' );   
               }

                
  if(isset($data['currency']) &&  $data['currency'] != null ){
                   $query->where('currency' , 'like'  , '%' .$data['currency']. '%' );   
               }

                
  if(isset($data['refunded']) &&  $data['refunded'] != null ){
                   $query->where('refunded' , 'like'  , '%' .$data['refunded']. '%' );   
               }

                
  if(isset($data['refunded_at']) &&  $data['refunded_at'] != null ){
                   $query->where('refunded_at' , 'like'  , '%' .$data['refunded_at']. '%' );   
               }

                
  if(isset($data['captured']) &&  $data['captured'] != null ){
                   $query->where('captured' , 'like'  , '%' .$data['captured']. '%' );   
               }

                
  if(isset($data['captured_at']) &&  $data['captured_at'] != null ){
                   $query->where('captured_at' , 'like'  , '%' .$data['captured_at']. '%' );   
               }

                
  if(isset($data['voided_at']) &&  $data['voided_at'] != null ){
                   $query->where('voided_at' , 'like'  , '%' .$data['voided_at']. '%' );   
               }

                
  if(isset($data['payment_created_at']) &&  $data['payment_created_at'] != null ){
                   $query->where('payment_created_at' , 'like'  , '%' .$data['payment_created_at']. '%' );   
               }

                
  if(isset($data['source']) &&  $data['source'] != null ){
                   $query->where('source' , 'like'  , '%' .$data['source']. '%' );   
               }

                
  if(isset($data['message']) &&  $data['message'] != null ){
                   $query->where('message' , 'like'  , '%' .$data['message']. '%' );   
               }

                
  if(isset($data['reference_number']) &&  $data['reference_number'] != null ){
                   $query->where('reference_number' , 'like'  , '%' .$data['reference_number']. '%' );   
               }

                
  if(isset($data['batch_number']) &&  $data['batch_number'] != null ){
                   $query->where('batch_number' , 'like'  , '%' .$data['batch_number']. '%' );   
               }

                
  if(isset($data['reconciliation_date']) &&  $data['reconciliation_date'] != null ){
                   $query->where('reconciliation_date' , 'like'  , '%' .$data['reconciliation_date']. '%' );   
               }

                
  if(isset($data['company']) &&  $data['company'] != null ){
                   $query->where('company' , 'like'  , '%' .$data['company']. '%' );   
               }

                
  if(isset($data['card_number']) &&  $data['card_number'] != null ){
                   $query->where('card_number' , 'like'  , '%' .$data['card_number']. '%' );   
               }

                
  if(isset($data['first_name']) &&  $data['first_name'] != null ){
                   $query->where('first_name' , 'like'  , '%' .$data['first_name']. '%' );   
               }

                
  if(isset($data['last_name']) &&  $data['last_name'] != null ){
                   $query->where('last_name' , 'like'  , '%' .$data['last_name']. '%' );   
               }

                
  if(isset($data['mobile']) &&  $data['mobile'] != null ){
                   $query->where('mobile' , 'like'  , '%' .$data['mobile']. '%' );   
               }

                
  if(isset($data['stcpay_reference']) &&  $data['stcpay_reference'] != null ){
                   $query->where('stcpay_reference' , 'like'  , '%' .$data['stcpay_reference']. '%' );   
               }

                
  if(isset($data['stcpay_token']) &&  $data['stcpay_token'] != null ){
                   $query->where('stcpay_token' , 'like'  , '%' .$data['stcpay_token']. '%' );   
               }

                
  if(isset($data['invoice_id']) &&  $data['invoice_id'] != null ){
                   $query->where('invoice_id' , 'like'  , '%' .$data['invoice_id']. '%' );   
               }

                
  if(isset($data['order_id']) &&  $data['order_id'] != null ){
                   $query->where('order_id' , 'like'  , '%' .$data['order_id']. '%' );   
               }

                
  if(isset($data['plan']) &&  $data['plan'] != null ){
                   $query->where('plan' , 'like'  , '%' .$data['plan']. '%' );   
               }

                
  if(isset($data['pament_zone_id']) &&  $data['pament_zone_id'] != null ){
                   $query->where('pament_zone_id' , 'like'  , '%' .$data['pament_zone_id']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.paid_orders.paid_orders')

->with('paid_orders',$paid_orders)
;

//searchfun


                        return view('REWASH.paid_orders.paid_orders' , compact('paid_orders'));

    }





        public function create()
    {

          return view('REWASH.paid_orders.paid_order_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'zone_id' => 'required',

       'zone_name' => 'required',

       'user_id' => 'required',

       'user_name' => 'required',

       'user_mobile' => 'required',

       'number_of_vehicles' => 'required',

       'vehicle_id' => 'required',

       'washing_plan_id' => 'required',

       'name' => 'required',

       'washing_plan_validity_date' => 'required',

       'number_of_washes' => 'required',

       'status_id' => 'required',

       'appointment_date' => 'required',

       'slot_id' => 'required',

       'vehicle_no' => 'required',

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

       'payment_status' => 'required',

       'payment_time' => 'required',

       'partner_id' => 'required',

       'accrued_loyalty_point' => 'required',

       'transaction_id' => 'required',

       'platform_id' => 'required',

       'report_id' => 'required',

       'payment_id' => 'required',

       'status' => 'required',

       'description' => 'required',

       'amount' => 'required',

       'fee' => 'required',

       'currency' => 'required',

       'refunded' => 'required',

       'refunded_at' => 'required',

       'captured' => 'required',

       'captured_at' => 'required',

       'voided_at' => 'required',

       'payment_created_at' => 'required',

       'source' => 'required',

       'message' => 'required',

       'reference_number' => 'required',

       'batch_number' => 'required',

       'reconciliation_date' => 'required',

       'company' => 'required',

       'card_number' => 'required',

       'first_name' => 'required',

       'last_name' => 'required',

       'mobile' => 'required',

       'stcpay_reference' => 'required',

       'stcpay_token' => 'required',

       'invoice_id' => 'required',

       'order_id' => 'required',

       'plan' => 'required',

       'pament_zone_id' => 'required',]);
    $paid_order = new Paid_order ();

         $paid_order->zone_id = $request->zone_id;
  $paid_order->zone_name = $request->zone_name;
  $paid_order->user_id = $request->user_id;
  $paid_order->user_name = $request->user_name;
  $paid_order->user_mobile = $request->user_mobile;
  $paid_order->number_of_vehicles = $request->number_of_vehicles;
  $paid_order->vehicle_id = $request->vehicle_id;
  $paid_order->washing_plan_id = $request->washing_plan_id;
  $paid_order->name = $request->name;
  $paid_order->washing_plan_validity_date = $request->washing_plan_validity_date;
  $paid_order->number_of_washes = $request->number_of_washes;
  $paid_order->status_id = $request->status_id;
  $paid_order->appointment_date = $request->appointment_date;
  $paid_order->slot_id = $request->slot_id;
  $paid_order->vehicle_no = $request->vehicle_no;
  $paid_order->location = $request->location;
  $paid_order->notes = $request->notes;
  $paid_order->tax_avlue = $request->tax_avlue;
  $paid_order->total_price = $request->total_price;
  $paid_order->total_price_befor_payment = $request->total_price_befor_payment;
  $paid_order->wallet_amount = $request->wallet_amount;
  $paid_order->promo_code_id = $request->promo_code_id;
  $paid_order->promo_code_discount_value = $request->promo_code_discount_value;
  $paid_order->payment_mode_id = $request->payment_mode_id;
  $paid_order->payment_status_id = $request->payment_status_id;
  $paid_order->payment_status = $request->payment_status;
  $paid_order->payment_time = $request->payment_time;
  $paid_order->created_by = Auth::user()->id; 
  $paid_order->partner_id = $request->partner_id;
  $paid_order->accrued_loyalty_point = $request->accrued_loyalty_point;
  $paid_order->transaction_id = $request->transaction_id;
  $paid_order->platform_id = $request->platform_id;
  $paid_order->report_id = $request->report_id;
  $paid_order->payment_id = $request->payment_id;
  $paid_order->status = $request->status;
  $paid_order->description = $request->description;
  $paid_order->amount = $request->amount;
  $paid_order->fee = $request->fee;
  $paid_order->currency = $request->currency;
  $paid_order->refunded = $request->refunded;
  $paid_order->refunded_at = $request->refunded_at;
  $paid_order->captured = $request->captured;
  $paid_order->captured_at = $request->captured_at;
  $paid_order->voided_at = $request->voided_at;
  $paid_order->payment_created_at = $request->payment_created_at;
  $paid_order->source = $request->source;
  $paid_order->message = $request->message;
  $paid_order->reference_number = $request->reference_number;
  $paid_order->batch_number = $request->batch_number;
  $paid_order->reconciliation_date = $request->reconciliation_date;
  $paid_order->company = $request->company;
  $paid_order->card_number = $request->card_number;
  $paid_order->first_name = $request->first_name;
  $paid_order->last_name = $request->last_name;
  $paid_order->mobile = $request->mobile;
  $paid_order->stcpay_reference = $request->stcpay_reference;
  $paid_order->stcpay_token = $request->stcpay_token;
  $paid_order->invoice_id = $request->invoice_id;
  $paid_order->order_id = $request->order_id;
  $paid_order->plan = $request->plan;
  $paid_order->pament_zone_id = $request->pament_zone_id;


    $save = $paid_order->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('paid_orders.show', $paid_order->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:paid_orders,id',]);

    $paid_order = Paid_order::find($id);
    $next = Paid_order::where('id','>',$id)->min('id');
    $previous = Paid_order::where('id','<',$id)->max('id');
       return view('REWASH.paid_orders.paid_order_view')
        ->with('paid_order',$paid_order)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $paid_order = Paid_order::find($id); 

      $paid_order->zone_id = $request->zone_id;
  $paid_order->zone_name = $request->zone_name;
  $paid_order->user_id = $request->user_id;
  $paid_order->user_name = $request->user_name;
  $paid_order->user_mobile = $request->user_mobile;
  $paid_order->number_of_vehicles = $request->number_of_vehicles;
  $paid_order->vehicle_id = $request->vehicle_id;
  $paid_order->washing_plan_id = $request->washing_plan_id;
  $paid_order->name = $request->name;
  $paid_order->washing_plan_validity_date = $request->washing_plan_validity_date;
  $paid_order->number_of_washes = $request->number_of_washes;
  $paid_order->status_id = $request->status_id;
  $paid_order->appointment_date = $request->appointment_date;
  $paid_order->slot_id = $request->slot_id;
  $paid_order->vehicle_no = $request->vehicle_no;
  $paid_order->location = $request->location;
  $paid_order->notes = $request->notes;
  $paid_order->tax_avlue = $request->tax_avlue;
  $paid_order->total_price = $request->total_price;
  $paid_order->total_price_befor_payment = $request->total_price_befor_payment;
  $paid_order->wallet_amount = $request->wallet_amount;
  $paid_order->promo_code_id = $request->promo_code_id;
  $paid_order->promo_code_discount_value = $request->promo_code_discount_value;
  $paid_order->payment_mode_id = $request->payment_mode_id;
  $paid_order->payment_status_id = $request->payment_status_id;
  $paid_order->payment_status = $request->payment_status;
  $paid_order->payment_time = $request->payment_time;
  $paid_order->partner_id = $request->partner_id;
  $paid_order->accrued_loyalty_point = $request->accrued_loyalty_point;
  $paid_order->transaction_id = $request->transaction_id;
  $paid_order->platform_id = $request->platform_id;
  $paid_order->report_id = $request->report_id;
  $paid_order->payment_id = $request->payment_id;
  $paid_order->status = $request->status;
  $paid_order->description = $request->description;
  $paid_order->amount = $request->amount;
  $paid_order->fee = $request->fee;
  $paid_order->currency = $request->currency;
  $paid_order->refunded = $request->refunded;
  $paid_order->refunded_at = $request->refunded_at;
  $paid_order->captured = $request->captured;
  $paid_order->captured_at = $request->captured_at;
  $paid_order->voided_at = $request->voided_at;
  $paid_order->payment_created_at = $request->payment_created_at;
  $paid_order->source = $request->source;
  $paid_order->message = $request->message;
  $paid_order->reference_number = $request->reference_number;
  $paid_order->batch_number = $request->batch_number;
  $paid_order->reconciliation_date = $request->reconciliation_date;
  $paid_order->company = $request->company;
  $paid_order->card_number = $request->card_number;
  $paid_order->first_name = $request->first_name;
  $paid_order->last_name = $request->last_name;
  $paid_order->mobile = $request->mobile;
  $paid_order->stcpay_reference = $request->stcpay_reference;
  $paid_order->stcpay_token = $request->stcpay_token;
  $paid_order->invoice_id = $request->invoice_id;
  $paid_order->order_id = $request->order_id;
  $paid_order->plan = $request->plan;
  $paid_order->pament_zone_id = $request->pament_zone_id;

    $update = $paid_order->update();

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
    $model = Paid_order::find($id);

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
