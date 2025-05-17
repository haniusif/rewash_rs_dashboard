<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Dispatch_order;



class Dispatch_orderController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$dispatch_orders = \App\Models\REWASH\Dispatch_order::get();
   
   $data = $request->all();


  $dispatch_orders = Dispatch_order::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['appointment_date']) &&  $data['appointment_date'] != null ){
                   $query->where('appointment_date' , 'like'  , '%' .$data['appointment_date']. '%' );   
               }

                
  if(isset($data['dispatch_data']) &&  $data['dispatch_data'] != null ){
                   $query->where('dispatch_data' , 'like'  , '%' .$data['dispatch_data']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.dispatch_orders.dispatch_orders')

->with('dispatch_orders',$dispatch_orders)
;

//searchfun


                        return view('REWASH.dispatch_orders.dispatch_orders' , compact('dispatch_orders'));

    }





        public function create()
    {

          return view('REWASH.dispatch_orders.dispatch_order_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'appointment_date' => 'required',

       'dispatch_data' => 'required',]);
    $dispatch_order = new Dispatch_order ();

         $dispatch_order->user_id = $request->user_id;
  $dispatch_order->appointment_date = $request->appointment_date;
  $dispatch_order->dispatch_data = $request->dispatch_data;


    $save = $dispatch_order->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('dispatch_orders.show', $dispatch_order->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:dispatch_orders,id',]);

    $dispatch_order = Dispatch_order::find($id);
    $next = Dispatch_order::where('id','>',$id)->min('id');
    $previous = Dispatch_order::where('id','<',$id)->max('id');
       return view('REWASH.dispatch_orders.dispatch_order_view')
        ->with('dispatch_order',$dispatch_order)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $dispatch_order = Dispatch_order::find($id); 

      $dispatch_order->user_id = $request->user_id;
  $dispatch_order->appointment_date = $request->appointment_date;
  $dispatch_order->dispatch_data = $request->dispatch_data;

    $update = $dispatch_order->update();

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
    $model = Dispatch_order::find($id);

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
