<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\B2b_shift;



class B2b_shiftController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$b2b_shifts = \App\Models\REWASH\B2b_shift::get();
   
   $data = $request->all();


  $b2b_shifts = B2b_shift::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['team_id']) &&  $data['team_id'] != null ){
                   $query->where('team_id' , 'like'  , '%' .$data['team_id']. '%' );   
               }

                
  if(isset($data['platform_id']) &&  $data['platform_id'] != null ){
                   $query->where('platform_id' , 'like'  , '%' .$data['platform_id']. '%' );   
               }

                
  if(isset($data['from_time']) &&  $data['from_time'] != null ){
                   $query->where('from_time' , 'like'  , '%' .$data['from_time']. '%' );   
               }

                
  if(isset($data['to_time']) &&  $data['to_time'] != null ){
                   $query->where('to_time' , 'like'  , '%' .$data['to_time']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.b2b_shifts.b2b_shifts')

->with('b2b_shifts',$b2b_shifts)
;

//searchfun


                        return view('REWASH.b2b_shifts.b2b_shifts' , compact('b2b_shifts'));

    }





        public function create()
    {

          return view('REWASH.b2b_shifts.b2b_shift_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'team_id' => 'required',

       'platform_id' => 'required',

       'from_time' => 'required',

       'to_time' => 'required',]);
    $b2b_shift = new B2b_shift ();

         $b2b_shift->team_id = $request->team_id;
  $b2b_shift->platform_id = $request->platform_id;
  $b2b_shift->from_time = $request->from_time;
  $b2b_shift->to_time = $request->to_time;


    $save = $b2b_shift->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('b2b_shifts.show', $b2b_shift->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:b2b_shifts,id',]);

    $b2b_shift = B2b_shift::find($id);
    $next = B2b_shift::where('id','>',$id)->min('id');
    $previous = B2b_shift::where('id','<',$id)->max('id');
       return view('REWASH.b2b_shifts.b2b_shift_view')
        ->with('b2b_shift',$b2b_shift)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $b2b_shift = B2b_shift::find($id); 

      $b2b_shift->team_id = $request->team_id;
  $b2b_shift->platform_id = $request->platform_id;
  $b2b_shift->from_time = $request->from_time;
  $b2b_shift->to_time = $request->to_time;

    $update = $b2b_shift->update();

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
    $model = B2b_shift::find($id);

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
