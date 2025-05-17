@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.work_hours_work_hours')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.work_hours_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/work_hours">     @lang('messages.work_hours_work_hours')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/work_hours/create" title = "@lang('messages.work_hours_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.work_hours_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/work_hours') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('work_hours_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $work_hour->branch_id)  }}" data-placement="left"  data-content="{{ __('work_hours_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('work_hours_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('work_hours_branch_id') }}">
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
                                                                <span>{{ __('work_hours_team_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("team_id" , $work_hour->team_id)  }}" data-placement="left"  data-content="{{ __('work_hours_team_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('work_hours_team_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('team_id') ? 'is-invalid' : '' }}" name="team_id" placeholder="{{ __('work_hours_team_id') }}">
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
                                                                <span>{{ __('work_hours_week_day') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("week_day" , $work_hour->week_day)  }}" data-placement="left"  data-content="{{ __('work_hours_week_day_data-content') }}" data-trigger="hover"  data-original-title="{{ __('work_hours_week_day_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('week_day') ? 'is-invalid' : '' }}" name="week_day" placeholder="{{ __('work_hours_week_day') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('week_day'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('week_day') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('work_hours_work_hours_from') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("work_hours_from" , $work_hour->work_hours_from)  }}" data-placement="left"  data-content="{{ __('work_hours_work_hours_from_data-content') }}" data-trigger="hover"  data-original-title="{{ __('work_hours_work_hours_from_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('work_hours_from') ? 'is-invalid' : '' }}" name="work_hours_from" placeholder="{{ __('work_hours_work_hours_from') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('work_hours_from'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('work_hours_from') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('work_hours_work_hours_to') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("work_hours_to" , $work_hour->work_hours_to)  }}" data-placement="left"  data-content="{{ __('work_hours_work_hours_to_data-content') }}" data-trigger="hover"  data-original-title="{{ __('work_hours_work_hours_to_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('work_hours_to') ? 'is-invalid' : '' }}" name="work_hours_to" placeholder="{{ __('work_hours_work_hours_to') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('work_hours_to'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('work_hours_to') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.work_hours_update') 
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
