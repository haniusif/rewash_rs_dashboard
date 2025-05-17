<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\App_open_log;



class App_open_logController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$app_open_logs = \App\Models\REWASH\App_open_log::get();
   
   $data = $request->all();


  $app_open_logs = App_open_log::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['opened_at']) &&  $data['opened_at'] != null ){
                   $query->where('opened_at' , 'like'  , '%' .$data['opened_at']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.app_open_logs.app_open_logs')

->with('app_open_logs',$app_open_logs)
;

//searchfun


                        return view('REWASH.app_open_logs.app_open_logs' , compact('app_open_logs'));

    }





        public function create()
    {

          return view('REWASH.app_open_logs.app_open_log_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'opened_at' => 'required',]);
    $app_open_log = new App_open_log ();

         $app_open_log->user_id = $request->user_id;
  $app_open_log->opened_at = $request->opened_at;


    $save = $app_open_log->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('app_open_logs.show', $app_open_log->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:app_open_logs,id',]);

    $app_open_log = App_open_log::find($id);
    $next = App_open_log::where('id','>',$id)->min('id');
    $previous = App_open_log::where('id','<',$id)->max('id');
       return view('REWASH.app_open_logs.app_open_log_view')
        ->with('app_open_log',$app_open_log)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $app_open_log = App_open_log::find($id); 

      $app_open_log->user_id = $request->user_id;
  $app_open_log->opened_at = $request->opened_at;

    $update = $app_open_log->update();

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
    $model = App_open_log::find($id);

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
