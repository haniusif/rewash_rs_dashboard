 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('vehicle_companies.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_companies-list-id">{{ __('vehicle_companies_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('vehicle_companies_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_companies-list-branch_id">{{ __('vehicle_companies_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('vehicle_companies_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_companies-list-vehicle_company">{{ __('vehicle_companies_vehicle_company') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_company" value="{{ request()->vehicle_company }}"  type="text" placeholder="{{ __('vehicle_companies_vehicle_company') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_companies-list-vehicle_en_company">{{ __('vehicle_companies_vehicle_en_company') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_en_company" value="{{ request()->vehicle_en_company }}"  type="text" placeholder="{{ __('vehicle_companies_vehicle_en_company') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_companies-list-logo">{{ __('vehicle_companies_logo') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="logo" value="{{ request()->logo }}"  type="text" placeholder="{{ __('vehicle_companies_logo') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_companies-list-sort">{{ __('vehicle_companies_sort') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="sort" type="number" value="{{ request()->sort }}"  placeholder="{{ __('vehicle_companies_sort') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_companies-list-is_active">{{ __('vehicle_companies_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="vehicle_companies-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_companies-list-created_at">{{ __('vehicle_companies_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_companies-list-updated_at">{{ __('vehicle_companies_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('vehicle_companies.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
