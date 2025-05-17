<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Slot;



class SlotController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$slots = \App\Models\REWASH\Slot::get();
   
   $data = $request->all();


  $slots = Slot::orderby('id','DESC')

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

                
  if(isset($data['from_time']) &&  $data['from_time'] != null ){
                   $query->where('from_time' , 'like'  , '%' .$data['from_time']. '%' );   
               }

                
  if(isset($data['to_time']) &&  $data['to_time'] != null ){
                   $query->where('to_time' , 'like'  , '%' .$data['to_time']. '%' );   
               }

                
  if(isset($data['date']) &&  $data['date'] != null ){
                   $query->where('date' , 'like'  , '%' .$data['date']. '%' );   
               }

                     if(isset($data['is_selected']) && $data['is_selected'] != 'all' ){
            
                 $query->where('is_selected' , $data['is_selected']);   
            }
      if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['times_to_book']) &&  $data['times_to_book'] != null ){
                   $query->where('times_to_book' , 'like'  , '%' .$data['times_to_book']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['created_by']) &&  $data['created_by'] != null ){
                   $query->where('created_by' , 'like'  , '%' .$data['created_by']. '%' );   
               }

                
  if(isset($data['updated_by']) &&  $data['updated_by'] != null ){
                   $query->where('updated_by' , 'like'  , '%' .$data['updated_by']. '%' );   
               }

                
  if(isset($data['promo_code_id']) &&  $data['promo_code_id'] != null ){
                   $query->where('promo_code_id' , 'like'  , '%' .$data['promo_code_id']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.slots.slots')

->with('slots',$slots)
;

//searchfun


                        return view('REWASH.slots.slots' , compact('slots'));

    }





        public function create()
    {

          return view('REWASH.slots.slot_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'zone_id' => 'required',

       'from_time' => 'required',

       'to_time' => 'required',

       'date' => 'required',

       'is_selected' => 'required',

       'times_to_book' => 'required',

       'promo_code_id' => 'required',]);
    $slot = new Slot ();

         $slot->branch_id = $request->branch_id;
  $slot->zone_id = $request->zone_id;
  $slot->from_time = $request->from_time;
  $slot->to_time = $request->to_time;
  $slot->date = $request->date;
  $slot->is_selected = $request->is_selected;
  $slot->is_active = ($request->is_active) ? $request->is_active : 0;
  $slot->times_to_book = $request->times_to_book;
  $slot->created_by = Auth::user()->id; 
  $slot->updated_by = Auth::user()->id; 
  $slot->promo_code_id = $request->promo_code_id;


    $save = $slot->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('slots.show', $slot->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:slots,id',]);

    $slot = Slot::find($id);
    $next = Slot::where('id','>',$id)->min('id');
    $previous = Slot::where('id','<',$id)->max('id');
       return view('REWASH.slots.slot_view')
        ->with('slot',$slot)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $slot = Slot::find($id); 

      $slot->branch_id = $request->branch_id;
  $slot->zone_id = $request->zone_id;
  $slot->from_time = $request->from_time;
  $slot->to_time = $request->to_time;
  $slot->date = $request->date;
  $slot->is_selected = $request->is_selected;
  $slot->is_active = ($request->is_active) ? $request->is_active : 0;
  $slot->times_to_book = $request->times_to_book;
  $slot->updated_by = Auth::user()->id; 
  $slot->promo_code_id = $request->promo_code_id;

    $update = $slot->update();

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
    $model = Slot::find($id);

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
