<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Accounting;



class AccountingController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$accountings = \App\Models\REWASH\Accounting::get();
   
   $data = $request->all();


  $accountings = Accounting::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['email']) &&  $data['email'] != null ){
                   $query->where('email' , 'like'  , '%' .$data['email']. '%' );   
               }

                
  if(isset($data['phone']) &&  $data['phone'] != null ){
                   $query->where('phone' , 'like'  , '%' .$data['phone']. '%' );   
               }

                     if(isset($data['active']) && $data['active'] != 'all' ){
            
                 $query->where('active' , $data['active']);   
            }
 
  if(isset($data['qoyod_customer_id']) &&  $data['qoyod_customer_id'] != null ){
                   $query->where('qoyod_customer_id' , 'like'  , '%' .$data['qoyod_customer_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.accountings.accountings')

->with('accountings',$accountings)
;

//searchfun


                        return view('REWASH.accountings.accountings' , compact('accountings'));

    }





        public function create()
    {

          return view('REWASH.accountings.accounting_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'email' => 'required',

       'phone' => 'required',

       'active' => 'required',

       'qoyod_customer_id' => 'required',]);
    $accounting = new Accounting ();

         $accounting->name = $request->name;
  $accounting->email = $request->email;
  $accounting->phone = $request->phone;
  $accounting->active = $request->active;
  $accounting->qoyod_customer_id = $request->qoyod_customer_id;


    $save = $accounting->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('accountings.show', $accounting->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:accountings,id',]);

    $accounting = Accounting::find($id);
    $next = Accounting::where('id','>',$id)->min('id');
    $previous = Accounting::where('id','<',$id)->max('id');
       return view('REWASH.accountings.accounting_view')
        ->with('accounting',$accounting)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $accounting = Accounting::find($id); 

      $accounting->name = $request->name;
  $accounting->email = $request->email;
  $accounting->phone = $request->phone;
  $accounting->active = $request->active;
  $accounting->qoyod_customer_id = $request->qoyod_customer_id;

    $update = $accounting->update();

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
    $model = Accounting::find($id);

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
