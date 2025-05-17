<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Opening_hour;



class Opening_hourController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$opening_hours = \App\Models\REWASH\Opening_hour::get();
   
   $data = $request->all();


  $opening_hours = Opening_hour::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['day']) &&  $data['day'] != null ){
                   $query->where('day' , 'like'  , '%' .$data['day']. '%' );   
               }

                
  if(isset($data['opening_time']) &&  $data['opening_time'] != null ){
                   $query->where('opening_time' , 'like'  , '%' .$data['opening_time']. '%' );   
               }

                
  if(isset($data['closing_time']) &&  $data['closing_time'] != null ){
                   $query->where('closing_time' , 'like'  , '%' .$data['closing_time']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.opening_hours.opening_hours')

->with('opening_hours',$opening_hours)
;

//searchfun


                        return view('REWASH.opening_hours.opening_hours' , compact('opening_hours'));

    }





        public function create()
    {

          return view('REWASH.opening_hours.opening_hour_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'day' => 'required',

       'opening_time' => 'required',

       'closing_time' => 'required',]);
    $opening_hour = new Opening_hour ();

         $opening_hour->branch_id = $request->branch_id;
  $opening_hour->day = $request->day;
  $opening_hour->opening_time = $request->opening_time;
  $opening_hour->closing_time = $request->closing_time;


    $save = $opening_hour->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('opening_hours.show', $opening_hour->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:opening_hours,id',]);

    $opening_hour = Opening_hour::find($id);
    $next = Opening_hour::where('id','>',$id)->min('id');
    $previous = Opening_hour::where('id','<',$id)->max('id');
       return view('REWASH.opening_hours.opening_hour_view')
        ->with('opening_hour',$opening_hour)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $opening_hour = Opening_hour::find($id); 

      $opening_hour->branch_id = $request->branch_id;
  $opening_hour->day = $request->day;
  $opening_hour->opening_time = $request->opening_time;
  $opening_hour->closing_time = $request->closing_time;

    $update = $opening_hour->update();

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
    $model = Opening_hour::find($id);

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
