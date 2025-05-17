 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('worker_notifications.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-id">{{ __('worker_notifications_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('worker_notifications_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-team_id">{{ __('worker_notifications_team_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="team_id" type="number" value="{{ request()->team_id }}"  placeholder="{{ __('worker_notifications_team_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-type">{{ __('worker_notifications_type') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="type" value="{{ request()->type }}"  type="text" placeholder="{{ __('worker_notifications_type') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-message">{{ __('worker_notifications_message') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="message" value="{{ request()->message }}"  type="text" placeholder="{{ __('worker_notifications_message') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-amount">{{ __('worker_notifications_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="amount" type="number" value="{{ request()->amount }}"  placeholder="{{ __('worker_notifications_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-image_path">{{ __('worker_notifications_image_path') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="image_path" value="{{ request()->image_path }}"  type="text" placeholder="{{ __('worker_notifications_image_path') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-created_at">{{ __('worker_notifications_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-updated_at">{{ __('worker_notifications_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-title">{{ __('worker_notifications_title') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="title" value="{{ request()->title }}"  type="text" placeholder="{{ __('worker_notifications_title') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-user_id">{{ __('worker_notifications_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('worker_notifications_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="worker_notifications-list-is_read">{{ __('worker_notifications_is_read') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_read" class="form-control" id="worker_notifications-list-is_read">

                                                        <option value="all" @if(request()->is_read == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_read == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_read == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('worker_notifications.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
