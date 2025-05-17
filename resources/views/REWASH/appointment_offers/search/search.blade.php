 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('appointment_offers.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_offers-list-id">{{ __('appointment_offers_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('appointment_offers_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_offers-list-appointment_id">{{ __('appointment_offers_appointment_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_id" type="number" value="{{ request()->appointment_id }}"  placeholder="{{ __('appointment_offers_appointment_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_offers-list-additional_service_id">{{ __('appointment_offers_additional_service_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="additional_service_id" type="number" value="{{ request()->additional_service_id }}"  placeholder="{{ __('appointment_offers_additional_service_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_offers-list-quantity">{{ __('appointment_offers_quantity') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="quantity" type="number" value="{{ request()->quantity }}"  placeholder="{{ __('appointment_offers_quantity') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_offers-list-remaining">{{ __('appointment_offers_remaining') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="remaining" type="number" value="{{ request()->remaining }}"  placeholder="{{ __('appointment_offers_remaining') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_offers-list-created_at">{{ __('appointment_offers_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_offers-list-updated_at">{{ __('appointment_offers_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('appointment_offers.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
