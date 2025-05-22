 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('order_details.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="order_details-list-id">{{ __('order_details_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('order_details_id') }}"  />

                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="order_details-list-order_id">{{ __('order_details_order_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="order_id"  class="form-control" id="order_details-list-order_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($orders as $order)
                             <option   @selected(request()->order_id == $order->id)     value="{{ $order->id }}" >{{ $order->order_number }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="order_details-list-rsa_service_id">{{ __('order_details_rsa_service_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="rsa_service_id"  class="form-control" id="order_details-list-rsa_service_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($rsa_services as $rsa_service)
                             <option   @selected(request()->rsa_service_id == $rsa_service->id)     value="{{ $rsa_service->id }}" >{{ $rsa_service->category_id }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="order_details-list-quantity">{{ __('order_details_quantity') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="quantity" type="number" value="{{ request()->quantity }}"  placeholder="{{ __('order_details_quantity') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="order_details-list-service_price">{{ __('order_details_service_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="service_price" type="number" value="{{ request()->service_price }}"  placeholder="{{ __('order_details_service_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="order_details-list-total_price">{{ __('order_details_total_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="total_price" type="number" value="{{ request()->total_price }}"  placeholder="{{ __('order_details_total_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="order_details-list-created_at">{{ __('order_details_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="order_details-list-updated_at">{{ __('order_details_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('order_details.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
