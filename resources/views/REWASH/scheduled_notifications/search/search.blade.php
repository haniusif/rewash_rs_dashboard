 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('scheduled_notifications.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="scheduled_notifications-list-id">{{ __('scheduled_notifications_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('scheduled_notifications_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="scheduled_notifications-list-branch_id">{{ __('scheduled_notifications_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('scheduled_notifications_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="scheduled_notifications-list-notification_title">{{ __('scheduled_notifications_notification_title') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="notification_title" value="{{ request()->notification_title }}"  type="text" placeholder="{{ __('scheduled_notifications_notification_title') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="scheduled_notifications-list-notification_massage">{{ __('scheduled_notifications_notification_massage') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="notification_massage" value="{{ request()->notification_massage }}"  type="text" placeholder="{{ __('scheduled_notifications_notification_massage') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="scheduled_notifications-list-notification_date">{{ __('scheduled_notifications_notification_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="notification_date" type="date" value="{{ request()->notification_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="scheduled_notifications-list-created_at">{{ __('scheduled_notifications_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="scheduled_notifications-list-updated_at">{{ __('scheduled_notifications_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('scheduled_notifications.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
