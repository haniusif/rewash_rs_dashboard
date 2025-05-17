@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.team_vacations_team_vacations')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.team_vacations_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/team_vacations">     @lang('messages.team_vacations_team_vacations')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/team_vacations/create" title = "@lang('messages.team_vacations_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.team_vacations_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/team_vacations') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('team_vacations_team_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("team_id" , $team_vacation->team_id)  }}" data-placement="left"  data-content="{{ __('team_vacations_team_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('team_vacations_team_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('team_id') ? 'is-invalid' : '' }}" name="team_id" placeholder="{{ __('team_vacations_team_id') }}">
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
                                                                <span>{{ __('team_vacations_general_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("general_status_id" , $team_vacation->general_status_id)  }}" data-placement="left"  data-content="{{ __('team_vacations_general_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('team_vacations_general_status_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('general_status_id') ? 'is-invalid' : '' }}" name="general_status_id" placeholder="{{ __('team_vacations_general_status_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('general_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('general_status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('team_vacations_start_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("start_date" , $team_vacation->start_date)  }}" data-placement="left"  data-content="{{ __('team_vacations_start_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('team_vacations_start_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" name="start_date" placeholder="{{ __('team_vacations_start_date') }}">
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
                                                                <span>{{ __('team_vacations_end_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("end_date" , $team_vacation->end_date)  }}" data-placement="left"  data-content="{{ __('team_vacations_end_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('team_vacations_end_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('end_date') ? 'is-invalid' : '' }}" name="end_date" placeholder="{{ __('team_vacations_end_date') }}">
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
                                                                <span>{{ __('team_vacations_reason') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("reason" , $team_vacation->reason)  }}" data-placement="left"  data-content="{{ __('team_vacations_reason_data-content') }}" data-trigger="hover"  data-original-title="{{ __('team_vacations_reason_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('reason') ? 'is-invalid' : '' }}" name="reason" placeholder="{{ __('team_vacations_reason') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('reason'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('reason') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('team_vacations_attachments') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('team_vacations_attachments_data-content') }}" data-trigger="hover"  data-original-title="{{ __('team_vacations_attachments_data-original-title') }}"    class="form-control {{ $errors->has('attachments') ? 'is-invalid' : '' }}" name="attachments" placeholder="{{ __('team_vacations_attachments') }}"   >{{ $team_vacation->attachments   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('attachments'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('attachments') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.team_vacations_update') 
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
