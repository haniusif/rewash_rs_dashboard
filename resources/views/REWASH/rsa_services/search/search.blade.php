 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('rsa_services.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-id">{{ __('rsa_services_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('rsa_services_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-category_id">{{ __('rsa_services_category_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="category_id" type="number" value="{{ request()->category_id }}"  placeholder="{{ __('rsa_services_category_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-name">{{ __('rsa_services_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('rsa_services_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-en_name">{{ __('rsa_services_en_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_name" value="{{ request()->en_name }}"  type="text" placeholder="{{ __('rsa_services_en_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-price">{{ __('rsa_services_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="price" type="number" value="{{ request()->price }}"  placeholder="{{ __('rsa_services_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-promotional_price">{{ __('rsa_services_promotional_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promotional_price" type="number" value="{{ request()->promotional_price }}"  placeholder="{{ __('rsa_services_promotional_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-is_active">{{ __('rsa_services_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="rsa_services-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-sorting">{{ __('rsa_services_sorting') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="sorting" type="number" value="{{ request()->sorting }}"  placeholder="{{ __('rsa_services_sorting') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-expected_duration">{{ __('rsa_services_expected_duration') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="expected_duration" value="{{ request()->expected_duration }}"  type="text" placeholder="{{ __('rsa_services_expected_duration') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-created_at">{{ __('rsa_services_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_services-list-updated_at">{{ __('rsa_services_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('rsa_services.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
