<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Washing_plan;



class Washing_planController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$washing_plans = \App\Models\REWASH\Washing_plan::get();
   
   $data = $request->all();


  $washing_plans = Washing_plan::orderby('id','DESC')

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

                
  if(isset($data['subscription_package']) &&  $data['subscription_package'] != null ){
                   $query->where('subscription_package' , 'like'  , '%' .$data['subscription_package']. '%' );   
               }

                
  if(isset($data['en_subscription_package']) &&  $data['en_subscription_package'] != null ){
                   $query->where('en_subscription_package' , 'like'  , '%' .$data['en_subscription_package']. '%' );   
               }

                
  if(isset($data['number_of_washes']) &&  $data['number_of_washes'] != null ){
                   $query->where('number_of_washes' , 'like'  , '%' .$data['number_of_washes']. '%' );   
               }

                
  if(isset($data['validity_days']) &&  $data['validity_days'] != null ){
                   $query->where('validity_days' , 'like'  , '%' .$data['validity_days']. '%' );   
               }

                
  if(isset($data['price']) &&  $data['price'] != null ){
                   $query->where('price' , 'like'  , '%' .$data['price']. '%' );   
               }

                
  if(isset($data['image']) &&  $data['image'] != null ){
                   $query->where('image' , 'like'  , '%' .$data['image']. '%' );   
               }

                
  if(isset($data['washing_plan_type_id']) &&  $data['washing_plan_type_id'] != null ){
                   $query->where('washing_plan_type_id' , 'like'  , '%' .$data['washing_plan_type_id']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
      if(isset($data['show_in_home']) && $data['show_in_home'] != 'all' ){
            
                 $query->where('show_in_home' , $data['show_in_home']);   
            }
 
  if(isset($data['description']) &&  $data['description'] != null ){
                   $query->where('description' , 'like'  , '%' .$data['description']. '%' );   
               }

                
  if(isset($data['en_description']) &&  $data['en_description'] != null ){
                   $query->where('en_description' , 'like'  , '%' .$data['en_description']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['loyalty_points']) &&  $data['loyalty_points'] != null ){
                   $query->where('loyalty_points' , 'like'  , '%' .$data['loyalty_points']. '%' );   
               }

                     if(isset($data['is_offer']) && $data['is_offer'] != 'all' ){
            
                 $query->where('is_offer' , $data['is_offer']);   
            }
      if(isset($data['with_tabby']) && $data['with_tabby'] != 'all' ){
            
                 $query->where('with_tabby' , $data['with_tabby']);   
            }
 
 
 })
  ->paginate(50);

return view('REWASH.washing_plans.washing_plans')

->with('washing_plans',$washing_plans)
;

//searchfun


                        return view('REWASH.washing_plans.washing_plans' , compact('washing_plans'));

    }





        public function create()
    {

          return view('REWASH.washing_plans.washing_plan_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'name' => 'required',

       'en_name' => 'required',

       'subscription_package' => 'required',

       'en_subscription_package' => 'required',

       'number_of_washes' => 'required',

       'validity_days' => 'required',

       'price' => 'required',

       'image' => 'required',

       'washing_plan_type_id' => 'required',

       'show_in_home' => 'required',

       'description' => 'required',

       'en_description' => 'required',

       'loyalty_points' => 'required',

       'is_offer' => 'required',

       'with_tabby' => 'required',]);
    $washing_plan = new Washing_plan ();

         $washing_plan->branch_id = $request->branch_id;
  $washing_plan->name = $request->name;
  $washing_plan->en_name = $request->en_name;
  $washing_plan->subscription_package = $request->subscription_package;
  $washing_plan->en_subscription_package = $request->en_subscription_package;
  $washing_plan->number_of_washes = $request->number_of_washes;
  $washing_plan->validity_days = $request->validity_days;
  $washing_plan->price = $request->price;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/washing_plans';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $washing_plan->image = '/'.$destinationPath."/".$fileName;

      }}
  $washing_plan->washing_plan_type_id = $request->washing_plan_type_id;
  $washing_plan->is_active = ($request->is_active) ? $request->is_active : 0;
  $washing_plan->show_in_home = $request->show_in_home;
  $washing_plan->description = $request->description;
  $washing_plan->en_description = $request->en_description;
  $washing_plan->loyalty_points = $request->loyalty_points;
  $washing_plan->is_offer = $request->is_offer;
  $washing_plan->with_tabby = $request->with_tabby;


    $save = $washing_plan->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('washing_plans.show', $washing_plan->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:washing_plans,id',]);

    $washing_plan = Washing_plan::find($id);
    $next = Washing_plan::where('id','>',$id)->min('id');
    $previous = Washing_plan::where('id','<',$id)->max('id');
       return view('REWASH.washing_plans.washing_plan_view')
        ->with('washing_plan',$washing_plan)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $washing_plan = Washing_plan::find($id); 

      $washing_plan->branch_id = $request->branch_id;
  $washing_plan->name = $request->name;
  $washing_plan->en_name = $request->en_name;
  $washing_plan->subscription_package = $request->subscription_package;
  $washing_plan->en_subscription_package = $request->en_subscription_package;
  $washing_plan->number_of_washes = $request->number_of_washes;
  $washing_plan->validity_days = $request->validity_days;
  $washing_plan->price = $request->price;

  if ($request->hasFile('image')) {
  if ($request->file('image')->isValid()) {
  $file = $request->file('image');
  $destinationPath = 'images/washing_plans';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $washing_plan->image = '/'.$destinationPath."/".$fileName;

      }}
  $washing_plan->washing_plan_type_id = $request->washing_plan_type_id;
  $washing_plan->is_active = ($request->is_active) ? $request->is_active : 0;
  $washing_plan->show_in_home = $request->show_in_home;
  $washing_plan->description = $request->description;
  $washing_plan->en_description = $request->en_description;
  $washing_plan->loyalty_points = $request->loyalty_points;
  $washing_plan->is_offer = $request->is_offer;
  $washing_plan->with_tabby = $request->with_tabby;

    $update = $washing_plan->update();

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
    $model = Washing_plan::find($id);

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
