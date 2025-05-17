 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('contacts.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-id">{{ __('contacts_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('contacts_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-branch_id">{{ __('contacts_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('contacts_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-c_name">{{ __('contacts_c_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="c_name" value="{{ request()->c_name }}"  type="text" placeholder="{{ __('contacts_c_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-logo">{{ __('contacts_logo') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="logo" value="{{ request()->logo }}"  type="text" placeholder="{{ __('contacts_logo') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-mobile">{{ __('contacts_mobile') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="mobile" value="{{ request()->mobile }}"  type="text" placeholder="{{ __('contacts_mobile') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-phone">{{ __('contacts_phone') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="phone" value="{{ request()->phone }}"  type="text" placeholder="{{ __('contacts_phone') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-address">{{ __('contacts_address') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="address" value="{{ request()->address }}"  type="text" placeholder="{{ __('contacts_address') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-email">{{ __('contacts_email') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="email" value="{{ request()->email }}"  type="text" placeholder="{{ __('contacts_email') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-website">{{ __('contacts_website') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="website" value="{{ request()->website }}"  type="text" placeholder="{{ __('contacts_website') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-created_at">{{ __('contacts_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-updated_at">{{ __('contacts_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="contacts-list-logo_two">{{ __('contacts_logo_two') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="logo_two" value="{{ request()->logo_two }}"  type="text" placeholder="{{ __('contacts_logo_two') }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('contacts.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
