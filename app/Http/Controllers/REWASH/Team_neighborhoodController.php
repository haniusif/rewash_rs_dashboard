<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Team_neighborhood;



class Team_neighborhoodController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$team_neighborhoods = \App\Models\REWASH\Team_neighborhood::get();
   
   $data = $request->all();


  $team_neighborhoods = Team_neighborhood::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['neighborhood_id']) &&  $data['neighborhood_id'] != null ){
                   $query->where('neighborhood_id' , 'like'  , '%' .$data['neighborhood_id']. '%' );   
               }

                
  if(isset($data['team_id']) &&  $data['team_id'] != null ){
                   $query->where('team_id' , 'like'  , '%' .$data['team_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.team_neighborhoods.team_neighborhoods')

->with('team_neighborhoods',$team_neighborhoods)
;

//searchfun


                        return view('REWASH.team_neighborhoods.team_neighborhoods' , compact('team_neighborhoods'));

    }





        public function create()
    {

          return view('REWASH.team_neighborhoods.team_neighborhood_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'neighborhood_id' => 'required',

       'team_id' => 'required',]);
    $team_neighborhood = new Team_neighborhood ();

         $team_neighborhood->branch_id = $request->branch_id;
  $team_neighborhood->neighborhood_id = $request->neighborhood_id;
  $team_neighborhood->team_id = $request->team_id;


    $save = $team_neighborhood->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('team_neighborhoods.show', $team_neighborhood->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:team_neighborhoods,id',]);

    $team_neighborhood = Team_neighborhood::find($id);
    $next = Team_neighborhood::where('id','>',$id)->min('id');
    $previous = Team_neighborhood::where('id','<',$id)->max('id');
       return view('REWASH.team_neighborhoods.team_neighborhood_view')
        ->with('team_neighborhood',$team_neighborhood)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $team_neighborhood = Team_neighborhood::find($id); 

      $team_neighborhood->branch_id = $request->branch_id;
  $team_neighborhood->neighborhood_id = $request->neighborhood_id;
  $team_neighborhood->team_id = $request->team_id;

    $update = $team_neighborhood->update();

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
    $model = Team_neighborhood::find($id);

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
