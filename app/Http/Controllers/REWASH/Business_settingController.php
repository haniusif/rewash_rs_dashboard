<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Business_setting;



class Business_settingController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$business_settings = \App\Models\REWASH\Business_setting::get();
   
   $data = $request->all();


  $business_settings = Business_setting::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['key']) &&  $data['key'] != null ){
                   $query->where('key' , 'like'  , '%' .$data['key']. '%' );   
               }

                
  if(isset($data['value']) &&  $data['value'] != null ){
                   $query->where('value' , 'like'  , '%' .$data['value']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.business_settings.business_settings')

->with('business_settings',$business_settings)
;

//searchfun


                        return view('REWASH.business_settings.business_settings' , compact('business_settings'));

    }





        public function create()
    {

          return view('REWASH.business_settings.business_setting_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'key' => 'required',

       'value' => 'required',]);
    $business_setting = new Business_setting ();

         $business_setting->key = $request->key;
  $business_setting->value = $request->value;


    $save = $business_setting->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('business_settings.show', $business_setting->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:business_settings,id',]);

    $business_setting = Business_setting::find($id);
    $next = Business_setting::where('id','>',$id)->min('id');
    $previous = Business_setting::where('id','<',$id)->max('id');
       return view('REWASH.business_settings.business_setting_view')
        ->with('business_setting',$business_setting)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $business_setting = Business_setting::find($id); 

      $business_setting->key = $request->key;
  $business_setting->value = $request->value;

    $update = $business_setting->update();

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
    $model = Business_setting::find($id);

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
