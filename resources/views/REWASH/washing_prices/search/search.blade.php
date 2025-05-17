 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('washing_prices.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_prices-list-id">{{ __('washing_prices_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('washing_prices_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_prices-list-branch_id">{{ __('washing_prices_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('washing_prices_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_prices-list-washing_plan_id">{{ __('washing_prices_washing_plan_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="washing_plan_id" type="number" value="{{ request()->washing_plan_id }}"  placeholder="{{ __('washing_prices_washing_plan_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_prices-list-vehicle_type_id">{{ __('washing_prices_vehicle_type_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vehicle_type_id" type="number" value="{{ request()->vehicle_type_id }}"  placeholder="{{ __('washing_prices_vehicle_type_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_prices-list-price">{{ __('washing_prices_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="price" value="{{ request()->price }}"  type="text" placeholder="{{ __('washing_prices_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_prices-list-duration">{{ __('washing_prices_duration') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="duration" value="{{ request()->duration }}"  type="text" placeholder="{{ __('washing_prices_duration') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_prices-list-created_at">{{ __('washing_prices_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_prices-list-updated_at">{{ __('washing_prices_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('washing_prices.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
