@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.support_message_comments_support_message_comments')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.support_message_comments_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/support_message_comments">     @lang('messages.support_message_comments_support_message_comments')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/support_message_comments/create" title = "@lang('messages.support_message_comments_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.support_message_comments_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/support_message_comments') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('support_message_comments_support_message_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("support_message_id" , $support_message_comment->support_message_id)  }}" data-placement="left"  data-content="{{ __('support_message_comments_support_message_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('support_message_comments_support_message_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('support_message_id') ? 'is-invalid' : '' }}" name="support_message_id" placeholder="{{ __('support_message_comments_support_message_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('support_message_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('support_message_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('support_message_comments_comment') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('support_message_comments_comment_data-content') }}" data-trigger="hover"  data-original-title="{{ __('support_message_comments_comment_data-original-title') }}"    class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" name="comment" placeholder="{{ __('support_message_comments_comment') }}"   >{{ $support_message_comment->comment   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('comment'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('comment') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.support_message_comments_update') 
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
