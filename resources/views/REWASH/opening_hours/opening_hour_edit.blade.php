@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.opening_hours_opening_hours')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.opening_hours_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/opening_hours">     @lang('messages.opening_hours_opening_hours')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/opening_hours/create" title = "@lang('messages.opening_hours_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.opening_hours_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/opening_hours') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('opening_hours_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $opening_hour->branch_id)  }}" data-placement="left"  data-content="{{ __('opening_hours_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('opening_hours_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('opening_hours_branch_id') }}">
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
                                                                <span>{{ __('opening_hours_day') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("day" , $opening_hour->day)  }}" data-placement="left"  data-content="{{ __('opening_hours_day_data-content') }}" data-trigger="hover"  data-original-title="{{ __('opening_hours_day_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('day') ? 'is-invalid' : '' }}" name="day" placeholder="{{ __('opening_hours_day') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('day'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('day') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('opening_hours_opening_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("opening_time" , $opening_hour->opening_time)  }}" data-placement="left"  data-content="{{ __('opening_hours_opening_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('opening_hours_opening_time_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('opening_time') ? 'is-invalid' : '' }}" name="opening_time" placeholder="{{ __('opening_hours_opening_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('opening_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('opening_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('opening_hours_closing_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("closing_time" , $opening_hour->closing_time)  }}" data-placement="left"  data-content="{{ __('opening_hours_closing_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('opening_hours_closing_time_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('closing_time') ? 'is-invalid' : '' }}" name="closing_time" placeholder="{{ __('opening_hours_closing_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('closing_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('closing_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.opening_hours_update') 
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
