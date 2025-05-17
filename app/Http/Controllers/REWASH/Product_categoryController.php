<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Product_category;



class Product_categoryController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$product_categories = \App\Models\REWASH\Product_category::get();
   
   $data = $request->all();


  $product_categories = Product_category::orderby('id','DESC')

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

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.product_categories.product_categories')

->with('product_categories',$product_categories)
;

//searchfun


                        return view('REWASH.product_categories.product_categories' , compact('product_categories'));

    }





        public function create()
    {

          return view('REWASH.product_categories.product_category_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',]);
    $product_category = new Product_category ();

         $product_category->name = $request->name;
  $product_category->en_name = $request->en_name;


    $save = $product_category->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('product_categories.show', $product_category->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:product_categories,id',]);

    $product_category = Product_category::find($id);
    $next = Product_category::where('id','>',$id)->min('id');
    $previous = Product_category::where('id','<',$id)->max('id');
       return view('REWASH.product_categories.product_category_view')
        ->with('product_category',$product_category)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $product_category = Product_category::find($id); 

      $product_category->name = $request->name;
  $product_category->en_name = $request->en_name;

    $update = $product_category->update();

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
    $model = Product_category::find($id);

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
