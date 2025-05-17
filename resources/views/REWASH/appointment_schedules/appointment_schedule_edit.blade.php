@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.appointment_schedules_appointment_schedules')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.appointment_schedules_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/appointment_schedules">     @lang('messages.appointment_schedules_appointment_schedules')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/appointment_schedules/create" title = "@lang('messages.appointment_schedules_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.appointment_schedules_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/appointment_schedules') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $appointment_schedule->branch_id)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('appointment_schedules_branch_id') }}">
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
                                                                <span>{{ __('appointment_schedules_zone_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("zone_id" , $appointment_schedule->zone_id)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_zone_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_zone_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('zone_id') ? 'is-invalid' : '' }}" name="zone_id" placeholder="{{ __('appointment_schedules_zone_id') }}">
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
                                                                <span>{{ __('appointment_schedules_appointment_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("appointment_id" , $appointment_schedule->appointment_id)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_appointment_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_appointment_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('appointment_id') ? 'is-invalid' : '' }}" name="appointment_id" placeholder="{{ __('appointment_schedules_appointment_id') }}">
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
                                                                <span>{{ __('appointment_schedules_appointment_schedule_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("appointment_schedule_status_id" , $appointment_schedule->appointment_schedule_status_id)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_appointment_schedule_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_appointment_schedule_status_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('appointment_schedule_status_id') ? 'is-invalid' : '' }}" name="appointment_schedule_status_id" placeholder="{{ __('appointment_schedules_appointment_schedule_status_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('appointment_schedule_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('appointment_schedule_status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $appointment_schedule->user_id)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('appointment_schedules_user_id') }}">
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
                                                                <span>{{ __('appointment_schedules_appointment_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("appointment_date" , $appointment_schedule->appointment_date)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_appointment_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_appointment_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('appointment_date') ? 'is-invalid' : '' }}" name="appointment_date" placeholder="{{ __('appointment_schedules_appointment_date') }}">
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
                                                                <span>{{ __('appointment_schedules_is_appointment_date_changed') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_appointment_date_changed" , $appointment_schedule->is_appointment_date_changed)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_is_appointment_date_changed_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_is_appointment_date_changed_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_appointment_date_changed') ? 'is-invalid' : '' }}" name="is_appointment_date_changed" placeholder="{{ __('appointment_schedules_is_appointment_date_changed') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_appointment_date_changed'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_appointment_date_changed') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_slot_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("slot_id" , $appointment_schedule->slot_id)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_slot_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_slot_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('slot_id') ? 'is-invalid' : '' }}" name="slot_id" placeholder="{{ __('appointment_schedules_slot_id') }}">
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
                                                                <span>{{ __('appointment_schedules_neighborhood_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("neighborhood_id" , $appointment_schedule->neighborhood_id)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_neighborhood_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_neighborhood_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('neighborhood_id') ? 'is-invalid' : '' }}" name="neighborhood_id" placeholder="{{ __('appointment_schedules_neighborhood_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('neighborhood_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('neighborhood_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_location') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("location" , $appointment_schedule->location)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_location_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_location_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location" placeholder="{{ __('appointment_schedules_location') }}">
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
                                                                <span>{{ __('appointment_schedules_address') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("address" , $appointment_schedule->address)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_address_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_address_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" placeholder="{{ __('appointment_schedules_address') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('address'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('address') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_is_location_changed') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_location_changed" , $appointment_schedule->is_location_changed)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_is_location_changed_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_is_location_changed_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_location_changed') ? 'is-invalid' : '' }}" name="is_location_changed" placeholder="{{ __('appointment_schedules_is_location_changed') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_location_changed'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_location_changed') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_notes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('appointment_schedules_notes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_notes_data-original-title') }}"    class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" placeholder="{{ __('appointment_schedules_notes') }}"   >{{ $appointment_schedule->notes   }}</textarea>
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
                                                                <span>{{ __('appointment_schedules_feedback') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('appointment_schedules_feedback_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_feedback_data-original-title') }}"    class="form-control {{ $errors->has('feedback') ? 'is-invalid' : '' }}" name="feedback" placeholder="{{ __('appointment_schedules_feedback') }}"   >{{ $appointment_schedule->feedback   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('feedback'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('feedback') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_is_scheduled') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_scheduled" , $appointment_schedule->is_scheduled)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_is_scheduled_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_is_scheduled_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_scheduled') ? 'is-invalid' : '' }}" name="is_scheduled" placeholder="{{ __('appointment_schedules_is_scheduled') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_scheduled'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_scheduled') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_can_cancel') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("can_cancel" , $appointment_schedule->can_cancel)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_can_cancel_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_can_cancel_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('can_cancel') ? 'is-invalid' : '' }}" name="can_cancel" placeholder="{{ __('appointment_schedules_can_cancel') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('can_cancel'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('can_cancel') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_can_reschedule') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("can_reschedule" , $appointment_schedule->can_reschedule)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_can_reschedule_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_can_reschedule_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('can_reschedule') ? 'is-invalid' : '' }}" name="can_reschedule" placeholder="{{ __('appointment_schedules_can_reschedule') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('can_reschedule'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('can_reschedule') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_can_rate') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("can_rate" , $appointment_schedule->can_rate)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_can_rate_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_can_rate_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('can_rate') ? 'is-invalid' : '' }}" name="can_rate" placeholder="{{ __('appointment_schedules_can_rate') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('can_rate'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('can_rate') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_can_change_location') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("can_change_location" , $appointment_schedule->can_change_location)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_can_change_location_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_can_change_location_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('can_change_location') ? 'is-invalid' : '' }}" name="can_change_location" placeholder="{{ __('appointment_schedules_can_change_location') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('can_change_location'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('can_change_location') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_can_track_worker') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("can_track_worker" , $appointment_schedule->can_track_worker)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_can_track_worker_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_can_track_worker_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('can_track_worker') ? 'is-invalid' : '' }}" name="can_track_worker" placeholder="{{ __('appointment_schedules_can_track_worker') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('can_track_worker'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('can_track_worker') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_in_process') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("in_process" , $appointment_schedule->in_process)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_in_process_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_in_process_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('in_process') ? 'is-invalid' : '' }}" name="in_process" placeholder="{{ __('appointment_schedules_in_process') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('in_process'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('in_process') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_is_completed') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_completed" , $appointment_schedule->is_completed)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_is_completed_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_is_completed_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_completed') ? 'is-invalid' : '' }}" name="is_completed" placeholder="{{ __('appointment_schedules_is_completed') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_completed'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_completed') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_worker_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("worker_status_id" , $appointment_schedule->worker_status_id)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_worker_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_worker_status_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('worker_status_id') ? 'is-invalid' : '' }}" name="worker_status_id" placeholder="{{ __('appointment_schedules_worker_status_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('worker_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('worker_status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_e_washing_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("e_washing_time" , $appointment_schedule->e_washing_time)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_e_washing_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_e_washing_time_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('e_washing_time') ? 'is-invalid' : '' }}" name="e_washing_time" placeholder="{{ __('appointment_schedules_e_washing_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('e_washing_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('e_washing_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_go_to_client') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("go_to_client" , $appointment_schedule->go_to_client)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_go_to_client_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_go_to_client_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('go_to_client') ? 'is-invalid' : '' }}" name="go_to_client" placeholder="{{ __('appointment_schedules_go_to_client') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('go_to_client'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('go_to_client') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_arrived_and_cancel_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("arrived_and_cancel_time" , $appointment_schedule->arrived_and_cancel_time)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_arrived_and_cancel_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_arrived_and_cancel_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('arrived_and_cancel_time') ? 'is-invalid' : '' }}" name="arrived_and_cancel_time" placeholder="{{ __('appointment_schedules_arrived_and_cancel_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('arrived_and_cancel_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('arrived_and_cancel_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_start_wash_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("start_wash_time" , $appointment_schedule->start_wash_time)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_start_wash_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_start_wash_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('start_wash_time') ? 'is-invalid' : '' }}" name="start_wash_time" placeholder="{{ __('appointment_schedules_start_wash_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('start_wash_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('start_wash_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_finish_wash_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("finish_wash_time" , $appointment_schedule->finish_wash_time)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_finish_wash_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_finish_wash_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('finish_wash_time') ? 'is-invalid' : '' }}" name="finish_wash_time" placeholder="{{ __('appointment_schedules_finish_wash_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('finish_wash_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('finish_wash_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_cancel_wash_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("cancel_wash_time" , $appointment_schedule->cancel_wash_time)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_cancel_wash_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_cancel_wash_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('cancel_wash_time') ? 'is-invalid' : '' }}" name="cancel_wash_time" placeholder="{{ __('appointment_schedules_cancel_wash_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('cancel_wash_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('cancel_wash_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_is_skip_rate') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_skip_rate" , $appointment_schedule->is_skip_rate)  }}" data-placement="left"  data-content="{{ __('appointment_schedules_is_skip_rate_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_is_skip_rate_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_skip_rate') ? 'is-invalid' : '' }}" name="is_skip_rate" placeholder="{{ __('appointment_schedules_is_skip_rate') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_skip_rate'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_skip_rate') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.appointment_schedules_update') 
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
