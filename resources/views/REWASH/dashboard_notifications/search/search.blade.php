 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('dashboard_notifications.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="dashboard_notifications-list-id">{{ __('dashboard_notifications_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('dashboard_notifications_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="dashboard_notifications-list-branch_id">{{ __('dashboard_notifications_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('dashboard_notifications_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="dashboard_notifications-list-user_id">{{ __('dashboard_notifications_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('dashboard_notifications_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="dashboard_notifications-list-last_seen_support_messages">{{ __('dashboard_notifications_last_seen_support_messages') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="last_seen_support_messages" type="number" value="{{ request()->last_seen_support_messages }}"  placeholder="{{ __('dashboard_notifications_last_seen_support_messages') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="dashboard_notifications-list-last_seen_web_appointments">{{ __('dashboard_notifications_last_seen_web_appointments') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="last_seen_web_appointments" type="number" value="{{ request()->last_seen_web_appointments }}"  placeholder="{{ __('dashboard_notifications_last_seen_web_appointments') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="dashboard_notifications-list-last_seen_reviews">{{ __('dashboard_notifications_last_seen_reviews') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="last_seen_reviews" type="number" value="{{ request()->last_seen_reviews }}"  placeholder="{{ __('dashboard_notifications_last_seen_reviews') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="dashboard_notifications-list-last_seen_gift_appointments">{{ __('dashboard_notifications_last_seen_gift_appointments') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="last_seen_gift_appointments" type="number" value="{{ request()->last_seen_gift_appointments }}"  placeholder="{{ __('dashboard_notifications_last_seen_gift_appointments') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="dashboard_notifications-list-last_customer_suggestion">{{ __('dashboard_notifications_last_customer_suggestion') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="last_customer_suggestion" type="number" value="{{ request()->last_customer_suggestion }}"  placeholder="{{ __('dashboard_notifications_last_customer_suggestion') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="dashboard_notifications-list-created_at">{{ __('dashboard_notifications_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="dashboard_notifications-list-updated_at">{{ __('dashboard_notifications_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('dashboard_notifications.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
