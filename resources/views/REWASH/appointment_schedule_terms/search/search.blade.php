 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('appointment_schedule_terms.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedule_terms-list-id">{{ __('appointment_schedule_terms_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('appointment_schedule_terms_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedule_terms-list-appointment_schedule_id">{{ __('appointment_schedule_terms_appointment_schedule_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_schedule_id" type="number" value="{{ request()->appointment_schedule_id }}"  placeholder="{{ __('appointment_schedule_terms_appointment_schedule_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedule_terms-list-terms_text">{{ __('appointment_schedule_terms_terms_text') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="terms_text" value="{{ request()->terms_text }}"  type="text" placeholder="{{ __('appointment_schedule_terms_terms_text') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedule_terms-list-terms_en_text">{{ __('appointment_schedule_terms_terms_en_text') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="terms_en_text" value="{{ request()->terms_en_text }}"  type="text" placeholder="{{ __('appointment_schedule_terms_terms_en_text') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedule_terms-list-created_at">{{ __('appointment_schedule_terms_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedule_terms-list-updated_at">{{ __('appointment_schedule_terms_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('appointment_schedule_terms.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
