<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Provider;



class ProviderController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$providers = \App\Models\REWASH\Provider::get();
   
   $data = $request->all();


  $providers = Provider::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.providers.providers')

->with('providers',$providers)
;

//searchfun


                        return view('REWASH.providers.providers' , compact('providers'));

    }





        public function create()
    {

          return view('REWASH.providers.provider_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([

]);
    $provider = new Provider ();

       

    $save = $provider->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('providers.show', $provider->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:providers,id',]);

    $provider = Provider::find($id);
    $next = Provider::where('id','>',$id)->min('id');
    $previous = Provider::where('id','<',$id)->max('id');
       return view('REWASH.providers.provider_view')
        ->with('provider',$provider)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $provider = Provider::find($id); 

    
    $update = $provider->update();

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
    $model = Provider::find($id);

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
