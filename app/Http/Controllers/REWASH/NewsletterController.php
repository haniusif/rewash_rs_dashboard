<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Newsletter;



class NewsletterController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$newsletters = \App\Models\REWASH\Newsletter::get();
   
   $data = $request->all();


  $newsletters = Newsletter::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['email']) &&  $data['email'] != null ){
                   $query->where('email' , 'like'  , '%' .$data['email']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.newsletters.newsletters')

->with('newsletters',$newsletters)
;

//searchfun


                        return view('REWASH.newsletters.newsletters' , compact('newsletters'));

    }





        public function create()
    {

          return view('REWASH.newsletters.newsletter_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'email' => 'required',]);
    $newsletter = new Newsletter ();

         $newsletter->branch_id = $request->branch_id;
  $newsletter->email = $request->email;


    $save = $newsletter->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('newsletters.show', $newsletter->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:newsletters,id',]);

    $newsletter = Newsletter::find($id);
    $next = Newsletter::where('id','>',$id)->min('id');
    $previous = Newsletter::where('id','<',$id)->max('id');
       return view('REWASH.newsletters.newsletter_view')
        ->with('newsletter',$newsletter)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $newsletter = Newsletter::find($id); 

      $newsletter->branch_id = $request->branch_id;
  $newsletter->email = $request->email;

    $update = $newsletter->update();

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
    $model = Newsletter::find($id);

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
