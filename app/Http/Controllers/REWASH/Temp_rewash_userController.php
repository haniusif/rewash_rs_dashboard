<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Temp_rewash_user;



class Temp_rewash_userController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$temp_rewash_users = \App\Models\REWASH\Temp_rewash_user::get();
   
   $data = $request->all();


  $temp_rewash_users = Temp_rewash_user::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['mobile']) &&  $data['mobile'] != null ){
                   $query->where('mobile' , 'like'  , '%' .$data['mobile']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.temp_rewash_users.temp_rewash_users')

->with('temp_rewash_users',$temp_rewash_users)
;

//searchfun


                        return view('REWASH.temp_rewash_users.temp_rewash_users' , compact('temp_rewash_users'));

    }





        public function create()
    {

          return view('REWASH.temp_rewash_users.temp_rewash_user_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'mobile' => 'required',]);
    $temp_rewash_user = new Temp_rewash_user ();

         $temp_rewash_user->name = $request->name;
  $temp_rewash_user->mobile = $request->mobile;


    $save = $temp_rewash_user->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('temp_rewash_users.show', $temp_rewash_user->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:temp_rewash_users,id',]);

    $temp_rewash_user = Temp_rewash_user::find($id);
    $next = Temp_rewash_user::where('id','>',$id)->min('id');
    $previous = Temp_rewash_user::where('id','<',$id)->max('id');
       return view('REWASH.temp_rewash_users.temp_rewash_user_view')
        ->with('temp_rewash_user',$temp_rewash_user)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $temp_rewash_user = Temp_rewash_user::find($id); 

      $temp_rewash_user->name = $request->name;
  $temp_rewash_user->mobile = $request->mobile;

    $update = $temp_rewash_user->update();

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
    $model = Temp_rewash_user::find($id);

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
