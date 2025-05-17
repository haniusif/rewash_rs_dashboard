 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('gift_appointment_schedules.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-id">{{ __('gift_appointment_schedules_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('gift_appointment_schedules_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-branch_id">{{ __('gift_appointment_schedules_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('gift_appointment_schedules_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-user_id">{{ __('gift_appointment_schedules_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('gift_appointment_schedules_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-appointment_date">{{ __('gift_appointment_schedules_appointment_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_date" type="date" value="{{ request()->appointment_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-slot_id">{{ __('gift_appointment_schedules_slot_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="slot_id" type="number" value="{{ request()->slot_id }}"  placeholder="{{ __('gift_appointment_schedules_slot_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-receiver_name">{{ __('gift_appointment_schedules_receiver_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="receiver_name" value="{{ request()->receiver_name }}"  type="text" placeholder="{{ __('gift_appointment_schedules_receiver_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-receiver_phone_number">{{ __('gift_appointment_schedules_receiver_phone_number') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="receiver_phone_number" value="{{ request()->receiver_phone_number }}"  type="text" placeholder="{{ __('gift_appointment_schedules_receiver_phone_number') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-receiver_event">{{ __('gift_appointment_schedules_receiver_event') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="receiver_event" value="{{ request()->receiver_event }}"  type="text" placeholder="{{ __('gift_appointment_schedules_receiver_event') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-neighborhood_id">{{ __('gift_appointment_schedules_neighborhood_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="neighborhood_id" type="number" value="{{ request()->neighborhood_id }}"  placeholder="{{ __('gift_appointment_schedules_neighborhood_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-number_of_vehicles">{{ __('gift_appointment_schedules_number_of_vehicles') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="number_of_vehicles" type="number" value="{{ request()->number_of_vehicles }}"  placeholder="{{ __('gift_appointment_schedules_number_of_vehicles') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-promo_code_id">{{ __('gift_appointment_schedules_promo_code_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code_id" type="number" value="{{ request()->promo_code_id }}"  placeholder="{{ __('gift_appointment_schedules_promo_code_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-payment_mode_id">{{ __('gift_appointment_schedules_payment_mode_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_mode_id" type="number" value="{{ request()->payment_mode_id }}"  placeholder="{{ __('gift_appointment_schedules_payment_mode_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-total_price">{{ __('gift_appointment_schedules_total_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total_price" type="number" value="{{ request()->total_price }}"  placeholder="{{ __('gift_appointment_schedules_total_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-notes">{{ __('gift_appointment_schedules_notes') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="notes" value="{{ request()->notes }}"  type="text" placeholder="{{ __('gift_appointment_schedules_notes') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-created_at">{{ __('gift_appointment_schedules_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_schedules-list-updated_at">{{ __('gift_appointment_schedules_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('gift_appointment_schedules.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
