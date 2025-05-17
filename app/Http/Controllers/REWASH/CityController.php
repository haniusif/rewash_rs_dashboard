<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\City;



class CityController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$cities = \App\Models\REWASH\City::get();
   
   $data = $request->all();


  $cities = City::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['en_name']) &&  $data['en_name'] != null ){
                   $query->where('en_name' , 'like'  , '%' .$data['en_name']. '%' );   
               }

                
  if(isset($data['tags']) &&  $data['tags'] != null ){
                   $query->where('tags' , 'like'  , '%' .$data['tags']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.cities.cities')

->with('cities',$cities)
;

//searchfun


                        return view('REWASH.cities.cities' , compact('cities'));

    }





        public function create()
    {

          return view('REWASH.cities.city_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',

       'tags' => 'required',]);
    $city = new City ();

         $city->branch_id = $request->branch_id;
  $city->name = $request->name;
  $city->en_name = $request->en_name;
  $city->tags = $request->tags;
  $city->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $city->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('cities.show', $city->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:cities,id',]);

    $city = City::find($id);
    $next = City::where('id','>',$id)->min('id');
    $previous = City::where('id','<',$id)->max('id');
       return view('REWASH.cities.city_view')
        ->with('city',$city)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $city = City::find($id); 

      $city->branch_id = $request->branch_id;
  $city->name = $request->name;
  $city->en_name = $request->en_name;
  $city->tags = $request->tags;
  $city->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $city->update();

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
    $model = City::find($id);

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
