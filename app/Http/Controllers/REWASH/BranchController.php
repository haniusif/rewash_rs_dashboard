<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Branch;



class BranchController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$branches = \App\Models\REWASH\Branch::get();
   
   $data = $request->all();


  $branches = Branch::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['name']) &&  $data['name'] != null ){
                   $query->where('name' , 'like'  , '%' .$data['name']. '%' );   
               }

                
  if(isset($data['en_name']) &&  $data['en_name'] != null ){
                   $query->where('en_name' , 'like'  , '%' .$data['en_name']. '%' );   
               }

                     if(isset($data['is_active']) && $data['is_active'] != 'all' ){
            
                 $query->where('is_active' , $data['is_active']);   
            }
 
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.branches.branches')

->with('branches',$branches)
;

//searchfun


                        return view('REWASH.branches.branches' , compact('branches'));

    }





        public function create()
    {

          return view('REWASH.branches.branch_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'name' => 'required',

       'en_name' => 'required',]);
    $branch = new Branch ();

         $branch->name = $request->name;
  $branch->en_name = $request->en_name;
  $branch->is_active = ($request->is_active) ? $request->is_active : 0;


    $save = $branch->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('branches.show', $branch->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:branches,id',]);

    $branch = Branch::find($id);
    $next = Branch::where('id','>',$id)->min('id');
    $previous = Branch::where('id','<',$id)->max('id');
       return view('REWASH.branches.branch_view')
        ->with('branch',$branch)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $branch = Branch::find($id); 

      $branch->name = $request->name;
  $branch->en_name = $request->en_name;
  $branch->is_active = ($request->is_active) ? $request->is_active : 0;

    $update = $branch->update();

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
    $model = Branch::find($id);

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
