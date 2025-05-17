<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Appointment_schedule;



class Appointment_scheduleController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$appointment_schedules = \App\Models\REWASH\Appointment_schedule::get();
   
   $data = $request->all();


  $appointment_schedules = Appointment_schedule::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['zone_id']) &&  $data['zone_id'] != null ){
                   $query->where('zone_id' , 'like'  , '%' .$data['zone_id']. '%' );   
               }

                
  if(isset($data['appointment_id']) &&  $data['appointment_id'] != null ){
                   $query->where('appointment_id' , 'like'  , '%' .$data['appointment_id']. '%' );   
               }

                
  if(isset($data['appointment_schedule_status_id']) &&  $data['appointment_schedule_status_id'] != null ){
                   $query->where('appointment_schedule_status_id' , 'like'  , '%' .$data['appointment_schedule_status_id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['appointment_date']) &&  $data['appointment_date'] != null ){
                   $query->where('appointment_date' , 'like'  , '%' .$data['appointment_date']. '%' );   
               }

                     if(isset($data['is_appointment_date_changed']) && $data['is_appointment_date_changed'] != 'all' ){
            
                 $query->where('is_appointment_date_changed' , $data['is_appointment_date_changed']);   
            }
 
  if(isset($data['slot_id']) &&  $data['slot_id'] != null ){
                   $query->where('slot_id' , 'like'  , '%' .$data['slot_id']. '%' );   
               }

                
  if(isset($data['neighborhood_id']) &&  $data['neighborhood_id'] != null ){
                   $query->where('neighborhood_id' , 'like'  , '%' .$data['neighborhood_id']. '%' );   
               }

                
  if(isset($data['location']) &&  $data['location'] != null ){
                   $query->where('location' , 'like'  , '%' .$data['location']. '%' );   
               }

                
  if(isset($data['address']) &&  $data['address'] != null ){
                   $query->where('address' , 'like'  , '%' .$data['address']. '%' );   
               }

                     if(isset($data['is_location_changed']) && $data['is_location_changed'] != 'all' ){
            
                 $query->where('is_location_changed' , $data['is_location_changed']);   
            }
 
  if(isset($data['notes']) &&  $data['notes'] != null ){
                   $query->where('notes' , 'like'  , '%' .$data['notes']. '%' );   
               }

                
  if(isset($data['feedback']) &&  $data['feedback'] != null ){
                   $query->where('feedback' , 'like'  , '%' .$data['feedback']. '%' );   
               }

                
  if(isset($data['is_scheduled']) &&  $data['is_scheduled'] != null ){
                   $query->where('is_scheduled' , 'like'  , '%' .$data['is_scheduled']. '%' );   
               }

                     if(isset($data['can_cancel']) && $data['can_cancel'] != 'all' ){
            
                 $query->where('can_cancel' , $data['can_cancel']);   
            }
      if(isset($data['can_reschedule']) && $data['can_reschedule'] != 'all' ){
            
                 $query->where('can_reschedule' , $data['can_reschedule']);   
            }
 
  if(isset($data['can_rate']) &&  $data['can_rate'] != null ){
                   $query->where('can_rate' , 'like'  , '%' .$data['can_rate']. '%' );   
               }

                     if(isset($data['can_change_location']) && $data['can_change_location'] != 'all' ){
            
                 $query->where('can_change_location' , $data['can_change_location']);   
            }
      if(isset($data['can_track_worker']) && $data['can_track_worker'] != 'all' ){
            
                 $query->where('can_track_worker' , $data['can_track_worker']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                     if(isset($data['in_process']) && $data['in_process'] != 'all' ){
            
                 $query->where('in_process' , $data['in_process']);   
            }
      if(isset($data['is_completed']) && $data['is_completed'] != 'all' ){
            
                 $query->where('is_completed' , $data['is_completed']);   
            }
 
  if(isset($data['worker_status_id']) &&  $data['worker_status_id'] != null ){
                   $query->where('worker_status_id' , 'like'  , '%' .$data['worker_status_id']. '%' );   
               }

                
  if(isset($data['e_washing_time']) &&  $data['e_washing_time'] != null ){
                   $query->where('e_washing_time' , 'like'  , '%' .$data['e_washing_time']. '%' );   
               }

                
  if(isset($data['go_to_client']) &&  $data['go_to_client'] != null ){
                   $query->where('go_to_client' , 'like'  , '%' .$data['go_to_client']. '%' );   
               }

                
  if(isset($data['arrived_and_cancel_time']) &&  $data['arrived_and_cancel_time'] != null ){
                   $query->where('arrived_and_cancel_time' , 'like'  , '%' .$data['arrived_and_cancel_time']. '%' );   
               }

                
  if(isset($data['start_wash_time']) &&  $data['start_wash_time'] != null ){
                   $query->where('start_wash_time' , 'like'  , '%' .$data['start_wash_time']. '%' );   
               }

                
  if(isset($data['finish_wash_time']) &&  $data['finish_wash_time'] != null ){
                   $query->where('finish_wash_time' , 'like'  , '%' .$data['finish_wash_time']. '%' );   
               }

                
  if(isset($data['cancel_wash_time']) &&  $data['cancel_wash_time'] != null ){
                   $query->where('cancel_wash_time' , 'like'  , '%' .$data['cancel_wash_time']. '%' );   
               }

                     if(isset($data['is_skip_rate']) && $data['is_skip_rate'] != 'all' ){
            
                 $query->where('is_skip_rate' , $data['is_skip_rate']);   
            }
 
 
 })
  ->paginate(50);

return view('REWASH.appointment_schedules.appointment_schedules')

->with('appointment_schedules',$appointment_schedules)
;

//searchfun


                        return view('REWASH.appointment_schedules.appointment_schedules' , compact('appointment_schedules'));

    }





        public function create()
    {

          return view('REWASH.appointment_schedules.appointment_schedule_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'zone_id' => 'required',

       'appointment_id' => 'required',

       'appointment_schedule_status_id' => 'required',

       'user_id' => 'required',

       'appointment_date' => 'required',

       'is_appointment_date_changed' => 'required',

       'slot_id' => 'required',

       'neighborhood_id' => 'required',

       'location' => 'required',

       'address' => 'required',

       'is_location_changed' => 'required',

       'notes' => 'required',

       'feedback' => 'required',

       'is_scheduled' => 'required',

       'can_cancel' => 'required',

       'can_reschedule' => 'required',

       'can_rate' => 'required',

       'can_change_location' => 'required',

       'can_track_worker' => 'required',

       'in_process' => 'required',

       'is_completed' => 'required',

       'worker_status_id' => 'required',

       'e_washing_time' => 'required',

       'go_to_client' => 'required',

       'arrived_and_cancel_time' => 'required',

       'start_wash_time' => 'required',

       'finish_wash_time' => 'required',

       'cancel_wash_time' => 'required',

       'is_skip_rate' => 'required',]);
    $appointment_schedule = new Appointment_schedule ();

         $appointment_schedule->branch_id = $request->branch_id;
  $appointment_schedule->zone_id = $request->zone_id;
  $appointment_schedule->appointment_id = $request->appointment_id;
  $appointment_schedule->appointment_schedule_status_id = $request->appointment_schedule_status_id;
  $appointment_schedule->user_id = $request->user_id;
  $appointment_schedule->appointment_date = $request->appointment_date;
  $appointment_schedule->is_appointment_date_changed = $request->is_appointment_date_changed;
  $appointment_schedule->slot_id = $request->slot_id;
  $appointment_schedule->neighborhood_id = $request->neighborhood_id;
  $appointment_schedule->location = $request->location;
  $appointment_schedule->address = $request->address;
  $appointment_schedule->is_location_changed = $request->is_location_changed;
  $appointment_schedule->notes = $request->notes;
  $appointment_schedule->feedback = $request->feedback;
  $appointment_schedule->is_scheduled = $request->is_scheduled;
  $appointment_schedule->can_cancel = $request->can_cancel;
  $appointment_schedule->can_reschedule = $request->can_reschedule;
  $appointment_schedule->can_rate = $request->can_rate;
  $appointment_schedule->can_change_location = $request->can_change_location;
  $appointment_schedule->can_track_worker = $request->can_track_worker;
  $appointment_schedule->in_process = $request->in_process;
  $appointment_schedule->is_completed = $request->is_completed;
  $appointment_schedule->worker_status_id = $request->worker_status_id;
  $appointment_schedule->e_washing_time = $request->e_washing_time;
  $appointment_schedule->go_to_client = $request->go_to_client;
  $appointment_schedule->arrived_and_cancel_time = $request->arrived_and_cancel_time;
  $appointment_schedule->start_wash_time = $request->start_wash_time;
  $appointment_schedule->finish_wash_time = $request->finish_wash_time;
  $appointment_schedule->cancel_wash_time = $request->cancel_wash_time;
  $appointment_schedule->is_skip_rate = $request->is_skip_rate;


    $save = $appointment_schedule->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('appointment_schedules.show', $appointment_schedule->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:appointment_schedules,id',]);

    $appointment_schedule = Appointment_schedule::find($id);
    $next = Appointment_schedule::where('id','>',$id)->min('id');
    $previous = Appointment_schedule::where('id','<',$id)->max('id');
       return view('REWASH.appointment_schedules.appointment_schedule_view')
        ->with('appointment_schedule',$appointment_schedule)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $appointment_schedule = Appointment_schedule::find($id); 

      $appointment_schedule->branch_id = $request->branch_id;
  $appointment_schedule->zone_id = $request->zone_id;
  $appointment_schedule->appointment_id = $request->appointment_id;
  $appointment_schedule->appointment_schedule_status_id = $request->appointment_schedule_status_id;
  $appointment_schedule->user_id = $request->user_id;
  $appointment_schedule->appointment_date = $request->appointment_date;
  $appointment_schedule->is_appointment_date_changed = $request->is_appointment_date_changed;
  $appointment_schedule->slot_id = $request->slot_id;
  $appointment_schedule->neighborhood_id = $request->neighborhood_id;
  $appointment_schedule->location = $request->location;
  $appointment_schedule->address = $request->address;
  $appointment_schedule->is_location_changed = $request->is_location_changed;
  $appointment_schedule->notes = $request->notes;
  $appointment_schedule->feedback = $request->feedback;
  $appointment_schedule->is_scheduled = $request->is_scheduled;
  $appointment_schedule->can_cancel = $request->can_cancel;
  $appointment_schedule->can_reschedule = $request->can_reschedule;
  $appointment_schedule->can_rate = $request->can_rate;
  $appointment_schedule->can_change_location = $request->can_change_location;
  $appointment_schedule->can_track_worker = $request->can_track_worker;
  $appointment_schedule->in_process = $request->in_process;
  $appointment_schedule->is_completed = $request->is_completed;
  $appointment_schedule->worker_status_id = $request->worker_status_id;
  $appointment_schedule->e_washing_time = $request->e_washing_time;
  $appointment_schedule->go_to_client = $request->go_to_client;
  $appointment_schedule->arrived_and_cancel_time = $request->arrived_and_cancel_time;
  $appointment_schedule->start_wash_time = $request->start_wash_time;
  $appointment_schedule->finish_wash_time = $request->finish_wash_time;
  $appointment_schedule->cancel_wash_time = $request->cancel_wash_time;
  $appointment_schedule->is_skip_rate = $request->is_skip_rate;

    $update = $appointment_schedule->update();

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
    $model = Appointment_schedule::find($id);

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
