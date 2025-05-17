<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Platform;



class PlatformController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$platforms = \App\Models\REWASH\Platform::get();
   
   $data = $request->all();


  $platforms = Platform::orderby('id','DESC')

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

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['accounting_name']) &&  $data['accounting_name'] != null ){
                   $query->where('accounting_name' , 'like'  , '%' .$data['accounting_name']. '%' );   
               }

                
  if(isset($data['default_price']) &&  $data['default_price'] != null ){
                   $query->where('default_price' , 'like'  , '%' .$data['default_price']. '%' );   
               }

                     if(isset($data['having_default_price']) && $data['having_default_price'] != 'all' ){
            
                 $query->where('having_default_price' , $data['having_default_price']);   
            }
 
  if(isset($data['accounting_id']) &&  $data['accounting_id'] != null ){
                   $query->where('accounting_id' , 'like'  , '%' .$data['accounting_id']. '%' );   
               }

                
  if(isset($data['promo_code_id']) &&  $data['promo_code_id'] != null ){
                   $query->where('promo_code_id' , 'like'  , '%' .$data['promo_code_id']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.platforms.platforms')

->with('platforms',$platforms)
;

//searchfun


                        return view('REWASH.platforms.platforms' , compact('platforms'));

    }





        public function create()
    {

          return view('REWASH.platforms.platform_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',

       'sorting' => 'required',

       'accounting_name' => 'required',

       'default_price' => 'required',

       'having_default_price' => 'required',

       'accounting_id' => 'required',

       'promo_code_id' => 'required',]);
    $platform = new Platform ();

         $platform->name = $request->name;
  $platform->en_name = $request->en_name;
  $platform->sorting = $request->sorting;
  $platform->is_active = ($request->is_active) ? $request->is_active : 0;
  $platform->accounting_name = $request->accounting_name;
  $platform->default_price = $request->default_price;
  $platform->having_default_price = $request->having_default_price;
  $platform->accounting_id = $request->accounting_id;
  $platform->promo_code_id = $request->promo_code_id;


    $save = $platform->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('platforms.show', $platform->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:platforms,id',]);

    $platform = Platform::find($id);
    $next = Platform::where('id','>',$id)->min('id');
    $previous = Platform::where('id','<',$id)->max('id');
       return view('REWASH.platforms.platform_view')
        ->with('platform',$platform)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $platform = Platform::find($id); 

      $platform->name = $request->name;
  $platform->en_name = $request->en_name;
  $platform->sorting = $request->sorting;
  $platform->is_active = ($request->is_active) ? $request->is_active : 0;
  $platform->accounting_name = $request->accounting_name;
  $platform->default_price = $request->default_price;
  $platform->having_default_price = $request->having_default_price;
  $platform->accounting_id = $request->accounting_id;
  $platform->promo_code_id = $request->promo_code_id;

    $update = $platform->update();

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
    $model = Platform::find($id);

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
