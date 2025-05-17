<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Social_team;
use App\Models\REWASH\Team;



class Social_teamController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$social_teams = \App\Models\REWASH\Social_team::get();

$teams = \App\Models\REWASH\Team::get();
   
   $data = $request->all();


  $social_teams = Social_team::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                     if(isset($data['team_id']) && $data['team_id'] != 'all' ){
            
                 $query->where('team_id' , $data['team_id']);   
            }
 
  if(isset($data['url']) &&  $data['url'] != null ){
                   $query->where('url' , 'like'  , '%' .$data['url']. '%' );   
               }

                
  if(isset($data['social']) &&  $data['social'] != null ){
                   $query->where('social' , 'like'  , '%' .$data['social']. '%' );   
               }

                
  if(isset($data['social_icon']) &&  $data['social_icon'] != null ){
                   $query->where('social_icon' , 'like'  , '%' .$data['social_icon']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.social_teams.social_teams')

->with('social_teams',$social_teams)
->with('teams',$teams)
;

//searchfun


                        return view('REWASH.social_teams.social_teams' , compact('social_teams'));

    }






        public function create()
    {

   $teams = Team::all();
       return view('REWASH.social_teams.social_team_add')->with('teams' , $teams)

       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'team_id' => 'required',

       'url' => 'required',

       'social' => 'required',

       'social_icon' => 'required',]);
    $social_team = new Social_team ();

         $social_team->branch_id = $request->branch_id;
  $social_team->team_id = $request->team_id;
  $social_team->url = $request->url;
  $social_team->social = $request->social;
  $social_team->social_icon = $request->social_icon;


    $save = $social_team->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('social_teams.show', $social_team->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:social_teams,id',]);

    $social_team = Social_team::find($id);
    $next = Social_team::where('id','>',$id)->min('id');
    $previous = Social_team::where('id','<',$id)->max('id');
$teams = Team::all();
       return view('REWASH.social_teams.social_team_view')
        ->with('social_team',$social_team)
        ->with('next',$next)
        ->with('previous',$previous)->with('teams' , $teams)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $social_team = Social_team::find($id); 

      $social_team->branch_id = $request->branch_id;
  $social_team->team_id = $request->team_id;
  $social_team->url = $request->url;
  $social_team->social = $request->social;
  $social_team->social_icon = $request->social_icon;

    $update = $social_team->update();

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
    $model = Social_team::find($id);

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
