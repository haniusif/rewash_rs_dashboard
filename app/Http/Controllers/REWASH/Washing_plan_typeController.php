<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Washing_plan_type;



class Washing_plan_typeController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$washing_plan_types = \App\Models\REWASH\Washing_plan_type::get();
   
   $data = $request->all();


  $washing_plan_types = Washing_plan_type::orderby('id','DESC')

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

                
  if(isset($data['en_name']) &&  $data['en_name'] != null ){
                   $query->where('en_name' , 'like'  , '%' .$data['en_name']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.washing_plan_types.washing_plan_types')

->with('washing_plan_types',$washing_plan_types)
;

//searchfun


                        return view('REWASH.washing_plan_types.washing_plan_types' , compact('washing_plan_types'));

    }





        public function create()
    {

          return view('REWASH.washing_plan_types.washing_plan_type_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',]);
    $washing_plan_type = new Washing_plan_type ();

         $washing_plan_type->branch_id = $request->branch_id;
  $washing_plan_type->name = $request->name;
  $washing_plan_type->en_name = $request->en_name;


    $save = $washing_plan_type->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('washing_plan_types.show', $washing_plan_type->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:washing_plan_types,id',]);

    $washing_plan_type = Washing_plan_type::find($id);
    $next = Washing_plan_type::where('id','>',$id)->min('id');
    $previous = Washing_plan_type::where('id','<',$id)->max('id');
       return view('REWASH.washing_plan_types.washing_plan_type_view')
        ->with('washing_plan_type',$washing_plan_type)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $washing_plan_type = Washing_plan_type::find($id); 

      $washing_plan_type->branch_id = $request->branch_id;
  $washing_plan_type->name = $request->name;
  $washing_plan_type->en_name = $request->en_name;

    $update = $washing_plan_type->update();

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
    $model = Washing_plan_type::find($id);

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
