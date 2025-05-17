<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Stock;



class StockController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$stocks = \App\Models\REWASH\Stock::get();
   
   $data = $request->all();


  $stocks = Stock::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['product_id']) &&  $data['product_id'] != null ){
                   $query->where('product_id' , 'like'  , '%' .$data['product_id']. '%' );   
               }

                
  if(isset($data['quantity']) &&  $data['quantity'] != null ){
                   $query->where('quantity' , 'like'  , '%' .$data['quantity']. '%' );   
               }

                
  if(isset($data['operation']) &&  $data['operation'] != null ){
                   $query->where('operation' , 'like'  , '%' .$data['operation']. '%' );   
               }

                
  if(isset($data['operation_date']) &&  $data['operation_date'] != null ){
                   $query->where('operation_date' , 'like'  , '%' .$data['operation_date']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.stocks.stocks')

->with('stocks',$stocks)
;

//searchfun


                        return view('REWASH.stocks.stocks' , compact('stocks'));

    }





        public function create()
    {

          return view('REWASH.stocks.stock_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'product_id' => 'required',

       'quantity' => 'required',

       'operation' => 'required',

       'operation_date' => 'required',]);
    $stock = new Stock ();

         $stock->product_id = $request->product_id;
  $stock->quantity = $request->quantity;
  $stock->operation = $request->operation;
  $stock->operation_date = $request->operation_date;


    $save = $stock->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('stocks.show', $stock->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:stocks,id',]);

    $stock = Stock::find($id);
    $next = Stock::where('id','>',$id)->min('id');
    $previous = Stock::where('id','<',$id)->max('id');
       return view('REWASH.stocks.stock_view')
        ->with('stock',$stock)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $stock = Stock::find($id); 

      $stock->product_id = $request->product_id;
  $stock->quantity = $request->quantity;
  $stock->operation = $request->operation;
  $stock->operation_date = $request->operation_date;

    $update = $stock->update();

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
    $model = Stock::find($id);

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
