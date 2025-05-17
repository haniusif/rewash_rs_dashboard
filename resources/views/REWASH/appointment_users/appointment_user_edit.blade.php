@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.appointment_users_appointment_users')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.appointment_users_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/appointment_users">     @lang('messages.appointment_users_appointment_users')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/appointment_users/create" title = "@lang('messages.appointment_users_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.appointment_users_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/appointment_users') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_users_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $appointment_user->branch_id)  }}" data-placement="left"  data-content="{{ __('appointment_users_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_users_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('appointment_users_branch_id') }}">
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
                                                                <span>{{ __('appointment_users_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select data-toggle="popover"   data-placement="left"  data-content="{{ __('appointment_users_user_id_data-content') }}" data-trigger="hover" data-original-title="{{ __('appointment_users_user_id_data-original-title') }}"  class="form-control  {{ $errors->has('user_id') ? 'is-invalid' : '' }} "  name="user_id" >

                            @foreach($users as $user)
                             <option  @selected(old('user_id' , $appointment_user->user_id) == $user->id)    value="{{ $user->id }}" >{{ $user->branch_id }}</option>
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
                                                                <span>{{ __('appointment_users_appointment_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select data-toggle="popover"   data-placement="left"  data-content="{{ __('appointment_users_appointment_id_data-content') }}" data-trigger="hover" data-original-title="{{ __('appointment_users_appointment_id_data-original-title') }}"  class="form-control  {{ $errors->has('appointment_id') ? 'is-invalid' : '' }} "  name="appointment_id" >

                            @foreach($appointments as $appointment)
                             <option  @selected(old('appointment_id' , $appointment_user->appointment_id) == $appointment->id)    value="{{ $appointment->id }}" >{{ $appointment->branch_id }}</option>
                             @endforeach
                            </select>

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
                                                                <span>{{ __('appointment_users_discount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("discount" , $appointment_user->discount)  }}" data-placement="left"  data-content="{{ __('appointment_users_discount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_users_discount_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" name="discount" placeholder="{{ __('appointment_users_discount') }}">
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
                                                                <span>{{ __('appointment_users_advance') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("advance" , $appointment_user->advance)  }}" data-placement="left"  data-content="{{ __('appointment_users_advance_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_users_advance_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('advance') ? 'is-invalid' : '' }}" name="advance" placeholder="{{ __('appointment_users_advance') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('advance'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('advance') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_users_payment_method_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("payment_method_id" , $appointment_user->payment_method_id)  }}" data-placement="left"  data-content="{{ __('appointment_users_payment_method_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_users_payment_method_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('payment_method_id') ? 'is-invalid' : '' }}" name="payment_method_id" placeholder="{{ __('appointment_users_payment_method_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_method_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_method_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_users_remark') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("remark" , $appointment_user->remark)  }}" data-placement="left"  data-content="{{ __('appointment_users_remark_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_users_remark_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('remark') ? 'is-invalid' : '' }}" name="remark" placeholder="{{ __('appointment_users_remark') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('remark'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('remark') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.appointment_users_update') 
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
