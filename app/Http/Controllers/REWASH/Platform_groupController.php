<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Platform_group;



class Platform_groupController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$platform_groups = \App\Models\REWASH\Platform_group::get();
   
   $data = $request->all();


  $platform_groups = Platform_group::orderby('id','DESC')

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

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.platform_groups.platform_groups')

->with('platform_groups',$platform_groups)
;

//searchfun


                        return view('REWASH.platform_groups.platform_groups' , compact('platform_groups'));

    }





        public function create()
    {

          return view('REWASH.platform_groups.platform_group_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',]);
    $platform_group = new Platform_group ();

         $platform_group->name = $request->name;
  $platform_group->en_name = $request->en_name;


    $save = $platform_group->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('platform_groups.show', $platform_group->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:platform_groups,id',]);

    $platform_group = Platform_group::find($id);
    $next = Platform_group::where('id','>',$id)->min('id');
    $previous = Platform_group::where('id','<',$id)->max('id');
       return view('REWASH.platform_groups.platform_group_view')
        ->with('platform_group',$platform_group)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $platform_group = Platform_group::find($id); 

      $platform_group->name = $request->name;
  $platform_group->en_name = $request->en_name;

    $update = $platform_group->update();

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
    $model = Platform_group::find($id);

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
