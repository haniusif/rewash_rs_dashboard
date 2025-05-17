@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.promo_code_cashbacks_promo_code_cashbacks')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.promo_code_cashbacks_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/promo_code_cashbacks">     @lang('messages.promo_code_cashbacks_promo_code_cashbacks')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/promo_code_cashbacks/create" title = "@lang('messages.promo_code_cashbacks_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.promo_code_cashbacks_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/promo_code_cashbacks') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_code_cashbacks_promo_code_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("promo_code_id" , $promo_code_cashback->promo_code_id)  }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_promo_code_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_promo_code_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_id') ? 'is-invalid' : '' }}" name="promo_code_id" placeholder="{{ __('promo_code_cashbacks_promo_code_id') }}">
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



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_code_cashbacks_cashback_type') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("cashback_type" , $promo_code_cashback->cashback_type)  }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_cashback_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_cashback_type_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('cashback_type') ? 'is-invalid' : '' }}" name="cashback_type" placeholder="{{ __('promo_code_cashbacks_cashback_type') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('cashback_type'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('cashback_type') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_code_cashbacks_cashback_value') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("cashback_value" , $promo_code_cashback->cashback_value)  }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_cashback_value_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_cashback_value_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('cashback_value') ? 'is-invalid' : '' }}" name="cashback_value" placeholder="{{ __('promo_code_cashbacks_cashback_value') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('cashback_value'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('cashback_value') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_code_cashbacks_min_order_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("min_order_amount" , $promo_code_cashback->min_order_amount)  }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_min_order_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_min_order_amount_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('min_order_amount') ? 'is-invalid' : '' }}" name="min_order_amount" placeholder="{{ __('promo_code_cashbacks_min_order_amount') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('min_order_amount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('min_order_amount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_code_cashbacks_max_cashback_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("max_cashback_amount" , $promo_code_cashback->max_cashback_amount)  }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_max_cashback_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_max_cashback_amount_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('max_cashback_amount') ? 'is-invalid' : '' }}" name="max_cashback_amount" placeholder="{{ __('promo_code_cashbacks_max_cashback_amount') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('max_cashback_amount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('max_cashback_amount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



<div class="col-12 mb-3">
  <div class="form-group row">
    <div class="col-md-4">
      <span>{{ __('promo_code_cashbacks_is_active') }}</span>
    </div>
    <div class="col-md-8">
      <label class="switch">
        <input name="is_active" value="1" @checked($promo_code_cashback->is_active == 1) type="checkbox" id="is_active" class="switch-input">
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
                                                                <span>{{ __('promo_code_cashbacks_start_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("start_date" , $promo_code_cashback->start_date)  }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_start_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_start_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" name="start_date" placeholder="{{ __('promo_code_cashbacks_start_date') }}">
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
                                                                <span>{{ __('promo_code_cashbacks_end_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("end_date" , $promo_code_cashback->end_date)  }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_end_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_end_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('end_date') ? 'is-invalid' : '' }}" name="end_date" placeholder="{{ __('promo_code_cashbacks_end_date') }}">
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
                                                                <span>{{ __('promo_code_cashbacks_max_uses_per_user') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("max_uses_per_user" , $promo_code_cashback->max_uses_per_user)  }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_max_uses_per_user_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_max_uses_per_user_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('max_uses_per_user') ? 'is-invalid' : '' }}" name="max_uses_per_user" placeholder="{{ __('promo_code_cashbacks_max_uses_per_user') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('max_uses_per_user'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('max_uses_per_user') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_code_cashbacks_cashback_method') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("cashback_method" , $promo_code_cashback->cashback_method)  }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_cashback_method_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_cashback_method_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('cashback_method') ? 'is-invalid' : '' }}" name="cashback_method" placeholder="{{ __('promo_code_cashbacks_cashback_method') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('cashback_method'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('cashback_method') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_code_cashbacks_cashback_expiry') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("cashback_expiry" , $promo_code_cashback->cashback_expiry)  }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_cashback_expiry_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_cashback_expiry_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('cashback_expiry') ? 'is-invalid' : '' }}" name="cashback_expiry" placeholder="{{ __('promo_code_cashbacks_cashback_expiry') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('cashback_expiry'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('cashback_expiry') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.promo_code_cashbacks_update') 
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
