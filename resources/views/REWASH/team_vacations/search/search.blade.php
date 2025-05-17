 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('team_vacations.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vacations-list-id">{{ __('team_vacations_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('team_vacations_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vacations-list-team_id">{{ __('team_vacations_team_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="team_id" type="number" value="{{ request()->team_id }}"  placeholder="{{ __('team_vacations_team_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vacations-list-general_status_id">{{ __('team_vacations_general_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="general_status_id" type="number" value="{{ request()->general_status_id }}"  placeholder="{{ __('team_vacations_general_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vacations-list-start_date">{{ __('team_vacations_start_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="start_date" type="date" value="{{ request()->start_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vacations-list-end_date">{{ __('team_vacations_end_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="end_date" type="date" value="{{ request()->end_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vacations-list-reason">{{ __('team_vacations_reason') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="reason" value="{{ request()->reason }}"  type="text" placeholder="{{ __('team_vacations_reason') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vacations-list-attachments">{{ __('team_vacations_attachments') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="attachments" value="{{ request()->attachments }}"  type="text" placeholder="{{ __('team_vacations_attachments') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vacations-list-created_at">{{ __('team_vacations_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vacations-list-updated_at">{{ __('team_vacations_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('team_vacations.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
