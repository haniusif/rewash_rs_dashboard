 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('accountings.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="accountings-list-id">{{ __('accountings_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('accountings_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="accountings-list-name">{{ __('accountings_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('accountings_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="accountings-list-email">{{ __('accountings_email') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="email" value="{{ request()->email }}"  type="text" placeholder="{{ __('accountings_email') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="accountings-list-phone">{{ __('accountings_phone') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="phone" value="{{ request()->phone }}"  type="text" placeholder="{{ __('accountings_phone') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="accountings-list-active">{{ __('accountings_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="active" class="form-control" id="accountings-list-active">

                                                        <option value="all" @if(request()->active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="accountings-list-qoyod_customer_id">{{ __('accountings_qoyod_customer_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="qoyod_customer_id" type="number" value="{{ request()->qoyod_customer_id }}"  placeholder="{{ __('accountings_qoyod_customer_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="accountings-list-created_at">{{ __('accountings_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="accountings-list-updated_at">{{ __('accountings_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('accountings.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
