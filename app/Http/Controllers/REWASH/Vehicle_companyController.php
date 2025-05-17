<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Vehicle_company;



class Vehicle_companyController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$vehicle_companies = \App\Models\REWASH\Vehicle_company::get();
   
   $data = $request->all();


  $vehicle_companies = Vehicle_company::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['vehicle_company']) &&  $data['vehicle_company'] != null ){
                   $query->where('vehicle_company' , 'like'  , '%' .$data['vehicle_company']. '%' );   
               }

                
  if(isset($data['vehicle_en_company']) &&  $data['vehicle_en_company'] != null ){
                   $query->where('vehicle_en_company' , 'like'  , '%' .$data['vehicle_en_company']. '%' );   
               }

                
  if(isset($data['logo']) &&  $data['logo'] != null ){
                   $query->where('logo' , 'like'  , '%' .$data['logo']. '%' );   
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

return view('REWASH.vehicle_companies.vehicle_companies')

->with('vehicle_companies',$vehicle_companies)
;

//searchfun


                        return view('REWASH.vehicle_companies.vehicle_companies' , compact('vehicle_companies'));

    }





        public function create()
    {

          return view('REWASH.vehicle_companies.vehicle_company_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'vehicle_company' => 'required',

       'vehicle_en_company' => 'required',

       'logo' => 'required',

       'sort' => 'required',]);
    $vehicle_company = new Vehicle_company ();

         $vehicle_company->branch_id = $request->branch_id;
  $vehicle_company->vehicle_company = $request->vehicle_company;
  $vehicle_company->vehicle_en_company = $request->vehicle_en_company;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/vehicle_companies';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $vehicle_company->logo = '/'.$destinationPath."/".$fileName;

      }}
  $vehicle_company->sort = $request->sort;
  $vehicle_company->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $vehicle_company->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('vehicle_companies.show', $vehicle_company->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:vehicle_companies,id',]);

    $vehicle_company = Vehicle_company::find($id);
    $next = Vehicle_company::where('id','>',$id)->min('id');
    $previous = Vehicle_company::where('id','<',$id)->max('id');
       return view('REWASH.vehicle_companies.vehicle_company_view')
        ->with('vehicle_company',$vehicle_company)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $vehicle_company = Vehicle_company::find($id); 

      $vehicle_company->branch_id = $request->branch_id;
  $vehicle_company->vehicle_company = $request->vehicle_company;
  $vehicle_company->vehicle_en_company = $request->vehicle_en_company;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/vehicle_companies';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $vehicle_company->logo = '/'.$destinationPath."/".$fileName;

      }}
  $vehicle_company->sort = $request->sort;
  $vehicle_company->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $vehicle_company->update();

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
    $model = Vehicle_company::find($id);

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
