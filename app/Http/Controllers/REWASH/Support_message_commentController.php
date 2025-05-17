<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Support_message_comment;



class Support_message_commentController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$support_message_comments = \App\Models\REWASH\Support_message_comment::get();
   
   $data = $request->all();


  $support_message_comments = Support_message_comment::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['support_message_id']) &&  $data['support_message_id'] != null ){
                   $query->where('support_message_id' , 'like'  , '%' .$data['support_message_id']. '%' );   
               }

                
  if(isset($data['comment']) &&  $data['comment'] != null ){
                   $query->where('comment' , 'like'  , '%' .$data['comment']. '%' );   
               }

                
  if(isset($data['created_by']) &&  $data['created_by'] != null ){
                   $query->where('created_by' , 'like'  , '%' .$data['created_by']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.support_message_comments.support_message_comments')

->with('support_message_comments',$support_message_comments)
;

//searchfun


                        return view('REWASH.support_message_comments.support_message_comments' , compact('support_message_comments'));

    }





        public function create()
    {

          return view('REWASH.support_message_comments.support_message_comment_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'support_message_id' => 'required',

       'comment' => 'required',]);
    $support_message_comment = new Support_message_comment ();

         $support_message_comment->support_message_id = $request->support_message_id;
  $support_message_comment->comment = $request->comment;
  $support_message_comment->created_by = Auth::user()->id; 


    $save = $support_message_comment->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('support_message_comments.show', $support_message_comment->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:support_message_comments,id',]);

    $support_message_comment = Support_message_comment::find($id);
    $next = Support_message_comment::where('id','>',$id)->min('id');
    $previous = Support_message_comment::where('id','<',$id)->max('id');
       return view('REWASH.support_message_comments.support_message_comment_view')
        ->with('support_message_comment',$support_message_comment)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $support_message_comment = Support_message_comment::find($id); 

      $support_message_comment->support_message_id = $request->support_message_id;
  $support_message_comment->comment = $request->comment;

    $update = $support_message_comment->update();

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
    $model = Support_message_comment::find($id);

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
