<?php

namespace App\Http\Controllers\REWASH;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\Contact;



class ContactController extends Controller
{



    public function index(Request $request)
    {

        // pure

                        
$contacts = \App\Models\REWASH\Contact::get();
   
   $data = $request->all();


  $contacts = Contact::orderby('id','DESC')

  ->where(function ($query) use ($data) {

 
  if(isset($data['id']) &&  $data['id'] != null ){
                   $query->where('id' , 'like'  , '%' .$data['id']. '%' );   
               }

                
  if(isset($data['branch_id']) &&  $data['branch_id'] != null ){
                   $query->where('branch_id' , 'like'  , '%' .$data['branch_id']. '%' );   
               }

                
  if(isset($data['c_name']) &&  $data['c_name'] != null ){
                   $query->where('c_name' , 'like'  , '%' .$data['c_name']. '%' );   
               }

                
  if(isset($data['logo']) &&  $data['logo'] != null ){
                   $query->where('logo' , 'like'  , '%' .$data['logo']. '%' );   
               }

                
  if(isset($data['mobile']) &&  $data['mobile'] != null ){
                   $query->where('mobile' , 'like'  , '%' .$data['mobile']. '%' );   
               }

                
  if(isset($data['phone']) &&  $data['phone'] != null ){
                   $query->where('phone' , 'like'  , '%' .$data['phone']. '%' );   
               }

                
  if(isset($data['address']) &&  $data['address'] != null ){
                   $query->where('address' , 'like'  , '%' .$data['address']. '%' );   
               }

                
  if(isset($data['email']) &&  $data['email'] != null ){
                   $query->where('email' , 'like'  , '%' .$data['email']. '%' );   
               }

                
  if(isset($data['website']) &&  $data['website'] != null ){
                   $query->where('website' , 'like'  , '%' .$data['website']. '%' );   
               }

                
  if(isset($data['created_at']) &&  $data['created_at'] != null ){
                   $query->where('created_at' , 'like'  , '%' .$data['created_at']. '%' );   
               }

                
  if(isset($data['updated_at']) &&  $data['updated_at'] != null ){
                   $query->where('updated_at' , 'like'  , '%' .$data['updated_at']. '%' );   
               }

                
  if(isset($data['logo_two']) &&  $data['logo_two'] != null ){
                   $query->where('logo_two' , 'like'  , '%' .$data['logo_two']. '%' );   
               }

                
 
 })
  ->paginate(50);

return view('REWASH.contacts.contacts')

->with('contacts',$contacts)
;

//searchfun


                        return view('REWASH.contacts.contacts' , compact('contacts'));

    }





        public function create()
    {

          return view('REWASH.contacts.contact_add')
       ;
 }


 public function store(Request $request)
    {

       $validated = $request->validate([



       'branch_id' => 'required',

       'c_name' => 'required',

       'logo' => 'required',

       'mobile' => 'required',

       'phone' => 'required',

       'address' => 'required',

       'email' => 'required',

       'website' => 'required',

       'logo_two' => 'required',]);
    $contact = new Contact ();

         $contact->branch_id = $request->branch_id;
  $contact->c_name = $request->c_name;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/contacts';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $contact->logo = '/'.$destinationPath."/".$fileName;

      }}
  $contact->mobile = $request->mobile;
  $contact->phone = $request->phone;
  $contact->address = $request->address;
  $contact->email = $request->email;
  $contact->website = $request->website;
  $contact->logo_two = $request->logo_two;


    $save = $contact->save();

if ($save) {
    Session::flash('alert-success-link', true);
    Session::flash('alert-link', route('contacts.show', $contact->id));
    Session::flash('message', __('The record has been successfully added. You can view it here.'));
} else {
    Session::flash('alert-danger', true);
    Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
}

return back();
}
    public function show($id,Request $request)
    {
   // $this->validate($request, ['id' => 'required|exists:contacts,id',]);

    $contact = Contact::find($id);
    $next = Contact::where('id','>',$id)->min('id');
    $previous = Contact::where('id','<',$id)->max('id');
       return view('REWASH.contacts.contact_view')
        ->with('contact',$contact)
        ->with('next',$next)
        ->with('previous',$previous)      ;

     }


    public function edit($id)
    {
    
}

     public function update(Request $request, $id)
    {

      $contact = Contact::find($id); 

      $contact->branch_id = $request->branch_id;
  $contact->c_name = $request->c_name;

  if ($request->hasFile('logo')) {
  if ($request->file('logo')->isValid()) {
  $file = $request->file('logo');
  $destinationPath = 'images/contacts';
  $fileName = rand(11111,99999).'_file.'.$file->getClientOriginalExtension(); // renameing image
  $file->move($destinationPath,$fileName);
  $contact->logo = '/'.$destinationPath."/".$fileName;

      }}
  $contact->mobile = $request->mobile;
  $contact->phone = $request->phone;
  $contact->address = $request->address;
  $contact->email = $request->email;
  $contact->website = $request->website;
  $contact->logo_two = $request->logo_two;

    $update = $contact->update();

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
    $model = Contact::find($id);

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
