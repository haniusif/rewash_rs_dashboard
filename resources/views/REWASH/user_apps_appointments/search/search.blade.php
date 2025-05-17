 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('user_apps_appointments.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_apps_appointments-list-id">{{ __('user_apps_appointments_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('user_apps_appointments_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_apps_appointments-list-name">{{ __('user_apps_appointments_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('user_apps_appointments_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_apps_appointments-list-mobile">{{ __('user_apps_appointments_mobile') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="mobile" value="{{ request()->mobile }}"  type="text" placeholder="{{ __('user_apps_appointments_mobile') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_apps_appointments-list-zone_name">{{ __('user_apps_appointments_zone_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="zone_name" value="{{ request()->zone_name }}"  type="text" placeholder="{{ __('user_apps_appointments_zone_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_apps_appointments-list-number_of_appointments">{{ __('user_apps_appointments_number_of_appointments') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="number_of_appointments" type="number" value="{{ request()->number_of_appointments }}"  placeholder="{{ __('user_apps_appointments_number_of_appointments') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_apps_appointments-list-last_appointment_date">{{ __('user_apps_appointments_last_appointment_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="last_appointment_date" type="date" value="{{ request()->last_appointment_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_apps_appointments-list-actual_balance">{{ __('user_apps_appointments_actual_balance') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="actual_balance" type="number" value="{{ request()->actual_balance }}"  placeholder="{{ __('user_apps_appointments_actual_balance') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_apps_appointments-list-loyalty_points">{{ __('user_apps_appointments_loyalty_points') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="loyalty_points" type="number" value="{{ request()->loyalty_points }}"  placeholder="{{ __('user_apps_appointments_loyalty_points') }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('user_apps_appointments.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
