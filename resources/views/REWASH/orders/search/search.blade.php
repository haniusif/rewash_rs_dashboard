 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('orders.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-id">{{ __('orders_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('orders_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-order_number">{{ __('orders_order_number') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="order_number" value="{{ request()->order_number }}"  type="text" placeholder="{{ __('orders_order_number') }}"  />

                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-order_status_id">{{ __('orders_order_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="order_status_id"  class="form-control" id="orders-list-order_status_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($order_statuses as $order_status)
                             <option   @selected(request()->order_status_id == $order_status->id)     value="{{ $order_status->id }}" >{{ $order_status->name }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-user_id">{{ __('orders_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="user_id"  class="form-control" id="orders-list-user_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($providers as $provider)
                             <option   @selected(request()->user_id == $provider->id)     value="{{ $provider->id }}" >{{ $provider->created_at }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-provider_id">{{ __('orders_provider_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="provider_id"  class="form-control" id="orders-list-provider_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($providers as $provider)
                             <option   @selected(request()->provider_id == $provider->id)     value="{{ $provider->id }}" >{{ $provider->created_at }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-go_to_user_time">{{ __('orders_go_to_user_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="go_to_user_time" type="date" value="{{ request()->go_to_user_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-start_work_time">{{ __('orders_start_work_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="start_work_time" type="date" value="{{ request()->start_work_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-finish_work_time">{{ __('orders_finish_work_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="finish_work_time" type="date" value="{{ request()->finish_work_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-pickup_lat">{{ __('orders_pickup_lat') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="pickup_lat" type="number" value="{{ request()->pickup_lat }}"  placeholder="{{ __('orders_pickup_lat') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-pickup_lng">{{ __('orders_pickup_lng') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="pickup_lng" type="number" value="{{ request()->pickup_lng }}"  placeholder="{{ __('orders_pickup_lng') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-pickup_address">{{ __('orders_pickup_address') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="pickup_address" value="{{ request()->pickup_address }}"  type="text" placeholder="{{ __('orders_pickup_address') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-order_date">{{ __('orders_order_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="order_date" type="date" value="{{ request()->order_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-amount">{{ __('orders_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="amount" type="number" value="{{ request()->amount }}"  placeholder="{{ __('orders_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-vat">{{ __('orders_vat') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="vat" type="number" value="{{ request()->vat }}"  placeholder="{{ __('orders_vat') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-discount">{{ __('orders_discount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="discount" type="number" value="{{ request()->discount }}"  placeholder="{{ __('orders_discount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-total_amount">{{ __('orders_total_amount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total_amount" type="number" value="{{ request()->total_amount }}"  placeholder="{{ __('orders_total_amount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-created_at">{{ __('orders_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="orders-list-updated_at">{{ __('orders_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('orders.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
