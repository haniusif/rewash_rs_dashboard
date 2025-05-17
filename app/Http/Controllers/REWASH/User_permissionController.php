<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\User_permission;



class User_permissionController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$user_permissions = \App\Models\REWASH\User_permission::get();
   
   $data = $request->all();


  $user_permissions = User_permission::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['permission_id']) &&  $data['permission_id'] != null ){
                   $query->where('permission_id' , 'like'  , '%' .$data['permission_id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['is_active']) &&  $data['is_active'] != null ){
                   $query->where('is_active' , 'like'  , '%' .$data['is_active']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.user_permissions.user_permissions')

->with('user_permissions',$user_permissions)
;

//searchfun


                        return view('REWASH.user_permissions.user_permissions' , compact('user_permissions'));

    }





        public function create()
    {

          return view('REWASH.user_permissions.user_permission_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'permission_id' => 'required',

       'user_id' => 'required',]);
    $user_permission = new User_permission ();

         $user_permission->permission_id = $request->permission_id;
  $user_permission->user_id = $request->user_id;
  $user_permission->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $user_permission->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('user_permissions.show', $user_permission->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:user_permissions,id',]);

    $user_permission = User_permission::find($id);
    $next = User_permission::where('id','>',$id)->min('id');
    $previous = User_permission::where('id','<',$id)->max('id');
       return view('REWASH.user_permissions.user_permission_view')
        ->with('user_permission',$user_permission)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $user_permission = User_permission::find($id); 

      $user_permission->permission_id = $request->permission_id;
  $user_permission->user_id = $request->user_id;
  $user_permission->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $user_permission->update();

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
    $model = User_permission::find($id);

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
