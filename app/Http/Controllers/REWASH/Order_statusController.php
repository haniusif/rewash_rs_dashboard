<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Order_status;



class Order_statusController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$order_statuses = \App\Models\REWASH\Order_status::get();
   
   $data = $request->all();


  $order_statuses = Order_status::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['en_name']) &&  $data['en_name'] != null ){
                   $query->where('en_name' , 'like'  , '%' .$data['en_name']. '%' );   
               }

                
  if(isset($data['sorting']) &&  $data['sorting'] != null ){
                   $query->where('sorting' , 'like'  , '%' .$data['sorting']. '%' );   
               }

                
  if(isset($data['label_color']) &&  $data['label_color'] != null ){
                   $query->where('label_color' , 'like'  , '%' .$data['label_color']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.order_statuses.order_statuses')

->with('order_statuses',$order_statuses)
;

//searchfun


                        return view('REWASH.order_statuses.order_statuses' , compact('order_statuses'));

    }





        public function create()
    {

          return view('REWASH.order_statuses.order_status_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',

       'sorting' => 'required',

       'label_color' => 'required',]);
    $order_status = new Order_status ();

         $order_status->name = $request->name;
  $order_status->en_name = $request->en_name;
  $order_status->sorting = $request->sorting;
  $order_status->label_color = $request->label_color;


    $save = $order_status->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('order_statuses.show', $order_status->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:order_statuses,id',]);

    $order_status = Order_status::find($id);
    $next = Order_status::where('id','>',$id)->min('id');
    $previous = Order_status::where('id','<',$id)->max('id');
       return view('REWASH.order_statuses.order_status_view')
        ->with('order_status',$order_status)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $order_status = Order_status::find($id); 

      $order_status->name = $request->name;
  $order_status->en_name = $request->en_name;
  $order_status->sorting = $request->sorting;
  $order_status->label_color = $request->label_color;

    $update = $order_status->update();

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
    $model = Order_status::find($id);

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
