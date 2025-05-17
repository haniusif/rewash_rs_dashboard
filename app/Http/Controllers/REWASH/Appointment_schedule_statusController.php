<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Appointment_schedule_status;



class Appointment_schedule_statusController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$appointment_schedule_statuses = \App\Models\REWASH\Appointment_schedule_status::get();
   
   $data = $request->all();


  $appointment_schedule_statuses = Appointment_schedule_status::orderby('id','DESC')

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

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['color_code']) &&  $data['color_code'] != null ){
                   $query->where('color_code' , 'like'  , '%' .$data['color_code']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.appointment_schedule_statuses.appointment_schedule_statuses')

->with('appointment_schedule_statuses',$appointment_schedule_statuses)
;

//searchfun


                        return view('REWASH.appointment_schedule_statuses.appointment_schedule_statuses' , compact('appointment_schedule_statuses'));

    }





        public function create()
    {

          return view('REWASH.appointment_schedule_statuses.appointment_schedule_status_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',

       'color_code' => 'required',]);
    $appointment_schedule_status = new Appointment_schedule_status ();

         $appointment_schedule_status->branch_id = $request->branch_id;
  $appointment_schedule_status->name = $request->name;
  $appointment_schedule_status->en_name = $request->en_name;
  $appointment_schedule_status->color_code = $request->color_code;


    $save = $appointment_schedule_status->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('appointment_schedule_statuses.show', $appointment_schedule_status->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:appointment_schedule_statuses,id',]);

    $appointment_schedule_status = Appointment_schedule_status::find($id);
    $next = Appointment_schedule_status::where('id','>',$id)->min('id');
    $previous = Appointment_schedule_status::where('id','<',$id)->max('id');
       return view('REWASH.appointment_schedule_statuses.appointment_schedule_status_view')
        ->with('appointment_schedule_status',$appointment_schedule_status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $appointment_schedule_status = Appointment_schedule_status::find($id); 

      $appointment_schedule_status->branch_id = $request->branch_id;
  $appointment_schedule_status->name = $request->name;
  $appointment_schedule_status->en_name = $request->en_name;
  $appointment_schedule_status->color_code = $request->color_code;

    $update = $appointment_schedule_status->update();

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
    $model = Appointment_schedule_status::find($id);

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
