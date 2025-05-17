<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Vehicle_modal;
use App\Models\REWASH\Vehicle_company;



class Vehicle_modalController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$vehicle_modals = \App\Models\REWASH\Vehicle_modal::get();

$vehicle_companies = \App\Models\REWASH\Vehicle_company::get();
   
   $data = $request->all();


  $vehicle_modals = Vehicle_modal::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['vehicle_modal']) &&  $data['vehicle_modal'] != null ){
                   $query->where('vehicle_modal' , 'like'  , '%' .$data['vehicle_modal']. '%' );   
               }

                
  if(isset($data['vehicle_en_modal']) &&  $data['vehicle_en_modal'] != null ){
                   $query->where('vehicle_en_modal' , 'like'  , '%' .$data['vehicle_en_modal']. '%' );   
               }

                     if(isset($data['vehicle_company_id']) && $data['vehicle_company_id'] != 'all' ){
            
                 $query->where('vehicle_company_id' , $data['vehicle_company_id']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.vehicle_modals.vehicle_modals')

->with('vehicle_modals',$vehicle_modals)
->with('vehicle_companies',$vehicle_companies)
;

//searchfun


                        return view('REWASH.vehicle_modals.vehicle_modals' , compact('vehicle_modals'));

    }






        public function create()
    {

   $vehicle_companies = Vehicle_company::all();
       return view('REWASH.vehicle_modals.vehicle_modal_add')->with('vehicle_companies' , $vehicle_companies)

       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'vehicle_modal' => 'required',

       'vehicle_en_modal' => 'required',

       'vehicle_company_id' => 'required',]);
    $vehicle_modal = new Vehicle_modal ();

         $vehicle_modal->branch_id = $request->branch_id;
  $vehicle_modal->vehicle_modal = $request->vehicle_modal;
  $vehicle_modal->vehicle_en_modal = $request->vehicle_en_modal;
  $vehicle_modal->vehicle_company_id = $request->vehicle_company_id;


    $save = $vehicle_modal->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('vehicle_modals.show', $vehicle_modal->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:vehicle_modals,id',]);

    $vehicle_modal = Vehicle_modal::find($id);
    $next = Vehicle_modal::where('id','>',$id)->min('id');
    $previous = Vehicle_modal::where('id','<',$id)->max('id');
$vehicle_companies = Vehicle_company::all();
       return view('REWASH.vehicle_modals.vehicle_modal_view')
        ->with('vehicle_modal',$vehicle_modal)
        ->with('next',$next)
        ->with('previous',$previous)->with('vehicle_companies' , $vehicle_companies)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $vehicle_modal = Vehicle_modal::find($id); 

      $vehicle_modal->branch_id = $request->branch_id;
  $vehicle_modal->vehicle_modal = $request->vehicle_modal;
  $vehicle_modal->vehicle_en_modal = $request->vehicle_en_modal;
  $vehicle_modal->vehicle_company_id = $request->vehicle_company_id;

    $update = $vehicle_modal->update();

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
    $model = Vehicle_modal::find($id);

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
