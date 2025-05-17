<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Team_zone;



class Team_zoneController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$team_zones = \App\Models\REWASH\Team_zone::get();
   
   $data = $request->all();


  $team_zones = Team_zone::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['zone_id']) &&  $data['zone_id'] != null ){
                   $query->where('zone_id' , 'like'  , '%' .$data['zone_id']. '%' );   
               }

                
  if(isset($data['team_id']) &&  $data['team_id'] != null ){
                   $query->where('team_id' , 'like'  , '%' .$data['team_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.team_zones.team_zones')

->with('team_zones',$team_zones)
;

//searchfun


                        return view('REWASH.team_zones.team_zones' , compact('team_zones'));

    }





        public function create()
    {

          return view('REWASH.team_zones.team_zone_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'zone_id' => 'required',

       'team_id' => 'required',]);
    $team_zone = new Team_zone ();

         $team_zone->branch_id = $request->branch_id;
  $team_zone->zone_id = $request->zone_id;
  $team_zone->team_id = $request->team_id;


    $save = $team_zone->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('team_zones.show', $team_zone->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:team_zones,id',]);

    $team_zone = Team_zone::find($id);
    $next = Team_zone::where('id','>',$id)->min('id');
    $previous = Team_zone::where('id','<',$id)->max('id');
       return view('REWASH.team_zones.team_zone_view')
        ->with('team_zone',$team_zone)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $team_zone = Team_zone::find($id); 

      $team_zone->branch_id = $request->branch_id;
  $team_zone->zone_id = $request->zone_id;
  $team_zone->team_id = $request->team_id;

    $update = $team_zone->update();

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
    $model = Team_zone::find($id);

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
