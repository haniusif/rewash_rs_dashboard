 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('team_vehicles.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vehicles-list-id">{{ __('team_vehicles_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('team_vehicles_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vehicles-list-team_id">{{ __('team_vehicles_team_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="team_id" type="number" value="{{ request()->team_id }}"  placeholder="{{ __('team_vehicles_team_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vehicles-list-company_vehicle_id">{{ __('team_vehicles_company_vehicle_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="company_vehicle_id" type="number" value="{{ request()->company_vehicle_id }}"  placeholder="{{ __('team_vehicles_company_vehicle_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vehicles-list-assigned_at">{{ __('team_vehicles_assigned_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="assigned_at" type="date" value="{{ request()->assigned_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vehicles-list-created_at">{{ __('team_vehicles_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="team_vehicles-list-updated_at">{{ __('team_vehicles_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('team_vehicles.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
