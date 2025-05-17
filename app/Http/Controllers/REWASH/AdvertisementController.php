<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Advertisement;



class AdvertisementController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$advertisements = \App\Models\REWASH\Advertisement::get();
   
   $data = $request->all();


  $advertisements = Advertisement::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['title']) &&  $data['title'] != null ){
                   $query->where('title' , 'like'  , '%' .$data['title']. '%' );   
               }

                
  if(isset($data['image']) &&  $data['image'] != null ){
                   $query->where('image' , 'like'  , '%' .$data['image']. '%' );   
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

                
  if(isset($data['advertisement_type']) &&  $data['advertisement_type'] != null ){
                   $query->where('advertisement_type' , 'like'  , '%' .$data['advertisement_type']. '%' );   
               }

                
  if(isset($data['advertisement_data']) &&  $data['advertisement_data'] != null ){
                   $query->where('advertisement_data' , 'like'  , '%' .$data['advertisement_data']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.advertisements.advertisements')

->with('advertisements',$advertisements)
;

//searchfun


                        return view('REWASH.advertisements.advertisements' , compact('advertisements'));

    }





        public function create()
    {

          return view('REWASH.advertisements.advertisement_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'title' => 'required',

       'image' => 'required',

       'advertisement_type' => 'required',

       'advertisement_data' => 'required',]);
    $advertisement = new Advertisement ();

         $advertisement->branch_id = $request->branch_id;
  $advertisement->title = $request->title;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/advertisements';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $advertisement->image = '/'.$destinationPath."/".$fileName;

      }}
  $advertisement->is_active = ($request->is_active) ? $request->is_active : 0;
  $advertisement->advertisement_type = $request->advertisement_type;
  $advertisement->advertisement_data = $request->advertisement_data;


    $save = $advertisement->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('advertisements.show', $advertisement->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:advertisements,id',]);

    $advertisement = Advertisement::find($id);
    $next = Advertisement::where('id','>',$id)->min('id');
    $previous = Advertisement::where('id','<',$id)->max('id');
       return view('REWASH.advertisements.advertisement_view')
        ->with('advertisement',$advertisement)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $advertisement = Advertisement::find($id); 

      $advertisement->branch_id = $request->branch_id;
  $advertisement->title = $request->title;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/advertisements';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $advertisement->image = '/'.$destinationPath."/".$fileName;

      }}
  $advertisement->is_active = ($request->is_active) ? $request->is_active : 0;
  $advertisement->advertisement_type = $request->advertisement_type;
  $advertisement->advertisement_data = $request->advertisement_data;

    $update = $advertisement->update();

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
    $model = Advertisement::find($id);

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
