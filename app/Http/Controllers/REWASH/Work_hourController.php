<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Work_hour;



class Work_hourController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$work_hours = \App\Models\REWASH\Work_hour::get();
   
   $data = $request->all();


  $work_hours = Work_hour::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['team_id']) &&  $data['team_id'] != null ){
                   $query->where('team_id' , 'like'  , '%' .$data['team_id']. '%' );   
               }

                
  if(isset($data['week_day']) &&  $data['week_day'] != null ){
                   $query->where('week_day' , 'like'  , '%' .$data['week_day']. '%' );   
               }

                
  if(isset($data['work_hours_from']) &&  $data['work_hours_from'] != null ){
                   $query->where('work_hours_from' , 'like'  , '%' .$data['work_hours_from']. '%' );   
               }

                
  if(isset($data['work_hours_to']) &&  $data['work_hours_to'] != null ){
                   $query->where('work_hours_to' , 'like'  , '%' .$data['work_hours_to']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.work_hours.work_hours')

->with('work_hours',$work_hours)
;

//searchfun


                        return view('REWASH.work_hours.work_hours' , compact('work_hours'));

    }





        public function create()
    {

          return view('REWASH.work_hours.work_hour_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'team_id' => 'required',

       'week_day' => 'required',

       'work_hours_from' => 'required',

       'work_hours_to' => 'required',]);
    $work_hour = new Work_hour ();

         $work_hour->branch_id = $request->branch_id;
  $work_hour->team_id = $request->team_id;
  $work_hour->week_day = $request->week_day;
  $work_hour->work_hours_from = $request->work_hours_from;
  $work_hour->work_hours_to = $request->work_hours_to;


    $save = $work_hour->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('work_hours.show', $work_hour->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:work_hours,id',]);

    $work_hour = Work_hour::find($id);
    $next = Work_hour::where('id','>',$id)->min('id');
    $previous = Work_hour::where('id','<',$id)->max('id');
       return view('REWASH.work_hours.work_hour_view')
        ->with('work_hour',$work_hour)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $work_hour = Work_hour::find($id); 

      $work_hour->branch_id = $request->branch_id;
  $work_hour->team_id = $request->team_id;
  $work_hour->week_day = $request->week_day;
  $work_hour->work_hours_from = $request->work_hours_from;
  $work_hour->work_hours_to = $request->work_hours_to;

    $update = $work_hour->update();

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
    $model = Work_hour::find($id);

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
