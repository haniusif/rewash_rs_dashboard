 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('user_loyalty_points.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_loyalty_points-list-id">{{ __('user_loyalty_points_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('user_loyalty_points_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_loyalty_points-list-user_id">{{ __('user_loyalty_points_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('user_loyalty_points_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_loyalty_points-list-loyalty_points">{{ __('user_loyalty_points_loyalty_points') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="loyalty_points" type="number" value="{{ request()->loyalty_points }}"  placeholder="{{ __('user_loyalty_points_loyalty_points') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_loyalty_points-list-loyalty_point_text">{{ __('user_loyalty_points_loyalty_point_text') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="loyalty_point_text" value="{{ request()->loyalty_point_text }}"  type="text" placeholder="{{ __('user_loyalty_points_loyalty_point_text') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_loyalty_points-list-is_active">{{ __('user_loyalty_points_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="user_loyalty_points-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_loyalty_points-list-created_at">{{ __('user_loyalty_points_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_loyalty_points-list-updated_at">{{ __('user_loyalty_points_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('user_loyalty_points.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
