@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.gift_appointment_schedules_gift_appointment_schedules')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.gift_appointment_schedules_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/gift_appointment_schedules">     @lang('messages.gift_appointment_schedules_gift_appointment_schedules')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/gift_appointment_schedules/create" title = "@lang('messages.gift_appointment_schedules_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.gift_appointment_schedules_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/gift_appointment_schedules') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_schedules_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $gift_appointment_schedule->branch_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('gift_appointment_schedules_branch_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $gift_appointment_schedule->user_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('gift_appointment_schedules_user_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_appointment_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("appointment_date" , $gift_appointment_schedule->appointment_date)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_appointment_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_appointment_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('appointment_date') ? 'is-invalid' : '' }}" name="appointment_date" placeholder="{{ __('gift_appointment_schedules_appointment_date') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_slot_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("slot_id" , $gift_appointment_schedule->slot_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_slot_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_slot_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('slot_id') ? 'is-invalid' : '' }}" name="slot_id" placeholder="{{ __('gift_appointment_schedules_slot_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_receiver_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("receiver_name" , $gift_appointment_schedule->receiver_name)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_receiver_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_receiver_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('receiver_name') ? 'is-invalid' : '' }}" name="receiver_name" placeholder="{{ __('gift_appointment_schedules_receiver_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('receiver_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('receiver_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_schedules_receiver_phone_number') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("receiver_phone_number" , $gift_appointment_schedule->receiver_phone_number)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_receiver_phone_number_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_receiver_phone_number_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('receiver_phone_number') ? 'is-invalid' : '' }}" name="receiver_phone_number" placeholder="{{ __('gift_appointment_schedules_receiver_phone_number') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('receiver_phone_number'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('receiver_phone_number') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_schedules_receiver_event') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("receiver_event" , $gift_appointment_schedule->receiver_event)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_receiver_event_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_receiver_event_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('receiver_event') ? 'is-invalid' : '' }}" name="receiver_event" placeholder="{{ __('gift_appointment_schedules_receiver_event') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('receiver_event'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('receiver_event') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_schedules_neighborhood_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("neighborhood_id" , $gift_appointment_schedule->neighborhood_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_neighborhood_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_neighborhood_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('neighborhood_id') ? 'is-invalid' : '' }}" name="neighborhood_id" placeholder="{{ __('gift_appointment_schedules_neighborhood_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_number_of_vehicles') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("number_of_vehicles" , $gift_appointment_schedule->number_of_vehicles)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_number_of_vehicles_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_number_of_vehicles_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('number_of_vehicles') ? 'is-invalid' : '' }}" name="number_of_vehicles" placeholder="{{ __('gift_appointment_schedules_number_of_vehicles') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_promo_code_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("promo_code_id" , $gift_appointment_schedule->promo_code_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_promo_code_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_promo_code_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_id') ? 'is-invalid' : '' }}" name="promo_code_id" placeholder="{{ __('gift_appointment_schedules_promo_code_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_payment_mode_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("payment_mode_id" , $gift_appointment_schedule->payment_mode_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_payment_mode_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_payment_mode_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('payment_mode_id') ? 'is-invalid' : '' }}" name="payment_mode_id" placeholder="{{ __('gift_appointment_schedules_payment_mode_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_total_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("total_price" , $gift_appointment_schedule->total_price)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_total_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_total_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('total_price') ? 'is-invalid' : '' }}" name="total_price" placeholder="{{ __('gift_appointment_schedules_total_price') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_notes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('gift_appointment_schedules_notes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_notes_data-original-title') }}"    class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" placeholder="{{ __('gift_appointment_schedules_notes') }}"   >{{ $gift_appointment_schedule->notes   }}</textarea>
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



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.gift_appointment_schedules_update') 
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
