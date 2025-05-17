@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.social_teams_social_teams')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.social_teams_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/social_teams">     @lang('messages.social_teams_social_teams')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/social_teams/create" title = "@lang('messages.social_teams_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.social_teams_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/social_teams') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('social_teams_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $social_team->branch_id)  }}" data-placement="left"  data-content="{{ __('social_teams_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('social_teams_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('social_teams_branch_id') }}">
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
                                                                <span>{{ __('social_teams_team_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select data-toggle="popover"   data-placement="left"  data-content="{{ __('social_teams_team_id_data-content') }}" data-trigger="hover" data-original-title="{{ __('social_teams_team_id_data-original-title') }}"  class="form-control  {{ $errors->has('team_id') ? 'is-invalid' : '' }} "  name="team_id" >

                            @foreach($teams as $team)
                             <option  @selected(old('team_id' , $social_team->team_id) == $team->id)    value="{{ $team->id }}" >{{ $team->driver_id }}</option>
                             @endforeach
                            </select>

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
                                                                <span>{{ __('social_teams_url') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("url" , $social_team->url)  }}" data-placement="left"  data-content="{{ __('social_teams_url_data-content') }}" data-trigger="hover"  data-original-title="{{ __('social_teams_url_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" name="url" placeholder="{{ __('social_teams_url') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('url'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('url') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('social_teams_social') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("social" , $social_team->social)  }}" data-placement="left"  data-content="{{ __('social_teams_social_data-content') }}" data-trigger="hover"  data-original-title="{{ __('social_teams_social_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('social') ? 'is-invalid' : '' }}" name="social" placeholder="{{ __('social_teams_social') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('social'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('social') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('social_teams_social_icon') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("social_icon" , $social_team->social_icon)  }}" data-placement="left"  data-content="{{ __('social_teams_social_icon_data-content') }}" data-trigger="hover"  data-original-title="{{ __('social_teams_social_icon_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('social_icon') ? 'is-invalid' : '' }}" name="social_icon" placeholder="{{ __('social_teams_social_icon') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('social_icon'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('social_icon') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.social_teams_update') 
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
