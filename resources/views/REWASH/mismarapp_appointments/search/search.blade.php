 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('mismarapp_appointments.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="mismarapp_appointments-list-id">{{ __('mismarapp_appointments_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('mismarapp_appointments_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="mismarapp_appointments-list-appointment_id">{{ __('mismarapp_appointments_appointment_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_id" type="number" value="{{ request()->appointment_id }}"  placeholder="{{ __('mismarapp_appointments_appointment_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="mismarapp_appointments-list-mismar_order_id">{{ __('mismarapp_appointments_mismar_order_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="mismar_order_id" value="{{ request()->mismar_order_id }}"  type="text" placeholder="{{ __('mismarapp_appointments_mismar_order_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="mismarapp_appointments-list-order_date">{{ __('mismarapp_appointments_order_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="order_date" type="date" value="{{ request()->order_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="mismarapp_appointments-list-mismarapp_status_id">{{ __('mismarapp_appointments_mismarapp_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="mismarapp_status_id" type="number" value="{{ request()->mismarapp_status_id }}"  placeholder="{{ __('mismarapp_appointments_mismarapp_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="mismarapp_appointments-list-created_at">{{ __('mismarapp_appointments_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="mismarapp_appointments-list-updated_at">{{ __('mismarapp_appointments_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('mismarapp_appointments.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
