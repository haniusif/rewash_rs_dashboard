<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Product_unit;



class Product_unitController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$product_units = \App\Models\REWASH\Product_unit::get();
   
   $data = $request->all();


  $product_units = Product_unit::orderby('id','DESC')

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

return view('REWASH.product_units.product_units')

->with('product_units',$product_units)
;

//searchfun


                        return view('REWASH.product_units.product_units' , compact('product_units'));

    }





        public function create()
    {

          return view('REWASH.product_units.product_unit_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',]);
    $product_unit = new Product_unit ();

         $product_unit->name = $request->name;
  $product_unit->en_name = $request->en_name;


    $save = $product_unit->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('product_units.show', $product_unit->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:product_units,id',]);

    $product_unit = Product_unit::find($id);
    $next = Product_unit::where('id','>',$id)->min('id');
    $previous = Product_unit::where('id','<',$id)->max('id');
       return view('REWASH.product_units.product_unit_view')
        ->with('product_unit',$product_unit)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $product_unit = Product_unit::find($id); 

      $product_unit->name = $request->name;
  $product_unit->en_name = $request->en_name;

    $update = $product_unit->update();

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
    $model = Product_unit::find($id);

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
