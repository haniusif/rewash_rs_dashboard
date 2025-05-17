@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.platforms_platforms')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.platforms_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/platforms">     @lang('messages.platforms_platforms')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/platforms/create" title = "@lang('messages.platforms_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.platforms_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/platforms') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('platforms_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("name" , $platform->name)  }}" data-placement="left"  data-content="{{ __('platforms_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('platforms_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('platforms_name') }}">
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
                                                                <span>{{ __('platforms_en_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("en_name" , $platform->en_name)  }}" data-placement="left"  data-content="{{ __('platforms_en_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('platforms_en_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" name="en_name" placeholder="{{ __('platforms_en_name') }}">
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
                                                                <span>{{ __('platforms_sorting') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("sorting" , $platform->sorting)  }}" data-placement="left"  data-content="{{ __('platforms_sorting_data-content') }}" data-trigger="hover"  data-original-title="{{ __('platforms_sorting_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('sorting') ? 'is-invalid' : '' }}" name="sorting" placeholder="{{ __('platforms_sorting') }}">
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
      <span>{{ __('platforms_is_active') }}</span>
    </div>
    <div class="col-md-8">
      <label class="switch">
        <input name="is_active" value="1" @checked($platform->is_active == 1) type="checkbox" id="is_active" class="switch-input">
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



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('platforms_accounting_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("accounting_name" , $platform->accounting_name)  }}" data-placement="left"  data-content="{{ __('platforms_accounting_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('platforms_accounting_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('accounting_name') ? 'is-invalid' : '' }}" name="accounting_name" placeholder="{{ __('platforms_accounting_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('accounting_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('accounting_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('platforms_default_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("default_price" , $platform->default_price)  }}" data-placement="left"  data-content="{{ __('platforms_default_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('platforms_default_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('default_price') ? 'is-invalid' : '' }}" name="default_price" placeholder="{{ __('platforms_default_price') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('default_price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('default_price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('platforms_having_default_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("having_default_price" , $platform->having_default_price)  }}" data-placement="left"  data-content="{{ __('platforms_having_default_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('platforms_having_default_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('having_default_price') ? 'is-invalid' : '' }}" name="having_default_price" placeholder="{{ __('platforms_having_default_price') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('having_default_price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('having_default_price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('platforms_accounting_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("accounting_id" , $platform->accounting_id)  }}" data-placement="left"  data-content="{{ __('platforms_accounting_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('platforms_accounting_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('accounting_id') ? 'is-invalid' : '' }}" name="accounting_id" placeholder="{{ __('platforms_accounting_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('accounting_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('accounting_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('platforms_promo_code_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("promo_code_id" , $platform->promo_code_id)  }}" data-placement="left"  data-content="{{ __('platforms_promo_code_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('platforms_promo_code_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_id') ? 'is-invalid' : '' }}" name="promo_code_id" placeholder="{{ __('platforms_promo_code_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('promo_code_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('promo_code_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.platforms_update') 
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
