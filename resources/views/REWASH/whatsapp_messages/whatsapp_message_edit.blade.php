@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.whatsapp_messages_whatsapp_messages')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.whatsapp_messages_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/whatsapp_messages">     @lang('messages.whatsapp_messages_whatsapp_messages')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/whatsapp_messages/create" title = "@lang('messages.whatsapp_messages_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.whatsapp_messages_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/whatsapp_messages') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('whatsapp_messages_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $whatsapp_message->user_id)  }}" data-placement="left"  data-content="{{ __('whatsapp_messages_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('whatsapp_messages_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('whatsapp_messages_user_id') }}">
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
                                                                <span>{{ __('whatsapp_messages_sent_status') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("sent_status" , $whatsapp_message->sent_status)  }}" data-placement="left"  data-content="{{ __('whatsapp_messages_sent_status_data-content') }}" data-trigger="hover"  data-original-title="{{ __('whatsapp_messages_sent_status_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('sent_status') ? 'is-invalid' : '' }}" name="sent_status" placeholder="{{ __('whatsapp_messages_sent_status') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('sent_status'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('sent_status') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('whatsapp_messages_template') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("template" , $whatsapp_message->template)  }}" data-placement="left"  data-content="{{ __('whatsapp_messages_template_data-content') }}" data-trigger="hover"  data-original-title="{{ __('whatsapp_messages_template_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('template') ? 'is-invalid' : '' }}" name="template" placeholder="{{ __('whatsapp_messages_template') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('template'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('template') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('whatsapp_messages_message') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('whatsapp_messages_message_data-content') }}" data-trigger="hover"  data-original-title="{{ __('whatsapp_messages_message_data-original-title') }}"    class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" placeholder="{{ __('whatsapp_messages_message') }}"   >{{ $whatsapp_message->message   }}</textarea>
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



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.whatsapp_messages_update') 
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
