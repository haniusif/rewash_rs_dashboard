<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Vehicle_type;



class Vehicle_typeController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$vehicle_types = \App\Models\REWASH\Vehicle_type::get();
   
   $data = $request->all();


  $vehicle_types = Vehicle_type::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['icon']) &&  $data['icon'] != null ){
                   $query->where('icon' , 'like'  , '%' .$data['icon']. '%' );   
               }

                
  if(isset($data['type']) &&  $data['type'] != null ){
                   $query->where('type' , 'like'  , '%' .$data['type']. '%' );   
               }

                
  if(isset($data['en_type']) &&  $data['en_type'] != null ){
                   $query->where('en_type' , 'like'  , '%' .$data['en_type']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.vehicle_types.vehicle_types')

->with('vehicle_types',$vehicle_types)
;

//searchfun


                        return view('REWASH.vehicle_types.vehicle_types' , compact('vehicle_types'));

    }





        public function create()
    {

          return view('REWASH.vehicle_types.vehicle_type_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'icon' => 'required',

       'type' => 'required',

       'en_type' => 'required',]);
    $vehicle_type = new Vehicle_type ();

         $vehicle_type->branch_id = $request->branch_id;
  $vehicle_type->icon = $request->icon;
  $vehicle_type->type = $request->type;
  $vehicle_type->en_type = $request->en_type;


    $save = $vehicle_type->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('vehicle_types.show', $vehicle_type->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:vehicle_types,id',]);

    $vehicle_type = Vehicle_type::find($id);
    $next = Vehicle_type::where('id','>',$id)->min('id');
    $previous = Vehicle_type::where('id','<',$id)->max('id');
       return view('REWASH.vehicle_types.vehicle_type_view')
        ->with('vehicle_type',$vehicle_type)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $vehicle_type = Vehicle_type::find($id); 

      $vehicle_type->branch_id = $request->branch_id;
  $vehicle_type->icon = $request->icon;
  $vehicle_type->type = $request->type;
  $vehicle_type->en_type = $request->en_type;

    $update = $vehicle_type->update();

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
    $model = Vehicle_type::find($id);

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
