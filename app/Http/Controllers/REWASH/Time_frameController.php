<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Time_frame;



class Time_frameController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$time_frames = \App\Models\REWASH\Time_frame::get();
   
   $data = $request->all();


  $time_frames = Time_frame::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
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

return view('REWASH.time_frames.time_frames')

->with('time_frames',$time_frames)
;

//searchfun


                        return view('REWASH.time_frames.time_frames' , compact('time_frames'));

    }





        public function create()
    {

          return view('REWASH.time_frames.time_frame_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',]);
    $time_frame = new Time_frame ();

         $time_frame->branch_id = $request->branch_id;
  $time_frame->name = $request->name;
  $time_frame->en_name = $request->en_name;


    $save = $time_frame->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('time_frames.show', $time_frame->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:time_frames,id',]);

    $time_frame = Time_frame::find($id);
    $next = Time_frame::where('id','>',$id)->min('id');
    $previous = Time_frame::where('id','<',$id)->max('id');
       return view('REWASH.time_frames.time_frame_view')
        ->with('time_frame',$time_frame)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $time_frame = Time_frame::find($id); 

      $time_frame->branch_id = $request->branch_id;
  $time_frame->name = $request->name;
  $time_frame->en_name = $request->en_name;

    $update = $time_frame->update();

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
    $model = Time_frame::find($id);

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
