<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\User_wallet_transaction;



class User_wallet_transactionController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$user_wallet_transactions = \App\Models\REWASH\User_wallet_transaction::get();
   
   $data = $request->all();


  $user_wallet_transactions = User_wallet_transaction::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['actual_balance']) &&  $data['actual_balance'] != null ){
                   $query->where('actual_balance' , 'like'  , '%' .$data['actual_balance']. '%' );   
               }

                
  if(isset($data['amount']) &&  $data['amount'] != null ){
                   $query->where('amount' , 'like'  , '%' .$data['amount']. '%' );   
               }

                
  if(isset($data['transaction_type']) &&  $data['transaction_type'] != null ){
                   $query->where('transaction_type' , 'like'  , '%' .$data['transaction_type']. '%' );   
               }

                
  if(isset($data['transaction_comments']) &&  $data['transaction_comments'] != null ){
                   $query->where('transaction_comments' , 'like'  , '%' .$data['transaction_comments']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.user_wallet_transactions.user_wallet_transactions')

->with('user_wallet_transactions',$user_wallet_transactions)
;

//searchfun


                        return view('REWASH.user_wallet_transactions.user_wallet_transactions' , compact('user_wallet_transactions'));

    }





        public function create()
    {

          return view('REWASH.user_wallet_transactions.user_wallet_transaction_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'actual_balance' => 'required',

       'amount' => 'required',

       'transaction_type' => 'required',

       'transaction_comments' => 'required',]);
    $user_wallet_transaction = new User_wallet_transaction ();

         $user_wallet_transaction->user_id = $request->user_id;
  $user_wallet_transaction->actual_balance = $request->actual_balance;
  $user_wallet_transaction->amount = $request->amount;
  $user_wallet_transaction->transaction_type = $request->transaction_type;
  $user_wallet_transaction->transaction_comments = $request->transaction_comments;


    $save = $user_wallet_transaction->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('user_wallet_transactions.show', $user_wallet_transaction->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:user_wallet_transactions,id',]);

    $user_wallet_transaction = User_wallet_transaction::find($id);
    $next = User_wallet_transaction::where('id','>',$id)->min('id');
    $previous = User_wallet_transaction::where('id','<',$id)->max('id');
       return view('REWASH.user_wallet_transactions.user_wallet_transaction_view')
        ->with('user_wallet_transaction',$user_wallet_transaction)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $user_wallet_transaction = User_wallet_transaction::find($id); 

      $user_wallet_transaction->user_id = $request->user_id;
  $user_wallet_transaction->actual_balance = $request->actual_balance;
  $user_wallet_transaction->amount = $request->amount;
  $user_wallet_transaction->transaction_type = $request->transaction_type;
  $user_wallet_transaction->transaction_comments = $request->transaction_comments;

    $update = $user_wallet_transaction->update();

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
    $model = User_wallet_transaction::find($id);

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
