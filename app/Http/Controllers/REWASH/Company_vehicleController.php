<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Company_vehicle;



class Company_vehicleController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$company_vehicles = \App\Models\REWASH\Company_vehicle::get();
   
   $data = $request->all();


  $company_vehicles = Company_vehicle::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['imei']) &&  $data['imei'] != null ){
                   $query->where('imei' , 'like'  , '%' .$data['imei']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['driver_name']) &&  $data['driver_name'] != null ){
                   $query->where('driver_name' , 'like'  , '%' .$data['driver_name']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.company_vehicles.company_vehicles')

->with('company_vehicles',$company_vehicles)
;

//searchfun


                        return view('REWASH.company_vehicles.company_vehicles' , compact('company_vehicles'));

    }





        public function create()
    {

          return view('REWASH.company_vehicles.company_vehicle_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'imei' => 'required',

       'driver_name' => 'required',]);
    $company_vehicle = new Company_vehicle ();

         $company_vehicle->imei = $request->imei;
  $company_vehicle->is_active = ($request->is_active) ? $request->is_active : 0;
  $company_vehicle->driver_name = $request->driver_name;


    $save = $company_vehicle->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('company_vehicles.show', $company_vehicle->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:company_vehicles,id',]);

    $company_vehicle = Company_vehicle::find($id);
    $next = Company_vehicle::where('id','>',$id)->min('id');
    $previous = Company_vehicle::where('id','<',$id)->max('id');
       return view('REWASH.company_vehicles.company_vehicle_view')
        ->with('company_vehicle',$company_vehicle)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $company_vehicle = Company_vehicle::find($id); 

      $company_vehicle->imei = $request->imei;
  $company_vehicle->is_active = ($request->is_active) ? $request->is_active : 0;
  $company_vehicle->driver_name = $request->driver_name;

    $update = $company_vehicle->update();

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
    $model = Company_vehicle::find($id);

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
