<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Client;



class ClientController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$clients = \App\Models\REWASH\Client::get();
   
   $data = $request->all();


  $clients = Client::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['image']) &&  $data['image'] != null ){
                   $query->where('image' , 'like'  , '%' .$data['image']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.clients.clients')

->with('clients',$clients)
;

//searchfun


                        return view('REWASH.clients.clients' , compact('clients'));

    }





        public function create()
    {

          return view('REWASH.clients.client_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'image' => 'required',]);
    $client = new Client ();

         $client->branch_id = $request->branch_id;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/clients';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $client->image = '/'.$destinationPath."/".$fileName;

      }}


    $save = $client->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('clients.show', $client->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:clients,id',]);

    $client = Client::find($id);
    $next = Client::where('id','>',$id)->min('id');
    $previous = Client::where('id','<',$id)->max('id');
       return view('REWASH.clients.client_view')
        ->with('client',$client)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $client = Client::find($id); 

      $client->branch_id = $request->branch_id;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/clients';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $client->image = '/'.$destinationPath."/".$fileName;

      }}

    $update = $client->update();

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
    $model = Client::find($id);

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
