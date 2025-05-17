<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Referral_code;



class Referral_codeController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$referral_codes = \App\Models\REWASH\Referral_code::get();
   
   $data = $request->all();


  $referral_codes = Referral_code::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['uses_count']) &&  $data['uses_count'] != null ){
                   $query->where('uses_count' , 'like'  , '%' .$data['uses_count']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.referral_codes.referral_codes')

->with('referral_codes',$referral_codes)
;

//searchfun


                        return view('REWASH.referral_codes.referral_codes' , compact('referral_codes'));

    }





        public function create()
    {

          return view('REWASH.referral_codes.referral_code_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'uses_count' => 'required',]);
    $referral_code = new Referral_code ();

         $referral_code->user_id = $request->user_id;
  $referral_code->uses_count = $request->uses_count;


    $save = $referral_code->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('referral_codes.show', $referral_code->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:referral_codes,id',]);

    $referral_code = Referral_code::find($id);
    $next = Referral_code::where('id','>',$id)->min('id');
    $previous = Referral_code::where('id','<',$id)->max('id');
       return view('REWASH.referral_codes.referral_code_view')
        ->with('referral_code',$referral_code)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $referral_code = Referral_code::find($id); 

      $referral_code->user_id = $request->user_id;
  $referral_code->uses_count = $request->uses_count;

    $update = $referral_code->update();

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
    $model = Referral_code::find($id);

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
