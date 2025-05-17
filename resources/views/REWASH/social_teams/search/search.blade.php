 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('social_teams.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="social_teams-list-id">{{ __('social_teams_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('social_teams_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="social_teams-list-branch_id">{{ __('social_teams_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('social_teams_branch_id') }}"  />

                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="social_teams-list-team_id">{{ __('social_teams_team_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="team_id"  class="form-control" id="social_teams-list-team_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($teams as $team)
                             <option   @selected(request()->team_id == $team->id)     value="{{ $team->id }}" >{{ $team->driver_id }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="social_teams-list-url">{{ __('social_teams_url') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="url" value="{{ request()->url }}"  type="text" placeholder="{{ __('social_teams_url') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="social_teams-list-social">{{ __('social_teams_social') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="social" value="{{ request()->social }}"  type="text" placeholder="{{ __('social_teams_social') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="social_teams-list-social_icon">{{ __('social_teams_social_icon') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="social_icon" value="{{ request()->social_icon }}"  type="text" placeholder="{{ __('social_teams_social_icon') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="social_teams-list-created_at">{{ __('social_teams_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="social_teams-list-updated_at">{{ __('social_teams_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('social_teams.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
