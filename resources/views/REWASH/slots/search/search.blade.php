 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('slots.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-id">{{ __('slots_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('slots_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-branch_id">{{ __('slots_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('slots_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-zone_id">{{ __('slots_zone_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="zone_id" type="number" value="{{ request()->zone_id }}"  placeholder="{{ __('slots_zone_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-from_time">{{ __('slots_from_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="from_time" type="date" value="{{ request()->from_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-to_time">{{ __('slots_to_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="to_time" type="date" value="{{ request()->to_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-date">{{ __('slots_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="date" type="date" value="{{ request()->date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-is_selected">{{ __('slots_is_selected') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_selected" class="form-control" id="slots-list-is_selected">

                                                        <option value="all" @if(request()->is_selected == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_selected == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_selected == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-is_active">{{ __('slots_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="slots-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-times_to_book">{{ __('slots_times_to_book') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="times_to_book" type="number" value="{{ request()->times_to_book }}"  placeholder="{{ __('slots_times_to_book') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-created_at">{{ __('slots_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-updated_at">{{ __('slots_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-created_by">{{ __('slots_created_by') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_by" type="number" value="{{ request()->created_by }}"  placeholder="{{ __('slots_created_by') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-updated_by">{{ __('slots_updated_by') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_by" type="number" value="{{ request()->updated_by }}"  placeholder="{{ __('slots_updated_by') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="slots-list-promo_code_id">{{ __('slots_promo_code_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code_id" type="number" value="{{ request()->promo_code_id }}"  placeholder="{{ __('slots_promo_code_id') }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('slots.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
