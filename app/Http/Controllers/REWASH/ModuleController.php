<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Module;



class ModuleController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$modules = \App\Models\REWASH\Module::get();
   
   $data = $request->all();


  $modules = Module::orderby('id','DESC')

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

                
  if(isset($data['route']) &&  $data['route'] != null ){
                   $query->where('route' , 'like'  , '%' .$data['route']. '%' );   
               }

                
  if(isset($data['image']) &&  $data['image'] != null ){
                   $query->where('image' , 'like'  , '%' .$data['image']. '%' );   
               }

                
  if(isset($data['icon']) &&  $data['icon'] != null ){
                   $query->where('icon' , 'like'  , '%' .$data['icon']. '%' );   
               }

                
  if(isset($data['parent_id']) &&  $data['parent_id'] != null ){
                   $query->where('parent_id' , 'like'  , '%' .$data['parent_id']. '%' );   
               }

                
  if(isset($data['user_type_ids']) &&  $data['user_type_ids'] != null ){
                   $query->where('user_type_ids' , 'like'  , '%' .$data['user_type_ids']. '%' );   
               }

                
  if(isset($data['app_type']) &&  $data['app_type'] != null ){
                   $query->where('app_type' , 'like'  , '%' .$data['app_type']. '%' );   
               }

                
  if(isset($data['sorting']) &&  $data['sorting'] != null ){
                   $query->where('sorting' , 'like'  , '%' .$data['sorting']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.modules.modules')

->with('modules',$modules)
;

//searchfun


                        return view('REWASH.modules.modules' , compact('modules'));

    }





        public function create()
    {

          return view('REWASH.modules.module_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',

       'route' => 'required',

       'image' => 'required',

       'icon' => 'required',

       'parent_id' => 'required',

       'user_type_ids' => 'required',

       'app_type' => 'required',

       'sorting' => 'required',]);
    $module = new Module ();

         $module->branch_id = $request->branch_id;
  $module->name = $request->name;
  $module->en_name = $request->en_name;
  $module->route = $request->route;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/modules';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $module->image = '/'.$destinationPath."/".$fileName;

      }}
  $module->icon = $request->icon;
  $module->parent_id = $request->parent_id;
  $module->user_type_ids = $request->user_type_ids;
  $module->app_type = $request->app_type;
  $module->sorting = $request->sorting;
  $module->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $module->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('modules.show', $module->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:modules,id',]);

    $module = Module::find($id);
    $next = Module::where('id','>',$id)->min('id');
    $previous = Module::where('id','<',$id)->max('id');
       return view('REWASH.modules.module_view')
        ->with('module',$module)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $module = Module::find($id); 

      $module->branch_id = $request->branch_id;
  $module->name = $request->name;
  $module->en_name = $request->en_name;
  $module->route = $request->route;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/modules';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $module->image = '/'.$destinationPath."/".$fileName;

      }}
  $module->icon = $request->icon;
  $module->parent_id = $request->parent_id;
  $module->user_type_ids = $request->user_type_ids;
  $module->app_type = $request->app_type;
  $module->sorting = $request->sorting;
  $module->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $module->update();

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
    $model = Module::find($id);

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
