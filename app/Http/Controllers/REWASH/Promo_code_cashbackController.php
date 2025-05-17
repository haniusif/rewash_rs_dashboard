<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Promo_code_cashback;



class Promo_code_cashbackController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$promo_code_cashbacks = \App\Models\REWASH\Promo_code_cashback::get();
   
   $data = $request->all();


  $promo_code_cashbacks = Promo_code_cashback::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['promo_code_id']) &&  $data['promo_code_id'] != null ){
                   $query->where('promo_code_id' , 'like'  , '%' .$data['promo_code_id']. '%' );   
               }

                
  if(isset($data['cashback_type']) &&  $data['cashback_type'] != null ){
                   $query->where('cashback_type' , 'like'  , '%' .$data['cashback_type']. '%' );   
               }

                
  if(isset($data['cashback_value']) &&  $data['cashback_value'] != null ){
                   $query->where('cashback_value' , 'like'  , '%' .$data['cashback_value']. '%' );   
               }

                
  if(isset($data['min_order_amount']) &&  $data['min_order_amount'] != null ){
                   $query->where('min_order_amount' , 'like'  , '%' .$data['min_order_amount']. '%' );   
               }

                
  if(isset($data['max_cashback_amount']) &&  $data['max_cashback_amount'] != null ){
                   $query->where('max_cashback_amount' , 'like'  , '%' .$data['max_cashback_amount']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['start_date']) &&  $data['start_date'] != null ){
                   $query->where('start_date' , 'like'  , '%' .$data['start_date']. '%' );   
               }

                
  if(isset($data['end_date']) &&  $data['end_date'] != null ){
                   $query->where('end_date' , 'like'  , '%' .$data['end_date']. '%' );   
               }

                
  if(isset($data['max_uses_per_user']) &&  $data['max_uses_per_user'] != null ){
                   $query->where('max_uses_per_user' , 'like'  , '%' .$data['max_uses_per_user']. '%' );   
               }

                
  if(isset($data['cashback_method']) &&  $data['cashback_method'] != null ){
                   $query->where('cashback_method' , 'like'  , '%' .$data['cashback_method']. '%' );   
               }

                
  if(isset($data['cashback_expiry']) &&  $data['cashback_expiry'] != null ){
                   $query->where('cashback_expiry' , 'like'  , '%' .$data['cashback_expiry']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.promo_code_cashbacks.promo_code_cashbacks')

->with('promo_code_cashbacks',$promo_code_cashbacks)
;

//searchfun


                        return view('REWASH.promo_code_cashbacks.promo_code_cashbacks' , compact('promo_code_cashbacks'));

    }





        public function create()
    {

          return view('REWASH.promo_code_cashbacks.promo_code_cashback_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'promo_code_id' => 'required',

       'cashback_type' => 'required',

       'cashback_value' => 'required',

       'min_order_amount' => 'required',

       'max_cashback_amount' => 'required',

       'start_date' => 'required',

       'end_date' => 'required',

       'max_uses_per_user' => 'required',

       'cashback_method' => 'required',

       'cashback_expiry' => 'required',]);
    $promo_code_cashback = new Promo_code_cashback ();

         $promo_code_cashback->promo_code_id = $request->promo_code_id;
  $promo_code_cashback->cashback_type = $request->cashback_type;
  $promo_code_cashback->cashback_value = $request->cashback_value;
  $promo_code_cashback->min_order_amount = $request->min_order_amount;
  $promo_code_cashback->max_cashback_amount = $request->max_cashback_amount;
  $promo_code_cashback->is_active = ($request->is_active) ? $request->is_active : 0;
  $promo_code_cashback->start_date = $request->start_date;
  $promo_code_cashback->end_date = $request->end_date;
  $promo_code_cashback->max_uses_per_user = $request->max_uses_per_user;
  $promo_code_cashback->cashback_method = $request->cashback_method;
  $promo_code_cashback->cashback_expiry = $request->cashback_expiry;


    $save = $promo_code_cashback->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('promo_code_cashbacks.show', $promo_code_cashback->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:promo_code_cashbacks,id',]);

    $promo_code_cashback = Promo_code_cashback::find($id);
    $next = Promo_code_cashback::where('id','>',$id)->min('id');
    $previous = Promo_code_cashback::where('id','<',$id)->max('id');
       return view('REWASH.promo_code_cashbacks.promo_code_cashback_view')
        ->with('promo_code_cashback',$promo_code_cashback)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $promo_code_cashback = Promo_code_cashback::find($id); 

      $promo_code_cashback->promo_code_id = $request->promo_code_id;
  $promo_code_cashback->cashback_type = $request->cashback_type;
  $promo_code_cashback->cashback_value = $request->cashback_value;
  $promo_code_cashback->min_order_amount = $request->min_order_amount;
  $promo_code_cashback->max_cashback_amount = $request->max_cashback_amount;
  $promo_code_cashback->is_active = ($request->is_active) ? $request->is_active : 0;
  $promo_code_cashback->start_date = $request->start_date;
  $promo_code_cashback->end_date = $request->end_date;
  $promo_code_cashback->max_uses_per_user = $request->max_uses_per_user;
  $promo_code_cashback->cashback_method = $request->cashback_method;
  $promo_code_cashback->cashback_expiry = $request->cashback_expiry;

    $update = $promo_code_cashback->update();

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
    $model = Promo_code_cashback::find($id);

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
