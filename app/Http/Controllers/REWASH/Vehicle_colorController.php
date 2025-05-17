<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Vehicle_color;



class Vehicle_colorController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$vehicle_colors = \App\Models\REWASH\Vehicle_color::get();
   
   $data = $request->all();


  $vehicle_colors = Vehicle_color::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['vehicle_color']) &&  $data['vehicle_color'] != null ){
                   $query->where('vehicle_color' , 'like'  , '%' .$data['vehicle_color']. '%' );   
               }

                
  if(isset($data['vehicle_en_color']) &&  $data['vehicle_en_color'] != null ){
                   $query->where('vehicle_en_color' , 'like'  , '%' .$data['vehicle_en_color']. '%' );   
               }

                
  if(isset($data['vehicle_color_code']) &&  $data['vehicle_color_code'] != null ){
                   $query->where('vehicle_color_code' , 'like'  , '%' .$data['vehicle_color_code']. '%' );   
               }

                
  if(isset($data['sort']) &&  $data['sort'] != null ){
                   $query->where('sort' , 'like'  , '%' .$data['sort']. '%' );   
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

return view('REWASH.vehicle_colors.vehicle_colors')

->with('vehicle_colors',$vehicle_colors)
;

//searchfun


                        return view('REWASH.vehicle_colors.vehicle_colors' , compact('vehicle_colors'));

    }





        public function create()
    {

          return view('REWASH.vehicle_colors.vehicle_color_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'vehicle_color' => 'required',

       'vehicle_en_color' => 'required',

       'vehicle_color_code' => 'required',

       'sort' => 'required',]);
    $vehicle_color = new Vehicle_color ();

         $vehicle_color->branch_id = $request->branch_id;
  $vehicle_color->vehicle_color = $request->vehicle_color;
  $vehicle_color->vehicle_en_color = $request->vehicle_en_color;
  $vehicle_color->vehicle_color_code = $request->vehicle_color_code;
  $vehicle_color->sort = $request->sort;
  $vehicle_color->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $vehicle_color->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('vehicle_colors.show', $vehicle_color->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:vehicle_colors,id',]);

    $vehicle_color = Vehicle_color::find($id);
    $next = Vehicle_color::where('id','>',$id)->min('id');
    $previous = Vehicle_color::where('id','<',$id)->max('id');
       return view('REWASH.vehicle_colors.vehicle_color_view')
        ->with('vehicle_color',$vehicle_color)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $vehicle_color = Vehicle_color::find($id); 

      $vehicle_color->branch_id = $request->branch_id;
  $vehicle_color->vehicle_color = $request->vehicle_color;
  $vehicle_color->vehicle_en_color = $request->vehicle_en_color;
  $vehicle_color->vehicle_color_code = $request->vehicle_color_code;
  $vehicle_color->sort = $request->sort;
  $vehicle_color->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $vehicle_color->update();

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
    $model = Vehicle_color::find($id);

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
