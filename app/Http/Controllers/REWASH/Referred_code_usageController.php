<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Referred_code_usage;



class Referred_code_usageController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$referred_code_usages = \App\Models\REWASH\Referred_code_usage::get();
   
   $data = $request->all();


  $referred_code_usages = Referred_code_usage::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['user_id']) &&  $data['user_id'] != null ){
                   $query->where('user_id' , 'like'  , '%' .$data['user_id']. '%' );   
               }

                
  if(isset($data['referred_code_id']) &&  $data['referred_code_id'] != null ){
                   $query->where('referred_code_id' , 'like'  , '%' .$data['referred_code_id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.referred_code_usages.referred_code_usages')

->with('referred_code_usages',$referred_code_usages)
;

//searchfun


                        return view('REWASH.referred_code_usages.referred_code_usages' , compact('referred_code_usages'));

    }





        public function create()
    {

          return view('REWASH.referred_code_usages.referred_code_usage_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'user_id' => 'required',

       'referred_code_id' => 'required',]);
    $referred_code_usage = new Referred_code_usage ();

         $referred_code_usage->user_id = $request->user_id;
  $referred_code_usage->referred_code_id = $request->referred_code_id;


    $save = $referred_code_usage->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('referred_code_usages.show', $referred_code_usage->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:referred_code_usages,id',]);

    $referred_code_usage = Referred_code_usage::find($id);
    $next = Referred_code_usage::where('id','>',$id)->min('id');
    $previous = Referred_code_usage::where('id','<',$id)->max('id');
       return view('REWASH.referred_code_usages.referred_code_usage_view')
        ->with('referred_code_usage',$referred_code_usage)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $referred_code_usage = Referred_code_usage::find($id); 

      $referred_code_usage->user_id = $request->user_id;
  $referred_code_usage->referred_code_id = $request->referred_code_id;

    $update = $referred_code_usage->update();

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
    $model = Referred_code_usage::find($id);

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
