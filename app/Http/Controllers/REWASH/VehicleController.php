<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Vehicle;



class VehicleController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$vehicles = \App\Models\REWASH\Vehicle::get();
   
   $data = $request->all();


  $vehicles = Vehicle::orderby('id','DESC')

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

                
  if(isset($data['vehicle_name']) &&  $data['vehicle_name'] != null ){
                   $query->where('vehicle_name' , 'like'  , '%' .$data['vehicle_name']. '%' );   
               }

                
  if(isset($data['vehicle_color_id']) &&  $data['vehicle_color_id'] != null ){
                   $query->where('vehicle_color_id' , 'like'  , '%' .$data['vehicle_color_id']. '%' );   
               }

                
  if(isset($data['vehicle_company_id']) &&  $data['vehicle_company_id'] != null ){
                   $query->where('vehicle_company_id' , 'like'  , '%' .$data['vehicle_company_id']. '%' );   
               }

                
  if(isset($data['vehicle_modal_id']) &&  $data['vehicle_modal_id'] != null ){
                   $query->where('vehicle_modal_id' , 'like'  , '%' .$data['vehicle_modal_id']. '%' );   
               }

                
  if(isset($data['vehicle_type_id']) &&  $data['vehicle_type_id'] != null ){
                   $query->where('vehicle_type_id' , 'like'  , '%' .$data['vehicle_type_id']. '%' );   
               }

                
  if(isset($data['image']) &&  $data['image'] != null ){
                   $query->where('image' , 'like'  , '%' .$data['image']. '%' );   
               }

                     if(isset($data['is_deleted']) && $data['is_deleted'] != 'all' ){
            
                 $query->where('is_deleted' , $data['is_deleted']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.vehicles.vehicles')

->with('vehicles',$vehicles)
;

//searchfun


                        return view('REWASH.vehicles.vehicles' , compact('vehicles'));

    }





        public function create()
    {

          return view('REWASH.vehicles.vehicle_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'user_id' => 'required',

       'vehicle_name' => 'required',

       'vehicle_color_id' => 'required',

       'vehicle_company_id' => 'required',

       'vehicle_modal_id' => 'required',

       'vehicle_type_id' => 'required',

       'image' => 'required',

       'is_deleted' => 'required',]);
    $vehicle = new Vehicle ();

         $vehicle->branch_id = $request->branch_id;
  $vehicle->user_id = $request->user_id;
  $vehicle->vehicle_name = $request->vehicle_name;
  $vehicle->vehicle_color_id = $request->vehicle_color_id;
  $vehicle->vehicle_company_id = $request->vehicle_company_id;
  $vehicle->vehicle_modal_id = $request->vehicle_modal_id;
  $vehicle->vehicle_type_id = $request->vehicle_type_id;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/vehicles';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $vehicle->image = '/'.$destinationPath."/".$fileName;

      }}
  $vehicle->is_deleted = $request->is_deleted;


    $save = $vehicle->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('vehicles.show', $vehicle->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:vehicles,id',]);

    $vehicle = Vehicle::find($id);
    $next = Vehicle::where('id','>',$id)->min('id');
    $previous = Vehicle::where('id','<',$id)->max('id');
       return view('REWASH.vehicles.vehicle_view')
        ->with('vehicle',$vehicle)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $vehicle = Vehicle::find($id); 

      $vehicle->branch_id = $request->branch_id;
  $vehicle->user_id = $request->user_id;
  $vehicle->vehicle_name = $request->vehicle_name;
  $vehicle->vehicle_color_id = $request->vehicle_color_id;
  $vehicle->vehicle_company_id = $request->vehicle_company_id;
  $vehicle->vehicle_modal_id = $request->vehicle_modal_id;
  $vehicle->vehicle_type_id = $request->vehicle_type_id;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/vehicles';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $vehicle->image = '/'.$destinationPath."/".$fileName;

      }}
  $vehicle->is_deleted = $request->is_deleted;

    $update = $vehicle->update();

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
    $model = Vehicle::find($id);

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
