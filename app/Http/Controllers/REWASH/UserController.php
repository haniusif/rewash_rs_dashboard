<?php

namespace App\Http\Controllers\REWASH;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\REWASH\User;



class UserController extends Controller
{



  public function index(Request $request)
  {






    $data = $request->all();


    $users = User::orderby('id', 'DESC')

      ->where(function ($query) use ($data) {


        if (isset($data['id']) &&  $data['id'] != null) {
          $query->where('id', 'like', '%' . $data['id'] . '%');
        }


        if (isset($data['branch_id']) &&  $data['branch_id'] != null) {
          $query->where('branch_id', 'like', '%' . $data['branch_id'] . '%');
        }


        if (isset($data['photo']) &&  $data['photo'] != null) {
          $query->where('photo', 'like', '%' . $data['photo'] . '%');
        }


        if (isset($data['name']) &&  $data['name'] != null) {
          $query->where('name', 'like', '%' . $data['name'] . '%');
        }


        if (isset($data['email']) &&  $data['email'] != null) {
          $query->where('email', 'like', '%' . $data['email'] . '%');
        }


        if (isset($data['two_factor_confirmed_at']) &&  $data['two_factor_confirmed_at'] != null) {
          $query->where('two_factor_confirmed_at', 'like', '%' . $data['two_factor_confirmed_at'] . '%');
        }


        if (isset($data['sex']) &&  $data['sex'] != null) {
          $query->where('sex', 'like', '%' . $data['sex'] . '%');
        }


        if (isset($data['dob']) &&  $data['dob'] != null) {
          $query->where('dob', 'like', '%' . $data['dob'] . '%');
        }


        if (isset($data['mobile']) &&  $data['mobile'] != null) {
          $query->where('mobile', 'like', '%' . $data['mobile'] . '%');
        }


        if (isset($data['phone']) &&  $data['phone'] != null) {
          $query->where('phone', 'like', '%' . $data['phone'] . '%');
        }


        if (isset($data['address']) &&  $data['address'] != null) {
          $query->where('address', 'like', '%' . $data['address'] . '%');
        }


        if (isset($data['code_expires_at']) &&  $data['code_expires_at'] != null) {
          $query->where('code_expires_at', 'like', '%' . $data['code_expires_at'] . '%');
        }


        if (isset($data['last_interactive']) &&  $data['last_interactive'] != null) {
          $query->where('last_interactive', 'like', '%' . $data['last_interactive'] . '%');
        }

        if (isset($data['is_verified']) && $data['is_verified'] != 'all') {

          $query->where('is_verified', $data['is_verified']);
        }

        if (isset($data['actual_balance']) &&  $data['actual_balance'] != null) {
          $query->where('actual_balance', 'like', '%' . $data['actual_balance'] . '%');
        }

        if (isset($data['profile_completed']) && $data['profile_completed'] != 'all') {

          $query->where('profile_completed', $data['profile_completed']);
        }

        if (isset($data['role']) &&  $data['role'] != null) {
          $query->where('role', 'like', '%' . $data['role'] . '%');
        }


        if (isset($data['firebase_id']) &&  $data['firebase_id'] != null) {
          $query->where('firebase_id', 'like', '%' . $data['firebase_id'] . '%');
        }

        if (isset($data['is_admin']) && $data['is_admin'] != 'all') {

          $query->where('is_admin', $data['is_admin']);
        }
        if (isset($data['need_otp_resend']) && $data['need_otp_resend'] != 'all') {

          $query->where('need_otp_resend', $data['need_otp_resend']);
        }

        if (isset($data['city_id']) &&  $data['city_id'] != null) {
          $query->where('city_id', 'like', '%' . $data['city_id'] . '%');
        }


        if (isset($data['neighborhood_id']) &&  $data['neighborhood_id'] != null) {
          $query->where('neighborhood_id', 'like', '%' . $data['neighborhood_id'] . '%');
        }


        if (isset($data['last_zone_id']) &&  $data['last_zone_id'] != null) {
          $query->where('last_zone_id', 'like', '%' . $data['last_zone_id'] . '%');
        }


        if (isset($data['last_ip']) &&  $data['last_ip'] != null) {
          $query->where('last_ip', 'like', '%' . $data['last_ip'] . '%');
        }


        if (isset($data['created_at']) &&  $data['created_at'] != null) {
          $query->where('created_at', 'like', '%' . $data['created_at'] . '%');
        }


        if (isset($data['updated_at']) &&  $data['updated_at'] != null) {
          $query->where('updated_at', 'like', '%' . $data['updated_at'] . '%');
        }


        if (isset($data['loyalty_points']) &&  $data['loyalty_points'] != null) {
          $query->where('loyalty_points', 'like', '%' . $data['loyalty_points'] . '%');
        }

        if (isset($data['is_active']) && $data['is_active'] != 'all') {

          $query->where('is_active', $data['is_active']);
        }

        if (isset($data['platform_id']) &&  $data['platform_id'] != null) {
          $query->where('platform_id', 'like', '%' . $data['platform_id'] . '%');
        }

        if (isset($data['referred_by']) && $data['referred_by'] != 'all') {

          $query->where('referred_by', $data['referred_by']);
        }
      })
      ->paginate(50);





    return view('REWASH.users.users', compact('users'));
  }






  public function create()
  {

    $users = User::all();
    return view('REWASH.users.user_add')->with('users', $users);
  }


  public function store(Request $request)
  {

    $validated = $request->validate([



      'branch_id' => 'required',

      'photo' => 'required',

      'name' => 'required',

      'email' => 'required',

      'password' => 'required',

      'two_factor_confirmed_at' => 'required',

      'sex' => 'required',

      'dob' => 'required',

      'mobile' => 'required',

      'phone' => 'required',

      'address' => 'required',

      'code_expires_at' => 'required',

      'actual_balance' => 'required',

      'profile_completed' => 'required',

      'role' => 'required',

      'is_admin' => 'required',

      'need_otp_resend' => 'required',

      'city_id' => 'required',

      'neighborhood_id' => 'required',

      'last_zone_id' => 'required',

      'last_ip' => 'required',

      'loyalty_points' => 'required',

      'platform_id' => 'required',

      'referred_by' => 'required',
    ]);
    $user = new User();

    $user->branch_id = $request->branch_id;

    if ($request->hasFile('photo')) {
      if ($request->file('photo')->isValid()) {
        $file = $request->file('photo');
        $destinationPath = 'images/users';
        $fileName = rand(11111, 99999) . '_file.' . $file->getClientOriginalExtension(); // renameing image
        $file->move($destinationPath, $fileName);
        $user->photo = '/' . $destinationPath . "/" . $fileName;
      }
    }
    $user->name = $request->name;
    $user->email = $request->email;
    $user->two_factor_confirmed_at = $request->two_factor_confirmed_at;
    $user->sex = $request->sex;
    $user->dob = $request->dob;
    $user->mobile = $request->mobile;
    $user->phone = $request->phone;
    $user->address = $request->address;
    $user->code_expires_at = $request->code_expires_at;
    $user->is_verified = ($request->is_verified) ? $request->is_verified : 0;
    $user->actual_balance = $request->actual_balance;
    $user->profile_completed = $request->profile_completed;
    $user->role = $request->role;
    $user->firebase_id = $request->firebase_id;
    $user->is_admin = $request->is_admin;
    $user->need_otp_resend = $request->need_otp_resend;
    $user->city_id = $request->city_id;
    $user->neighborhood_id = $request->neighborhood_id;
    $user->last_zone_id = $request->last_zone_id;
    $user->last_ip = $request->last_ip;
    $user->loyalty_points = $request->loyalty_points;
    $user->is_active = ($request->is_active) ? $request->is_active : 0;
    $user->platform_id = $request->platform_id;
    $user->referred_by = $request->referred_by;


    $save = $user->save();

    if ($save) {
      Session::flash('alert-success-link', true);
      Session::flash('alert-link', route('users.show', $user->id));
      Session::flash('message', __('The record has been successfully added. You can view it here.'));
    } else {
      Session::flash('alert-danger', true);
      Session::flash('message', __('An error occurred while saving the record. Please try again later.'));
    }

    return back();
  }
  public function show($id, Request $request)
  {
    // $this->validate($request, ['id' => 'required|exists:users,id',]);

    $user = User::find($id);
    $next = User::where('id', '>', $id)->min('id');
    $previous = User::where('id', '<', $id)->max('id');
    return view('REWASH.users.user_view')
      ->with('user', $user)
      ->with('next', $next)
      ->with('previous', $previous);
  }

  public function my_profile()
  {
    // $user = User::find($id);
    $user = Auth::user();

    return view('REWASH.users.my_profile')
      ->with('user', $user);
  }


  public function edit($id) {}

  public function update(Request $request, $id)
  {

    $user = User::find($id);

    $user->branch_id = $request->branch_id;

    if ($request->hasFile('photo')) {
      if ($request->file('photo')->isValid()) {
        $file = $request->file('photo');
        $destinationPath = 'images/users';
        $fileName = rand(11111, 99999) . '_file.' . $file->getClientOriginalExtension(); // renameing image
        $file->move($destinationPath, $fileName);
        $user->photo = '/' . $destinationPath . "/" . $fileName;
      }
    }
    $user->name = $request->name;
    $user->email = $request->email;
    $user->two_factor_confirmed_at = $request->two_factor_confirmed_at;
    $user->sex = $request->sex;
    $user->dob = $request->dob;
    $user->mobile = $request->mobile;
    $user->phone = $request->phone;
    $user->address = $request->address;
    $user->code_expires_at = $request->code_expires_at;
    $user->is_verified = ($request->is_verified) ? $request->is_verified : 0;
    $user->actual_balance = $request->actual_balance;
    $user->profile_completed = $request->profile_completed;
    $user->role = $request->role;
    $user->firebase_id = $request->firebase_id;
    $user->is_admin = $request->is_admin;
    $user->need_otp_resend = $request->need_otp_resend;
    $user->city_id = $request->city_id;
    $user->neighborhood_id = $request->neighborhood_id;
    $user->last_zone_id = $request->last_zone_id;
    $user->last_ip = $request->last_ip;
    $user->loyalty_points = $request->loyalty_points;
    $user->is_active = ($request->is_active) ? $request->is_active : 0;
    $user->platform_id = $request->platform_id;
    $user->referred_by = $request->referred_by;

    $update = $user->update();

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
    $model = User::find($id);

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