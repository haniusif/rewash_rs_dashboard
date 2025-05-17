 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('support_message_comments.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="support_message_comments-list-id">{{ __('support_message_comments_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('support_message_comments_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="support_message_comments-list-support_message_id">{{ __('support_message_comments_support_message_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="support_message_id" type="number" value="{{ request()->support_message_id }}"  placeholder="{{ __('support_message_comments_support_message_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="support_message_comments-list-comment">{{ __('support_message_comments_comment') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="comment" value="{{ request()->comment }}"  type="text" placeholder="{{ __('support_message_comments_comment') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="support_message_comments-list-created_by">{{ __('support_message_comments_created_by') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_by" type="number" value="{{ request()->created_by }}"  placeholder="{{ __('support_message_comments_created_by') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="support_message_comments-list-created_at">{{ __('support_message_comments_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="support_message_comments-list-updated_at">{{ __('support_message_comments_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('support_message_comments.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
