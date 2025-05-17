@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.mismarapp_appointments_mismarapp_appointments')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.mismarapp_appointments_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/mismarapp_appointments">     @lang('messages.mismarapp_appointments_mismarapp_appointments')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/mismarapp_appointments/create" title = "@lang('messages.mismarapp_appointments_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.mismarapp_appointments_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/mismarapp_appointments') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('mismarapp_appointments_appointment_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("appointment_id" , $mismarapp_appointment->appointment_id)  }}" data-placement="left"  data-content="{{ __('mismarapp_appointments_appointment_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('mismarapp_appointments_appointment_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('appointment_id') ? 'is-invalid' : '' }}" name="appointment_id" placeholder="{{ __('mismarapp_appointments_appointment_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('appointment_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('appointment_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('mismarapp_appointments_mismar_order_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("mismar_order_id" , $mismarapp_appointment->mismar_order_id)  }}" data-placement="left"  data-content="{{ __('mismarapp_appointments_mismar_order_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('mismarapp_appointments_mismar_order_id_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('mismar_order_id') ? 'is-invalid' : '' }}" name="mismar_order_id" placeholder="{{ __('mismarapp_appointments_mismar_order_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('mismar_order_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('mismar_order_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('mismarapp_appointments_order_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("order_date" , $mismarapp_appointment->order_date)  }}" data-placement="left"  data-content="{{ __('mismarapp_appointments_order_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('mismarapp_appointments_order_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('order_date') ? 'is-invalid' : '' }}" name="order_date" placeholder="{{ __('mismarapp_appointments_order_date') }}">
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
                                                                <span>{{ __('mismarapp_appointments_mismarapp_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("mismarapp_status_id" , $mismarapp_appointment->mismarapp_status_id)  }}" data-placement="left"  data-content="{{ __('mismarapp_appointments_mismarapp_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('mismarapp_appointments_mismarapp_status_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('mismarapp_status_id') ? 'is-invalid' : '' }}" name="mismarapp_status_id" placeholder="{{ __('mismarapp_appointments_mismarapp_status_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('mismarapp_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('mismarapp_status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.mismarapp_appointments_update') 
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
