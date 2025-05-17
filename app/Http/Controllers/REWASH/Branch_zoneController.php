<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Branch_zone;



class Branch_zoneController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$branch_zones = \App\Models\REWASH\Branch_zone::get();
   
   $data = $request->all();


  $branch_zones = Branch_zone::orderby('id','DESC')

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

                
  if(isset($data['is_active']) &&  $data['is_active'] != null ){
                   $query->where('is_active' , 'like'  , '%' .$data['is_active']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.branch_zones.branch_zones')

->with('branch_zones',$branch_zones)
;

//searchfun


                        return view('REWASH.branch_zones.branch_zones' , compact('branch_zones'));

    }





        public function create()
    {

          return view('REWASH.branch_zones.branch_zone_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'zone_id' => 'required',]);
    $branch_zone = new Branch_zone ();

         $branch_zone->branch_id = $request->branch_id;
  $branch_zone->zone_id = $request->zone_id;
  $branch_zone->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $branch_zone->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('branch_zones.show', $branch_zone->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:branch_zones,id',]);

    $branch_zone = Branch_zone::find($id);
    $next = Branch_zone::where('id','>',$id)->min('id');
    $previous = Branch_zone::where('id','<',$id)->max('id');
       return view('REWASH.branch_zones.branch_zone_view')
        ->with('branch_zone',$branch_zone)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $branch_zone = Branch_zone::find($id); 

      $branch_zone->branch_id = $request->branch_id;
  $branch_zone->zone_id = $request->zone_id;
  $branch_zone->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $branch_zone->update();

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
    $model = Branch_zone::find($id);

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
