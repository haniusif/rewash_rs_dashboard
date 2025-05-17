 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('team_tasks.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_tasks-list-id">{{ __('team_tasks_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('team_tasks_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_tasks-list-branch_id">{{ __('team_tasks_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('team_tasks_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_tasks-list-team_id">{{ __('team_tasks_team_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="team_id" type="number" value="{{ request()->team_id }}"  placeholder="{{ __('team_tasks_team_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_tasks-list-user_id">{{ __('team_tasks_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('team_tasks_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_tasks-list-task">{{ __('team_tasks_task') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="task" value="{{ request()->task }}"  type="text" placeholder="{{ __('team_tasks_task') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_tasks-list-status_id">{{ __('team_tasks_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="status_id" type="number" value="{{ request()->status_id }}"  placeholder="{{ __('team_tasks_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_tasks-list-appointment_id">{{ __('team_tasks_appointment_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_id" type="number" value="{{ request()->appointment_id }}"  placeholder="{{ __('team_tasks_appointment_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_tasks-list-appointment_schedule_id">{{ __('team_tasks_appointment_schedule_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_schedule_id" type="number" value="{{ request()->appointment_schedule_id }}"  placeholder="{{ __('team_tasks_appointment_schedule_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_tasks-list-created_at">{{ __('team_tasks_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_tasks-list-updated_at">{{ __('team_tasks_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('team_tasks.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
