<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Role;



class RoleController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$roles = \App\Models\REWASH\Role::get();
   
   $data = $request->all();


  $roles = Role::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['guard_name']) &&  $data['guard_name'] != null ){
                   $query->where('guard_name' , 'like'  , '%' .$data['guard_name']. '%' );   
               }

                     if(isset($data['default']) && $data['default'] != 'all' ){
            
                 $query->where('default' , $data['default']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.roles.roles')

->with('roles',$roles)
;

//searchfun


                        return view('REWASH.roles.roles' , compact('roles'));

    }





        public function create()
    {

          return view('REWASH.roles.role_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'guard_name' => 'required',

       'default' => 'required',]);
    $role = new Role ();

         $role->name = $request->name;
  $role->guard_name = $request->guard_name;
  $role->default = $request->default;


    $save = $role->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('roles.show', $role->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:roles,id',]);

    $role = Role::find($id);
    $next = Role::where('id','>',$id)->min('id');
    $previous = Role::where('id','<',$id)->max('id');
       return view('REWASH.roles.role_view')
        ->with('role',$role)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $role = Role::find($id); 

      $role->name = $request->name;
  $role->guard_name = $request->guard_name;
  $role->default = $request->default;

    $update = $role->update();

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
    $model = Role::find($id);

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
