<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Appointment_schedule_term;



class Appointment_schedule_termController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$appointment_schedule_terms = \App\Models\REWASH\Appointment_schedule_term::get();
   
   $data = $request->all();


  $appointment_schedule_terms = Appointment_schedule_term::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['appointment_schedule_id']) &&  $data['appointment_schedule_id'] != null ){
                   $query->where('appointment_schedule_id' , 'like'  , '%' .$data['appointment_schedule_id']. '%' );   
               }

                
  if(isset($data['terms_text']) &&  $data['terms_text'] != null ){
                   $query->where('terms_text' , 'like'  , '%' .$data['terms_text']. '%' );   
               }

                
  if(isset($data['terms_en_text']) &&  $data['terms_en_text'] != null ){
                   $query->where('terms_en_text' , 'like'  , '%' .$data['terms_en_text']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.appointment_schedule_terms.appointment_schedule_terms')

->with('appointment_schedule_terms',$appointment_schedule_terms)
;

//searchfun


                        return view('REWASH.appointment_schedule_terms.appointment_schedule_terms' , compact('appointment_schedule_terms'));

    }





        public function create()
    {

          return view('REWASH.appointment_schedule_terms.appointment_schedule_term_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'appointment_schedule_id' => 'required',

       'terms_text' => 'required',

       'terms_en_text' => 'required',]);
    $appointment_schedule_term = new Appointment_schedule_term ();

         $appointment_schedule_term->appointment_schedule_id = $request->appointment_schedule_id;
  $appointment_schedule_term->terms_text = $request->terms_text;
  $appointment_schedule_term->terms_en_text = $request->terms_en_text;


    $save = $appointment_schedule_term->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('appointment_schedule_terms.show', $appointment_schedule_term->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:appointment_schedule_terms,id',]);

    $appointment_schedule_term = Appointment_schedule_term::find($id);
    $next = Appointment_schedule_term::where('id','>',$id)->min('id');
    $previous = Appointment_schedule_term::where('id','<',$id)->max('id');
       return view('REWASH.appointment_schedule_terms.appointment_schedule_term_view')
        ->with('appointment_schedule_term',$appointment_schedule_term)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $appointment_schedule_term = Appointment_schedule_term::find($id); 

      $appointment_schedule_term->appointment_schedule_id = $request->appointment_schedule_id;
  $appointment_schedule_term->terms_text = $request->terms_text;
  $appointment_schedule_term->terms_en_text = $request->terms_en_text;

    $update = $appointment_schedule_term->update();

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
    $model = Appointment_schedule_term::find($id);

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
