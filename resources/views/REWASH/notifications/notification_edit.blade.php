@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.notifications_notifications')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.notifications_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/notifications">     @lang('messages.notifications_notifications')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/notifications/create" title = "@lang('messages.notifications_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.notifications_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/notifications') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('notifications_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $notification->user_id)  }}" data-placement="left"  data-content="{{ __('notifications_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('notifications_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('notifications_user_id') }}">
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
                                                                <span>{{ __('notifications_is_read') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_read" , $notification->is_read)  }}" data-placement="left"  data-content="{{ __('notifications_is_read_data-content') }}" data-trigger="hover"  data-original-title="{{ __('notifications_is_read_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_read') ? 'is-invalid' : '' }}" name="is_read" placeholder="{{ __('notifications_is_read') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_read'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_read') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('notifications_title') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("title" , $notification->title)  }}" data-placement="left"  data-content="{{ __('notifications_title_data-content') }}" data-trigger="hover"  data-original-title="{{ __('notifications_title_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="{{ __('notifications_title') }}">
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
                                                                <span>{{ __('notifications_notification') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('notifications_notification_data-content') }}" data-trigger="hover"  data-original-title="{{ __('notifications_notification_data-original-title') }}"    class="form-control {{ $errors->has('notification') ? 'is-invalid' : '' }}" name="notification" placeholder="{{ __('notifications_notification') }}"   >{{ $notification->notification   }}</textarea>
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
                                                                <span>{{ __('notifications_en_title') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("en_title" , $notification->en_title)  }}" data-placement="left"  data-content="{{ __('notifications_en_title_data-content') }}" data-trigger="hover"  data-original-title="{{ __('notifications_en_title_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" name="en_title" placeholder="{{ __('notifications_en_title') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('en_title'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('en_title') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('notifications_en_notification') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('notifications_en_notification_data-content') }}" data-trigger="hover"  data-original-title="{{ __('notifications_en_notification_data-original-title') }}"    class="form-control {{ $errors->has('en_notification') ? 'is-invalid' : '' }}" name="en_notification" placeholder="{{ __('notifications_en_notification') }}"   >{{ $notification->en_notification   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('en_notification'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('en_notification') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.notifications_update') 
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
