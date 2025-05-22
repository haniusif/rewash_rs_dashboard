<?php

namespace App\Http\Controllers\REWASH;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Order;
use App\Models\REWASH\Order_status;
use App\Models\REWASH\Provider;



class OrderController extends Controller
{



  public function index(Request $request)
  {

    // pure


    $orders = \App\Models\REWASH\Order::get();

    $order_statuses = \App\Models\REWASH\Order_status::get();

    $providers = \App\Models\REWASH\Provider::get();

    $providers = \App\Models\REWASH\Provider::get();

    $data = $request->all();


    $orders = Order::orderby('id', 'DESC')

      ->where(function ($query) use ($data) {


        if (isset($data['id']) &&  $data['id'] != null) {
          $query->where('id', 'like', '%' . $data['id'] . '%');
        }


        if (isset($data['order_number']) &&  $data['order_number'] != null) {
          $query->where('order_number', 'like', '%' . $data['order_number'] . '%');
        }

        if (isset($data['order_status_id']) && $data['order_status_id'] != 'all') {

          $query->where('order_status_id', $data['order_status_id']);
        }
        if (isset($data['user_id']) && $data['user_id'] != 'all') {

          $query->where('user_id', $data['user_id']);
        }
        if (isset($data['provider_id']) && $data['provider_id'] != 'all') {

          $query->where('provider_id', $data['provider_id']);
        }

        if (isset($data['go_to_user_time']) &&  $data['go_to_user_time'] != null) {
          $query->where('go_to_user_time', 'like', '%' . $data['go_to_user_time'] . '%');
        }


        if (isset($data['start_work_time']) &&  $data['start_work_time'] != null) {
          $query->where('start_work_time', 'like', '%' . $data['start_work_time'] . '%');
        }


        if (isset($data['finish_work_time']) &&  $data['finish_work_time'] != null) {
          $query->where('finish_work_time', 'like', '%' . $data['finish_work_time'] . '%');
        }


        if (isset($data['pickup_lat']) &&  $data['pickup_lat'] != null) {
          $query->where('pickup_lat', 'like', '%' . $data['pickup_lat'] . '%');
        }


        if (isset($data['pickup_lng']) &&  $data['pickup_lng'] != null) {
          $query->where('pickup_lng', 'like', '%' . $data['pickup_lng'] . '%');
        }


        if (isset($data['pickup_address']) &&  $data['pickup_address'] != null) {
          $query->where('pickup_address', 'like', '%' . $data['pickup_address'] . '%');
        }


        if (isset($data['order_date']) &&  $data['order_date'] != null) {
          $query->where('order_date', 'like', '%' . $data['order_date'] . '%');
        }


        if (isset($data['amount']) &&  $data['amount'] != null) {
          $query->where('amount', 'like', '%' . $data['amount'] . '%');
        }


        if (isset($data['vat']) &&  $data['vat'] != null) {
          $query->where('vat', 'like', '%' . $data['vat'] . '%');
        }


        if (isset($data['discount']) &&  $data['discount'] != null) {
          $query->where('discount', 'like', '%' . $data['discount'] . '%');
        }


        if (isset($data['total_amount']) &&  $data['total_amount'] != null) {
          $query->where('total_amount', 'like', '%' . $data['total_amount'] . '%');
        }


        if (isset($data['created_at']) &&  $data['created_at'] != null) {
          $query->where('created_at', 'like', '%' . $data['created_at'] . '%');
        }


        if (isset($data['updated_at']) &&  $data['updated_at'] != null) {
          $query->where('updated_at', 'like', '%' . $data['updated_at'] . '%');
        }
      })
      ->paginate(50);

    return view('REWASH.orders.orders')

      ->with('orders', $orders)
      ->with('order_statuses', $order_statuses)
      ->with('providers', $providers)
    ;




    return view('REWASH.orders.orders', compact('orders'));
  }








  public function create()
  {

    $order_statuses = Order_status::all();
    $providers = Provider::all();
    return view('REWASH.orders.order_add')->with('order_statuses', $order_statuses)
      ->with('providers', $providers)

    ;
  }


  public function store(Request $request)
  {

    $validated = $request->validate([



      'order_number' => 'required',

      'order_status_id' => 'required',

      'user_id' => 'required',

      'provider_id' => 'required',

      'go_to_user_time' => 'required',

      'start_work_time' => 'required',

      'finish_work_time' => 'required',

      'pickup_lat' => 'required',

      'pickup_lng' => 'required',

      'pickup_address' => 'required',

      'order_date' => 'required',

      'amount' => 'required',

      'vat' => 'required',

      'discount' => 'required',

      'total_amount' => 'required',
    ]);
    $order = new Order();

    $order->order_number = $request->order_number;
    $order->order_status_id = $request->order_status_id;
    $order->user_id = $request->user_id;
    $order->provider_id = $request->provider_id;
    $order->go_to_user_time = $request->go_to_user_time;
    $order->start_work_time = $request->start_work_time;
    $order->finish_work_time = $request->finish_work_time;
    $order->pickup_lat = $request->pickup_lat;
    $order->pickup_lng = $request->pickup_lng;
    $order->pickup_address = $request->pickup_address;
    $order->order_date = $request->order_date;
    $order->amount = $request->amount;
    $order->vat = $request->vat;
    $order->discount = $request->discount;
    $order->total_amount = $request->total_amount;


    $save = $order->save();

    if ($save) {
      Session::flash('alert-success-link', true);
      Session::flash('alert-link', route('orders.show', $order->id));
      Session::flash('message', __('The record has been successfully added. You can view it here.'));
    } else {
      Session::flash('alert-danger', true);
      Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
    }

    return back();
  }
  public function show($id, Request $request)
  {
    // $this->validate($request, ['id' => 'required|exists:orders,id',]);

    $order = Order::find($id);
    $next = Order::where('id', '>', $id)->min('id');
    $previous = Order::where('id', '<', $id)->max('id');
    $order_statuses = Order_status::all();
    $providers = Provider::all();
    return view('REWASH.orders.order_view')
      ->with('order', $order)
      ->with('next', $next)
      ->with('previous', $previous)->with('order_statuses', $order_statuses)
      ->with('providers', $providers)
    ;
  }


  public function edit($id) {}

  public function update(Request $request, $id)
  {

    $order = Order::find($id);

    $order->order_number = $request->order_number;
    $order->order_status_id = $request->order_status_id;
    $order->user_id = $request->user_id;
    $order->provider_id = $request->provider_id;
    $order->go_to_user_time = $request->go_to_user_time;
    $order->start_work_time = $request->start_work_time;
    $order->finish_work_time = $request->finish_work_time;
    $order->pickup_lat = $request->pickup_lat;
    $order->pickup_lng = $request->pickup_lng;
    $order->pickup_address = $request->pickup_address;
    $order->order_date = $request->order_date;
    $order->amount = $request->amount;
    $order->vat = $request->vat;
    $order->discount = $request->discount;
    $order->total_amount = $request->total_amount;

    $update = $order->update();

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
    $model = Order::find($id);

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