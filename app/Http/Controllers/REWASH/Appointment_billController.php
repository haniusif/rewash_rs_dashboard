<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Appointment_bill;



class Appointment_billController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$appointment_bills = \App\Models\REWASH\Appointment_bill::get();
   
   $data = $request->all();


  $appointment_bills = Appointment_bill::orderby('id','DESC')

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

                
  if(isset($data['bill_id']) &&  $data['bill_id'] != null ){
                   $query->where('bill_id' , 'like'  , '%' .$data['bill_id']. '%' );   
               }

                
  if(isset($data['bill_number']) &&  $data['bill_number'] != null ){
                   $query->where('bill_number' , 'like'  , '%' .$data['bill_number']. '%' );   
               }

                
  if(isset($data['bill_status']) &&  $data['bill_status'] != null ){
                   $query->where('bill_status' , 'like'  , '%' .$data['bill_status']. '%' );   
               }

                
  if(isset($data['pay_url']) &&  $data['pay_url'] != null ){
                   $query->where('pay_url' , 'like'  , '%' .$data['pay_url']. '%' );   
               }

                
  if(isset($data['total']) &&  $data['total'] != null ){
                   $query->where('total' , 'like'  , '%' .$data['total']. '%' );   
               }

                
  if(isset($data['reference_id']) &&  $data['reference_id'] != null ){
                   $query->where('reference_id' , 'like'  , '%' .$data['reference_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.appointment_bills.appointment_bills')

->with('appointment_bills',$appointment_bills)
;

//searchfun


                        return view('REWASH.appointment_bills.appointment_bills' , compact('appointment_bills'));

    }





        public function create()
    {

          return view('REWASH.appointment_bills.appointment_bill_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'appointment_id' => 'required',

       'bill_id' => 'required',

       'bill_number' => 'required',

       'bill_status' => 'required',

       'pay_url' => 'required',

       'total' => 'required',

       'reference_id' => 'required',]);
    $appointment_bill = new Appointment_bill ();

         $appointment_bill->branch_id = $request->branch_id;
  $appointment_bill->appointment_id = $request->appointment_id;
  $appointment_bill->bill_id = $request->bill_id;
  $appointment_bill->bill_number = $request->bill_number;
  $appointment_bill->bill_status = $request->bill_status;
  $appointment_bill->pay_url = $request->pay_url;
  $appointment_bill->total = $request->total;
  $appointment_bill->reference_id = $request->reference_id;


    $save = $appointment_bill->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('appointment_bills.show', $appointment_bill->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:appointment_bills,id',]);

    $appointment_bill = Appointment_bill::find($id);
    $next = Appointment_bill::where('id','>',$id)->min('id');
    $previous = Appointment_bill::where('id','<',$id)->max('id');
       return view('REWASH.appointment_bills.appointment_bill_view')
        ->with('appointment_bill',$appointment_bill)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $appointment_bill = Appointment_bill::find($id); 

      $appointment_bill->branch_id = $request->branch_id;
  $appointment_bill->appointment_id = $request->appointment_id;
  $appointment_bill->bill_id = $request->bill_id;
  $appointment_bill->bill_number = $request->bill_number;
  $appointment_bill->bill_status = $request->bill_status;
  $appointment_bill->pay_url = $request->pay_url;
  $appointment_bill->total = $request->total;
  $appointment_bill->reference_id = $request->reference_id;

    $update = $appointment_bill->update();

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
    $model = Appointment_bill::find($id);

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
