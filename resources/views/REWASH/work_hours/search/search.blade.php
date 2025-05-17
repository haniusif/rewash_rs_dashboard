 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('work_hours.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="work_hours-list-id">{{ __('work_hours_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('work_hours_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="work_hours-list-branch_id">{{ __('work_hours_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('work_hours_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="work_hours-list-team_id">{{ __('work_hours_team_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="team_id" type="number" value="{{ request()->team_id }}"  placeholder="{{ __('work_hours_team_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="work_hours-list-week_day">{{ __('work_hours_week_day') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="week_day" value="{{ request()->week_day }}"  type="text" placeholder="{{ __('work_hours_week_day') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="work_hours-list-work_hours_from">{{ __('work_hours_work_hours_from') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="work_hours_from" type="date" value="{{ request()->work_hours_from }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="work_hours-list-work_hours_to">{{ __('work_hours_work_hours_to') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="work_hours_to" type="date" value="{{ request()->work_hours_to }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="work_hours-list-created_at">{{ __('work_hours_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="work_hours-list-updated_at">{{ __('work_hours_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('work_hours.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
