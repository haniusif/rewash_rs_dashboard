<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Order_detail;
use App\Models\REWASH\Order;
use App\Models\REWASH\Rsa_service;



class Order_detailController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$order_details = \App\Models\REWASH\Order_detail::get();

$orders = \App\Models\REWASH\Order::get();

$rsa_services = \App\Models\REWASH\Rsa_service::get();
   
   $data = $request->all();


  $order_details = Order_detail::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                     if(isset($data['order_id']) && $data['order_id'] != 'all' ){
            
                 $query->where('order_id' , $data['order_id']);   
            }
      if(isset($data['rsa_service_id']) && $data['rsa_service_id'] != 'all' ){
            
                 $query->where('rsa_service_id' , $data['rsa_service_id']);   
            }
 
  if(isset($data['quantity']) &&  $data['quantity'] != null ){
                   $query->where('quantity' , 'like'  , '%' .$data['quantity']. '%' );   
               }

                
  if(isset($data['service_price']) &&  $data['service_price'] != null ){
                   $query->where('service_price' , 'like'  , '%' .$data['service_price']. '%' );   
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

return view('REWASH.order_details.order_details')

->with('order_details',$order_details)
->with('orders',$orders)
->with('rsa_services',$rsa_services)
;

//searchfun


                        return view('REWASH.order_details.order_details' , compact('order_details'));

    }







        public function create()
    {

   $orders = Order::all();
$rsa_services = Rsa_service::all();
       return view('REWASH.order_details.order_detail_add')->with('orders' , $orders)
->with('rsa_services' , $rsa_services)

       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'order_id' => 'required',

       'rsa_service_id' => 'required',

       'quantity' => 'required',

       'service_price' => 'required',

       'total_price' => 'required',]);
    $order_detail = new Order_detail ();

         $order_detail->order_id = $request->order_id;
  $order_detail->rsa_service_id = $request->rsa_service_id;
  $order_detail->quantity = $request->quantity;
  $order_detail->service_price = $request->service_price;
  $order_detail->total_price = $request->total_price;


    $save = $order_detail->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('order_details.show', $order_detail->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:order_details,id',]);

    $order_detail = Order_detail::find($id);
    $next = Order_detail::where('id','>',$id)->min('id');
    $previous = Order_detail::where('id','<',$id)->max('id');
$orders = Order::all();
$rsa_services = Rsa_service::all();
       return view('REWASH.order_details.order_detail_view')
        ->with('order_detail',$order_detail)
        ->with('next',$next)
        ->with('previous',$previous)->with('orders' , $orders)
->with('rsa_services' , $rsa_services)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $order_detail = Order_detail::find($id); 

      $order_detail->order_id = $request->order_id;
  $order_detail->rsa_service_id = $request->rsa_service_id;
  $order_detail->quantity = $request->quantity;
  $order_detail->service_price = $request->service_price;
  $order_detail->total_price = $request->total_price;

    $update = $order_detail->update();

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
    $model = Order_detail::find($id);

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
