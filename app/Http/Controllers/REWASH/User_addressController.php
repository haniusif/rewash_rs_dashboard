<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\User_address;



class User_addressController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$user_addresses = \App\Models\REWASH\User_address::get();
   
   $data = $request->all();


  $user_addresses = User_address::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['address_title']) &&  $data['address_title'] != null ){
                   $query->where('address_title' , 'like'  , '%' .$data['address_title']. '%' );   
               }

                
  if(isset($data['address_desc']) &&  $data['address_desc'] != null ){
                   $query->where('address_desc' , 'like'  , '%' .$data['address_desc']. '%' );   
               }

                
  if(isset($data['latitude']) &&  $data['latitude'] != null ){
                   $query->where('latitude' , 'like'  , '%' .$data['latitude']. '%' );   
               }

                
  if(isset($data['longitude']) &&  $data['longitude'] != null ){
                   $query->where('longitude' , 'like'  , '%' .$data['longitude']. '%' );   
               }

                
  if(isset($data['city_id']) &&  $data['city_id'] != null ){
                   $query->where('city_id' , 'like'  , '%' .$data['city_id']. '%' );   
               }

                
  if(isset($data['neighborhood_id']) &&  $data['neighborhood_id'] != null ){
                   $query->where('neighborhood_id' , 'like'  , '%' .$data['neighborhood_id']. '%' );   
               }

                     if(isset($data['is_default']) && $data['is_default'] != 'all' ){
            
                 $query->where('is_default' , $data['is_default']);   
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

return view('REWASH.user_addresses.user_addresses')

->with('user_addresses',$user_addresses)
;

//searchfun


                        return view('REWASH.user_addresses.user_addresses' , compact('user_addresses'));

    }





        public function create()
    {

          return view('REWASH.user_addresses.user_address_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'address_title' => 'required',

       'address_desc' => 'required',

       'latitude' => 'required',

       'longitude' => 'required',

       'city_id' => 'required',

       'neighborhood_id' => 'required',

       'is_default' => 'required',

       'is_deleted' => 'required',]);
    $user_address = new User_address ();

         $user_address->user_id = $request->user_id;
  $user_address->address_title = $request->address_title;
  $user_address->address_desc = $request->address_desc;
  $user_address->latitude = $request->latitude;
  $user_address->longitude = $request->longitude;
  $user_address->city_id = $request->city_id;
  $user_address->neighborhood_id = $request->neighborhood_id;
  $user_address->is_default = $request->is_default;
  $user_address->is_deleted = $request->is_deleted;


    $save = $user_address->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('user_addresses.show', $user_address->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:user_addresses,id',]);

    $user_address = User_address::find($id);
    $next = User_address::where('id','>',$id)->min('id');
    $previous = User_address::where('id','<',$id)->max('id');
       return view('REWASH.user_addresses.user_address_view')
        ->with('user_address',$user_address)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $user_address = User_address::find($id); 

      $user_address->user_id = $request->user_id;
  $user_address->address_title = $request->address_title;
  $user_address->address_desc = $request->address_desc;
  $user_address->latitude = $request->latitude;
  $user_address->longitude = $request->longitude;
  $user_address->city_id = $request->city_id;
  $user_address->neighborhood_id = $request->neighborhood_id;
  $user_address->is_default = $request->is_default;
  $user_address->is_deleted = $request->is_deleted;

    $update = $user_address->update();

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
    $model = User_address::find($id);

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
