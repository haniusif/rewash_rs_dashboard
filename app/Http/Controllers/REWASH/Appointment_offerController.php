<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Appointment_offer;



class Appointment_offerController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$appointment_offers = \App\Models\REWASH\Appointment_offer::get();
   
   $data = $request->all();


  $appointment_offers = Appointment_offer::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['appointment_id']) &&  $data['appointment_id'] != null ){
                   $query->where('appointment_id' , 'like'  , '%' .$data['appointment_id']. '%' );   
               }

                
  if(isset($data['additional_service_id']) &&  $data['additional_service_id'] != null ){
                   $query->where('additional_service_id' , 'like'  , '%' .$data['additional_service_id']. '%' );   
               }

                
  if(isset($data['quantity']) &&  $data['quantity'] != null ){
                   $query->where('quantity' , 'like'  , '%' .$data['quantity']. '%' );   
               }

                
  if(isset($data['remaining']) &&  $data['remaining'] != null ){
                   $query->where('remaining' , 'like'  , '%' .$data['remaining']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.appointment_offers.appointment_offers')

->with('appointment_offers',$appointment_offers)
;

//searchfun


                        return view('REWASH.appointment_offers.appointment_offers' , compact('appointment_offers'));

    }





        public function create()
    {

          return view('REWASH.appointment_offers.appointment_offer_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'appointment_id' => 'required',

       'additional_service_id' => 'required',

       'quantity' => 'required',

       'remaining' => 'required',]);
    $appointment_offer = new Appointment_offer ();

         $appointment_offer->appointment_id = $request->appointment_id;
  $appointment_offer->additional_service_id = $request->additional_service_id;
  $appointment_offer->quantity = $request->quantity;
  $appointment_offer->remaining = $request->remaining;


    $save = $appointment_offer->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('appointment_offers.show', $appointment_offer->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:appointment_offers,id',]);

    $appointment_offer = Appointment_offer::find($id);
    $next = Appointment_offer::where('id','>',$id)->min('id');
    $previous = Appointment_offer::where('id','<',$id)->max('id');
       return view('REWASH.appointment_offers.appointment_offer_view')
        ->with('appointment_offer',$appointment_offer)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $appointment_offer = Appointment_offer::find($id); 

      $appointment_offer->appointment_id = $request->appointment_id;
  $appointment_offer->additional_service_id = $request->additional_service_id;
  $appointment_offer->quantity = $request->quantity;
  $appointment_offer->remaining = $request->remaining;

    $update = $appointment_offer->update();

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
    $model = Appointment_offer::find($id);

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
