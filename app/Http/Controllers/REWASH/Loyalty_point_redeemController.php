<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Loyalty_point_redeem;



class Loyalty_point_redeemController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$loyalty_point_redeems = \App\Models\REWASH\Loyalty_point_redeem::get();
   
   $data = $request->all();


  $loyalty_point_redeems = Loyalty_point_redeem::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['loyalty_points']) &&  $data['loyalty_points'] != null ){
                   $query->where('loyalty_points' , 'like'  , '%' .$data['loyalty_points']. '%' );   
               }

                
  if(isset($data['amount']) &&  $data['amount'] != null ){
                   $query->where('amount' , 'like'  , '%' .$data['amount']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.loyalty_point_redeems.loyalty_point_redeems')

->with('loyalty_point_redeems',$loyalty_point_redeems)
;

//searchfun


                        return view('REWASH.loyalty_point_redeems.loyalty_point_redeems' , compact('loyalty_point_redeems'));

    }





        public function create()
    {

          return view('REWASH.loyalty_point_redeems.loyalty_point_redeem_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'loyalty_points' => 'required',

       'amount' => 'required',]);
    $loyalty_point_redeem = new Loyalty_point_redeem ();

         $loyalty_point_redeem->user_id = $request->user_id;
  $loyalty_point_redeem->loyalty_points = $request->loyalty_points;
  $loyalty_point_redeem->amount = $request->amount;


    $save = $loyalty_point_redeem->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('loyalty_point_redeems.show', $loyalty_point_redeem->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:loyalty_point_redeems,id',]);

    $loyalty_point_redeem = Loyalty_point_redeem::find($id);
    $next = Loyalty_point_redeem::where('id','>',$id)->min('id');
    $previous = Loyalty_point_redeem::where('id','<',$id)->max('id');
       return view('REWASH.loyalty_point_redeems.loyalty_point_redeem_view')
        ->with('loyalty_point_redeem',$loyalty_point_redeem)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $loyalty_point_redeem = Loyalty_point_redeem::find($id); 

      $loyalty_point_redeem->user_id = $request->user_id;
  $loyalty_point_redeem->loyalty_points = $request->loyalty_points;
  $loyalty_point_redeem->amount = $request->amount;

    $update = $loyalty_point_redeem->update();

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
    $model = Loyalty_point_redeem::find($id);

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
