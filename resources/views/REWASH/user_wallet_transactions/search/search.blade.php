 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('user_wallet_transactions.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_wallet_transactions-list-id">{{ __('user_wallet_transactions_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('user_wallet_transactions_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_wallet_transactions-list-user_id">{{ __('user_wallet_transactions_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('user_wallet_transactions_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_wallet_transactions-list-actual_balance">{{ __('user_wallet_transactions_actual_balance') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="actual_balance" type="number" value="{{ request()->actual_balance }}"  placeholder="{{ __('user_wallet_transactions_actual_balance') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_wallet_transactions-list-amount">{{ __('user_wallet_transactions_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="amount" type="number" value="{{ request()->amount }}"  placeholder="{{ __('user_wallet_transactions_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_wallet_transactions-list-transaction_type">{{ __('user_wallet_transactions_transaction_type') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="transaction_type" value="{{ request()->transaction_type }}"  type="text" placeholder="{{ __('user_wallet_transactions_transaction_type') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_wallet_transactions-list-transaction_comments">{{ __('user_wallet_transactions_transaction_comments') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="transaction_comments" value="{{ request()->transaction_comments }}"  type="text" placeholder="{{ __('user_wallet_transactions_transaction_comments') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_wallet_transactions-list-created_at">{{ __('user_wallet_transactions_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="user_wallet_transactions-list-updated_at">{{ __('user_wallet_transactions_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('user_wallet_transactions.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
