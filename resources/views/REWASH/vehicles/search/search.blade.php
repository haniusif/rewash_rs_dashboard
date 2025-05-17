 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('vehicles.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-id">{{ __('vehicles_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('vehicles_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-branch_id">{{ __('vehicles_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('vehicles_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-user_id">{{ __('vehicles_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('vehicles_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-vehicle_name">{{ __('vehicles_vehicle_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_name" value="{{ request()->vehicle_name }}"  type="text" placeholder="{{ __('vehicles_vehicle_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-vehicle_color_id">{{ __('vehicles_vehicle_color_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_color_id" type="number" value="{{ request()->vehicle_color_id }}"  placeholder="{{ __('vehicles_vehicle_color_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-vehicle_company_id">{{ __('vehicles_vehicle_company_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_company_id" type="number" value="{{ request()->vehicle_company_id }}"  placeholder="{{ __('vehicles_vehicle_company_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-vehicle_modal_id">{{ __('vehicles_vehicle_modal_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_modal_id" type="number" value="{{ request()->vehicle_modal_id }}"  placeholder="{{ __('vehicles_vehicle_modal_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-vehicle_type_id">{{ __('vehicles_vehicle_type_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_type_id" type="number" value="{{ request()->vehicle_type_id }}"  placeholder="{{ __('vehicles_vehicle_type_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-image">{{ __('vehicles_image') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="image" value="{{ request()->image }}"  type="text" placeholder="{{ __('vehicles_image') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-is_deleted">{{ __('vehicles_is_deleted') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_deleted" class="form-control" id="vehicles-list-is_deleted">

                                                        <option value="all" @if(request()->is_deleted == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_deleted == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_deleted == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-created_at">{{ __('vehicles_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicles-list-updated_at">{{ __('vehicles_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('vehicles.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
