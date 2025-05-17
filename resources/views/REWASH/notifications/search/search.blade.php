 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('notifications.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="notifications-list-id">{{ __('notifications_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('notifications_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="notifications-list-user_id">{{ __('notifications_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('notifications_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="notifications-list-is_read">{{ __('notifications_is_read') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_read" class="form-control" id="notifications-list-is_read">

                                                        <option value="all" @if(request()->is_read == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_read == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_read == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="notifications-list-title">{{ __('notifications_title') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="title" value="{{ request()->title }}"  type="text" placeholder="{{ __('notifications_title') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="notifications-list-notification">{{ __('notifications_notification') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="notification" value="{{ request()->notification }}"  type="text" placeholder="{{ __('notifications_notification') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="notifications-list-en_title">{{ __('notifications_en_title') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_title" value="{{ request()->en_title }}"  type="text" placeholder="{{ __('notifications_en_title') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="notifications-list-en_notification">{{ __('notifications_en_notification') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_notification" value="{{ request()->en_notification }}"  type="text" placeholder="{{ __('notifications_en_notification') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="notifications-list-created_at">{{ __('notifications_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="notifications-list-updated_at">{{ __('notifications_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('notifications.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
