 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('vehicle_modals.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_modals-list-id">{{ __('vehicle_modals_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('vehicle_modals_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_modals-list-branch_id">{{ __('vehicle_modals_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('vehicle_modals_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_modals-list-vehicle_modal">{{ __('vehicle_modals_vehicle_modal') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_modal" value="{{ request()->vehicle_modal }}"  type="text" placeholder="{{ __('vehicle_modals_vehicle_modal') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_modals-list-vehicle_en_modal">{{ __('vehicle_modals_vehicle_en_modal') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_en_modal" value="{{ request()->vehicle_en_modal }}"  type="text" placeholder="{{ __('vehicle_modals_vehicle_en_modal') }}"  />

                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_modals-list-vehicle_company_id">{{ __('vehicle_modals_vehicle_company_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="vehicle_company_id"  class="form-control" id="vehicle_modals-list-vehicle_company_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($vehicle_companies as $vehicle_company)
                             <option   @selected(request()->vehicle_company_id == $vehicle_company->id)     value="{{ $vehicle_company->id }}" >{{ $vehicle_company->branch_id }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_modals-list-created_at">{{ __('vehicle_modals_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="vehicle_modals-list-updated_at">{{ __('vehicle_modals_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('vehicle_modals.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
