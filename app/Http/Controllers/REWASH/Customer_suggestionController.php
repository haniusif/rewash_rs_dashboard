<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Customer_suggestion;



class Customer_suggestionController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$customer_suggestions = \App\Models\REWASH\Customer_suggestion::get();
   
   $data = $request->all();


  $customer_suggestions = Customer_suggestion::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['suggestion']) &&  $data['suggestion'] != null ){
                   $query->where('suggestion' , 'like'  , '%' .$data['suggestion']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.customer_suggestions.customer_suggestions')

->with('customer_suggestions',$customer_suggestions)
;

//searchfun


                        return view('REWASH.customer_suggestions.customer_suggestions' , compact('customer_suggestions'));

    }





        public function create()
    {

          return view('REWASH.customer_suggestions.customer_suggestion_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'suggestion' => 'required',]);
    $customer_suggestion = new Customer_suggestion ();

         $customer_suggestion->user_id = $request->user_id;
  $customer_suggestion->suggestion = $request->suggestion;


    $save = $customer_suggestion->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('customer_suggestions.show', $customer_suggestion->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:customer_suggestions,id',]);

    $customer_suggestion = Customer_suggestion::find($id);
    $next = Customer_suggestion::where('id','>',$id)->min('id');
    $previous = Customer_suggestion::where('id','<',$id)->max('id');
       return view('REWASH.customer_suggestions.customer_suggestion_view')
        ->with('customer_suggestion',$customer_suggestion)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $customer_suggestion = Customer_suggestion::find($id); 

      $customer_suggestion->user_id = $request->user_id;
  $customer_suggestion->suggestion = $request->suggestion;

    $update = $customer_suggestion->update();

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
    $model = Customer_suggestion::find($id);

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
