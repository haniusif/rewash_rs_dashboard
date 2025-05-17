<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Testimonial;



class TestimonialController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$testimonials = \App\Models\REWASH\Testimonial::get();
   
   $data = $request->all();


  $testimonials = Testimonial::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['image']) &&  $data['image'] != null ){
                   $query->where('image' , 'like'  , '%' .$data['image']. '%' );   
               }

                
  if(isset($data['post']) &&  $data['post'] != null ){
                   $query->where('post' , 'like'  , '%' .$data['post']. '%' );   
               }

                
  if(isset($data['detail']) &&  $data['detail'] != null ){
                   $query->where('detail' , 'like'  , '%' .$data['detail']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.testimonials.testimonials')

->with('testimonials',$testimonials)
;

//searchfun


                        return view('REWASH.testimonials.testimonials' , compact('testimonials'));

    }





        public function create()
    {

          return view('REWASH.testimonials.testimonial_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'image' => 'required',

       'post' => 'required',

       'detail' => 'required',]);
    $testimonial = new Testimonial ();

         $testimonial->branch_id = $request->branch_id;
  $testimonial->name = $request->name;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/testimonials';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $testimonial->image = '/'.$destinationPath."/".$fileName;

      }}
  $testimonial->post = $request->post;
  $testimonial->detail = $request->detail;


    $save = $testimonial->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('testimonials.show', $testimonial->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:testimonials,id',]);

    $testimonial = Testimonial::find($id);
    $next = Testimonial::where('id','>',$id)->min('id');
    $previous = Testimonial::where('id','<',$id)->max('id');
       return view('REWASH.testimonials.testimonial_view')
        ->with('testimonial',$testimonial)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $testimonial = Testimonial::find($id); 

      $testimonial->branch_id = $request->branch_id;
  $testimonial->name = $request->name;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/testimonials';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $testimonial->image = '/'.$destinationPath."/".$fileName;

      }}
  $testimonial->post = $request->post;
  $testimonial->detail = $request->detail;

    $update = $testimonial->update();

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
    $model = Testimonial::find($id);

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
