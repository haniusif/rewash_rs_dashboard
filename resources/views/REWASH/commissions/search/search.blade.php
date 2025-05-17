 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('commissions.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="commissions-list-id">{{ __('commissions_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('commissions_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="commissions-list-worker_id">{{ __('commissions_worker_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="worker_id" type="number" value="{{ request()->worker_id }}"  placeholder="{{ __('commissions_worker_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="commissions-list-amount">{{ __('commissions_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="amount" type="number" value="{{ request()->amount }}"  placeholder="{{ __('commissions_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="commissions-list-operation_type">{{ __('commissions_operation_type') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="operation_type" value="{{ request()->operation_type }}"  type="text" placeholder="{{ __('commissions_operation_type') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="commissions-list-commission_title">{{ __('commissions_commission_title') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="commission_title" value="{{ request()->commission_title }}"  type="text" placeholder="{{ __('commissions_commission_title') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="commissions-list-commission_text">{{ __('commissions_commission_text') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="commission_text" value="{{ request()->commission_text }}"  type="text" placeholder="{{ __('commissions_commission_text') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="commissions-list-created_at">{{ __('commissions_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="commissions-list-updated_at">{{ __('commissions_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('commissions.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
