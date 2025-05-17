<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Team_vehicle;



class Team_vehicleController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$team_vehicles = \App\Models\REWASH\Team_vehicle::get();
   
   $data = $request->all();


  $team_vehicles = Team_vehicle::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['team_id']) &&  $data['team_id'] != null ){
                   $query->where('team_id' , 'like'  , '%' .$data['team_id']. '%' );   
               }

                
  if(isset($data['company_vehicle_id']) &&  $data['company_vehicle_id'] != null ){
                   $query->where('company_vehicle_id' , 'like'  , '%' .$data['company_vehicle_id']. '%' );   
               }

                
  if(isset($data['assigned_at']) &&  $data['assigned_at'] != null ){
                   $query->where('assigned_at' , 'like'  , '%' .$data['assigned_at']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.team_vehicles.team_vehicles')

->with('team_vehicles',$team_vehicles)
;

//searchfun


                        return view('REWASH.team_vehicles.team_vehicles' , compact('team_vehicles'));

    }





        public function create()
    {

          return view('REWASH.team_vehicles.team_vehicle_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'team_id' => 'required',

       'company_vehicle_id' => 'required',

       'assigned_at' => 'required',]);
    $team_vehicle = new Team_vehicle ();

         $team_vehicle->team_id = $request->team_id;
  $team_vehicle->company_vehicle_id = $request->company_vehicle_id;
  $team_vehicle->assigned_at = $request->assigned_at;


    $save = $team_vehicle->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('team_vehicles.show', $team_vehicle->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:team_vehicles,id',]);

    $team_vehicle = Team_vehicle::find($id);
    $next = Team_vehicle::where('id','>',$id)->min('id');
    $previous = Team_vehicle::where('id','<',$id)->max('id');
       return view('REWASH.team_vehicles.team_vehicle_view')
        ->with('team_vehicle',$team_vehicle)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $team_vehicle = Team_vehicle::find($id); 

      $team_vehicle->team_id = $request->team_id;
  $team_vehicle->company_vehicle_id = $request->company_vehicle_id;
  $team_vehicle->assigned_at = $request->assigned_at;

    $update = $team_vehicle->update();

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
    $model = Team_vehicle::find($id);

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
