<?php

namespace App\Http\Controllers\RRS;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\RRS\User;



class UserController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$users = \App\Models\RRS\User::get();
   
   $data = $request->all();


  $users = User::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['email']) &&  $data['email'] != null ){
                   $query->where('email' , 'like'  , '%' .$data['email']. '%' );   
               }

                
  if(isset($data['two_factor_confirmed_at']) &&  $data['two_factor_confirmed_at'] != null ){
                   $query->where('two_factor_confirmed_at' , 'like'  , '%' .$data['two_factor_confirmed_at']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('RRS.users.users')

->with('users',$users)
;

//searchfun


                        return view('RRS.users.users' , compact('users'));

    }





        public function create()
    {

          return view('RRS.users.user_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'email' => 'required',

       'password' => 'required',

       'two_factor_confirmed_at' => 'required',]);
    $user = new User ();

         $user->name = $request->name;
  $user->email = $request->email;
  $user->two_factor_confirmed_at = $request->two_factor_confirmed_at;


    $save = $user->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('users.show', $user->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:users,id',]);

    $user = User::find($id);
    $next = User::where('id','>',$id)->min('id');
    $previous = User::where('id','<',$id)->max('id');
       return view('RRS.users.user_view')
        ->with('user',$user)
        ->with('next',$next)
        ->with('previous',$previous)            ;

     }

    public function my_profile()
    {
     // $user = User::find($id);
       $user = Auth::user();

       return view('RRS.users.my_profile')
        ->with('user',$user)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $user = User::find($id); 

      $user->name = $request->name;
  $user->email = $request->email;
  $user->two_factor_confirmed_at = $request->two_factor_confirmed_at;

    $update = $user->update();

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
    $model = User::find($id);

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
