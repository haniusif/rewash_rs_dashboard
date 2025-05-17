<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Web_appointment;



class Web_appointmentController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$web_appointments = \App\Models\REWASH\Web_appointment::get();
   
   $data = $request->all();


  $web_appointments = Web_appointment::orderby('id','DESC')

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

                
  if(isset($data['phone_number']) &&  $data['phone_number'] != null ){
                   $query->where('phone_number' , 'like'  , '%' .$data['phone_number']. '%' );   
               }

                
  if(isset($data['email']) &&  $data['email'] != null ){
                   $query->where('email' , 'like'  , '%' .$data['email']. '%' );   
               }

                
  if(isset($data['neighborhood']) &&  $data['neighborhood'] != null ){
                   $query->where('neighborhood' , 'like'  , '%' .$data['neighborhood']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['ip']) &&  $data['ip'] != null ){
                   $query->where('ip' , 'like'  , '%' .$data['ip']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.web_appointments.web_appointments')

->with('web_appointments',$web_appointments)
;

//searchfun


                        return view('REWASH.web_appointments.web_appointments' , compact('web_appointments'));

    }





        public function create()
    {

          return view('REWASH.web_appointments.web_appointment_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'phone_number' => 'required',

       'email' => 'required',

       'neighborhood' => 'required',

       'ip' => 'required',]);
    $web_appointment = new Web_appointment ();

         $web_appointment->branch_id = $request->branch_id;
  $web_appointment->name = $request->name;
  $web_appointment->phone_number = $request->phone_number;
  $web_appointment->email = $request->email;
  $web_appointment->neighborhood = $request->neighborhood;
  $web_appointment->ip = $request->ip;


    $save = $web_appointment->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('web_appointments.show', $web_appointment->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:web_appointments,id',]);

    $web_appointment = Web_appointment::find($id);
    $next = Web_appointment::where('id','>',$id)->min('id');
    $previous = Web_appointment::where('id','<',$id)->max('id');
       return view('REWASH.web_appointments.web_appointment_view')
        ->with('web_appointment',$web_appointment)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $web_appointment = Web_appointment::find($id); 

      $web_appointment->branch_id = $request->branch_id;
  $web_appointment->name = $request->name;
  $web_appointment->phone_number = $request->phone_number;
  $web_appointment->email = $request->email;
  $web_appointment->neighborhood = $request->neighborhood;
  $web_appointment->ip = $request->ip;

    $update = $web_appointment->update();

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
    $model = Web_appointment::find($id);

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
