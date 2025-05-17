@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.scheduled_fcm_notifications_scheduled_fcm_notifications')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.scheduled_fcm_notifications_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/scheduled_fcm_notifications">     @lang('messages.scheduled_fcm_notifications_scheduled_fcm_notifications')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/scheduled_fcm_notifications/create" title = "@lang('messages.scheduled_fcm_notifications_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.scheduled_fcm_notifications_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/scheduled_fcm_notifications') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_title') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("title" , $scheduled_fcm_notification->title)  }}" data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_title_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_title_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="{{ __('scheduled_fcm_notifications_title') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('title'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('title') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_notification') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_notification_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_notification_data-original-title') }}"    class="form-control {{ $errors->has('notification') ? 'is-invalid' : '' }}" name="notification" placeholder="{{ __('scheduled_fcm_notifications_notification') }}"   >{{ $scheduled_fcm_notification->notification   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('notification'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('notification') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_start_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("start_date" , $scheduled_fcm_notification->start_date)  }}" data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_start_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_start_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" name="start_date" placeholder="{{ __('scheduled_fcm_notifications_start_date') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('start_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('start_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_end_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("end_date" , $scheduled_fcm_notification->end_date)  }}" data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_end_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_end_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('end_date') ? 'is-invalid' : '' }}" name="end_date" placeholder="{{ __('scheduled_fcm_notifications_end_date') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('end_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('end_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("time" , $scheduled_fcm_notification->time)  }}" data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_time_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('time') ? 'is-invalid' : '' }}" name="time" placeholder="{{ __('scheduled_fcm_notifications_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_neighborhood_ids') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_neighborhood_ids_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_neighborhood_ids_data-original-title') }}"    class="form-control {{ $errors->has('neighborhood_ids') ? 'is-invalid' : '' }}" name="neighborhood_ids" placeholder="{{ __('scheduled_fcm_notifications_neighborhood_ids') }}"   >{{ $scheduled_fcm_notification->neighborhood_ids   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('neighborhood_ids'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('neighborhood_ids') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_for_all_users') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("for_all_users" , $scheduled_fcm_notification->for_all_users)  }}" data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_for_all_users_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_for_all_users_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('for_all_users') ? 'is-invalid' : '' }}" name="for_all_users" placeholder="{{ __('scheduled_fcm_notifications_for_all_users') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('for_all_users'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('for_all_users') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.scheduled_fcm_notifications_update') 
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
