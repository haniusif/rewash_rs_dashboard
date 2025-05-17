 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('paid_orders.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-id">{{ __('paid_orders_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('paid_orders_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-zone_id">{{ __('paid_orders_zone_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="zone_id" type="number" value="{{ request()->zone_id }}"  placeholder="{{ __('paid_orders_zone_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-zone_name">{{ __('paid_orders_zone_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="zone_name" value="{{ request()->zone_name }}"  type="text" placeholder="{{ __('paid_orders_zone_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-user_id">{{ __('paid_orders_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('paid_orders_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-user_name">{{ __('paid_orders_user_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_name" value="{{ request()->user_name }}"  type="text" placeholder="{{ __('paid_orders_user_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-user_mobile">{{ __('paid_orders_user_mobile') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_mobile" value="{{ request()->user_mobile }}"  type="text" placeholder="{{ __('paid_orders_user_mobile') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-number_of_vehicles">{{ __('paid_orders_number_of_vehicles') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="number_of_vehicles" type="number" value="{{ request()->number_of_vehicles }}"  placeholder="{{ __('paid_orders_number_of_vehicles') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-vehicle_id">{{ __('paid_orders_vehicle_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_id" type="number" value="{{ request()->vehicle_id }}"  placeholder="{{ __('paid_orders_vehicle_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-washing_plan_id">{{ __('paid_orders_washing_plan_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="washing_plan_id" type="number" value="{{ request()->washing_plan_id }}"  placeholder="{{ __('paid_orders_washing_plan_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-name">{{ __('paid_orders_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('paid_orders_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-washing_plan_validity_date">{{ __('paid_orders_washing_plan_validity_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="washing_plan_validity_date" type="date" value="{{ request()->washing_plan_validity_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-number_of_washes">{{ __('paid_orders_number_of_washes') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="number_of_washes" type="number" value="{{ request()->number_of_washes }}"  placeholder="{{ __('paid_orders_number_of_washes') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-status_id">{{ __('paid_orders_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="status_id" type="number" value="{{ request()->status_id }}"  placeholder="{{ __('paid_orders_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-appointment_date">{{ __('paid_orders_appointment_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_date" type="date" value="{{ request()->appointment_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-slot_id">{{ __('paid_orders_slot_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="slot_id" type="number" value="{{ request()->slot_id }}"  placeholder="{{ __('paid_orders_slot_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-vehicle_no">{{ __('paid_orders_vehicle_no') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_no" value="{{ request()->vehicle_no }}"  type="text" placeholder="{{ __('paid_orders_vehicle_no') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-location">{{ __('paid_orders_location') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="location" value="{{ request()->location }}"  type="text" placeholder="{{ __('paid_orders_location') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-notes">{{ __('paid_orders_notes') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="notes" value="{{ request()->notes }}"  type="text" placeholder="{{ __('paid_orders_notes') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-tax_avlue">{{ __('paid_orders_tax_avlue') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="tax_avlue" type="number" value="{{ request()->tax_avlue }}"  placeholder="{{ __('paid_orders_tax_avlue') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-total_price">{{ __('paid_orders_total_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total_price" type="number" value="{{ request()->total_price }}"  placeholder="{{ __('paid_orders_total_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-total_price_befor_payment">{{ __('paid_orders_total_price_befor_payment') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total_price_befor_payment" type="number" value="{{ request()->total_price_befor_payment }}"  placeholder="{{ __('paid_orders_total_price_befor_payment') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-wallet_amount">{{ __('paid_orders_wallet_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="wallet_amount" type="number" value="{{ request()->wallet_amount }}"  placeholder="{{ __('paid_orders_wallet_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-promo_code_id">{{ __('paid_orders_promo_code_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code_id" type="number" value="{{ request()->promo_code_id }}"  placeholder="{{ __('paid_orders_promo_code_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-promo_code_discount_value">{{ __('paid_orders_promo_code_discount_value') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code_discount_value" type="number" value="{{ request()->promo_code_discount_value }}"  placeholder="{{ __('paid_orders_promo_code_discount_value') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-payment_mode_id">{{ __('paid_orders_payment_mode_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_mode_id" type="number" value="{{ request()->payment_mode_id }}"  placeholder="{{ __('paid_orders_payment_mode_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-payment_status_id">{{ __('paid_orders_payment_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_status_id" type="number" value="{{ request()->payment_status_id }}"  placeholder="{{ __('paid_orders_payment_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-payment_status">{{ __('paid_orders_payment_status') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_status" value="{{ request()->payment_status }}"  type="text" placeholder="{{ __('paid_orders_payment_status') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-payment_time">{{ __('paid_orders_payment_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_time" type="date" value="{{ request()->payment_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-created_by">{{ __('paid_orders_created_by') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_by" type="number" value="{{ request()->created_by }}"  placeholder="{{ __('paid_orders_created_by') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-created_at">{{ __('paid_orders_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-updated_at">{{ __('paid_orders_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-partner_id">{{ __('paid_orders_partner_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="partner_id" type="number" value="{{ request()->partner_id }}"  placeholder="{{ __('paid_orders_partner_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-accrued_loyalty_point">{{ __('paid_orders_accrued_loyalty_point') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="accrued_loyalty_point" type="number" value="{{ request()->accrued_loyalty_point }}"  placeholder="{{ __('paid_orders_accrued_loyalty_point') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-transaction_id">{{ __('paid_orders_transaction_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="transaction_id" value="{{ request()->transaction_id }}"  type="text" placeholder="{{ __('paid_orders_transaction_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-platform_id">{{ __('paid_orders_platform_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="platform_id" type="number" value="{{ request()->platform_id }}"  placeholder="{{ __('paid_orders_platform_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-report_id">{{ __('paid_orders_report_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="report_id" type="number" value="{{ request()->report_id }}"  placeholder="{{ __('paid_orders_report_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-payment_id">{{ __('paid_orders_payment_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_id" value="{{ request()->payment_id }}"  type="text" placeholder="{{ __('paid_orders_payment_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-status">{{ __('paid_orders_status') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="status" value="{{ request()->status }}"  type="text" placeholder="{{ __('paid_orders_status') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-description">{{ __('paid_orders_description') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="description" value="{{ request()->description }}"  type="text" placeholder="{{ __('paid_orders_description') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-amount">{{ __('paid_orders_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="amount" type="number" value="{{ request()->amount }}"  placeholder="{{ __('paid_orders_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-fee">{{ __('paid_orders_fee') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="fee" type="number" value="{{ request()->fee }}"  placeholder="{{ __('paid_orders_fee') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-currency">{{ __('paid_orders_currency') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="currency" value="{{ request()->currency }}"  type="text" placeholder="{{ __('paid_orders_currency') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-refunded">{{ __('paid_orders_refunded') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="refunded" type="number" value="{{ request()->refunded }}"  placeholder="{{ __('paid_orders_refunded') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-refunded_at">{{ __('paid_orders_refunded_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="refunded_at" value="{{ request()->refunded_at }}"  type="text" placeholder="{{ __('paid_orders_refunded_at') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-captured">{{ __('paid_orders_captured') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="captured" type="number" value="{{ request()->captured }}"  placeholder="{{ __('paid_orders_captured') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-captured_at">{{ __('paid_orders_captured_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="captured_at" value="{{ request()->captured_at }}"  type="text" placeholder="{{ __('paid_orders_captured_at') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-voided_at">{{ __('paid_orders_voided_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="voided_at" value="{{ request()->voided_at }}"  type="text" placeholder="{{ __('paid_orders_voided_at') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-payment_created_at">{{ __('paid_orders_payment_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_created_at" value="{{ request()->payment_created_at }}"  type="text" placeholder="{{ __('paid_orders_payment_created_at') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-source">{{ __('paid_orders_source') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="source" value="{{ request()->source }}"  type="text" placeholder="{{ __('paid_orders_source') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-message">{{ __('paid_orders_message') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="message" value="{{ request()->message }}"  type="text" placeholder="{{ __('paid_orders_message') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-reference_number">{{ __('paid_orders_reference_number') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="reference_number" type="number" value="{{ request()->reference_number }}"  placeholder="{{ __('paid_orders_reference_number') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-batch_number">{{ __('paid_orders_batch_number') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="batch_number" value="{{ request()->batch_number }}"  type="text" placeholder="{{ __('paid_orders_batch_number') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-reconciliation_date">{{ __('paid_orders_reconciliation_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="reconciliation_date" value="{{ request()->reconciliation_date }}"  type="text" placeholder="{{ __('paid_orders_reconciliation_date') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-company">{{ __('paid_orders_company') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="company" value="{{ request()->company }}"  type="text" placeholder="{{ __('paid_orders_company') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-card_number">{{ __('paid_orders_card_number') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="card_number" value="{{ request()->card_number }}"  type="text" placeholder="{{ __('paid_orders_card_number') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-first_name">{{ __('paid_orders_first_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="first_name" value="{{ request()->first_name }}"  type="text" placeholder="{{ __('paid_orders_first_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-last_name">{{ __('paid_orders_last_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="last_name" value="{{ request()->last_name }}"  type="text" placeholder="{{ __('paid_orders_last_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-mobile">{{ __('paid_orders_mobile') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="mobile" value="{{ request()->mobile }}"  type="text" placeholder="{{ __('paid_orders_mobile') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-stcpay_reference">{{ __('paid_orders_stcpay_reference') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="stcpay_reference" value="{{ request()->stcpay_reference }}"  type="text" placeholder="{{ __('paid_orders_stcpay_reference') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-stcpay_token">{{ __('paid_orders_stcpay_token') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="stcpay_token" value="{{ request()->stcpay_token }}"  type="text" placeholder="{{ __('paid_orders_stcpay_token') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-invoice_id">{{ __('paid_orders_invoice_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="invoice_id" value="{{ request()->invoice_id }}"  type="text" placeholder="{{ __('paid_orders_invoice_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-order_id">{{ __('paid_orders_order_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="order_id" type="number" value="{{ request()->order_id }}"  placeholder="{{ __('paid_orders_order_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-plan">{{ __('paid_orders_plan') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="plan" value="{{ request()->plan }}"  type="text" placeholder="{{ __('paid_orders_plan') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="paid_orders-list-pament_zone_id">{{ __('paid_orders_pament_zone_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="pament_zone_id" value="{{ request()->pament_zone_id }}"  type="text" placeholder="{{ __('paid_orders_pament_zone_id') }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('paid_orders.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
