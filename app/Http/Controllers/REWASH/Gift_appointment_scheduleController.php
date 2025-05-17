<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Gift_appointment_schedule;



class Gift_appointment_scheduleController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$gift_appointment_schedules = \App\Models\REWASH\Gift_appointment_schedule::get();
   
   $data = $request->all();


  $gift_appointment_schedules = Gift_appointment_schedule::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['appointment_date']) &&  $data['appointment_date'] != null ){
                   $query->where('appointment_date' , 'like'  , '%' .$data['appointment_date']. '%' );   
               }

                
  if(isset($data['slot_id']) &&  $data['slot_id'] != null ){
                   $query->where('slot_id' , 'like'  , '%' .$data['slot_id']. '%' );   
               }

                
  if(isset($data['receiver_name']) &&  $data['receiver_name'] != null ){
                   $query->where('receiver_name' , 'like'  , '%' .$data['receiver_name']. '%' );   
               }

                
  if(isset($data['receiver_phone_number']) &&  $data['receiver_phone_number'] != null ){
                   $query->where('receiver_phone_number' , 'like'  , '%' .$data['receiver_phone_number']. '%' );   
               }

                
  if(isset($data['receiver_event']) &&  $data['receiver_event'] != null ){
                   $query->where('receiver_event' , 'like'  , '%' .$data['receiver_event']. '%' );   
               }

                
  if(isset($data['neighborhood_id']) &&  $data['neighborhood_id'] != null ){
                   $query->where('neighborhood_id' , 'like'  , '%' .$data['neighborhood_id']. '%' );   
               }

                
  if(isset($data['number_of_vehicles']) &&  $data['number_of_vehicles'] != null ){
                   $query->where('number_of_vehicles' , 'like'  , '%' .$data['number_of_vehicles']. '%' );   
               }

                
  if(isset($data['promo_code_id']) &&  $data['promo_code_id'] != null ){
                   $query->where('promo_code_id' , 'like'  , '%' .$data['promo_code_id']. '%' );   
               }

                
  if(isset($data['payment_mode_id']) &&  $data['payment_mode_id'] != null ){
                   $query->where('payment_mode_id' , 'like'  , '%' .$data['payment_mode_id']. '%' );   
               }

                
  if(isset($data['total_price']) &&  $data['total_price'] != null ){
                   $query->where('total_price' , 'like'  , '%' .$data['total_price']. '%' );   
               }

                
  if(isset($data['notes']) &&  $data['notes'] != null ){
                   $query->where('notes' , 'like'  , '%' .$data['notes']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.gift_appointment_schedules.gift_appointment_schedules')

->with('gift_appointment_schedules',$gift_appointment_schedules)
;

//searchfun


                        return view('REWASH.gift_appointment_schedules.gift_appointment_schedules' , compact('gift_appointment_schedules'));

    }





        public function create()
    {

          return view('REWASH.gift_appointment_schedules.gift_appointment_schedule_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'user_id' => 'required',

       'appointment_date' => 'required',

       'slot_id' => 'required',

       'receiver_name' => 'required',

       'receiver_phone_number' => 'required',

       'receiver_event' => 'required',

       'neighborhood_id' => 'required',

       'number_of_vehicles' => 'required',

       'promo_code_id' => 'required',

       'payment_mode_id' => 'required',

       'total_price' => 'required',

       'notes' => 'required',]);
    $gift_appointment_schedule = new Gift_appointment_schedule ();

         $gift_appointment_schedule->branch_id = $request->branch_id;
  $gift_appointment_schedule->user_id = $request->user_id;
  $gift_appointment_schedule->appointment_date = $request->appointment_date;
  $gift_appointment_schedule->slot_id = $request->slot_id;
  $gift_appointment_schedule->receiver_name = $request->receiver_name;
  $gift_appointment_schedule->receiver_phone_number = $request->receiver_phone_number;
  $gift_appointment_schedule->receiver_event = $request->receiver_event;
  $gift_appointment_schedule->neighborhood_id = $request->neighborhood_id;
  $gift_appointment_schedule->number_of_vehicles = $request->number_of_vehicles;
  $gift_appointment_schedule->promo_code_id = $request->promo_code_id;
  $gift_appointment_schedule->payment_mode_id = $request->payment_mode_id;
  $gift_appointment_schedule->total_price = $request->total_price;
  $gift_appointment_schedule->notes = $request->notes;


    $save = $gift_appointment_schedule->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('gift_appointment_schedules.show', $gift_appointment_schedule->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:gift_appointment_schedules,id',]);

    $gift_appointment_schedule = Gift_appointment_schedule::find($id);
    $next = Gift_appointment_schedule::where('id','>',$id)->min('id');
    $previous = Gift_appointment_schedule::where('id','<',$id)->max('id');
       return view('REWASH.gift_appointment_schedules.gift_appointment_schedule_view')
        ->with('gift_appointment_schedule',$gift_appointment_schedule)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $gift_appointment_schedule = Gift_appointment_schedule::find($id); 

      $gift_appointment_schedule->branch_id = $request->branch_id;
  $gift_appointment_schedule->user_id = $request->user_id;
  $gift_appointment_schedule->appointment_date = $request->appointment_date;
  $gift_appointment_schedule->slot_id = $request->slot_id;
  $gift_appointment_schedule->receiver_name = $request->receiver_name;
  $gift_appointment_schedule->receiver_phone_number = $request->receiver_phone_number;
  $gift_appointment_schedule->receiver_event = $request->receiver_event;
  $gift_appointment_schedule->neighborhood_id = $request->neighborhood_id;
  $gift_appointment_schedule->number_of_vehicles = $request->number_of_vehicles;
  $gift_appointment_schedule->promo_code_id = $request->promo_code_id;
  $gift_appointment_schedule->payment_mode_id = $request->payment_mode_id;
  $gift_appointment_schedule->total_price = $request->total_price;
  $gift_appointment_schedule->notes = $request->notes;

    $update = $gift_appointment_schedule->update();

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
    $model = Gift_appointment_schedule::find($id);

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
