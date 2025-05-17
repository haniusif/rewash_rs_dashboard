<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Dispatch_order_detail;



class Dispatch_order_detailController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$dispatch_order_details = \App\Models\REWASH\Dispatch_order_detail::get();
   
   $data = $request->all();


  $dispatch_order_details = Dispatch_order_detail::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['dispatch_order_id']) &&  $data['dispatch_order_id'] != null ){
                   $query->where('dispatch_order_id' , 'like'  , '%' .$data['dispatch_order_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.dispatch_order_details.dispatch_order_details')

->with('dispatch_order_details',$dispatch_order_details)
;

//searchfun


                        return view('REWASH.dispatch_order_details.dispatch_order_details' , compact('dispatch_order_details'));

    }





        public function create()
    {

          return view('REWASH.dispatch_order_details.dispatch_order_detail_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'dispatch_order_id' => 'required',]);
    $dispatch_order_detail = new Dispatch_order_detail ();

         $dispatch_order_detail->dispatch_order_id = $request->dispatch_order_id;


    $save = $dispatch_order_detail->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('dispatch_order_details.show', $dispatch_order_detail->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:dispatch_order_details,id',]);

    $dispatch_order_detail = Dispatch_order_detail::find($id);
    $next = Dispatch_order_detail::where('id','>',$id)->min('id');
    $previous = Dispatch_order_detail::where('id','<',$id)->max('id');
       return view('REWASH.dispatch_order_details.dispatch_order_detail_view')
        ->with('dispatch_order_detail',$dispatch_order_detail)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $dispatch_order_detail = Dispatch_order_detail::find($id); 

      $dispatch_order_detail->dispatch_order_id = $request->dispatch_order_id;

    $update = $dispatch_order_detail->update();

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
    $model = Dispatch_order_detail::find($id);

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
