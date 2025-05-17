@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.scheduled_notifications_scheduled_notifications')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.scheduled_notifications_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/scheduled_notifications">     @lang('messages.scheduled_notifications_scheduled_notifications')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/scheduled_notifications/create" title = "@lang('messages.scheduled_notifications_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.scheduled_notifications_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/scheduled_notifications') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_notifications_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $scheduled_notification->branch_id)  }}" data-placement="left"  data-content="{{ __('scheduled_notifications_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_notifications_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('scheduled_notifications_branch_id') }}">
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
                                                                <span>{{ __('scheduled_notifications_notification_title') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("notification_title" , $scheduled_notification->notification_title)  }}" data-placement="left"  data-content="{{ __('scheduled_notifications_notification_title_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_notifications_notification_title_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('notification_title') ? 'is-invalid' : '' }}" name="notification_title" placeholder="{{ __('scheduled_notifications_notification_title') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('notification_title'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('notification_title') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_notifications_notification_massage') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('scheduled_notifications_notification_massage_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_notifications_notification_massage_data-original-title') }}"    class="form-control {{ $errors->has('notification_massage') ? 'is-invalid' : '' }}" name="notification_massage" placeholder="{{ __('scheduled_notifications_notification_massage') }}"   >{{ $scheduled_notification->notification_massage   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('notification_massage'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('notification_massage') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_notifications_notification_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("notification_date" , $scheduled_notification->notification_date)  }}" data-placement="left"  data-content="{{ __('scheduled_notifications_notification_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_notifications_notification_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('notification_date') ? 'is-invalid' : '' }}" name="notification_date" placeholder="{{ __('scheduled_notifications_notification_date') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('notification_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('notification_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.scheduled_notifications_update') 
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
