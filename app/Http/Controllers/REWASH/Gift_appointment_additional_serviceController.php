<?php

namespace App\Http\Controllers\REWASH;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Gift_appointment_additional_service;



class Gift_appointment_additional_serviceController extends Controller
{



  public function index(Request $request)
  {

    $data = $request->all();


    $gaas = Gift_appointment_additional_service::orderby('id', 'DESC')

      ->where(function ($query) use ($data) {


        if (isset($data['id']) &&  $data['id'] != null) {
          $query->where('id', 'like', '%' . $data['id'] . '%');
        }


        if (isset($data['branch_id']) &&  $data['branch_id'] != null) {
          $query->where('branch_id', 'like', '%' . $data['branch_id'] . '%');
        }


        if (isset($data['gift_appointment_id']) &&  $data['gift_appointment_id'] != null) {
          $query->where('gift_appointment_id', 'like', '%' . $data['gift_appointment_id'] . '%');
        }


        if (isset($data['additional_service_id']) &&  $data['additional_service_id'] != null) {
          $query->where('additional_service_id', 'like', '%' . $data['additional_service_id'] . '%');
        }


        if (isset($data['additional_service_price']) &&  $data['additional_service_price'] != null) {
          $query->where('additional_service_price', 'like', '%' . $data['additional_service_price'] . '%');
        }


        if (isset($data['quantity']) &&  $data['quantity'] != null) {
          $query->where('quantity', 'like', '%' . $data['quantity'] . '%');
        }


        if (isset($data['total_price']) &&  $data['total_price'] != null) {
          $query->where('total_price', 'like', '%' . $data['total_price'] . '%');
        }


        if (isset($data['created_at']) &&  $data['created_at'] != null) {
          $query->where('created_at', 'like', '%' . $data['created_at'] . '%');
        }


        if (isset($data['updated_at']) &&  $data['updated_at'] != null) {
          $query->where('updated_at', 'like', '%' . $data['updated_at'] . '%');
        }
      })
      ->paginate(50);

    return view('REWASH.gift_appointment_additional_services.gift_appointment_additional_services')

      ->with('gift_appointment_additional_services', $gaas);

    //searchfun


    return view('REWASH.gift_appointment_additional_services.gift_appointment_additional_services', compact('gift_appointment_additional_services'));
  }





  public function create()
  {

    return view('REWASH.gift_appointment_additional_services.gift_appointment_additional_service_add');
  }


  public function store(Request $request)
  {

    $validated = $request->validate([



      'branch_id' => 'required',

      'gift_appointment_id' => 'required',

      'additional_service_id' => 'required',

      'additional_service_price' => 'required',

      'quantity' => 'required',

      'total_price' => 'required',
    ]);
    $gaas = new Gift_appointment_additional_service();

    $gaas->branch_id = $request->branch_id;
    $gaas->gift_appointment_id = $request->gift_appointment_id;
    $gaas->additional_service_id = $request->additional_service_id;
    $gaas->additional_service_price = $request->additional_service_price;
    $gaas->quantity = $request->quantity;
    $gaas->total_price = $request->total_price;


    $save = $gaas->save();

    if ($save) {
      Session::flash('alert-success-link', true);
      Session::flash('alert-link', route('gift_appointment_additional_services.show', $gaas->id));
      Session::flash('message', __('The record has been successfully added. You can view it here.'));
    } else {
      Session::flash('alert-danger', true);
      Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
    }

    return back();
  }
  public function show($id, Request $request)
  {
    // $this->validate($request, ['id' => 'required|exists:gift_appointment_additional_services,id',]);

    $gaas = Gift_appointment_additional_service::find($id);
    $next = Gift_appointment_additional_service::where('id', '>', $id)->min('id');
    $previous = Gift_appointment_additional_service::where('id', '<', $id)->max('id');
    return view('REWASH.gift_appointment_additional_services.gift_appointment_additional_service_view')
      ->with('gift_appointment_additional_service', $gaas)
      ->with('next', $next)
      ->with('previous', $previous);
  }


  public function edit($id) {}

  public function update(Request $request, $id)
  {

    $gaas = Gift_appointment_additional_service::find($id);

    $gaas->branch_id = $request->branch_id;
    $gaas->gift_appointment_id = $request->gift_appointment_id;
    $gaas->additional_service_id = $request->additional_service_id;
    $gaas->additional_service_price = $request->additional_service_price;
    $gaas->quantity = $request->quantity;
    $gaas->total_price = $request->total_price;

    $update = $gaas->update();

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
    $model = Gift_appointment_additional_service::find($id);

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
