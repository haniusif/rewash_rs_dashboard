@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.appointment_schedule_terms_appointment_schedule_terms')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.appointment_schedule_terms_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/appointment_schedule_terms">     @lang('messages.appointment_schedule_terms_appointment_schedule_terms')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/appointment_schedule_terms/create" title = "@lang('messages.appointment_schedule_terms_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.appointment_schedule_terms_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/appointment_schedule_terms') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedule_terms_appointment_schedule_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("appointment_schedule_id" , $appointment_schedule_term->appointment_schedule_id)  }}" data-placement="left"  data-content="{{ __('appointment_schedule_terms_appointment_schedule_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedule_terms_appointment_schedule_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('appointment_schedule_id') ? 'is-invalid' : '' }}" name="appointment_schedule_id" placeholder="{{ __('appointment_schedule_terms_appointment_schedule_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('appointment_schedule_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('appointment_schedule_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedule_terms_terms_text') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("terms_text" , $appointment_schedule_term->terms_text)  }}" data-placement="left"  data-content="{{ __('appointment_schedule_terms_terms_text_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedule_terms_terms_text_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('terms_text') ? 'is-invalid' : '' }}" name="terms_text" placeholder="{{ __('appointment_schedule_terms_terms_text') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('terms_text'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('terms_text') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedule_terms_terms_en_text') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('appointment_schedule_terms_terms_en_text_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedule_terms_terms_en_text_data-original-title') }}"    class="form-control {{ $errors->has('terms_en_text') ? 'is-invalid' : '' }}" name="terms_en_text" placeholder="{{ __('appointment_schedule_terms_terms_en_text') }}"   >{{ $appointment_schedule_term->terms_en_text   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('terms_en_text'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('terms_en_text') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.appointment_schedule_terms_update') 
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
