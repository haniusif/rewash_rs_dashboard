 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('appointment_bills.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-id">{{ __('appointment_bills_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('appointment_bills_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-branch_id">{{ __('appointment_bills_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('appointment_bills_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-appointment_id">{{ __('appointment_bills_appointment_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_id" type="number" value="{{ request()->appointment_id }}"  placeholder="{{ __('appointment_bills_appointment_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-bill_id">{{ __('appointment_bills_bill_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="bill_id" value="{{ request()->bill_id }}"  type="text" placeholder="{{ __('appointment_bills_bill_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-bill_number">{{ __('appointment_bills_bill_number') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="bill_number" value="{{ request()->bill_number }}"  type="text" placeholder="{{ __('appointment_bills_bill_number') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-bill_status">{{ __('appointment_bills_bill_status') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="bill_status" value="{{ request()->bill_status }}"  type="text" placeholder="{{ __('appointment_bills_bill_status') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-pay_url">{{ __('appointment_bills_pay_url') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="pay_url" value="{{ request()->pay_url }}"  type="text" placeholder="{{ __('appointment_bills_pay_url') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-total">{{ __('appointment_bills_total') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total" type="number" value="{{ request()->total }}"  placeholder="{{ __('appointment_bills_total') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-reference_id">{{ __('appointment_bills_reference_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="reference_id" value="{{ request()->reference_id }}"  type="text" placeholder="{{ __('appointment_bills_reference_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-created_at">{{ __('appointment_bills_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_bills-list-updated_at">{{ __('appointment_bills_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('appointment_bills.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
