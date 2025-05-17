 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('web_appointments.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="web_appointments-list-id">{{ __('web_appointments_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('web_appointments_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="web_appointments-list-branch_id">{{ __('web_appointments_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('web_appointments_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="web_appointments-list-name">{{ __('web_appointments_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('web_appointments_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="web_appointments-list-phone_number">{{ __('web_appointments_phone_number') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="phone_number" value="{{ request()->phone_number }}"  type="text" placeholder="{{ __('web_appointments_phone_number') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="web_appointments-list-email">{{ __('web_appointments_email') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="email" value="{{ request()->email }}"  type="text" placeholder="{{ __('web_appointments_email') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="web_appointments-list-neighborhood">{{ __('web_appointments_neighborhood') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="neighborhood" value="{{ request()->neighborhood }}"  type="text" placeholder="{{ __('web_appointments_neighborhood') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="web_appointments-list-created_at">{{ __('web_appointments_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="web_appointments-list-updated_at">{{ __('web_appointments_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="web_appointments-list-ip">{{ __('web_appointments_ip') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="ip" value="{{ request()->ip }}"  type="text" placeholder="{{ __('web_appointments_ip') }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('web_appointments.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
