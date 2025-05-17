<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Appointment_user;
use App\Models\REWASH\Appointment;
use App\Models\REWASH\User;



class Appointment_userController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$appointment_users = \App\Models\REWASH\Appointment_user::get();

$users = \App\Models\REWASH\User::get();

$appointments = \App\Models\REWASH\Appointment::get();
   
   $data = $request->all();


  $appointment_users = Appointment_user::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                     if(isset($data['user_id']) && $data['user_id'] != 'all' ){
            
                 $query->where('user_id' , $data['user_id']);   
            }
      if(isset($data['appointment_id']) && $data['appointment_id'] != 'all' ){
            
                 $query->where('appointment_id' , $data['appointment_id']);   
            }
 
  if(isset($data['discount']) &&  $data['discount'] != null ){
                   $query->where('discount' , 'like'  , '%' .$data['discount']. '%' );   
               }

                
  if(isset($data['advance']) &&  $data['advance'] != null ){
                   $query->where('advance' , 'like'  , '%' .$data['advance']. '%' );   
               }

                
  if(isset($data['payment_method_id']) &&  $data['payment_method_id'] != null ){
                   $query->where('payment_method_id' , 'like'  , '%' .$data['payment_method_id']. '%' );   
               }

                
  if(isset($data['remark']) &&  $data['remark'] != null ){
                   $query->where('remark' , 'like'  , '%' .$data['remark']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.appointment_users.appointment_users')

->with('appointment_users',$appointment_users)
->with('users',$users)
->with('appointments',$appointments)
;

//searchfun


                        return view('REWASH.appointment_users.appointment_users' , compact('appointment_users'));

    }







        public function create()
    {

   $appointments = Appointment::all();
$users = User::all();
       return view('REWASH.appointment_users.appointment_user_add')->with('appointments' , $appointments)
->with('users' , $users)

       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'user_id' => 'required',

       'appointment_id' => 'required',

       'discount' => 'required',

       'advance' => 'required',

       'payment_method_id' => 'required',

       'remark' => 'required',]);
    $appointment_user = new Appointment_user ();

         $appointment_user->branch_id = $request->branch_id;
  $appointment_user->user_id = $request->user_id;
  $appointment_user->appointment_id = $request->appointment_id;
  $appointment_user->discount = $request->discount;
  $appointment_user->advance = $request->advance;
  $appointment_user->payment_method_id = $request->payment_method_id;
  $appointment_user->remark = $request->remark;


    $save = $appointment_user->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('appointment_users.show', $appointment_user->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:appointment_users,id',]);

    $appointment_user = Appointment_user::find($id);
    $next = Appointment_user::where('id','>',$id)->min('id');
    $previous = Appointment_user::where('id','<',$id)->max('id');
$appointments = Appointment::all();
$users = User::all();
       return view('REWASH.appointment_users.appointment_user_view')
        ->with('appointment_user',$appointment_user)
        ->with('next',$next)
        ->with('previous',$previous)->with('appointments' , $appointments)
->with('users' , $users)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $appointment_user = Appointment_user::find($id); 

      $appointment_user->branch_id = $request->branch_id;
  $appointment_user->user_id = $request->user_id;
  $appointment_user->appointment_id = $request->appointment_id;
  $appointment_user->discount = $request->discount;
  $appointment_user->advance = $request->advance;
  $appointment_user->payment_method_id = $request->payment_method_id;
  $appointment_user->remark = $request->remark;

    $update = $appointment_user->update();

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
    $model = Appointment_user::find($id);

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
