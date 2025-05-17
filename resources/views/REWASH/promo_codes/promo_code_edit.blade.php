@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.promo_codes_promo_codes')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.promo_codes_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/promo_codes">     @lang('messages.promo_codes_promo_codes')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/promo_codes/create" title = "@lang('messages.promo_codes_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.promo_codes_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/promo_codes') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_codes_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $promo_code->branch_id)  }}" data-placement="left"  data-content="{{ __('promo_codes_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('promo_codes_branch_id') }}">
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
                                                                <span>{{ __('promo_codes_promo_code') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("promo_code" , $promo_code->promo_code)  }}" data-placement="left"  data-content="{{ __('promo_codes_promo_code_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_promo_code_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('promo_code') ? 'is-invalid' : '' }}" name="promo_code" placeholder="{{ __('promo_codes_promo_code') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('promo_code'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('promo_code') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_codes_is_unlimited') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_unlimited" , $promo_code->is_unlimited)  }}" data-placement="left"  data-content="{{ __('promo_codes_is_unlimited_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_is_unlimited_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_unlimited') ? 'is-invalid' : '' }}" name="is_unlimited" placeholder="{{ __('promo_codes_is_unlimited') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_unlimited'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_unlimited') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_codes_number_of_users') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("number_of_users" , $promo_code->number_of_users)  }}" data-placement="left"  data-content="{{ __('promo_codes_number_of_users_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_number_of_users_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('number_of_users') ? 'is-invalid' : '' }}" name="number_of_users" placeholder="{{ __('promo_codes_number_of_users') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('number_of_users'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('number_of_users') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_codes_discount_value') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("discount_value" , $promo_code->discount_value)  }}" data-placement="left"  data-content="{{ __('promo_codes_discount_value_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_discount_value_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('discount_value') ? 'is-invalid' : '' }}" name="discount_value" placeholder="{{ __('promo_codes_discount_value') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('discount_value'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('discount_value') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_codes_discount_type') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("discount_type" , $promo_code->discount_type)  }}" data-placement="left"  data-content="{{ __('promo_codes_discount_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_discount_type_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('discount_type') ? 'is-invalid' : '' }}" name="discount_type" placeholder="{{ __('promo_codes_discount_type') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('discount_type'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('discount_type') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



<div class="col-12 mb-3">
  <div class="form-group row">
    <div class="col-md-4">
      <span>{{ __('promo_codes_is_active') }}</span>
    </div>
    <div class="col-md-8">
      <label class="switch">
        <input name="is_active" value="1" @checked($promo_code->is_active == 1) type="checkbox" id="is_active" class="switch-input">
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
                                                                <span>{{ __('promo_codes_validity_time_from') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("validity_time_from" , $promo_code->validity_time_from)  }}" data-placement="left"  data-content="{{ __('promo_codes_validity_time_from_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_validity_time_from_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('validity_time_from') ? 'is-invalid' : '' }}" name="validity_time_from" placeholder="{{ __('promo_codes_validity_time_from') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('validity_time_from'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('validity_time_from') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_codes_validity_time_to') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("validity_time_to" , $promo_code->validity_time_to)  }}" data-placement="left"  data-content="{{ __('promo_codes_validity_time_to_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_validity_time_to_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('validity_time_to') ? 'is-invalid' : '' }}" name="validity_time_to" placeholder="{{ __('promo_codes_validity_time_to') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('validity_time_to'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('validity_time_to') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_codes_is_one_user') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_one_user" , $promo_code->is_one_user)  }}" data-placement="left"  data-content="{{ __('promo_codes_is_one_user_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_is_one_user_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_one_user') ? 'is-invalid' : '' }}" name="is_one_user" placeholder="{{ __('promo_codes_is_one_user') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_one_user'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_one_user') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_codes_is_cashback') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_cashback" , $promo_code->is_cashback)  }}" data-placement="left"  data-content="{{ __('promo_codes_is_cashback_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_is_cashback_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_cashback') ? 'is-invalid' : '' }}" name="is_cashback" placeholder="{{ __('promo_codes_is_cashback') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_cashback'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_cashback') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.promo_codes_update') 
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
