@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.orders_orders')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.orders_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/orders">     @lang('messages.orders_orders')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/orders/create" title = "@lang('messages.orders_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.orders_add_new')
</a>
															</li>



														</ul>

														<a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh"></i>
														</a>

                                                        		<a href="#" data-action="fullscreen" class="orange2">
														<i class="ace-icon fa fa-expand"></i>
													</a>

														<a href="#" data-action="collapse">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="ace-icon fa fa-times"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/orders') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_order_number') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("order_number" , $order->order_number)  }}" data-placement="left"  data-content="{{ __('orders_order_number_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_order_number_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('order_number') ? 'is-invalid' : '' }}" name="order_number" placeholder="{{ __('orders_order_number') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('order_number'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('order_number') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_order_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select data-toggle="popover"   data-placement="left"  data-content="{{ __('orders_order_status_id_data-content') }}" data-trigger="hover" data-original-title="{{ __('orders_order_status_id_data-original-title') }}"  class="form-control  {{ $errors->has('order_status_id') ? 'is-invalid' : '' }} "  name="order_status_id" >

                            @foreach($order_statuses as $order_status)
                             <option  @selected(old('order_status_id' , $order->order_status_id) == $order_status->id)    value="{{ $order_status->id }}" >{{ $order_status->name }}</option>
                             @endforeach
                            </select>

                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('order_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('order_status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select data-toggle="popover"   data-placement="left"  data-content="{{ __('orders_user_id_data-content') }}" data-trigger="hover" data-original-title="{{ __('orders_user_id_data-original-title') }}"  class="form-control  {{ $errors->has('user_id') ? 'is-invalid' : '' }} "  name="user_id" >

                            @foreach($providers as $provider)
                             <option  @selected(old('user_id' , $order->user_id) == $provider->id)    value="{{ $provider->id }}" >{{ $provider->created_at }}</option>
                             @endforeach
                            </select>

                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('user_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('user_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_provider_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select data-toggle="popover"   data-placement="left"  data-content="{{ __('orders_provider_id_data-content') }}" data-trigger="hover" data-original-title="{{ __('orders_provider_id_data-original-title') }}"  class="form-control  {{ $errors->has('provider_id') ? 'is-invalid' : '' }} "  name="provider_id" >

                            @foreach($providers as $provider)
                             <option  @selected(old('provider_id' , $order->provider_id) == $provider->id)    value="{{ $provider->id }}" >{{ $provider->created_at }}</option>
                             @endforeach
                            </select>

                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('provider_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('provider_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_go_to_user_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("go_to_user_time" , $order->go_to_user_time)  }}" data-placement="left"  data-content="{{ __('orders_go_to_user_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_go_to_user_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('go_to_user_time') ? 'is-invalid' : '' }}" name="go_to_user_time" placeholder="{{ __('orders_go_to_user_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('go_to_user_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('go_to_user_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_start_work_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("start_work_time" , $order->start_work_time)  }}" data-placement="left"  data-content="{{ __('orders_start_work_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_start_work_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('start_work_time') ? 'is-invalid' : '' }}" name="start_work_time" placeholder="{{ __('orders_start_work_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('start_work_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('start_work_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_finish_work_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("finish_work_time" , $order->finish_work_time)  }}" data-placement="left"  data-content="{{ __('orders_finish_work_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_finish_work_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('finish_work_time') ? 'is-invalid' : '' }}" name="finish_work_time" placeholder="{{ __('orders_finish_work_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('finish_work_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('finish_work_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_pickup_lat') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("pickup_lat" , $order->pickup_lat)  }}" data-placement="left"  data-content="{{ __('orders_pickup_lat_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_pickup_lat_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('pickup_lat') ? 'is-invalid' : '' }}" name="pickup_lat" placeholder="{{ __('orders_pickup_lat') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('pickup_lat'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('pickup_lat') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_pickup_lng') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("pickup_lng" , $order->pickup_lng)  }}" data-placement="left"  data-content="{{ __('orders_pickup_lng_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_pickup_lng_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('pickup_lng') ? 'is-invalid' : '' }}" name="pickup_lng" placeholder="{{ __('orders_pickup_lng') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('pickup_lng'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('pickup_lng') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_pickup_address') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("pickup_address" , $order->pickup_address)  }}" data-placement="left"  data-content="{{ __('orders_pickup_address_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_pickup_address_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('pickup_address') ? 'is-invalid' : '' }}" name="pickup_address" placeholder="{{ __('orders_pickup_address') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('pickup_address'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('pickup_address') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_order_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("order_date" , $order->order_date)  }}" data-placement="left"  data-content="{{ __('orders_order_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_order_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('order_date') ? 'is-invalid' : '' }}" name="order_date" placeholder="{{ __('orders_order_date') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('order_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('order_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("amount" , $order->amount)  }}" data-placement="left"  data-content="{{ __('orders_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_amount_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" name="amount" placeholder="{{ __('orders_amount') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('amount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('amount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_vat') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("vat" , $order->vat)  }}" data-placement="left"  data-content="{{ __('orders_vat_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_vat_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('vat') ? 'is-invalid' : '' }}" name="vat" placeholder="{{ __('orders_vat') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vat'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vat') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_discount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("discount" , $order->discount)  }}" data-placement="left"  data-content="{{ __('orders_discount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_discount_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" name="discount" placeholder="{{ __('orders_discount') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('discount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('discount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_total_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("total_amount" , $order->total_amount)  }}" data-placement="left"  data-content="{{ __('orders_total_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_total_amount_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('total_amount') ? 'is-invalid' : '' }}" name="total_amount" placeholder="{{ __('orders_total_amount') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('total_amount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('total_amount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.orders_update') 
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
          
               </div>
                </div>
                </div>







@endsection
