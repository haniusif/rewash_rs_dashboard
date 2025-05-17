<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Product;



class ProductController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$products = \App\Models\REWASH\Product::get();
   
   $data = $request->all();


  $products = Product::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['sku']) &&  $data['sku'] != null ){
                   $query->where('sku' , 'like'  , '%' .$data['sku']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['en_name']) &&  $data['en_name'] != null ){
                   $query->where('en_name' , 'like'  , '%' .$data['en_name']. '%' );   
               }

                
  if(isset($data['purchase_price']) &&  $data['purchase_price'] != null ){
                   $query->where('purchase_price' , 'like'  , '%' .$data['purchase_price']. '%' );   
               }

                
  if(isset($data['price']) &&  $data['price'] != null ){
                   $query->where('price' , 'like'  , '%' .$data['price']. '%' );   
               }

                
  if(isset($data['tax']) &&  $data['tax'] != null ){
                   $query->where('tax' , 'like'  , '%' .$data['tax']. '%' );   
               }

                
  if(isset($data['sales_price']) &&  $data['sales_price'] != null ){
                   $query->where('sales_price' , 'like'  , '%' .$data['sales_price']. '%' );   
               }

                
  if(isset($data['tax_type']) &&  $data['tax_type'] != null ){
                   $query->where('tax_type' , 'like'  , '%' .$data['tax_type']. '%' );   
               }

                
  if(isset($data['product_unit_id']) &&  $data['product_unit_id'] != null ){
                   $query->where('product_unit_id' , 'like'  , '%' .$data['product_unit_id']. '%' );   
               }

                
  if(isset($data['product_category_id']) &&  $data['product_category_id'] != null ){
                   $query->where('product_category_id' , 'like'  , '%' .$data['product_category_id']. '%' );   
               }

                
  if(isset($data['current_stock']) &&  $data['current_stock'] != null ){
                   $query->where('current_stock' , 'like'  , '%' .$data['current_stock']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.products.products')

->with('products',$products)
;

//searchfun


                        return view('REWASH.products.products' , compact('products'));

    }





        public function create()
    {

          return view('REWASH.products.product_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'sku' => 'required',

       'name' => 'required',

       'en_name' => 'required',

       'purchase_price' => 'required',

       'price' => 'required',

       'tax' => 'required',

       'sales_price' => 'required',

       'tax_type' => 'required',

       'product_unit_id' => 'required',

       'product_category_id' => 'required',

       'current_stock' => 'required',]);
    $product = new Product ();

         $product->sku = $request->sku;
  $product->name = $request->name;
  $product->en_name = $request->en_name;
  $product->purchase_price = $request->purchase_price;
  $product->price = $request->price;
  $product->tax = $request->tax;
  $product->sales_price = $request->sales_price;
  $product->tax_type = $request->tax_type;
  $product->product_unit_id = $request->product_unit_id;
  $product->product_category_id = $request->product_category_id;
  $product->current_stock = $request->current_stock;


    $save = $product->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('products.show', $product->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:products,id',]);

    $product = Product::find($id);
    $next = Product::where('id','>',$id)->min('id');
    $previous = Product::where('id','<',$id)->max('id');
       return view('REWASH.products.product_view')
        ->with('product',$product)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $product = Product::find($id); 

      $product->sku = $request->sku;
  $product->name = $request->name;
  $product->en_name = $request->en_name;
  $product->purchase_price = $request->purchase_price;
  $product->price = $request->price;
  $product->tax = $request->tax;
  $product->sales_price = $request->sales_price;
  $product->tax_type = $request->tax_type;
  $product->product_unit_id = $request->product_unit_id;
  $product->product_category_id = $request->product_category_id;
  $product->current_stock = $request->current_stock;

    $update = $product->update();

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
    $model = Product::find($id);

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
