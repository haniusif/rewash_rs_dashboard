<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Washing_plan_include;
use App\Models\REWASH\Washing_plan;



class Washing_plan_includeController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$washing_plan_includes = \App\Models\REWASH\Washing_plan_include::get();

$washing_plans = \App\Models\REWASH\Washing_plan::get();
   
   $data = $request->all();


  $washing_plan_includes = Washing_plan_include::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                     if(isset($data['washing_plan_id']) && $data['washing_plan_id'] != 'all' ){
            
                 $query->where('washing_plan_id' , $data['washing_plan_id']);   
            }
 
  if(isset($data['washing_plan_include']) &&  $data['washing_plan_include'] != null ){
                   $query->where('washing_plan_include' , 'like'  , '%' .$data['washing_plan_include']. '%' );   
               }

                
  if(isset($data['en_washing_plan_include']) &&  $data['en_washing_plan_include'] != null ){
                   $query->where('en_washing_plan_include' , 'like'  , '%' .$data['en_washing_plan_include']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['additional_service_id']) &&  $data['additional_service_id'] != null ){
                   $query->where('additional_service_id' , 'like'  , '%' .$data['additional_service_id']. '%' );   
               }

                
  if(isset($data['additional_service_quantity']) &&  $data['additional_service_quantity'] != null ){
                   $query->where('additional_service_quantity' , 'like'  , '%' .$data['additional_service_quantity']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.washing_plan_includes.washing_plan_includes')

->with('washing_plan_includes',$washing_plan_includes)
->with('washing_plans',$washing_plans)
;

//searchfun


                        return view('REWASH.washing_plan_includes.washing_plan_includes' , compact('washing_plan_includes'));

    }






        public function create()
    {

   $washing_plans = Washing_plan::all();
       return view('REWASH.washing_plan_includes.washing_plan_include_add')->with('washing_plans' , $washing_plans)

       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'washing_plan_id' => 'required',

       'washing_plan_include' => 'required',

       'en_washing_plan_include' => 'required',

       'additional_service_id' => 'required',

       'additional_service_quantity' => 'required',]);
    $washing_plan_include = new Washing_plan_include ();

         $washing_plan_include->branch_id = $request->branch_id;
  $washing_plan_include->washing_plan_id = $request->washing_plan_id;
  $washing_plan_include->washing_plan_include = $request->washing_plan_include;
  $washing_plan_include->en_washing_plan_include = $request->en_washing_plan_include;
  $washing_plan_include->additional_service_id = $request->additional_service_id;
  $washing_plan_include->additional_service_quantity = $request->additional_service_quantity;


    $save = $washing_plan_include->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('washing_plan_includes.show', $washing_plan_include->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:washing_plan_includes,id',]);

    $washing_plan_include = Washing_plan_include::find($id);
    $next = Washing_plan_include::where('id','>',$id)->min('id');
    $previous = Washing_plan_include::where('id','<',$id)->max('id');
$washing_plans = Washing_plan::all();
       return view('REWASH.washing_plan_includes.washing_plan_include_view')
        ->with('washing_plan_include',$washing_plan_include)
        ->with('next',$next)
        ->with('previous',$previous)->with('washing_plans' , $washing_plans)
      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $washing_plan_include = Washing_plan_include::find($id); 

      $washing_plan_include->branch_id = $request->branch_id;
  $washing_plan_include->washing_plan_id = $request->washing_plan_id;
  $washing_plan_include->washing_plan_include = $request->washing_plan_include;
  $washing_plan_include->en_washing_plan_include = $request->en_washing_plan_include;
  $washing_plan_include->additional_service_id = $request->additional_service_id;
  $washing_plan_include->additional_service_quantity = $request->additional_service_quantity;

    $update = $washing_plan_include->update();

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
    $model = Washing_plan_include::find($id);

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
