<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Mismarapp_status;



class Mismarapp_statusController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$mismarapp_statuses = \App\Models\REWASH\Mismarapp_status::get();
   
   $data = $request->all();


  $mismarapp_statuses = Mismarapp_status::orderby('id','DESC')

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

return view('REWASH.mismarapp_statuses.mismarapp_statuses')

->with('mismarapp_statuses',$mismarapp_statuses)
;

//searchfun


                        return view('REWASH.mismarapp_statuses.mismarapp_statuses' , compact('mismarapp_statuses'));

    }





        public function create()
    {

          return view('REWASH.mismarapp_statuses.mismarapp_status_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',

       'sorting' => 'required',]);
    $mismarapp_status = new Mismarapp_status ();

         $mismarapp_status->name = $request->name;
  $mismarapp_status->en_name = $request->en_name;
  $mismarapp_status->sorting = $request->sorting;
  $mismarapp_status->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $mismarapp_status->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('mismarapp_statuses.show', $mismarapp_status->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:mismarapp_statuses,id',]);

    $mismarapp_status = Mismarapp_status::find($id);
    $next = Mismarapp_status::where('id','>',$id)->min('id');
    $previous = Mismarapp_status::where('id','<',$id)->max('id');
       return view('REWASH.mismarapp_statuses.mismarapp_status_view')
        ->with('mismarapp_status',$mismarapp_status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $mismarapp_status = Mismarapp_status::find($id); 

      $mismarapp_status->name = $request->name;
  $mismarapp_status->en_name = $request->en_name;
  $mismarapp_status->sorting = $request->sorting;
  $mismarapp_status->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $mismarapp_status->update();

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
    $model = Mismarapp_status::find($id);

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
