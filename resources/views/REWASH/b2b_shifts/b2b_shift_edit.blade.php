@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.b2b_shifts_b2b_shifts')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.b2b_shifts_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/b2b_shifts">     @lang('messages.b2b_shifts_b2b_shifts')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/b2b_shifts/create" title = "@lang('messages.b2b_shifts_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.b2b_shifts_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/b2b_shifts') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('b2b_shifts_team_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("team_id" , $b2b_shift->team_id)  }}" data-placement="left"  data-content="{{ __('b2b_shifts_team_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('b2b_shifts_team_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('team_id') ? 'is-invalid' : '' }}" name="team_id" placeholder="{{ __('b2b_shifts_team_id') }}">
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
                                                                <span>{{ __('b2b_shifts_platform_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("platform_id" , $b2b_shift->platform_id)  }}" data-placement="left"  data-content="{{ __('b2b_shifts_platform_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('b2b_shifts_platform_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('platform_id') ? 'is-invalid' : '' }}" name="platform_id" placeholder="{{ __('b2b_shifts_platform_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('platform_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('platform_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('b2b_shifts_from_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("from_time" , $b2b_shift->from_time)  }}" data-placement="left"  data-content="{{ __('b2b_shifts_from_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('b2b_shifts_from_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('from_time') ? 'is-invalid' : '' }}" name="from_time" placeholder="{{ __('b2b_shifts_from_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('from_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('from_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('b2b_shifts_to_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("to_time" , $b2b_shift->to_time)  }}" data-placement="left"  data-content="{{ __('b2b_shifts_to_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('b2b_shifts_to_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('to_time') ? 'is-invalid' : '' }}" name="to_time" placeholder="{{ __('b2b_shifts_to_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('to_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('to_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.b2b_shifts_update') 
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
