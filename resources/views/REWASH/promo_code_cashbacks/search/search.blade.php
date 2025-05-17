 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('promo_code_cashbacks.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-id">{{ __('promo_code_cashbacks_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('promo_code_cashbacks_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-promo_code_id">{{ __('promo_code_cashbacks_promo_code_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="promo_code_id" type="number" value="{{ request()->promo_code_id }}"  placeholder="{{ __('promo_code_cashbacks_promo_code_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-cashback_type">{{ __('promo_code_cashbacks_cashback_type') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="cashback_type" value="{{ request()->cashback_type }}"  type="text" placeholder="{{ __('promo_code_cashbacks_cashback_type') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-cashback_value">{{ __('promo_code_cashbacks_cashback_value') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="cashback_value" type="number" value="{{ request()->cashback_value }}"  placeholder="{{ __('promo_code_cashbacks_cashback_value') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-min_order_amount">{{ __('promo_code_cashbacks_min_order_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="min_order_amount" type="number" value="{{ request()->min_order_amount }}"  placeholder="{{ __('promo_code_cashbacks_min_order_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-max_cashback_amount">{{ __('promo_code_cashbacks_max_cashback_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="max_cashback_amount" type="number" value="{{ request()->max_cashback_amount }}"  placeholder="{{ __('promo_code_cashbacks_max_cashback_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-is_active">{{ __('promo_code_cashbacks_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="promo_code_cashbacks-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-start_date">{{ __('promo_code_cashbacks_start_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="start_date" type="date" value="{{ request()->start_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-end_date">{{ __('promo_code_cashbacks_end_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="end_date" type="date" value="{{ request()->end_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-max_uses_per_user">{{ __('promo_code_cashbacks_max_uses_per_user') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="max_uses_per_user" type="number" value="{{ request()->max_uses_per_user }}"  placeholder="{{ __('promo_code_cashbacks_max_uses_per_user') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-cashback_method">{{ __('promo_code_cashbacks_cashback_method') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="cashback_method" value="{{ request()->cashback_method }}"  type="text" placeholder="{{ __('promo_code_cashbacks_cashback_method') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-cashback_expiry">{{ __('promo_code_cashbacks_cashback_expiry') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="cashback_expiry" type="date" value="{{ request()->cashback_expiry }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-created_at">{{ __('promo_code_cashbacks_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="promo_code_cashbacks-list-updated_at">{{ __('promo_code_cashbacks_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('promo_code_cashbacks.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
