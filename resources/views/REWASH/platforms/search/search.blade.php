 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('platforms.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-id">{{ __('platforms_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('platforms_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-name">{{ __('platforms_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('platforms_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-en_name">{{ __('platforms_en_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_name" value="{{ request()->en_name }}"  type="text" placeholder="{{ __('platforms_en_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-sorting">{{ __('platforms_sorting') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="sorting" type="number" value="{{ request()->sorting }}"  placeholder="{{ __('platforms_sorting') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-is_active">{{ __('platforms_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="platforms-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-created_at">{{ __('platforms_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-updated_at">{{ __('platforms_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-accounting_name">{{ __('platforms_accounting_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="accounting_name" value="{{ request()->accounting_name }}"  type="text" placeholder="{{ __('platforms_accounting_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-default_price">{{ __('platforms_default_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="default_price" type="number" value="{{ request()->default_price }}"  placeholder="{{ __('platforms_default_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-having_default_price">{{ __('platforms_having_default_price') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="having_default_price" class="form-control" id="platforms-list-having_default_price">

                                                        <option value="all" @if(request()->having_default_price == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->having_default_price == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->having_default_price == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-accounting_id">{{ __('platforms_accounting_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="accounting_id" type="number" value="{{ request()->accounting_id }}"  placeholder="{{ __('platforms_accounting_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="platforms-list-promo_code_id">{{ __('platforms_promo_code_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code_id" type="number" value="{{ request()->promo_code_id }}"  placeholder="{{ __('platforms_promo_code_id') }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('platforms.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
