<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Loyalty_point;



class Loyalty_pointController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$loyalty_points = \App\Models\REWASH\Loyalty_point::get();
   
   $data = $request->all();


  $loyalty_points = Loyalty_point::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['points']) &&  $data['points'] != null ){
                   $query->where('points' , 'like'  , '%' .$data['points']. '%' );   
               }

                
  if(isset($data['amount']) &&  $data['amount'] != null ){
                   $query->where('amount' , 'like'  , '%' .$data['amount']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['sorting']) &&  $data['sorting'] != null ){
                   $query->where('sorting' , 'like'  , '%' .$data['sorting']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.loyalty_points.loyalty_points')

->with('loyalty_points',$loyalty_points)
;

//searchfun


                        return view('REWASH.loyalty_points.loyalty_points' , compact('loyalty_points'));

    }





        public function create()
    {

          return view('REWASH.loyalty_points.loyalty_point_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'points' => 'required',

       'amount' => 'required',

       'sorting' => 'required',]);
    $loyalty_point = new Loyalty_point ();

         $loyalty_point->points = $request->points;
  $loyalty_point->amount = $request->amount;
  $loyalty_point->is_active = ($request->is_active) ? $request->is_active : 0;
  $loyalty_point->sorting = $request->sorting;


    $save = $loyalty_point->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('loyalty_points.show', $loyalty_point->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:loyalty_points,id',]);

    $loyalty_point = Loyalty_point::find($id);
    $next = Loyalty_point::where('id','>',$id)->min('id');
    $previous = Loyalty_point::where('id','<',$id)->max('id');
       return view('REWASH.loyalty_points.loyalty_point_view')
        ->with('loyalty_point',$loyalty_point)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $loyalty_point = Loyalty_point::find($id); 

      $loyalty_point->points = $request->points;
  $loyalty_point->amount = $request->amount;
  $loyalty_point->is_active = ($request->is_active) ? $request->is_active : 0;
  $loyalty_point->sorting = $request->sorting;

    $update = $loyalty_point->update();

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
    $model = Loyalty_point::find($id);

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
