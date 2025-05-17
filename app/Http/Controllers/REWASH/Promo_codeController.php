<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Promo_code;



class Promo_codeController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$promo_codes = \App\Models\REWASH\Promo_code::get();
   
   $data = $request->all();


  $promo_codes = Promo_code::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['promo_code']) &&  $data['promo_code'] != null ){
                   $query->where('promo_code' , 'like'  , '%' .$data['promo_code']. '%' );   
               }

                     if(isset($data['is_unlimited']) && $data['is_unlimited'] != 'all' ){
            
                 $query->where('is_unlimited' , $data['is_unlimited']);   
            }
 
  if(isset($data['number_of_users']) &&  $data['number_of_users'] != null ){
                   $query->where('number_of_users' , 'like'  , '%' .$data['number_of_users']. '%' );   
               }

                
  if(isset($data['discount_value']) &&  $data['discount_value'] != null ){
                   $query->where('discount_value' , 'like'  , '%' .$data['discount_value']. '%' );   
               }

                
  if(isset($data['discount_type']) &&  $data['discount_type'] != null ){
                   $query->where('discount_type' , 'like'  , '%' .$data['discount_type']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['validity_time_from']) &&  $data['validity_time_from'] != null ){
                   $query->where('validity_time_from' , 'like'  , '%' .$data['validity_time_from']. '%' );   
               }

                
  if(isset($data['validity_time_to']) &&  $data['validity_time_to'] != null ){
                   $query->where('validity_time_to' , 'like'  , '%' .$data['validity_time_to']. '%' );   
               }

                     if(isset($data['is_one_user']) && $data['is_one_user'] != 'all' ){
            
                 $query->where('is_one_user' , $data['is_one_user']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                     if(isset($data['is_cashback']) && $data['is_cashback'] != 'all' ){
            
                 $query->where('is_cashback' , $data['is_cashback']);   
            }
 
 
 })
  ->paginate(50);

return view('REWASH.promo_codes.promo_codes')

->with('promo_codes',$promo_codes)
;

//searchfun


                        return view('REWASH.promo_codes.promo_codes' , compact('promo_codes'));

    }





        public function create()
    {

          return view('REWASH.promo_codes.promo_code_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'promo_code' => 'required',

       'is_unlimited' => 'required',

       'number_of_users' => 'required',

       'discount_value' => 'required',

       'discount_type' => 'required',

       'validity_time_from' => 'required',

       'validity_time_to' => 'required',

       'is_one_user' => 'required',

       'is_cashback' => 'required',]);
    $promo_code = new Promo_code ();

         $promo_code->branch_id = $request->branch_id;
  $promo_code->promo_code = $request->promo_code;
  $promo_code->is_unlimited = $request->is_unlimited;
  $promo_code->number_of_users = $request->number_of_users;
  $promo_code->discount_value = $request->discount_value;
  $promo_code->discount_type = $request->discount_type;
  $promo_code->is_active = ($request->is_active) ? $request->is_active : 0;
  $promo_code->validity_time_from = $request->validity_time_from;
  $promo_code->validity_time_to = $request->validity_time_to;
  $promo_code->is_one_user = $request->is_one_user;
  $promo_code->is_cashback = $request->is_cashback;


    $save = $promo_code->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('promo_codes.show', $promo_code->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:promo_codes,id',]);

    $promo_code = Promo_code::find($id);
    $next = Promo_code::where('id','>',$id)->min('id');
    $previous = Promo_code::where('id','<',$id)->max('id');
       return view('REWASH.promo_codes.promo_code_view')
        ->with('promo_code',$promo_code)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $promo_code = Promo_code::find($id); 

      $promo_code->branch_id = $request->branch_id;
  $promo_code->promo_code = $request->promo_code;
  $promo_code->is_unlimited = $request->is_unlimited;
  $promo_code->number_of_users = $request->number_of_users;
  $promo_code->discount_value = $request->discount_value;
  $promo_code->discount_type = $request->discount_type;
  $promo_code->is_active = ($request->is_active) ? $request->is_active : 0;
  $promo_code->validity_time_from = $request->validity_time_from;
  $promo_code->validity_time_to = $request->validity_time_to;
  $promo_code->is_one_user = $request->is_one_user;
  $promo_code->is_cashback = $request->is_cashback;

    $update = $promo_code->update();

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
    $model = Promo_code::find($id);

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
