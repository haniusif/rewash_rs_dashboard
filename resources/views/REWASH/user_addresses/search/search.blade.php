 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('user_addresses.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-id">{{ __('user_addresses_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('user_addresses_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-user_id">{{ __('user_addresses_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('user_addresses_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-address_title">{{ __('user_addresses_address_title') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="address_title" value="{{ request()->address_title }}"  type="text" placeholder="{{ __('user_addresses_address_title') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-address_desc">{{ __('user_addresses_address_desc') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="address_desc" value="{{ request()->address_desc }}"  type="text" placeholder="{{ __('user_addresses_address_desc') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-latitude">{{ __('user_addresses_latitude') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="latitude" type="number" value="{{ request()->latitude }}"  placeholder="{{ __('user_addresses_latitude') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-longitude">{{ __('user_addresses_longitude') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="longitude" type="number" value="{{ request()->longitude }}"  placeholder="{{ __('user_addresses_longitude') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-city_id">{{ __('user_addresses_city_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="city_id" type="number" value="{{ request()->city_id }}"  placeholder="{{ __('user_addresses_city_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-neighborhood_id">{{ __('user_addresses_neighborhood_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="neighborhood_id" type="number" value="{{ request()->neighborhood_id }}"  placeholder="{{ __('user_addresses_neighborhood_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-is_default">{{ __('user_addresses_is_default') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_default" class="form-control" id="user_addresses-list-is_default">

                                                        <option value="all" @if(request()->is_default == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_default == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_default == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-is_deleted">{{ __('user_addresses_is_deleted') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_deleted" class="form-control" id="user_addresses-list-is_deleted">

                                                        <option value="all" @if(request()->is_deleted == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_deleted == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_deleted == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-created_at">{{ __('user_addresses_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_addresses-list-updated_at">{{ __('user_addresses_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('user_addresses.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
