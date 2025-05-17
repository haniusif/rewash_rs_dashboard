<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\User_apps_appointment;



class User_apps_appointmentController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$user_apps_appointments = \App\Models\REWASH\User_apps_appointment::get();
   
   $data = $request->all();


  $user_apps_appointments = User_apps_appointment::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['mobile']) &&  $data['mobile'] != null ){
                   $query->where('mobile' , 'like'  , '%' .$data['mobile']. '%' );   
               }

                
  if(isset($data['zone_name']) &&  $data['zone_name'] != null ){
                   $query->where('zone_name' , 'like'  , '%' .$data['zone_name']. '%' );   
               }

                
  if(isset($data['number_of_appointments']) &&  $data['number_of_appointments'] != null ){
                   $query->where('number_of_appointments' , 'like'  , '%' .$data['number_of_appointments']. '%' );   
               }

                
  if(isset($data['last_appointment_date']) &&  $data['last_appointment_date'] != null ){
                   $query->where('last_appointment_date' , 'like'  , '%' .$data['last_appointment_date']. '%' );   
               }

                
  if(isset($data['actual_balance']) &&  $data['actual_balance'] != null ){
                   $query->where('actual_balance' , 'like'  , '%' .$data['actual_balance']. '%' );   
               }

                
  if(isset($data['loyalty_points']) &&  $data['loyalty_points'] != null ){
                   $query->where('loyalty_points' , 'like'  , '%' .$data['loyalty_points']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.user_apps_appointments.user_apps_appointments')

->with('user_apps_appointments',$user_apps_appointments)
;

//searchfun


                        return view('REWASH.user_apps_appointments.user_apps_appointments' , compact('user_apps_appointments'));

    }





        public function create()
    {

          return view('REWASH.user_apps_appointments.user_apps_appointment_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'mobile' => 'required',

       'zone_name' => 'required',

       'number_of_appointments' => 'required',

       'last_appointment_date' => 'required',

       'actual_balance' => 'required',

       'loyalty_points' => 'required',]);
    $user_apps_appointment = new User_apps_appointment ();

         $user_apps_appointment->name = $request->name;
  $user_apps_appointment->mobile = $request->mobile;
  $user_apps_appointment->zone_name = $request->zone_name;
  $user_apps_appointment->number_of_appointments = $request->number_of_appointments;
  $user_apps_appointment->last_appointment_date = $request->last_appointment_date;
  $user_apps_appointment->actual_balance = $request->actual_balance;
  $user_apps_appointment->loyalty_points = $request->loyalty_points;


    $save = $user_apps_appointment->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('user_apps_appointments.show', $user_apps_appointment->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:user_apps_appointments,id',]);

    $user_apps_appointment = User_apps_appointment::find($id);
    $next = User_apps_appointment::where('id','>',$id)->min('id');
    $previous = User_apps_appointment::where('id','<',$id)->max('id');
       return view('REWASH.user_apps_appointments.user_apps_appointment_view')
        ->with('user_apps_appointment',$user_apps_appointment)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $user_apps_appointment = User_apps_appointment::find($id); 

      $user_apps_appointment->name = $request->name;
  $user_apps_appointment->mobile = $request->mobile;
  $user_apps_appointment->zone_name = $request->zone_name;
  $user_apps_appointment->number_of_appointments = $request->number_of_appointments;
  $user_apps_appointment->last_appointment_date = $request->last_appointment_date;
  $user_apps_appointment->actual_balance = $request->actual_balance;
  $user_apps_appointment->loyalty_points = $request->loyalty_points;

    $update = $user_apps_appointment->update();

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
    $model = User_apps_appointment::find($id);

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
