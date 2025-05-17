 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('whatsapp_messages.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="whatsapp_messages-list-id">{{ __('whatsapp_messages_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('whatsapp_messages_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="whatsapp_messages-list-user_id">{{ __('whatsapp_messages_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('whatsapp_messages_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="whatsapp_messages-list-sent_status">{{ __('whatsapp_messages_sent_status') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="sent_status" value="{{ request()->sent_status }}"  type="text" placeholder="{{ __('whatsapp_messages_sent_status') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="whatsapp_messages-list-template">{{ __('whatsapp_messages_template') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="template" value="{{ request()->template }}"  type="text" placeholder="{{ __('whatsapp_messages_template') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="whatsapp_messages-list-message">{{ __('whatsapp_messages_message') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="message" value="{{ request()->message }}"  type="text" placeholder="{{ __('whatsapp_messages_message') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="whatsapp_messages-list-created_at">{{ __('whatsapp_messages_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="whatsapp_messages-list-updated_at">{{ __('whatsapp_messages_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('whatsapp_messages.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
