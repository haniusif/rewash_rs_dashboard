 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('gift_appointment_additional_services.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_additional_services-list-id">{{ __('gift_appointment_additional_services_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('gift_appointment_additional_services_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_additional_services-list-branch_id">{{ __('gift_appointment_additional_services_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('gift_appointment_additional_services_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_additional_services-list-gift_appointment_id">{{ __('gift_appointment_additional_services_gift_appointment_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="gift_appointment_id" type="number" value="{{ request()->gift_appointment_id }}"  placeholder="{{ __('gift_appointment_additional_services_gift_appointment_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_additional_services-list-additional_service_id">{{ __('gift_appointment_additional_services_additional_service_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="additional_service_id" type="number" value="{{ request()->additional_service_id }}"  placeholder="{{ __('gift_appointment_additional_services_additional_service_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_additional_services-list-additional_service_price">{{ __('gift_appointment_additional_services_additional_service_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="additional_service_price" type="number" value="{{ request()->additional_service_price }}"  placeholder="{{ __('gift_appointment_additional_services_additional_service_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_additional_services-list-quantity">{{ __('gift_appointment_additional_services_quantity') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="quantity" type="number" value="{{ request()->quantity }}"  placeholder="{{ __('gift_appointment_additional_services_quantity') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_additional_services-list-total_price">{{ __('gift_appointment_additional_services_total_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total_price" type="number" value="{{ request()->total_price }}"  placeholder="{{ __('gift_appointment_additional_services_total_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_additional_services-list-created_at">{{ __('gift_appointment_additional_services_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="gift_appointment_additional_services-list-updated_at">{{ __('gift_appointment_additional_services_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('gift_appointment_additional_services.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
