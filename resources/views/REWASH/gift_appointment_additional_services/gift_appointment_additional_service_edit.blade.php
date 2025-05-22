@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.gift_appointment_additional_services_gift_appointment_additional_services')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.gift_appointment_additional_services_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/gift_appointment_additional_services">     @lang('messages.gift_appointment_additional_services_gift_appointment_additional_services')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/gift_appointment_additional_services/create" title = "@lang('messages.gift_appointment_additional_services_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.gift_appointment_additional_services_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/gift_appointment_additional_services') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_additional_services_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $gift_appointment_additional_service->branch_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_additional_services_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_additional_services_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('gift_appointment_additional_services_branch_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('branch_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('branch_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_additional_services_gift_appointment_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("gift_appointment_id" , $gift_appointment_additional_service->gift_appointment_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_additional_services_gift_appointment_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_additional_services_gift_appointment_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('gift_appointment_id') ? 'is-invalid' : '' }}" name="gift_appointment_id" placeholder="{{ __('gift_appointment_additional_services_gift_appointment_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('gift_appointment_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('gift_appointment_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_additional_services_additional_service_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("additional_service_id" , $gift_appointment_additional_service->additional_service_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_additional_services_additional_service_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_additional_services_additional_service_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('additional_service_id') ? 'is-invalid' : '' }}" name="additional_service_id" placeholder="{{ __('gift_appointment_additional_services_additional_service_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('additional_service_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('additional_service_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_additional_services_additional_service_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("additional_service_price" , $gift_appointment_additional_service->additional_service_price)  }}" data-placement="left"  data-content="{{ __('gift_appointment_additional_services_additional_service_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_additional_services_additional_service_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('additional_service_price') ? 'is-invalid' : '' }}" name="additional_service_price" placeholder="{{ __('gift_appointment_additional_services_additional_service_price') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('additional_service_price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('additional_service_price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_additional_services_quantity') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("quantity" , $gift_appointment_additional_service->quantity)  }}" data-placement="left"  data-content="{{ __('gift_appointment_additional_services_quantity_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_additional_services_quantity_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" name="quantity" placeholder="{{ __('gift_appointment_additional_services_quantity') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('quantity'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('quantity') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_additional_services_total_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("total_price" , $gift_appointment_additional_service->total_price)  }}" data-placement="left"  data-content="{{ __('gift_appointment_additional_services_total_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_additional_services_total_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('total_price') ? 'is-invalid' : '' }}" name="total_price" placeholder="{{ __('gift_appointment_additional_services_total_price') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('total_price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('total_price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.gift_appointment_additional_services_update') 
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
