@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.modules_modules')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.modules_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/modules">     @lang('messages.modules_modules')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/modules/create" title = "@lang('messages.modules_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.modules_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/modules') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('modules_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $module->branch_id)  }}" data-placement="left"  data-content="{{ __('modules_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('modules_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('modules_branch_id') }}">
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
                                                                <span>{{ __('modules_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("name" , $module->name)  }}" data-placement="left"  data-content="{{ __('modules_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('modules_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('modules_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('modules_en_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("en_name" , $module->en_name)  }}" data-placement="left"  data-content="{{ __('modules_en_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('modules_en_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" name="en_name" placeholder="{{ __('modules_en_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('en_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('en_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('modules_route') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("route" , $module->route)  }}" data-placement="left"  data-content="{{ __('modules_route_data-content') }}" data-trigger="hover"  data-original-title="{{ __('modules_route_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('route') ? 'is-invalid' : '' }}" name="route" placeholder="{{ __('modules_route') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('route'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('route') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

    
 
    

           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('modules_image') }}</span>
                                                            </div>
                                                            <div class="col-md-8">

                                                               <div class="row" >
                                                                <img src="{{ asset($module->image) }}" alt="image" style="height:200px; width:100%" class="img-fluid rounded-sm mb-2" />

                                                                </div>

                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('image')   }}" data-placement="left"  data-content="{{ __('modules_image_data-content') }}" data-trigger="hover"  data-original-title="{{ __('modules_image_data-original-title') }}" 
                                                                     type="file"   class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" placeholder="{{ __('modules_image') }}"  >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-image"></i>
                                                                    </div>

                                                                    @if ($errors->has('image'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('image') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('modules_icon') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("icon" , $module->icon)  }}" data-placement="left"  data-content="{{ __('modules_icon_data-content') }}" data-trigger="hover"  data-original-title="{{ __('modules_icon_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('icon') ? 'is-invalid' : '' }}" name="icon" placeholder="{{ __('modules_icon') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('icon'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('icon') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('modules_parent_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("parent_id" , $module->parent_id)  }}" data-placement="left"  data-content="{{ __('modules_parent_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('modules_parent_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('parent_id') ? 'is-invalid' : '' }}" name="parent_id" placeholder="{{ __('modules_parent_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('parent_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('parent_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('modules_user_type_ids') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_type_ids" , $module->user_type_ids)  }}" data-placement="left"  data-content="{{ __('modules_user_type_ids_data-content') }}" data-trigger="hover"  data-original-title="{{ __('modules_user_type_ids_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('user_type_ids') ? 'is-invalid' : '' }}" name="user_type_ids" placeholder="{{ __('modules_user_type_ids') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('user_type_ids'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('user_type_ids') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('modules_app_type') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("app_type" , $module->app_type)  }}" data-placement="left"  data-content="{{ __('modules_app_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('modules_app_type_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('app_type') ? 'is-invalid' : '' }}" name="app_type" placeholder="{{ __('modules_app_type') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('app_type'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('app_type') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('modules_sorting') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("sorting" , $module->sorting)  }}" data-placement="left"  data-content="{{ __('modules_sorting_data-content') }}" data-trigger="hover"  data-original-title="{{ __('modules_sorting_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('sorting') ? 'is-invalid' : '' }}" name="sorting" placeholder="{{ __('modules_sorting') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('sorting'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('sorting') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



<div class="col-12 mb-3">
  <div class="form-group row">
    <div class="col-md-4">
      <span>{{ __('modules_is_active') }}</span>
    </div>
    <div class="col-md-8">
      <label class="switch">
        <input name="is_active" value="1" @checked($module->is_active == 1) type="checkbox" id="is_active" class="switch-input">
        <span class="switch-toggle-slider">
          <span class="switch-on"></span>
          <span class="switch-off"></span>
        </span>
        <span class="switch-label"></span>
      </label>
      @if ($errors->has('is_active'))
      <div class="invalid-feedback">
        {{ $errors->first('is_active') }}
      </div>
      @endif
    </div>
  </div>
</div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.modules_update') 
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
