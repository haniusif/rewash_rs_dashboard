@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.all_appointments_all_appointments')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.all_appointments_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/all_appointments">     @lang('messages.all_appointments_all_appointments')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/all_appointments/create" title = "@lang('messages.all_appointments_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.all_appointments_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/all_appointments') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_zone_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("zone_id" , $all_appointment->zone_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_zone_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_zone_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('zone_id') ? 'is-invalid' : '' }}" name="zone_id" placeholder="{{ __('all_appointments_zone_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('zone_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('zone_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_zone_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("zone_name" , $all_appointment->zone_name)  }}" data-placement="left"  data-content="{{ __('all_appointments_zone_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_zone_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('zone_name') ? 'is-invalid' : '' }}" name="zone_name" placeholder="{{ __('all_appointments_zone_name') }}">
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
                                                                <span>{{ __('all_appointments_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $all_appointment->user_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('all_appointments_user_id') }}">
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
                                                                <span>{{ __('all_appointments_mobile') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("mobile" , $all_appointment->mobile)  }}" data-placement="left"  data-content="{{ __('all_appointments_mobile_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_mobile_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" name="mobile" placeholder="{{ __('all_appointments_mobile') }}">
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
                                                                <span>{{ __('all_appointments_number_of_vehicles') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("number_of_vehicles" , $all_appointment->number_of_vehicles)  }}" data-placement="left"  data-content="{{ __('all_appointments_number_of_vehicles_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_number_of_vehicles_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('number_of_vehicles') ? 'is-invalid' : '' }}" name="number_of_vehicles" placeholder="{{ __('all_appointments_number_of_vehicles') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('number_of_vehicles'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('number_of_vehicles') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_vehicle_types_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("vehicle_types_id" , $all_appointment->vehicle_types_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_vehicle_types_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_vehicle_types_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('vehicle_types_id') ? 'is-invalid' : '' }}" name="vehicle_types_id" placeholder="{{ __('all_appointments_vehicle_types_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_types_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_types_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_vehicle_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("vehicle_id" , $all_appointment->vehicle_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_vehicle_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_vehicle_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('vehicle_id') ? 'is-invalid' : '' }}" name="vehicle_id" placeholder="{{ __('all_appointments_vehicle_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_vehicle_no') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("vehicle_no" , $all_appointment->vehicle_no)  }}" data-placement="left"  data-content="{{ __('all_appointments_vehicle_no_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_vehicle_no_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('vehicle_no') ? 'is-invalid' : '' }}" name="vehicle_no" placeholder="{{ __('all_appointments_vehicle_no') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_no'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_no') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_washing_plan_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("washing_plan_id" , $all_appointment->washing_plan_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_washing_plan_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_washing_plan_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('washing_plan_id') ? 'is-invalid' : '' }}" name="washing_plan_id" placeholder="{{ __('all_appointments_washing_plan_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('washing_plan_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('washing_plan_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("name" , $all_appointment->name)  }}" data-placement="left"  data-content="{{ __('all_appointments_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('all_appointments_name') }}">
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
                                                                <span>{{ __('all_appointments_washing_plan_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("washing_plan_price" , $all_appointment->washing_plan_price)  }}" data-placement="left"  data-content="{{ __('all_appointments_washing_plan_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_washing_plan_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('washing_plan_price') ? 'is-invalid' : '' }}" name="washing_plan_price" placeholder="{{ __('all_appointments_washing_plan_price') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('washing_plan_price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('washing_plan_price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_washing_plan_validity_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("washing_plan_validity_date" , $all_appointment->washing_plan_validity_date)  }}" data-placement="left"  data-content="{{ __('all_appointments_washing_plan_validity_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_washing_plan_validity_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('washing_plan_validity_date') ? 'is-invalid' : '' }}" name="washing_plan_validity_date" placeholder="{{ __('all_appointments_washing_plan_validity_date') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('washing_plan_validity_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('washing_plan_validity_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_number_of_washes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("number_of_washes" , $all_appointment->number_of_washes)  }}" data-placement="left"  data-content="{{ __('all_appointments_number_of_washes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_number_of_washes_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('number_of_washes') ? 'is-invalid' : '' }}" name="number_of_washes" placeholder="{{ __('all_appointments_number_of_washes') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('number_of_washes'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('number_of_washes') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("status_id" , $all_appointment->status_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_status_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('status_id') ? 'is-invalid' : '' }}" name="status_id" placeholder="{{ __('all_appointments_status_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_status') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("status" , $all_appointment->status)  }}" data-placement="left"  data-content="{{ __('all_appointments_status_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_status_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" placeholder="{{ __('all_appointments_status') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('status'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('status') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_appointment_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("appointment_date" , $all_appointment->appointment_date)  }}" data-placement="left"  data-content="{{ __('all_appointments_appointment_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_appointment_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('appointment_date') ? 'is-invalid' : '' }}" name="appointment_date" placeholder="{{ __('all_appointments_appointment_date') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('appointment_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('appointment_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_slot_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("slot_id" , $all_appointment->slot_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_slot_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_slot_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('slot_id') ? 'is-invalid' : '' }}" name="slot_id" placeholder="{{ __('all_appointments_slot_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('slot_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('slot_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_location') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("location" , $all_appointment->location)  }}" data-placement="left"  data-content="{{ __('all_appointments_location_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_location_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location" placeholder="{{ __('all_appointments_location') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('location'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('location') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_notes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('all_appointments_notes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_notes_data-original-title') }}"    class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" placeholder="{{ __('all_appointments_notes') }}"   >{{ $all_appointment->notes   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('notes'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('notes') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_tax_avlue') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("tax_avlue" , $all_appointment->tax_avlue)  }}" data-placement="left"  data-content="{{ __('all_appointments_tax_avlue_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_tax_avlue_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('tax_avlue') ? 'is-invalid' : '' }}" name="tax_avlue" placeholder="{{ __('all_appointments_tax_avlue') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('tax_avlue'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('tax_avlue') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_total_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("total_price" , $all_appointment->total_price)  }}" data-placement="left"  data-content="{{ __('all_appointments_total_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_total_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('total_price') ? 'is-invalid' : '' }}" name="total_price" placeholder="{{ __('all_appointments_total_price') }}">
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



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_total_price_befor_payment') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("total_price_befor_payment" , $all_appointment->total_price_befor_payment)  }}" data-placement="left"  data-content="{{ __('all_appointments_total_price_befor_payment_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_total_price_befor_payment_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('total_price_befor_payment') ? 'is-invalid' : '' }}" name="total_price_befor_payment" placeholder="{{ __('all_appointments_total_price_befor_payment') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('total_price_befor_payment'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('total_price_befor_payment') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_wallet_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("wallet_amount" , $all_appointment->wallet_amount)  }}" data-placement="left"  data-content="{{ __('all_appointments_wallet_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_wallet_amount_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('wallet_amount') ? 'is-invalid' : '' }}" name="wallet_amount" placeholder="{{ __('all_appointments_wallet_amount') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('wallet_amount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('wallet_amount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_promo_code_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("promo_code_id" , $all_appointment->promo_code_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_promo_code_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_promo_code_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_id') ? 'is-invalid' : '' }}" name="promo_code_id" placeholder="{{ __('all_appointments_promo_code_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('promo_code_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('promo_code_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_promo_code') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("promo_code" , $all_appointment->promo_code)  }}" data-placement="left"  data-content="{{ __('all_appointments_promo_code_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_promo_code_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('promo_code') ? 'is-invalid' : '' }}" name="promo_code" placeholder="{{ __('all_appointments_promo_code') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('promo_code'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('promo_code') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_discount_type') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("discount_type" , $all_appointment->discount_type)  }}" data-placement="left"  data-content="{{ __('all_appointments_discount_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_discount_type_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('discount_type') ? 'is-invalid' : '' }}" name="discount_type" placeholder="{{ __('all_appointments_discount_type') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('discount_type'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('discount_type') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_discount_value') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("discount_value" , $all_appointment->discount_value)  }}" data-placement="left"  data-content="{{ __('all_appointments_discount_value_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_discount_value_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('discount_value') ? 'is-invalid' : '' }}" name="discount_value" placeholder="{{ __('all_appointments_discount_value') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('discount_value'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('discount_value') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_promo_code_discount_value') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("promo_code_discount_value" , $all_appointment->promo_code_discount_value)  }}" data-placement="left"  data-content="{{ __('all_appointments_promo_code_discount_value_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_promo_code_discount_value_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_discount_value') ? 'is-invalid' : '' }}" name="promo_code_discount_value" placeholder="{{ __('all_appointments_promo_code_discount_value') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('promo_code_discount_value'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('promo_code_discount_value') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_additional_service_total') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("additional_service_total" , $all_appointment->additional_service_total)  }}" data-placement="left"  data-content="{{ __('all_appointments_additional_service_total_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_additional_service_total_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('additional_service_total') ? 'is-invalid' : '' }}" name="additional_service_total" placeholder="{{ __('all_appointments_additional_service_total') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('additional_service_total'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('additional_service_total') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_payment_mode_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("payment_mode_id" , $all_appointment->payment_mode_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_payment_mode_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_payment_mode_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('payment_mode_id') ? 'is-invalid' : '' }}" name="payment_mode_id" placeholder="{{ __('all_appointments_payment_mode_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_mode_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_mode_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_payment_mode_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("payment_mode_name" , $all_appointment->payment_mode_name)  }}" data-placement="left"  data-content="{{ __('all_appointments_payment_mode_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_payment_mode_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('payment_mode_name') ? 'is-invalid' : '' }}" name="payment_mode_name" placeholder="{{ __('all_appointments_payment_mode_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_mode_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_mode_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_payment_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("payment_status_id" , $all_appointment->payment_status_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_payment_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_payment_status_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('payment_status_id') ? 'is-invalid' : '' }}" name="payment_status_id" placeholder="{{ __('all_appointments_payment_status_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_payment_status_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("payment_status_name" , $all_appointment->payment_status_name)  }}" data-placement="left"  data-content="{{ __('all_appointments_payment_status_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_payment_status_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('payment_status_name') ? 'is-invalid' : '' }}" name="payment_status_name" placeholder="{{ __('all_appointments_payment_status_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_status_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_status_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_payment_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("payment_time" , $all_appointment->payment_time)  }}" data-placement="left"  data-content="{{ __('all_appointments_payment_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_payment_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('payment_time') ? 'is-invalid' : '' }}" name="payment_time" placeholder="{{ __('all_appointments_payment_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_creator') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("creator" , $all_appointment->creator)  }}" data-placement="left"  data-content="{{ __('all_appointments_creator_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_creator_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('creator') ? 'is-invalid' : '' }}" name="creator" placeholder="{{ __('all_appointments_creator') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('creator'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('creator') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_partner_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("partner_id" , $all_appointment->partner_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_partner_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_partner_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('partner_id') ? 'is-invalid' : '' }}" name="partner_id" placeholder="{{ __('all_appointments_partner_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('partner_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('partner_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_accrued_loyalty_point') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("accrued_loyalty_point" , $all_appointment->accrued_loyalty_point)  }}" data-placement="left"  data-content="{{ __('all_appointments_accrued_loyalty_point_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_accrued_loyalty_point_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('accrued_loyalty_point') ? 'is-invalid' : '' }}" name="accrued_loyalty_point" placeholder="{{ __('all_appointments_accrued_loyalty_point') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('accrued_loyalty_point'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('accrued_loyalty_point') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_transaction_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("transaction_id" , $all_appointment->transaction_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_transaction_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_transaction_id_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('transaction_id') ? 'is-invalid' : '' }}" name="transaction_id" placeholder="{{ __('all_appointments_transaction_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('transaction_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('transaction_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_platform_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("platform_id" , $all_appointment->platform_id)  }}" data-placement="left"  data-content="{{ __('all_appointments_platform_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_platform_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('platform_id') ? 'is-invalid' : '' }}" name="platform_id" placeholder="{{ __('all_appointments_platform_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('platform_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('platform_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_platform_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("platform_name" , $all_appointment->platform_name)  }}" data-placement="left"  data-content="{{ __('all_appointments_platform_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_platform_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('platform_name') ? 'is-invalid' : '' }}" name="platform_name" placeholder="{{ __('all_appointments_platform_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('platform_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('platform_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_double_check_payment') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("double_check_payment" , $all_appointment->double_check_payment)  }}" data-placement="left"  data-content="{{ __('all_appointments_double_check_payment_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_double_check_payment_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('double_check_payment') ? 'is-invalid' : '' }}" name="double_check_payment" placeholder="{{ __('all_appointments_double_check_payment') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('double_check_payment'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('double_check_payment') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_double_check_data') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('all_appointments_double_check_data_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_double_check_data_data-original-title') }}"    class="form-control {{ $errors->has('double_check_data') ? 'is-invalid' : '' }}" name="double_check_data" placeholder="{{ __('all_appointments_double_check_data') }}"   >{{ $all_appointment->double_check_data   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('double_check_data'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('double_check_data') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('all_appointments_double_check_payment_status') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("double_check_payment_status" , $all_appointment->double_check_payment_status)  }}" data-placement="left"  data-content="{{ __('all_appointments_double_check_payment_status_data-content') }}" data-trigger="hover"  data-original-title="{{ __('all_appointments_double_check_payment_status_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('double_check_payment_status') ? 'is-invalid' : '' }}" name="double_check_payment_status" placeholder="{{ __('all_appointments_double_check_payment_status') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('double_check_payment_status'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('double_check_payment_status') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.all_appointments_update') 
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
