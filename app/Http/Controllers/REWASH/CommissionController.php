<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Commission;



class CommissionController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$commissions = \App\Models\REWASH\Commission::get();
   
   $data = $request->all();


  $commissions = Commission::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['worker_id']) &&  $data['worker_id'] != null ){
                   $query->where('worker_id' , 'like'  , '%' .$data['worker_id']. '%' );   
               }

                
  if(isset($data['amount']) &&  $data['amount'] != null ){
                   $query->where('amount' , 'like'  , '%' .$data['amount']. '%' );   
               }

                
  if(isset($data['operation_type']) &&  $data['operation_type'] != null ){
                   $query->where('operation_type' , 'like'  , '%' .$data['operation_type']. '%' );   
               }

                
  if(isset($data['commission_title']) &&  $data['commission_title'] != null ){
                   $query->where('commission_title' , 'like'  , '%' .$data['commission_title']. '%' );   
               }

                
  if(isset($data['commission_text']) &&  $data['commission_text'] != null ){
                   $query->where('commission_text' , 'like'  , '%' .$data['commission_text']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.commissions.commissions')

->with('commissions',$commissions)
;

//searchfun


                        return view('REWASH.commissions.commissions' , compact('commissions'));

    }





        public function create()
    {

          return view('REWASH.commissions.commission_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'worker_id' => 'required',

       'amount' => 'required',

       'operation_type' => 'required',

       'commission_title' => 'required',

       'commission_text' => 'required',]);
    $commission = new Commission ();

         $commission->worker_id = $request->worker_id;
  $commission->amount = $request->amount;
  $commission->operation_type = $request->operation_type;
  $commission->commission_title = $request->commission_title;
  $commission->commission_text = $request->commission_text;


    $save = $commission->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('commissions.show', $commission->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:commissions,id',]);

    $commission = Commission::find($id);
    $next = Commission::where('id','>',$id)->min('id');
    $previous = Commission::where('id','<',$id)->max('id');
       return view('REWASH.commissions.commission_view')
        ->with('commission',$commission)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $commission = Commission::find($id); 

      $commission->worker_id = $request->worker_id;
  $commission->amount = $request->amount;
  $commission->operation_type = $request->operation_type;
  $commission->commission_title = $request->commission_title;
  $commission->commission_text = $request->commission_text;

    $update = $commission->update();

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
    $model = Commission::find($id);

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
