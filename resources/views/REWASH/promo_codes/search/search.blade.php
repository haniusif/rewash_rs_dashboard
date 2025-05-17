 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('promo_codes.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-id">{{ __('promo_codes_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('promo_codes_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-branch_id">{{ __('promo_codes_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('promo_codes_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-promo_code">{{ __('promo_codes_promo_code') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code" value="{{ request()->promo_code }}"  type="text" placeholder="{{ __('promo_codes_promo_code') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-is_unlimited">{{ __('promo_codes_is_unlimited') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_unlimited" class="form-control" id="promo_codes-list-is_unlimited">

                                                        <option value="all" @if(request()->is_unlimited == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_unlimited == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_unlimited == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-number_of_users">{{ __('promo_codes_number_of_users') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="number_of_users" type="number" value="{{ request()->number_of_users }}"  placeholder="{{ __('promo_codes_number_of_users') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-discount_value">{{ __('promo_codes_discount_value') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="discount_value" type="number" value="{{ request()->discount_value }}"  placeholder="{{ __('promo_codes_discount_value') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-discount_type">{{ __('promo_codes_discount_type') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="discount_type" value="{{ request()->discount_type }}"  type="text" placeholder="{{ __('promo_codes_discount_type') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-is_active">{{ __('promo_codes_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="promo_codes-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-validity_time_from">{{ __('promo_codes_validity_time_from') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="validity_time_from" type="date" value="{{ request()->validity_time_from }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-validity_time_to">{{ __('promo_codes_validity_time_to') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="validity_time_to" type="date" value="{{ request()->validity_time_to }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-is_one_user">{{ __('promo_codes_is_one_user') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_one_user" class="form-control" id="promo_codes-list-is_one_user">

                                                        <option value="all" @if(request()->is_one_user == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_one_user == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_one_user == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-created_at">{{ __('promo_codes_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-updated_at">{{ __('promo_codes_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_codes-list-is_cashback">{{ __('promo_codes_is_cashback') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_cashback" class="form-control" id="promo_codes-list-is_cashback">

                                                        <option value="all" @if(request()->is_cashback == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_cashback == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_cashback == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('promo_codes.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
