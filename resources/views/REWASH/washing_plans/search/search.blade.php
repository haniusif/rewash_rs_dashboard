 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('washing_plans.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-id">{{ __('washing_plans_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('washing_plans_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-branch_id">{{ __('washing_plans_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('washing_plans_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-name">{{ __('washing_plans_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('washing_plans_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-en_name">{{ __('washing_plans_en_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_name" value="{{ request()->en_name }}"  type="text" placeholder="{{ __('washing_plans_en_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-subscription_package">{{ __('washing_plans_subscription_package') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="subscription_package" value="{{ request()->subscription_package }}"  type="text" placeholder="{{ __('washing_plans_subscription_package') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-en_subscription_package">{{ __('washing_plans_en_subscription_package') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_subscription_package" value="{{ request()->en_subscription_package }}"  type="text" placeholder="{{ __('washing_plans_en_subscription_package') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-number_of_washes">{{ __('washing_plans_number_of_washes') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="number_of_washes" type="number" value="{{ request()->number_of_washes }}"  placeholder="{{ __('washing_plans_number_of_washes') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-validity_days">{{ __('washing_plans_validity_days') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="validity_days" type="number" value="{{ request()->validity_days }}"  placeholder="{{ __('washing_plans_validity_days') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-price">{{ __('washing_plans_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="price" type="number" value="{{ request()->price }}"  placeholder="{{ __('washing_plans_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-image">{{ __('washing_plans_image') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="image" value="{{ request()->image }}"  type="text" placeholder="{{ __('washing_plans_image') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-washing_plan_type_id">{{ __('washing_plans_washing_plan_type_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="washing_plan_type_id" type="number" value="{{ request()->washing_plan_type_id }}"  placeholder="{{ __('washing_plans_washing_plan_type_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-is_active">{{ __('washing_plans_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="washing_plans-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-show_in_home">{{ __('washing_plans_show_in_home') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="show_in_home" class="form-control" id="washing_plans-list-show_in_home">

                                                        <option value="all" @if(request()->show_in_home == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->show_in_home == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->show_in_home == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-description">{{ __('washing_plans_description') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="description" value="{{ request()->description }}"  type="text" placeholder="{{ __('washing_plans_description') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-en_description">{{ __('washing_plans_en_description') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_description" value="{{ request()->en_description }}"  type="text" placeholder="{{ __('washing_plans_en_description') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-created_at">{{ __('washing_plans_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-updated_at">{{ __('washing_plans_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-loyalty_points">{{ __('washing_plans_loyalty_points') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="loyalty_points" type="number" value="{{ request()->loyalty_points }}"  placeholder="{{ __('washing_plans_loyalty_points') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-is_offer">{{ __('washing_plans_is_offer') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_offer" class="form-control" id="washing_plans-list-is_offer">

                                                        <option value="all" @if(request()->is_offer == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_offer == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_offer == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plans-list-with_tabby">{{ __('washing_plans_with_tabby') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="with_tabby" class="form-control" id="washing_plans-list-with_tabby">

                                                        <option value="all" @if(request()->with_tabby == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->with_tabby == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->with_tabby == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('washing_plans.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
