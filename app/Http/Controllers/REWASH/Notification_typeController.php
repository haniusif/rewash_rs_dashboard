<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Notification_type;



class Notification_typeController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$notification_types = \App\Models\REWASH\Notification_type::get();
   
   $data = $request->all();


  $notification_types = Notification_type::orderby('id','DESC')

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

                
 
 })
  ->paginate(50);

return view('REWASH.notification_types.notification_types')

->with('notification_types',$notification_types)
;

//searchfun


                        return view('REWASH.notification_types.notification_types' , compact('notification_types'));

    }





        public function create()
    {

          return view('REWASH.notification_types.notification_type_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',]);
    $notification_type = new Notification_type ();

         $notification_type->branch_id = $request->branch_id;
  $notification_type->name = $request->name;
  $notification_type->en_name = $request->en_name;


    $save = $notification_type->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('notification_types.show', $notification_type->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:notification_types,id',]);

    $notification_type = Notification_type::find($id);
    $next = Notification_type::where('id','>',$id)->min('id');
    $previous = Notification_type::where('id','<',$id)->max('id');
       return view('REWASH.notification_types.notification_type_view')
        ->with('notification_type',$notification_type)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $notification_type = Notification_type::find($id); 

      $notification_type->branch_id = $request->branch_id;
  $notification_type->name = $request->name;
  $notification_type->en_name = $request->en_name;

    $update = $notification_type->update();

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
    $model = Notification_type::find($id);

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
