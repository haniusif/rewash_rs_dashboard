<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Washing_plan_service;



class Washing_plan_serviceController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$washing_plan_services = \App\Models\REWASH\Washing_plan_service::get();
   
   $data = $request->all();


  $washing_plan_services = Washing_plan_service::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['en_name']) &&  $data['en_name'] != null ){
                   $query->where('en_name' , 'like'  , '%' .$data['en_name']. '%' );   
               }

                
  if(isset($data['washing_plan_id']) &&  $data['washing_plan_id'] != null ){
                   $query->where('washing_plan_id' , 'like'  , '%' .$data['washing_plan_id']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.washing_plan_services.washing_plan_services')

->with('washing_plan_services',$washing_plan_services)
;

//searchfun


                        return view('REWASH.washing_plan_services.washing_plan_services' , compact('washing_plan_services'));

    }





        public function create()
    {

          return view('REWASH.washing_plan_services.washing_plan_service_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',

       'washing_plan_id' => 'required',]);
    $washing_plan_service = new Washing_plan_service ();

         $washing_plan_service->name = $request->name;
  $washing_plan_service->en_name = $request->en_name;
  $washing_plan_service->washing_plan_id = $request->washing_plan_id;


    $save = $washing_plan_service->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('washing_plan_services.show', $washing_plan_service->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:washing_plan_services,id',]);

    $washing_plan_service = Washing_plan_service::find($id);
    $next = Washing_plan_service::where('id','>',$id)->min('id');
    $previous = Washing_plan_service::where('id','<',$id)->max('id');
       return view('REWASH.washing_plan_services.washing_plan_service_view')
        ->with('washing_plan_service',$washing_plan_service)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $washing_plan_service = Washing_plan_service::find($id); 

      $washing_plan_service->name = $request->name;
  $washing_plan_service->en_name = $request->en_name;
  $washing_plan_service->washing_plan_id = $request->washing_plan_id;

    $update = $washing_plan_service->update();

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
    $model = Washing_plan_service::find($id);

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
