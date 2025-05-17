<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\User_zone;



class User_zoneController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$user_zones = \App\Models\REWASH\User_zone::get();
   
   $data = $request->all();


  $user_zones = User_zone::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
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

return view('REWASH.user_zones.user_zones')

->with('user_zones',$user_zones)
;

//searchfun


                        return view('REWASH.user_zones.user_zones' , compact('user_zones'));

    }





        public function create()
    {

          return view('REWASH.user_zones.user_zone_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'zone_id' => 'required',]);
    $user_zone = new User_zone ();

         $user_zone->user_id = $request->user_id;
  $user_zone->zone_id = $request->zone_id;


    $save = $user_zone->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('user_zones.show', $user_zone->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:user_zones,id',]);

    $user_zone = User_zone::find($id);
    $next = User_zone::where('id','>',$id)->min('id');
    $previous = User_zone::where('id','<',$id)->max('id');
       return view('REWASH.user_zones.user_zone_view')
        ->with('user_zone',$user_zone)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $user_zone = User_zone::find($id); 

      $user_zone->user_id = $request->user_id;
  $user_zone->zone_id = $request->zone_id;

    $update = $user_zone->update();

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
    $model = User_zone::find($id);

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
