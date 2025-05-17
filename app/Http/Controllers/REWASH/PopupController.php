<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Popup;



class PopupController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$popups = \App\Models\REWASH\Popup::get();
   
   $data = $request->all();


  $popups = Popup::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
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

                
 
 })
  ->paginate(50);

return view('REWASH.popups.popups')

->with('popups',$popups)
;

//searchfun


                        return view('REWASH.popups.popups' , compact('popups'));

    }





        public function create()
    {

          return view('REWASH.popups.popup_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'title' => 'required',

       'image' => 'required',]);
    $popup = new Popup ();

         $popup->title = $request->title;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/popups';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $popup->image = '/'.$destinationPath."/".$fileName;

      }}
  $popup->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $popup->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('popups.show', $popup->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:popups,id',]);

    $popup = Popup::find($id);
    $next = Popup::where('id','>',$id)->min('id');
    $previous = Popup::where('id','<',$id)->max('id');
       return view('REWASH.popups.popup_view')
        ->with('popup',$popup)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $popup = Popup::find($id); 

      $popup->title = $request->title;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/popups';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $popup->image = '/'.$destinationPath."/".$fileName;

      }}
  $popup->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $popup->update();

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
    $model = Popup::find($id);

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
