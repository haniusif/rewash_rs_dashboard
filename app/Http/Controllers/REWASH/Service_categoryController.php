<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Service_category;



class Service_categoryController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$service_categories = \App\Models\REWASH\Service_category::get();
   
   $data = $request->all();


  $service_categories = Service_category::orderby('id','DESC')

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

                
  if(isset($data['image']) &&  $data['image'] != null ){
                   $query->where('image' , 'like'  , '%' .$data['image']. '%' );   
               }

                
  if(isset($data['short_description']) &&  $data['short_description'] != null ){
                   $query->where('short_description' , 'like'  , '%' .$data['short_description']. '%' );   
               }

                
  if(isset($data['en_short_description']) &&  $data['en_short_description'] != null ){
                   $query->where('en_short_description' , 'like'  , '%' .$data['en_short_description']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['sorting']) &&  $data['sorting'] != null ){
                   $query->where('sorting' , 'like'  , '%' .$data['sorting']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.service_categories.service_categories')

->with('service_categories',$service_categories)
;

//searchfun


                        return view('REWASH.service_categories.service_categories' , compact('service_categories'));

    }





        public function create()
    {

          return view('REWASH.service_categories.service_category_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',

       'image' => 'required',

       'short_description' => 'required',

       'en_short_description' => 'required',

       'sorting' => 'required',]);
    $service_category = new Service_category ();

         $service_category->name = $request->name;
  $service_category->en_name = $request->en_name;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/service_categories';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $service_category->image = '/'.$destinationPath."/".$fileName;

      }}
  $service_category->short_description = $request->short_description;
  $service_category->en_short_description = $request->en_short_description;
  $service_category->is_active = ($request->is_active) ? $request->is_active : 0;
  $service_category->sorting = $request->sorting;


    $save = $service_category->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('service_categories.show', $service_category->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:service_categories,id',]);

    $service_category = Service_category::find($id);
    $next = Service_category::where('id','>',$id)->min('id');
    $previous = Service_category::where('id','<',$id)->max('id');
       return view('REWASH.service_categories.service_category_view')
        ->with('service_category',$service_category)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $service_category = Service_category::find($id); 

      $service_category->name = $request->name;
  $service_category->en_name = $request->en_name;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/service_categories';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $service_category->image = '/'.$destinationPath."/".$fileName;

      }}
  $service_category->short_description = $request->short_description;
  $service_category->en_short_description = $request->en_short_description;
  $service_category->is_active = ($request->is_active) ? $request->is_active : 0;
  $service_category->sorting = $request->sorting;

    $update = $service_category->update();

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
    $model = Service_category::find($id);

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
