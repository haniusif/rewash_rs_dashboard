@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.worker_notifications_worker_notifications')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.worker_notifications_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/worker_notifications">     @lang('messages.worker_notifications_worker_notifications')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/worker_notifications/create" title = "@lang('messages.worker_notifications_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.worker_notifications_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/worker_notifications') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('worker_notifications_team_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("team_id" , $worker_notification->team_id)  }}" data-placement="left"  data-content="{{ __('worker_notifications_team_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('worker_notifications_team_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('team_id') ? 'is-invalid' : '' }}" name="team_id" placeholder="{{ __('worker_notifications_team_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('team_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('team_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('worker_notifications_type') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("type" , $worker_notification->type)  }}" data-placement="left"  data-content="{{ __('worker_notifications_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('worker_notifications_type_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" placeholder="{{ __('worker_notifications_type') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('type'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('type') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('worker_notifications_message') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('worker_notifications_message_data-content') }}" data-trigger="hover"  data-original-title="{{ __('worker_notifications_message_data-original-title') }}"    class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" placeholder="{{ __('worker_notifications_message') }}"   >{{ $worker_notification->message   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('message'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('message') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('worker_notifications_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("amount" , $worker_notification->amount)  }}" data-placement="left"  data-content="{{ __('worker_notifications_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('worker_notifications_amount_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" name="amount" placeholder="{{ __('worker_notifications_amount') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('amount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('amount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('worker_notifications_image_path') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("image_path" , $worker_notification->image_path)  }}" data-placement="left"  data-content="{{ __('worker_notifications_image_path_data-content') }}" data-trigger="hover"  data-original-title="{{ __('worker_notifications_image_path_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('image_path') ? 'is-invalid' : '' }}" name="image_path" placeholder="{{ __('worker_notifications_image_path') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('image_path'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('image_path') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('worker_notifications_title') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("title" , $worker_notification->title)  }}" data-placement="left"  data-content="{{ __('worker_notifications_title_data-content') }}" data-trigger="hover"  data-original-title="{{ __('worker_notifications_title_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="{{ __('worker_notifications_title') }}">
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
                                                                <span>{{ __('worker_notifications_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $worker_notification->user_id)  }}" data-placement="left"  data-content="{{ __('worker_notifications_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('worker_notifications_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('worker_notifications_user_id') }}">
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
                                                                <span>{{ __('worker_notifications_is_read') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_read" , $worker_notification->is_read)  }}" data-placement="left"  data-content="{{ __('worker_notifications_is_read_data-content') }}" data-trigger="hover"  data-original-title="{{ __('worker_notifications_is_read_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_read') ? 'is-invalid' : '' }}" name="is_read" placeholder="{{ __('worker_notifications_is_read') }}">
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



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.worker_notifications_update') 
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
