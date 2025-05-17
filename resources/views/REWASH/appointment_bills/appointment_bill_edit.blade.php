@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.appointment_bills_appointment_bills')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.appointment_bills_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/appointment_bills">     @lang('messages.appointment_bills_appointment_bills')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/appointment_bills/create" title = "@lang('messages.appointment_bills_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.appointment_bills_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/appointment_bills') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_bills_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $appointment_bill->branch_id)  }}" data-placement="left"  data-content="{{ __('appointment_bills_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_bills_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('appointment_bills_branch_id') }}">
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
                                                                <span>{{ __('appointment_bills_appointment_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("appointment_id" , $appointment_bill->appointment_id)  }}" data-placement="left"  data-content="{{ __('appointment_bills_appointment_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_bills_appointment_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('appointment_id') ? 'is-invalid' : '' }}" name="appointment_id" placeholder="{{ __('appointment_bills_appointment_id') }}">
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
                                                                <span>{{ __('appointment_bills_bill_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("bill_id" , $appointment_bill->bill_id)  }}" data-placement="left"  data-content="{{ __('appointment_bills_bill_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_bills_bill_id_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('bill_id') ? 'is-invalid' : '' }}" name="bill_id" placeholder="{{ __('appointment_bills_bill_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('bill_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('bill_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_bills_bill_number') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("bill_number" , $appointment_bill->bill_number)  }}" data-placement="left"  data-content="{{ __('appointment_bills_bill_number_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_bills_bill_number_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('bill_number') ? 'is-invalid' : '' }}" name="bill_number" placeholder="{{ __('appointment_bills_bill_number') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('bill_number'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('bill_number') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_bills_bill_status') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("bill_status" , $appointment_bill->bill_status)  }}" data-placement="left"  data-content="{{ __('appointment_bills_bill_status_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_bills_bill_status_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('bill_status') ? 'is-invalid' : '' }}" name="bill_status" placeholder="{{ __('appointment_bills_bill_status') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('bill_status'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('bill_status') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_bills_pay_url') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('appointment_bills_pay_url_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_bills_pay_url_data-original-title') }}"    class="form-control {{ $errors->has('pay_url') ? 'is-invalid' : '' }}" name="pay_url" placeholder="{{ __('appointment_bills_pay_url') }}"   >{{ $appointment_bill->pay_url   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('pay_url'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('pay_url') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_bills_total') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("total" , $appointment_bill->total)  }}" data-placement="left"  data-content="{{ __('appointment_bills_total_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_bills_total_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('total') ? 'is-invalid' : '' }}" name="total" placeholder="{{ __('appointment_bills_total') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('total'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('total') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_bills_reference_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("reference_id" , $appointment_bill->reference_id)  }}" data-placement="left"  data-content="{{ __('appointment_bills_reference_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_bills_reference_id_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('reference_id') ? 'is-invalid' : '' }}" name="reference_id" placeholder="{{ __('appointment_bills_reference_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('reference_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('reference_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.appointment_bills_update') 
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
