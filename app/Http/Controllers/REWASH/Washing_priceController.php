<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Washing_price;



class Washing_priceController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$washing_prices = \App\Models\REWASH\Washing_price::get();
   
   $data = $request->all();


  $washing_prices = Washing_price::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['washing_plan_id']) &&  $data['washing_plan_id'] != null ){
                   $query->where('washing_plan_id' , 'like'  , '%' .$data['washing_plan_id']. '%' );   
               }

                
  if(isset($data['vehicle_type_id']) &&  $data['vehicle_type_id'] != null ){
                   $query->where('vehicle_type_id' , 'like'  , '%' .$data['vehicle_type_id']. '%' );   
               }

                
  if(isset($data['price']) &&  $data['price'] != null ){
                   $query->where('price' , 'like'  , '%' .$data['price']. '%' );   
               }

                
  if(isset($data['duration']) &&  $data['duration'] != null ){
                   $query->where('duration' , 'like'  , '%' .$data['duration']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.washing_prices.washing_prices')

->with('washing_prices',$washing_prices)
;

//searchfun


                        return view('REWASH.washing_prices.washing_prices' , compact('washing_prices'));

    }





        public function create()
    {

          return view('REWASH.washing_prices.washing_price_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'washing_plan_id' => 'required',

       'vehicle_type_id' => 'required',

       'price' => 'required',

       'duration' => 'required',]);
    $washing_price = new Washing_price ();

         $washing_price->branch_id = $request->branch_id;
  $washing_price->washing_plan_id = $request->washing_plan_id;
  $washing_price->vehicle_type_id = $request->vehicle_type_id;
  $washing_price->price = $request->price;
  $washing_price->duration = $request->duration;


    $save = $washing_price->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('washing_prices.show', $washing_price->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:washing_prices,id',]);

    $washing_price = Washing_price::find($id);
    $next = Washing_price::where('id','>',$id)->min('id');
    $previous = Washing_price::where('id','<',$id)->max('id');
       return view('REWASH.washing_prices.washing_price_view')
        ->with('washing_price',$washing_price)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $washing_price = Washing_price::find($id); 

      $washing_price->branch_id = $request->branch_id;
  $washing_price->washing_plan_id = $request->washing_plan_id;
  $washing_price->vehicle_type_id = $request->vehicle_type_id;
  $washing_price->price = $request->price;
  $washing_price->duration = $request->duration;

    $update = $washing_price->update();

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
    $model = Washing_price::find($id);

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
