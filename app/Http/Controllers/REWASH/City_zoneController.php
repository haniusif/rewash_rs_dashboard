<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\City_zone;



class City_zoneController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$city_zones = \App\Models\REWASH\City_zone::get();
   
   $data = $request->all();


  $city_zones = City_zone::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['city_id']) &&  $data['city_id'] != null ){
                   $query->where('city_id' , 'like'  , '%' .$data['city_id']. '%' );   
               }

                
  if(isset($data['zone_id']) &&  $data['zone_id'] != null ){
                   $query->where('zone_id' , 'like'  , '%' .$data['zone_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.city_zones.city_zones')

->with('city_zones',$city_zones)
;

//searchfun


                        return view('REWASH.city_zones.city_zones' , compact('city_zones'));

    }





        public function create()
    {

          return view('REWASH.city_zones.city_zone_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'city_id' => 'required',

       'zone_id' => 'required',]);
    $city_zone = new City_zone ();

         $city_zone->city_id = $request->city_id;
  $city_zone->zone_id = $request->zone_id;


    $save = $city_zone->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('city_zones.show', $city_zone->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:city_zones,id',]);

    $city_zone = City_zone::find($id);
    $next = City_zone::where('id','>',$id)->min('id');
    $previous = City_zone::where('id','<',$id)->max('id');
       return view('REWASH.city_zones.city_zone_view')
        ->with('city_zone',$city_zone)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $city_zone = City_zone::find($id); 

      $city_zone->city_id = $request->city_id;
  $city_zone->zone_id = $request->zone_id;

    $update = $city_zone->update();

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
    $model = City_zone::find($id);

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
