<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Team_vacation;



class Team_vacationController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$team_vacations = \App\Models\REWASH\Team_vacation::get();
   
   $data = $request->all();


  $team_vacations = Team_vacation::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['team_id']) &&  $data['team_id'] != null ){
                   $query->where('team_id' , 'like'  , '%' .$data['team_id']. '%' );   
               }

                
  if(isset($data['general_status_id']) &&  $data['general_status_id'] != null ){
                   $query->where('general_status_id' , 'like'  , '%' .$data['general_status_id']. '%' );   
               }

                
  if(isset($data['start_date']) &&  $data['start_date'] != null ){
                   $query->where('start_date' , 'like'  , '%' .$data['start_date']. '%' );   
               }

                
  if(isset($data['end_date']) &&  $data['end_date'] != null ){
                   $query->where('end_date' , 'like'  , '%' .$data['end_date']. '%' );   
               }

                
  if(isset($data['reason']) &&  $data['reason'] != null ){
                   $query->where('reason' , 'like'  , '%' .$data['reason']. '%' );   
               }

                
  if(isset($data['attachments']) &&  $data['attachments'] != null ){
                   $query->where('attachments' , 'like'  , '%' .$data['attachments']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.team_vacations.team_vacations')

->with('team_vacations',$team_vacations)
;

//searchfun


                        return view('REWASH.team_vacations.team_vacations' , compact('team_vacations'));

    }





        public function create()
    {

          return view('REWASH.team_vacations.team_vacation_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'team_id' => 'required',

       'general_status_id' => 'required',

       'start_date' => 'required',

       'end_date' => 'required',

       'reason' => 'required',

       'attachments' => 'required',]);
    $team_vacation = new Team_vacation ();

         $team_vacation->team_id = $request->team_id;
  $team_vacation->general_status_id = $request->general_status_id;
  $team_vacation->start_date = $request->start_date;
  $team_vacation->end_date = $request->end_date;
  $team_vacation->reason = $request->reason;
  $team_vacation->attachments = $request->attachments;


    $save = $team_vacation->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('team_vacations.show', $team_vacation->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:team_vacations,id',]);

    $team_vacation = Team_vacation::find($id);
    $next = Team_vacation::where('id','>',$id)->min('id');
    $previous = Team_vacation::where('id','<',$id)->max('id');
       return view('REWASH.team_vacations.team_vacation_view')
        ->with('team_vacation',$team_vacation)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $team_vacation = Team_vacation::find($id); 

      $team_vacation->team_id = $request->team_id;
  $team_vacation->general_status_id = $request->general_status_id;
  $team_vacation->start_date = $request->start_date;
  $team_vacation->end_date = $request->end_date;
  $team_vacation->reason = $request->reason;
  $team_vacation->attachments = $request->attachments;

    $update = $team_vacation->update();

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
    $model = Team_vacation::find($id);

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
