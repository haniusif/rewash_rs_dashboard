@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.accountings_accountings')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.accountings_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/accountings">     @lang('messages.accountings_accountings')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/accountings/create" title = "@lang('messages.accountings_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.accountings_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/accountings') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('accountings_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("name" , $accounting->name)  }}" data-placement="left"  data-content="{{ __('accountings_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('accountings_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('accountings_name') }}">
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
                                                                <span>{{ __('accountings_email') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("email" , $accounting->email)  }}" data-placement="left"  data-content="{{ __('accountings_email_data-content') }}" data-trigger="hover"  data-original-title="{{ __('accountings_email_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="{{ __('accountings_email') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('email'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('email') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('accountings_phone') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("phone" , $accounting->phone)  }}" data-placement="left"  data-content="{{ __('accountings_phone_data-content') }}" data-trigger="hover"  data-original-title="{{ __('accountings_phone_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" placeholder="{{ __('accountings_phone') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('phone'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('phone') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('accountings_active') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("active" , $accounting->active)  }}" data-placement="left"  data-content="{{ __('accountings_active_data-content') }}" data-trigger="hover"  data-original-title="{{ __('accountings_active_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('active') ? 'is-invalid' : '' }}" name="active" placeholder="{{ __('accountings_active') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('active'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('active') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('accountings_qoyod_customer_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("qoyod_customer_id" , $accounting->qoyod_customer_id)  }}" data-placement="left"  data-content="{{ __('accountings_qoyod_customer_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('accountings_qoyod_customer_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('qoyod_customer_id') ? 'is-invalid' : '' }}" name="qoyod_customer_id" placeholder="{{ __('accountings_qoyod_customer_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('qoyod_customer_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('qoyod_customer_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.accountings_update') 
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
