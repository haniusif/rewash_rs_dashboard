<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Rsa_best_offer;



class Rsa_best_offerController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$rsa_best_offers = \App\Models\REWASH\Rsa_best_offer::get();
   
   $data = $request->all();


  $rsa_best_offers = Rsa_best_offer::orderby('id','DESC')

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

return view('REWASH.rsa_best_offers.rsa_best_offers')

->with('rsa_best_offers',$rsa_best_offers)
;

//searchfun


                        return view('REWASH.rsa_best_offers.rsa_best_offers' , compact('rsa_best_offers'));

    }





        public function create()
    {

          return view('REWASH.rsa_best_offers.rsa_best_offer_add')
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
    $rsa_best_offer = new Rsa_best_offer ();

         $rsa_best_offer->title = $request->title;
  $rsa_best_offer->en_title = $request->en_title;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/rsa_best_offers';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $rsa_best_offer->image = '/'.$destinationPath."/".$fileName;

      }}
  $rsa_best_offer->advertisement_type = $request->advertisement_type;
  $rsa_best_offer->advertisement_data = $request->advertisement_data;
  $rsa_best_offer->is_active = ($request->is_active) ? $request->is_active : 0;
  $rsa_best_offer->sorting = $request->sorting;


    $save = $rsa_best_offer->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('rsa_best_offers.show', $rsa_best_offer->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:rsa_best_offers,id',]);

    $rsa_best_offer = Rsa_best_offer::find($id);
    $next = Rsa_best_offer::where('id','>',$id)->min('id');
    $previous = Rsa_best_offer::where('id','<',$id)->max('id');
       return view('REWASH.rsa_best_offers.rsa_best_offer_view')
        ->with('rsa_best_offer',$rsa_best_offer)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $rsa_best_offer = Rsa_best_offer::find($id); 

      $rsa_best_offer->title = $request->title;
  $rsa_best_offer->en_title = $request->en_title;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/rsa_best_offers';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $rsa_best_offer->image = '/'.$destinationPath."/".$fileName;

      }}
  $rsa_best_offer->advertisement_type = $request->advertisement_type;
  $rsa_best_offer->advertisement_data = $request->advertisement_data;
  $rsa_best_offer->is_active = ($request->is_active) ? $request->is_active : 0;
  $rsa_best_offer->sorting = $request->sorting;

    $update = $rsa_best_offer->update();

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
    $model = Rsa_best_offer::find($id);

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
