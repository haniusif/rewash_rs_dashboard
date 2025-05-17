@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.user_apps_appointments_user_apps_appointments')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.user_apps_appointments_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/user_apps_appointments">     @lang('messages.user_apps_appointments_user_apps_appointments')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/user_apps_appointments/create" title = "@lang('messages.user_apps_appointments_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.user_apps_appointments_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user_apps_appointments') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_apps_appointments_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("name" , $user_apps_appointment->name)  }}" data-placement="left"  data-content="{{ __('user_apps_appointments_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_apps_appointments_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('user_apps_appointments_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_apps_appointments_mobile') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("mobile" , $user_apps_appointment->mobile)  }}" data-placement="left"  data-content="{{ __('user_apps_appointments_mobile_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_apps_appointments_mobile_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" name="mobile" placeholder="{{ __('user_apps_appointments_mobile') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('mobile'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('mobile') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_apps_appointments_zone_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("zone_name" , $user_apps_appointment->zone_name)  }}" data-placement="left"  data-content="{{ __('user_apps_appointments_zone_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_apps_appointments_zone_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('zone_name') ? 'is-invalid' : '' }}" name="zone_name" placeholder="{{ __('user_apps_appointments_zone_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('zone_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('zone_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_apps_appointments_number_of_appointments') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("number_of_appointments" , $user_apps_appointment->number_of_appointments)  }}" data-placement="left"  data-content="{{ __('user_apps_appointments_number_of_appointments_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_apps_appointments_number_of_appointments_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('number_of_appointments') ? 'is-invalid' : '' }}" name="number_of_appointments" placeholder="{{ __('user_apps_appointments_number_of_appointments') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('number_of_appointments'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('number_of_appointments') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_apps_appointments_last_appointment_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("last_appointment_date" , $user_apps_appointment->last_appointment_date)  }}" data-placement="left"  data-content="{{ __('user_apps_appointments_last_appointment_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_apps_appointments_last_appointment_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('last_appointment_date') ? 'is-invalid' : '' }}" name="last_appointment_date" placeholder="{{ __('user_apps_appointments_last_appointment_date') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('last_appointment_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('last_appointment_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_apps_appointments_actual_balance') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("actual_balance" , $user_apps_appointment->actual_balance)  }}" data-placement="left"  data-content="{{ __('user_apps_appointments_actual_balance_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_apps_appointments_actual_balance_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('actual_balance') ? 'is-invalid' : '' }}" name="actual_balance" placeholder="{{ __('user_apps_appointments_actual_balance') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('actual_balance'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('actual_balance') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_apps_appointments_loyalty_points') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("loyalty_points" , $user_apps_appointment->loyalty_points)  }}" data-placement="left"  data-content="{{ __('user_apps_appointments_loyalty_points_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_apps_appointments_loyalty_points_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('loyalty_points') ? 'is-invalid' : '' }}" name="loyalty_points" placeholder="{{ __('user_apps_appointments_loyalty_points') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('loyalty_points'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('loyalty_points') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.user_apps_appointments_update') 
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
