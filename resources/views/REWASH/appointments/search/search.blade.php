 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('appointments.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-id">{{ __('appointments_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('appointments_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-branch_id">{{ __('appointments_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('appointments_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-zone_id">{{ __('appointments_zone_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="zone_id" type="number" value="{{ request()->zone_id }}"  placeholder="{{ __('appointments_zone_id') }}"  />

                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-user_id">{{ __('appointments_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="user_id"  class="form-control" id="appointments-list-user_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($users as $user)
                             <option   @selected(request()->user_id == $user->id)     value="{{ $user->id }}" >{{ $user->branch_id }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-number_of_vehicles">{{ __('appointments_number_of_vehicles') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="number_of_vehicles" type="number" value="{{ request()->number_of_vehicles }}"  placeholder="{{ __('appointments_number_of_vehicles') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-vehicle_company_id">{{ __('appointments_vehicle_company_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_company_id" type="number" value="{{ request()->vehicle_company_id }}"  placeholder="{{ __('appointments_vehicle_company_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-vehicle_modal_id">{{ __('appointments_vehicle_modal_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_modal_id" type="number" value="{{ request()->vehicle_modal_id }}"  placeholder="{{ __('appointments_vehicle_modal_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-vehicle_types_id">{{ __('appointments_vehicle_types_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_types_id" type="number" value="{{ request()->vehicle_types_id }}"  placeholder="{{ __('appointments_vehicle_types_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-vehicle_id">{{ __('appointments_vehicle_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_id" type="number" value="{{ request()->vehicle_id }}"  placeholder="{{ __('appointments_vehicle_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-washing_plan_id">{{ __('appointments_washing_plan_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="washing_plan_id" type="number" value="{{ request()->washing_plan_id }}"  placeholder="{{ __('appointments_washing_plan_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-washing_plan_validity_date">{{ __('appointments_washing_plan_validity_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="washing_plan_validity_date" type="date" value="{{ request()->washing_plan_validity_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-number_of_washes">{{ __('appointments_number_of_washes') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="number_of_washes" type="number" value="{{ request()->number_of_washes }}"  placeholder="{{ __('appointments_number_of_washes') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-status_id">{{ __('appointments_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="status_id" type="number" value="{{ request()->status_id }}"  placeholder="{{ __('appointments_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-appointment_date">{{ __('appointments_appointment_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_date" type="date" value="{{ request()->appointment_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-slot_id">{{ __('appointments_slot_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="slot_id" type="number" value="{{ request()->slot_id }}"  placeholder="{{ __('appointments_slot_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-restore_slots">{{ __('appointments_restore_slots') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="restore_slots" type="number" value="{{ request()->restore_slots }}"  placeholder="{{ __('appointments_restore_slots') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-vehicle_no">{{ __('appointments_vehicle_no') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_no" value="{{ request()->vehicle_no }}"  type="text" placeholder="{{ __('appointments_vehicle_no') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-time_frame">{{ __('appointments_time_frame') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="time_frame" value="{{ request()->time_frame }}"  type="text" placeholder="{{ __('appointments_time_frame') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-time_frame_id">{{ __('appointments_time_frame_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="time_frame_id" type="number" value="{{ request()->time_frame_id }}"  placeholder="{{ __('appointments_time_frame_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-appx_hour">{{ __('appointments_appx_hour') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appx_hour" value="{{ request()->appx_hour }}"  type="text" placeholder="{{ __('appointments_appx_hour') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-remark">{{ __('appointments_remark') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="remark" value="{{ request()->remark }}"  type="text" placeholder="{{ __('appointments_remark') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-location">{{ __('appointments_location') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="location" value="{{ request()->location }}"  type="text" placeholder="{{ __('appointments_location') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-notes">{{ __('appointments_notes') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="notes" value="{{ request()->notes }}"  type="text" placeholder="{{ __('appointments_notes') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-tax_avlue">{{ __('appointments_tax_avlue') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="tax_avlue" type="number" value="{{ request()->tax_avlue }}"  placeholder="{{ __('appointments_tax_avlue') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-total_price">{{ __('appointments_total_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total_price" type="number" value="{{ request()->total_price }}"  placeholder="{{ __('appointments_total_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-total_price_befor_payment">{{ __('appointments_total_price_befor_payment') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total_price_befor_payment" type="number" value="{{ request()->total_price_befor_payment }}"  placeholder="{{ __('appointments_total_price_befor_payment') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-wallet_amount">{{ __('appointments_wallet_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="wallet_amount" type="number" value="{{ request()->wallet_amount }}"  placeholder="{{ __('appointments_wallet_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-promo_code_id">{{ __('appointments_promo_code_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code_id" type="number" value="{{ request()->promo_code_id }}"  placeholder="{{ __('appointments_promo_code_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-promo_code_discount_value">{{ __('appointments_promo_code_discount_value') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code_discount_value" type="number" value="{{ request()->promo_code_discount_value }}"  placeholder="{{ __('appointments_promo_code_discount_value') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-payment_mode_id">{{ __('appointments_payment_mode_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_mode_id" type="number" value="{{ request()->payment_mode_id }}"  placeholder="{{ __('appointments_payment_mode_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-payment_status_id">{{ __('appointments_payment_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_status_id" type="number" value="{{ request()->payment_status_id }}"  placeholder="{{ __('appointments_payment_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-payment_time">{{ __('appointments_payment_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_time" type="date" value="{{ request()->payment_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-created_by">{{ __('appointments_created_by') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_by" type="number" value="{{ request()->created_by }}"  placeholder="{{ __('appointments_created_by') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-created_at">{{ __('appointments_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-updated_at">{{ __('appointments_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-partner_id">{{ __('appointments_partner_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="partner_id" type="number" value="{{ request()->partner_id }}"  placeholder="{{ __('appointments_partner_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-accrued_loyalty_point">{{ __('appointments_accrued_loyalty_point') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="accrued_loyalty_point" type="number" value="{{ request()->accrued_loyalty_point }}"  placeholder="{{ __('appointments_accrued_loyalty_point') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-transaction_id">{{ __('appointments_transaction_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="transaction_id" value="{{ request()->transaction_id }}"  type="text" placeholder="{{ __('appointments_transaction_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-platform_id">{{ __('appointments_platform_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="platform_id" type="number" value="{{ request()->platform_id }}"  placeholder="{{ __('appointments_platform_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-double_check_payment">{{ __('appointments_double_check_payment') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="double_check_payment" class="form-control" id="appointments-list-double_check_payment">

                                                        <option value="all" @if(request()->double_check_payment == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->double_check_payment == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->double_check_payment == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-double_check_data">{{ __('appointments_double_check_data') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="double_check_data" value="{{ request()->double_check_data }}"  type="text" placeholder="{{ __('appointments_double_check_data') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-double_check_payment_status">{{ __('appointments_double_check_payment_status') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="double_check_payment_status" value="{{ request()->double_check_payment_status }}"  type="text" placeholder="{{ __('appointments_double_check_payment_status') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-qoyod_invoice_id">{{ __('appointments_qoyod_invoice_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="qoyod_invoice_id" type="number" value="{{ request()->qoyod_invoice_id }}"  placeholder="{{ __('appointments_qoyod_invoice_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-qoyod_reference">{{ __('appointments_qoyod_reference') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="qoyod_reference" value="{{ request()->qoyod_reference }}"  type="text" placeholder="{{ __('appointments_qoyod_reference') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointments-list-platform_order_id">{{ __('appointments_platform_order_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="platform_order_id" type="number" value="{{ request()->platform_order_id }}"  placeholder="{{ __('appointments_platform_order_id') }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('appointments.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
