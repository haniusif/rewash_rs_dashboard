<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Map_place;



class Map_placeController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$map_places = \App\Models\REWASH\Map_place::get();
   
   $data = $request->all();


  $map_places = Map_place::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['place_id']) &&  $data['place_id'] != null ){
                   $query->where('place_id' , 'like'  , '%' .$data['place_id']. '%' );   
               }

                
  if(isset($data['description']) &&  $data['description'] != null ){
                   $query->where('description' , 'like'  , '%' .$data['description']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.map_places.map_places')

->with('map_places',$map_places)
;

//searchfun


                        return view('REWASH.map_places.map_places' , compact('map_places'));

    }





        public function create()
    {

          return view('REWASH.map_places.map_place_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'place_id' => 'required',

       'description' => 'required',]);
    $map_place = new Map_place ();

         $map_place->place_id = $request->place_id;
  $map_place->description = $request->description;


    $save = $map_place->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('map_places.show', $map_place->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:map_places,id',]);

    $map_place = Map_place::find($id);
    $next = Map_place::where('id','>',$id)->min('id');
    $previous = Map_place::where('id','<',$id)->max('id');
       return view('REWASH.map_places.map_place_view')
        ->with('map_place',$map_place)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $map_place = Map_place::find($id); 

      $map_place->place_id = $request->place_id;
  $map_place->description = $request->description;

    $update = $map_place->update();

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
    $model = Map_place::find($id);

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
