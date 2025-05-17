@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.dashboard_notifications_dashboard_notifications')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.dashboard_notifications_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/dashboard_notifications">     @lang('messages.dashboard_notifications_dashboard_notifications')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/dashboard_notifications/create" title = "@lang('messages.dashboard_notifications_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.dashboard_notifications_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/dashboard_notifications') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('dashboard_notifications_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $dashboard_notification->branch_id)  }}" data-placement="left"  data-content="{{ __('dashboard_notifications_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('dashboard_notifications_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('dashboard_notifications_branch_id') }}">
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
                                                                <span>{{ __('dashboard_notifications_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $dashboard_notification->user_id)  }}" data-placement="left"  data-content="{{ __('dashboard_notifications_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('dashboard_notifications_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('dashboard_notifications_user_id') }}">
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
                                                                <span>{{ __('dashboard_notifications_last_seen_support_messages') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("last_seen_support_messages" , $dashboard_notification->last_seen_support_messages)  }}" data-placement="left"  data-content="{{ __('dashboard_notifications_last_seen_support_messages_data-content') }}" data-trigger="hover"  data-original-title="{{ __('dashboard_notifications_last_seen_support_messages_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('last_seen_support_messages') ? 'is-invalid' : '' }}" name="last_seen_support_messages" placeholder="{{ __('dashboard_notifications_last_seen_support_messages') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('last_seen_support_messages'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('last_seen_support_messages') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('dashboard_notifications_last_seen_web_appointments') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("last_seen_web_appointments" , $dashboard_notification->last_seen_web_appointments)  }}" data-placement="left"  data-content="{{ __('dashboard_notifications_last_seen_web_appointments_data-content') }}" data-trigger="hover"  data-original-title="{{ __('dashboard_notifications_last_seen_web_appointments_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('last_seen_web_appointments') ? 'is-invalid' : '' }}" name="last_seen_web_appointments" placeholder="{{ __('dashboard_notifications_last_seen_web_appointments') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('last_seen_web_appointments'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('last_seen_web_appointments') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('dashboard_notifications_last_seen_reviews') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("last_seen_reviews" , $dashboard_notification->last_seen_reviews)  }}" data-placement="left"  data-content="{{ __('dashboard_notifications_last_seen_reviews_data-content') }}" data-trigger="hover"  data-original-title="{{ __('dashboard_notifications_last_seen_reviews_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('last_seen_reviews') ? 'is-invalid' : '' }}" name="last_seen_reviews" placeholder="{{ __('dashboard_notifications_last_seen_reviews') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('last_seen_reviews'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('last_seen_reviews') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('dashboard_notifications_last_seen_gift_appointments') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("last_seen_gift_appointments" , $dashboard_notification->last_seen_gift_appointments)  }}" data-placement="left"  data-content="{{ __('dashboard_notifications_last_seen_gift_appointments_data-content') }}" data-trigger="hover"  data-original-title="{{ __('dashboard_notifications_last_seen_gift_appointments_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('last_seen_gift_appointments') ? 'is-invalid' : '' }}" name="last_seen_gift_appointments" placeholder="{{ __('dashboard_notifications_last_seen_gift_appointments') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('last_seen_gift_appointments'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('last_seen_gift_appointments') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('dashboard_notifications_last_customer_suggestion') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("last_customer_suggestion" , $dashboard_notification->last_customer_suggestion)  }}" data-placement="left"  data-content="{{ __('dashboard_notifications_last_customer_suggestion_data-content') }}" data-trigger="hover"  data-original-title="{{ __('dashboard_notifications_last_customer_suggestion_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('last_customer_suggestion') ? 'is-invalid' : '' }}" name="last_customer_suggestion" placeholder="{{ __('dashboard_notifications_last_customer_suggestion') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('last_customer_suggestion'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('last_customer_suggestion') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.dashboard_notifications_update') 
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
