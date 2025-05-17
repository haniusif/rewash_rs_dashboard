<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Zone;



class ZoneController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$zones = \App\Models\REWASH\Zone::get();
   
   $data = $request->all();


  $zones = Zone::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['zone_ai']) &&  $data['zone_ai'] != null ){
                   $query->where('zone_ai' , 'like'  , '%' .$data['zone_ai']. '%' );   
               }

                
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['en_name']) &&  $data['en_name'] != null ){
                   $query->where('en_name' , 'like'  , '%' .$data['en_name']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.zones.zones')

->with('zones',$zones)
;

//searchfun


                        return view('REWASH.zones.zones' , compact('zones'));

    }





        public function create()
    {

          return view('REWASH.zones.zone_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'zone_ai' => 'required',

       'name' => 'required',

       'en_name' => 'required',]);
    $zone = new Zone ();

         $zone->zone_ai = $request->zone_ai;
  $zone->name = $request->name;
  $zone->en_name = $request->en_name;


    $save = $zone->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('zones.show', $zone->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:zones,id',]);

    $zone = Zone::find($id);
    $next = Zone::where('id','>',$id)->min('id');
    $previous = Zone::where('id','<',$id)->max('id');
       return view('REWASH.zones.zone_view')
        ->with('zone',$zone)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $zone = Zone::find($id); 

      $zone->zone_ai = $request->zone_ai;
  $zone->name = $request->name;
  $zone->en_name = $request->en_name;

    $update = $zone->update();

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
    $model = Zone::find($id);

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
