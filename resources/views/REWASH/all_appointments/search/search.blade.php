 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('all_appointments.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-id">{{ __('all_appointments_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('all_appointments_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-zone_id">{{ __('all_appointments_zone_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="zone_id" type="number" value="{{ request()->zone_id }}"  placeholder="{{ __('all_appointments_zone_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-zone_name">{{ __('all_appointments_zone_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="zone_name" value="{{ request()->zone_name }}"  type="text" placeholder="{{ __('all_appointments_zone_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-user_id">{{ __('all_appointments_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('all_appointments_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-mobile">{{ __('all_appointments_mobile') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="mobile" value="{{ request()->mobile }}"  type="text" placeholder="{{ __('all_appointments_mobile') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-number_of_vehicles">{{ __('all_appointments_number_of_vehicles') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="number_of_vehicles" type="number" value="{{ request()->number_of_vehicles }}"  placeholder="{{ __('all_appointments_number_of_vehicles') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-vehicle_types_id">{{ __('all_appointments_vehicle_types_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_types_id" type="number" value="{{ request()->vehicle_types_id }}"  placeholder="{{ __('all_appointments_vehicle_types_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-vehicle_id">{{ __('all_appointments_vehicle_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_id" type="number" value="{{ request()->vehicle_id }}"  placeholder="{{ __('all_appointments_vehicle_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-vehicle_no">{{ __('all_appointments_vehicle_no') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_no" value="{{ request()->vehicle_no }}"  type="text" placeholder="{{ __('all_appointments_vehicle_no') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-washing_plan_id">{{ __('all_appointments_washing_plan_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="washing_plan_id" type="number" value="{{ request()->washing_plan_id }}"  placeholder="{{ __('all_appointments_washing_plan_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-name">{{ __('all_appointments_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('all_appointments_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-washing_plan_price">{{ __('all_appointments_washing_plan_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="washing_plan_price" type="number" value="{{ request()->washing_plan_price }}"  placeholder="{{ __('all_appointments_washing_plan_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-washing_plan_validity_date">{{ __('all_appointments_washing_plan_validity_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="washing_plan_validity_date" type="date" value="{{ request()->washing_plan_validity_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-number_of_washes">{{ __('all_appointments_number_of_washes') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="number_of_washes" type="number" value="{{ request()->number_of_washes }}"  placeholder="{{ __('all_appointments_number_of_washes') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-status_id">{{ __('all_appointments_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="status_id" type="number" value="{{ request()->status_id }}"  placeholder="{{ __('all_appointments_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-status">{{ __('all_appointments_status') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="status" value="{{ request()->status }}"  type="text" placeholder="{{ __('all_appointments_status') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-appointment_date">{{ __('all_appointments_appointment_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_date" type="date" value="{{ request()->appointment_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-slot_id">{{ __('all_appointments_slot_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="slot_id" type="number" value="{{ request()->slot_id }}"  placeholder="{{ __('all_appointments_slot_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-location">{{ __('all_appointments_location') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="location" value="{{ request()->location }}"  type="text" placeholder="{{ __('all_appointments_location') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-notes">{{ __('all_appointments_notes') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="notes" value="{{ request()->notes }}"  type="text" placeholder="{{ __('all_appointments_notes') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-tax_avlue">{{ __('all_appointments_tax_avlue') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="tax_avlue" type="number" value="{{ request()->tax_avlue }}"  placeholder="{{ __('all_appointments_tax_avlue') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-total_price">{{ __('all_appointments_total_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total_price" type="number" value="{{ request()->total_price }}"  placeholder="{{ __('all_appointments_total_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-total_price_befor_payment">{{ __('all_appointments_total_price_befor_payment') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total_price_befor_payment" type="number" value="{{ request()->total_price_befor_payment }}"  placeholder="{{ __('all_appointments_total_price_befor_payment') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-wallet_amount">{{ __('all_appointments_wallet_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="wallet_amount" type="number" value="{{ request()->wallet_amount }}"  placeholder="{{ __('all_appointments_wallet_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-promo_code_id">{{ __('all_appointments_promo_code_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code_id" type="number" value="{{ request()->promo_code_id }}"  placeholder="{{ __('all_appointments_promo_code_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-promo_code">{{ __('all_appointments_promo_code') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code" value="{{ request()->promo_code }}"  type="text" placeholder="{{ __('all_appointments_promo_code') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-discount_type">{{ __('all_appointments_discount_type') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="discount_type" value="{{ request()->discount_type }}"  type="text" placeholder="{{ __('all_appointments_discount_type') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-discount_value">{{ __('all_appointments_discount_value') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="discount_value" type="number" value="{{ request()->discount_value }}"  placeholder="{{ __('all_appointments_discount_value') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-promo_code_discount_value">{{ __('all_appointments_promo_code_discount_value') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code_discount_value" type="number" value="{{ request()->promo_code_discount_value }}"  placeholder="{{ __('all_appointments_promo_code_discount_value') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-additional_service_total">{{ __('all_appointments_additional_service_total') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="additional_service_total" type="number" value="{{ request()->additional_service_total }}"  placeholder="{{ __('all_appointments_additional_service_total') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-payment_mode_id">{{ __('all_appointments_payment_mode_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_mode_id" type="number" value="{{ request()->payment_mode_id }}"  placeholder="{{ __('all_appointments_payment_mode_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-payment_mode_name">{{ __('all_appointments_payment_mode_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_mode_name" value="{{ request()->payment_mode_name }}"  type="text" placeholder="{{ __('all_appointments_payment_mode_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-payment_status_id">{{ __('all_appointments_payment_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_status_id" type="number" value="{{ request()->payment_status_id }}"  placeholder="{{ __('all_appointments_payment_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-payment_status_name">{{ __('all_appointments_payment_status_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_status_name" value="{{ request()->payment_status_name }}"  type="text" placeholder="{{ __('all_appointments_payment_status_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-payment_time">{{ __('all_appointments_payment_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_time" type="date" value="{{ request()->payment_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-created_by">{{ __('all_appointments_created_by') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_by" type="number" value="{{ request()->created_by }}"  placeholder="{{ __('all_appointments_created_by') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-creator">{{ __('all_appointments_creator') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="creator" value="{{ request()->creator }}"  type="text" placeholder="{{ __('all_appointments_creator') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-created_at">{{ __('all_appointments_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-updated_at">{{ __('all_appointments_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-partner_id">{{ __('all_appointments_partner_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="partner_id" type="number" value="{{ request()->partner_id }}"  placeholder="{{ __('all_appointments_partner_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-accrued_loyalty_point">{{ __('all_appointments_accrued_loyalty_point') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="accrued_loyalty_point" type="number" value="{{ request()->accrued_loyalty_point }}"  placeholder="{{ __('all_appointments_accrued_loyalty_point') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-transaction_id">{{ __('all_appointments_transaction_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="transaction_id" value="{{ request()->transaction_id }}"  type="text" placeholder="{{ __('all_appointments_transaction_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-platform_id">{{ __('all_appointments_platform_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="platform_id" type="number" value="{{ request()->platform_id }}"  placeholder="{{ __('all_appointments_platform_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-platform_name">{{ __('all_appointments_platform_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="platform_name" value="{{ request()->platform_name }}"  type="text" placeholder="{{ __('all_appointments_platform_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-double_check_payment">{{ __('all_appointments_double_check_payment') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="double_check_payment" class="form-control" id="all_appointments-list-double_check_payment">

                                                        <option value="all" @if(request()->double_check_payment == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->double_check_payment == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->double_check_payment == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-double_check_data">{{ __('all_appointments_double_check_data') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="double_check_data" value="{{ request()->double_check_data }}"  type="text" placeholder="{{ __('all_appointments_double_check_data') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="all_appointments-list-double_check_payment_status">{{ __('all_appointments_double_check_payment_status') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="double_check_payment_status" value="{{ request()->double_check_payment_status }}"  type="text" placeholder="{{ __('all_appointments_double_check_payment_status') }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('all_appointments.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
