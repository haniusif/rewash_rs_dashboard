<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Rate;



class RateController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$rates = \App\Models\REWASH\Rate::get();
   
   $data = $request->all();


  $rates = Rate::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['worker_id']) &&  $data['worker_id'] != null ){
                   $query->where('worker_id' , 'like'  , '%' .$data['worker_id']. '%' );   
               }

                
  if(isset($data['appointment_id']) &&  $data['appointment_id'] != null ){
                   $query->where('appointment_id' , 'like'  , '%' .$data['appointment_id']. '%' );   
               }

                
  if(isset($data['appointment_schedule_id']) &&  $data['appointment_schedule_id'] != null ){
                   $query->where('appointment_schedule_id' , 'like'  , '%' .$data['appointment_schedule_id']. '%' );   
               }

                
  if(isset($data['rate_value']) &&  $data['rate_value'] != null ){
                   $query->where('rate_value' , 'like'  , '%' .$data['rate_value']. '%' );   
               }

                
  if(isset($data['comments']) &&  $data['comments'] != null ){
                   $query->where('comments' , 'like'  , '%' .$data['comments']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.rates.rates')

->with('rates',$rates)
;

//searchfun


                        return view('REWASH.rates.rates' , compact('rates'));

    }





        public function create()
    {

          return view('REWASH.rates.rate_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'user_id' => 'required',

       'worker_id' => 'required',

       'appointment_id' => 'required',

       'appointment_schedule_id' => 'required',

       'rate_value' => 'required',

       'comments' => 'required',]);
    $rate = new Rate ();

         $rate->branch_id = $request->branch_id;
  $rate->user_id = $request->user_id;
  $rate->worker_id = $request->worker_id;
  $rate->appointment_id = $request->appointment_id;
  $rate->appointment_schedule_id = $request->appointment_schedule_id;
  $rate->rate_value = $request->rate_value;
  $rate->comments = $request->comments;


    $save = $rate->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('rates.show', $rate->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:rates,id',]);

    $rate = Rate::find($id);
    $next = Rate::where('id','>',$id)->min('id');
    $previous = Rate::where('id','<',$id)->max('id');
       return view('REWASH.rates.rate_view')
        ->with('rate',$rate)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $rate = Rate::find($id); 

      $rate->branch_id = $request->branch_id;
  $rate->user_id = $request->user_id;
  $rate->worker_id = $request->worker_id;
  $rate->appointment_id = $request->appointment_id;
  $rate->appointment_schedule_id = $request->appointment_schedule_id;
  $rate->rate_value = $request->rate_value;
  $rate->comments = $request->comments;

    $update = $rate->update();

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
    $model = Rate::find($id);

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
