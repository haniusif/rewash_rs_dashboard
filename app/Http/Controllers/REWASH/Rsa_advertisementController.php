<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Rsa_advertisement;



class Rsa_advertisementController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$rsa_advertisements = \App\Models\REWASH\Rsa_advertisement::get();
   
   $data = $request->all();


  $rsa_advertisements = Rsa_advertisement::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['title']) &&  $data['title'] != null ){
                   $query->where('title' , 'like'  , '%' .$data['title']. '%' );   
               }

                
  if(isset($data['en_title']) &&  $data['en_title'] != null ){
                   $query->where('en_title' , 'like'  , '%' .$data['en_title']. '%' );   
               }

                
  if(isset($data['image']) &&  $data['image'] != null ){
                   $query->where('image' , 'like'  , '%' .$data['image']. '%' );   
               }

                
  if(isset($data['advertisement_type']) &&  $data['advertisement_type'] != null ){
                   $query->where('advertisement_type' , 'like'  , '%' .$data['advertisement_type']. '%' );   
               }

                
  if(isset($data['advertisement_data']) &&  $data['advertisement_data'] != null ){
                   $query->where('advertisement_data' , 'like'  , '%' .$data['advertisement_data']. '%' );   
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

return view('REWASH.rsa_advertisements.rsa_advertisements')

->with('rsa_advertisements',$rsa_advertisements)
;

//searchfun


                        return view('REWASH.rsa_advertisements.rsa_advertisements' , compact('rsa_advertisements'));

    }





        public function create()
    {

          return view('REWASH.rsa_advertisements.rsa_advertisement_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'title' => 'required',

       'en_title' => 'required',

       'image' => 'required',

       'advertisement_type' => 'required',

       'advertisement_data' => 'required',

       'sorting' => 'required',]);
    $rsa_advertisement = new Rsa_advertisement ();

         $rsa_advertisement->title = $request->title;
  $rsa_advertisement->en_title = $request->en_title;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/rsa_advertisements';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $rsa_advertisement->image = '/'.$destinationPath."/".$fileName;

      }}
  $rsa_advertisement->advertisement_type = $request->advertisement_type;
  $rsa_advertisement->advertisement_data = $request->advertisement_data;
  $rsa_advertisement->is_active = ($request->is_active) ? $request->is_active : 0;
  $rsa_advertisement->sorting = $request->sorting;


    $save = $rsa_advertisement->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('rsa_advertisements.show', $rsa_advertisement->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:rsa_advertisements,id',]);

    $rsa_advertisement = Rsa_advertisement::find($id);
    $next = Rsa_advertisement::where('id','>',$id)->min('id');
    $previous = Rsa_advertisement::where('id','<',$id)->max('id');
       return view('REWASH.rsa_advertisements.rsa_advertisement_view')
        ->with('rsa_advertisement',$rsa_advertisement)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $rsa_advertisement = Rsa_advertisement::find($id); 

      $rsa_advertisement->title = $request->title;
  $rsa_advertisement->en_title = $request->en_title;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/rsa_advertisements';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $rsa_advertisement->image = '/'.$destinationPath."/".$fileName;

      }}
  $rsa_advertisement->advertisement_type = $request->advertisement_type;
  $rsa_advertisement->advertisement_data = $request->advertisement_data;
  $rsa_advertisement->is_active = ($request->is_active) ? $request->is_active : 0;
  $rsa_advertisement->sorting = $request->sorting;

    $update = $rsa_advertisement->update();

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
    $model = Rsa_advertisement::find($id);

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
