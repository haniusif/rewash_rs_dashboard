<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\User_loyalty_point;



class User_loyalty_pointController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$user_loyalty_points = \App\Models\REWASH\User_loyalty_point::get();
   
   $data = $request->all();


  $user_loyalty_points = User_loyalty_point::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['loyalty_points']) &&  $data['loyalty_points'] != null ){
                   $query->where('loyalty_points' , 'like'  , '%' .$data['loyalty_points']. '%' );   
               }

                
  if(isset($data['loyalty_point_text']) &&  $data['loyalty_point_text'] != null ){
                   $query->where('loyalty_point_text' , 'like'  , '%' .$data['loyalty_point_text']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.user_loyalty_points.user_loyalty_points')

->with('user_loyalty_points',$user_loyalty_points)
;

//searchfun


                        return view('REWASH.user_loyalty_points.user_loyalty_points' , compact('user_loyalty_points'));

    }





        public function create()
    {

          return view('REWASH.user_loyalty_points.user_loyalty_point_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'loyalty_points' => 'required',

       'loyalty_point_text' => 'required',]);
    $user_loyalty_point = new User_loyalty_point ();

         $user_loyalty_point->user_id = $request->user_id;
  $user_loyalty_point->loyalty_points = $request->loyalty_points;
  $user_loyalty_point->loyalty_point_text = $request->loyalty_point_text;
  $user_loyalty_point->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $user_loyalty_point->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('user_loyalty_points.show', $user_loyalty_point->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:user_loyalty_points,id',]);

    $user_loyalty_point = User_loyalty_point::find($id);
    $next = User_loyalty_point::where('id','>',$id)->min('id');
    $previous = User_loyalty_point::where('id','<',$id)->max('id');
       return view('REWASH.user_loyalty_points.user_loyalty_point_view')
        ->with('user_loyalty_point',$user_loyalty_point)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $user_loyalty_point = User_loyalty_point::find($id); 

      $user_loyalty_point->user_id = $request->user_id;
  $user_loyalty_point->loyalty_points = $request->loyalty_points;
  $user_loyalty_point->loyalty_point_text = $request->loyalty_point_text;
  $user_loyalty_point->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $user_loyalty_point->update();

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
    $model = User_loyalty_point::find($id);

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
