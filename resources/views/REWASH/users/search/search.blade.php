 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('users.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-id">{{ __('users_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('users_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-branch_id">{{ __('users_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('users_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-photo">{{ __('users_photo') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="photo" value="{{ request()->photo }}"  type="text" placeholder="{{ __('users_photo') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-name">{{ __('users_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('users_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-email">{{ __('users_email') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="email" value="{{ request()->email }}"  type="text" placeholder="{{ __('users_email') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-two_factor_confirmed_at">{{ __('users_two_factor_confirmed_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="two_factor_confirmed_at" type="date" value="{{ request()->two_factor_confirmed_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-sex">{{ __('users_sex') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="sex" value="{{ request()->sex }}"  type="text" placeholder="{{ __('users_sex') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-dob">{{ __('users_dob') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="dob" type="date" value="{{ request()->dob }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-mobile">{{ __('users_mobile') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="mobile" value="{{ request()->mobile }}"  type="text" placeholder="{{ __('users_mobile') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-phone">{{ __('users_phone') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="phone" value="{{ request()->phone }}"  type="text" placeholder="{{ __('users_phone') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-address">{{ __('users_address') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="address" value="{{ request()->address }}"  type="text" placeholder="{{ __('users_address') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-code_expires_at">{{ __('users_code_expires_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="code_expires_at" type="date" value="{{ request()->code_expires_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-last_interactive">{{ __('users_last_interactive') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="last_interactive" type="date" value="{{ request()->last_interactive }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-is_verified">{{ __('users_is_verified') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_verified" class="form-control" id="users-list-is_verified">

                                                        <option value="all" @if(request()->is_verified == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_verified == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_verified == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-actual_balance">{{ __('users_actual_balance') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="actual_balance" type="number" value="{{ request()->actual_balance }}"  placeholder="{{ __('users_actual_balance') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-profile_completed">{{ __('users_profile_completed') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="profile_completed" class="form-control" id="users-list-profile_completed">

                                                        <option value="all" @if(request()->profile_completed == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->profile_completed == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->profile_completed == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-role">{{ __('users_role') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="role" value="{{ request()->role }}"  type="text" placeholder="{{ __('users_role') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-firebase_id">{{ __('users_firebase_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="firebase_id" value="{{ request()->firebase_id }}"  type="text" placeholder="{{ __('users_firebase_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-is_admin">{{ __('users_is_admin') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_admin" class="form-control" id="users-list-is_admin">

                                                        <option value="all" @if(request()->is_admin == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_admin == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_admin == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-need_otp_resend">{{ __('users_need_otp_resend') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="need_otp_resend" class="form-control" id="users-list-need_otp_resend">

                                                        <option value="all" @if(request()->need_otp_resend == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->need_otp_resend == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->need_otp_resend == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-city_id">{{ __('users_city_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="city_id" type="number" value="{{ request()->city_id }}"  placeholder="{{ __('users_city_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-neighborhood_id">{{ __('users_neighborhood_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="neighborhood_id" type="number" value="{{ request()->neighborhood_id }}"  placeholder="{{ __('users_neighborhood_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-last_zone_id">{{ __('users_last_zone_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="last_zone_id" type="number" value="{{ request()->last_zone_id }}"  placeholder="{{ __('users_last_zone_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-last_ip">{{ __('users_last_ip') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="last_ip" value="{{ request()->last_ip }}"  type="text" placeholder="{{ __('users_last_ip') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-created_at">{{ __('users_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-updated_at">{{ __('users_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-loyalty_points">{{ __('users_loyalty_points') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="loyalty_points" type="number" value="{{ request()->loyalty_points }}"  placeholder="{{ __('users_loyalty_points') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-is_active">{{ __('users_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="users-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-platform_id">{{ __('users_platform_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="platform_id" type="number" value="{{ request()->platform_id }}"  placeholder="{{ __('users_platform_id') }}"  />

                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-referred_by">{{ __('users_referred_by') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="referred_by"  class="form-control" id="users-list-referred_by">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($users as $user)
                             <option   @selected(request()->referred_by == $user->id)     value="{{ $user->id }}" >{{ $user->branch_id }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('users.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
