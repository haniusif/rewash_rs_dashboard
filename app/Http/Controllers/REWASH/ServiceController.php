<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Service;



class ServiceController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$services = \App\Models\REWASH\Service::get();
   
   $data = $request->all();


  $services = Service::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['icon']) &&  $data['icon'] != null ){
                   $query->where('icon' , 'like'  , '%' .$data['icon']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
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

return view('REWASH.services.services')

->with('services',$services)
;

//searchfun


                        return view('REWASH.services.services' , compact('services'));

    }





        public function create()
    {

          return view('REWASH.services.service_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'icon' => 'required',

       'name' => 'required',

       'description' => 'required',]);
    $service = new Service ();

         $service->branch_id = $request->branch_id;
  $service->icon = $request->icon;
  $service->name = $request->name;
  $service->description = $request->description;


    $save = $service->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('services.show', $service->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:services,id',]);

    $service = Service::find($id);
    $next = Service::where('id','>',$id)->min('id');
    $previous = Service::where('id','<',$id)->max('id');
       return view('REWASH.services.service_view')
        ->with('service',$service)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $service = Service::find($id); 

      $service->branch_id = $request->branch_id;
  $service->icon = $request->icon;
  $service->name = $request->name;
  $service->description = $request->description;

    $update = $service->update();

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
    $model = Service::find($id);

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
