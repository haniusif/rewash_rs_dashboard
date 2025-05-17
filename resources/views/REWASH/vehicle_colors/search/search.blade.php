 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('vehicle_colors.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_colors-list-id">{{ __('vehicle_colors_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('vehicle_colors_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_colors-list-branch_id">{{ __('vehicle_colors_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('vehicle_colors_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_colors-list-vehicle_color">{{ __('vehicle_colors_vehicle_color') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_color" value="{{ request()->vehicle_color }}"  type="text" placeholder="{{ __('vehicle_colors_vehicle_color') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_colors-list-vehicle_en_color">{{ __('vehicle_colors_vehicle_en_color') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_en_color" value="{{ request()->vehicle_en_color }}"  type="text" placeholder="{{ __('vehicle_colors_vehicle_en_color') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_colors-list-vehicle_color_code">{{ __('vehicle_colors_vehicle_color_code') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_color_code" value="{{ request()->vehicle_color_code }}"  type="text" placeholder="{{ __('vehicle_colors_vehicle_color_code') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_colors-list-sort">{{ __('vehicle_colors_sort') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="sort" type="number" value="{{ request()->sort }}"  placeholder="{{ __('vehicle_colors_sort') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_colors-list-is_active">{{ __('vehicle_colors_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="vehicle_colors-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_colors-list-created_at">{{ __('vehicle_colors_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_colors-list-updated_at">{{ __('vehicle_colors_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('vehicle_colors.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
