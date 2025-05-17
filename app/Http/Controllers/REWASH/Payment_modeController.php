<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Payment_mode;



class Payment_modeController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$payment_modes = \App\Models\REWASH\Payment_mode::get();
   
   $data = $request->all();


  $payment_modes = Payment_mode::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['mode']) &&  $data['mode'] != null ){
                   $query->where('mode' , 'like'  , '%' .$data['mode']. '%' );   
               }

                
  if(isset($data['en_mode']) &&  $data['en_mode'] != null ){
                   $query->where('en_mode' , 'like'  , '%' .$data['en_mode']. '%' );   
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

return view('REWASH.payment_modes.payment_modes')

->with('payment_modes',$payment_modes)
;

//searchfun


                        return view('REWASH.payment_modes.payment_modes' , compact('payment_modes'));

    }





        public function create()
    {

          return view('REWASH.payment_modes.payment_mode_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'mode' => 'required',

       'en_mode' => 'required',]);
    $payment_mode = new Payment_mode ();

         $payment_mode->branch_id = $request->branch_id;
  $payment_mode->mode = $request->mode;
  $payment_mode->en_mode = $request->en_mode;
  $payment_mode->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $payment_mode->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('payment_modes.show', $payment_mode->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:payment_modes,id',]);

    $payment_mode = Payment_mode::find($id);
    $next = Payment_mode::where('id','>',$id)->min('id');
    $previous = Payment_mode::where('id','<',$id)->max('id');
       return view('REWASH.payment_modes.payment_mode_view')
        ->with('payment_mode',$payment_mode)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $payment_mode = Payment_mode::find($id); 

      $payment_mode->branch_id = $request->branch_id;
  $payment_mode->mode = $request->mode;
  $payment_mode->en_mode = $request->en_mode;
  $payment_mode->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $payment_mode->update();

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
    $model = Payment_mode::find($id);

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
