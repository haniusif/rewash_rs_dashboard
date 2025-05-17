<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Appointment_schedule_image;



class Appointment_schedule_imageController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$appointment_schedule_images = \App\Models\REWASH\Appointment_schedule_image::get();
   
   $data = $request->all();


  $appointment_schedule_images = Appointment_schedule_image::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['appointment_schedule_id']) &&  $data['appointment_schedule_id'] != null ){
                   $query->where('appointment_schedule_id' , 'like'  , '%' .$data['appointment_schedule_id']. '%' );   
               }

                
  if(isset($data['image']) &&  $data['image'] != null ){
                   $query->where('image' , 'like'  , '%' .$data['image']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.appointment_schedule_images.appointment_schedule_images')

->with('appointment_schedule_images',$appointment_schedule_images)
;

//searchfun


                        return view('REWASH.appointment_schedule_images.appointment_schedule_images' , compact('appointment_schedule_images'));

    }





        public function create()
    {

          return view('REWASH.appointment_schedule_images.appointment_schedule_image_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'appointment_schedule_id' => 'required',

       'image' => 'required',

       'user_id' => 'required',]);
    $appointment_schedule_image = new Appointment_schedule_image ();

         $appointment_schedule_image->appointment_schedule_id = $request->appointment_schedule_id;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/appointment_schedule_images';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $appointment_schedule_image->image = '/'.$destinationPath."/".$fileName;

      }}
  $appointment_schedule_image->user_id = $request->user_id;


    $save = $appointment_schedule_image->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('appointment_schedule_images.show', $appointment_schedule_image->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:appointment_schedule_images,id',]);

    $appointment_schedule_image = Appointment_schedule_image::find($id);
    $next = Appointment_schedule_image::where('id','>',$id)->min('id');
    $previous = Appointment_schedule_image::where('id','<',$id)->max('id');
       return view('REWASH.appointment_schedule_images.appointment_schedule_image_view')
        ->with('appointment_schedule_image',$appointment_schedule_image)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $appointment_schedule_image = Appointment_schedule_image::find($id); 

      $appointment_schedule_image->appointment_schedule_id = $request->appointment_schedule_id;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/appointment_schedule_images';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $appointment_schedule_image->image = '/'.$destinationPath."/".$fileName;

      }}
  $appointment_schedule_image->user_id = $request->user_id;

    $update = $appointment_schedule_image->update();

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
    $model = Appointment_schedule_image::find($id);

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
