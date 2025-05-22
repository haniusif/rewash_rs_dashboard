 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('rsa_advertisements.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_advertisements-list-id">{{ __('rsa_advertisements_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('rsa_advertisements_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_advertisements-list-title">{{ __('rsa_advertisements_title') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="title" value="{{ request()->title }}"  type="text" placeholder="{{ __('rsa_advertisements_title') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_advertisements-list-en_title">{{ __('rsa_advertisements_en_title') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_title" value="{{ request()->en_title }}"  type="text" placeholder="{{ __('rsa_advertisements_en_title') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_advertisements-list-image">{{ __('rsa_advertisements_image') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="image" value="{{ request()->image }}"  type="text" placeholder="{{ __('rsa_advertisements_image') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_advertisements-list-advertisement_type">{{ __('rsa_advertisements_advertisement_type') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="advertisement_type" value="{{ request()->advertisement_type }}"  type="text" placeholder="{{ __('rsa_advertisements_advertisement_type') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_advertisements-list-advertisement_data">{{ __('rsa_advertisements_advertisement_data') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="advertisement_data" value="{{ request()->advertisement_data }}"  type="text" placeholder="{{ __('rsa_advertisements_advertisement_data') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_advertisements-list-is_active">{{ __('rsa_advertisements_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="rsa_advertisements-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_advertisements-list-sorting">{{ __('rsa_advertisements_sorting') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="sorting" type="number" value="{{ request()->sorting }}"  placeholder="{{ __('rsa_advertisements_sorting') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_advertisements-list-created_at">{{ __('rsa_advertisements_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="rsa_advertisements-list-updated_at">{{ __('rsa_advertisements_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('rsa_advertisements.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
