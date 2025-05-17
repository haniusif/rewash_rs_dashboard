@extends('layouts.layoutMaster')
@section('title', __('Promo_code_cashbacks | Add new promo_code_cashback') )
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection
@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection
@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
@endsection
@section('content')
  <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('promo_code_cashbacks.index') }}">{{ __('Promo_code_cashbacks') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ __('Add new promo_code_cashback') }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('promo_code_cashbacks.store') }}"
            enctype="multipart/form-data" novalidate>
            @csrf
            <div class="row justify-content-end">
                <div class="col-sm-4">
                    <button type="reset" class="btn btn-outline-warning">{{ __('Reset') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-10 col-sm-12">
                <div class="card h-100 mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">{{ __('Promo_code_cashbacks') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_code_cashbacks_promo_code_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('promo_code_id')   }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_promo_code_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_promo_code_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_id') ? 'is-invalid' : '' }}" name="promo_code_id" placeholder="{{ __('promo_code_cashbacks_promo_code_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('cashback_type')   }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_cashback_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_cashback_type_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('cashback_type') ? 'is-invalid' : '' }}" name="cashback_type" placeholder="{{ __('promo_code_cashbacks_cashback_type') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('cashback_value')   }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_cashback_value_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_cashback_value_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('cashback_value') ? 'is-invalid' : '' }}" name="cashback_value" placeholder="{{ __('promo_code_cashbacks_cashback_value') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('min_order_amount')   }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_min_order_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_min_order_amount_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('min_order_amount') ? 'is-invalid' : '' }}" name="min_order_amount" placeholder="{{ __('promo_code_cashbacks_min_order_amount') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('max_cashback_amount')   }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_max_cashback_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_max_cashback_amount_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('max_cashback_amount') ? 'is-invalid' : '' }}" name="max_cashback_amount" placeholder="{{ __('promo_code_cashbacks_max_cashback_amount') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
      <span>@lang('promo_code_cashbacks_is_active') </span>
    </div>
    <div class="col-md-8">
      <label class="switch">
        <input name="is_active" value="1" @checked(old('is_active') == 1) type="checkbox" id="is_active" class="switch-input">
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
                                                                    <input  data-toggle="popover" value="{{  old('start_date')   }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_start_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_start_date_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" name="start_date" placeholder="{{ __('promo_code_cashbacks_start_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('end_date')   }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_end_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_end_date_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('end_date') ? 'is-invalid' : '' }}" name="end_date" placeholder="{{ __('promo_code_cashbacks_end_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('max_uses_per_user')   }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_max_uses_per_user_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_max_uses_per_user_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('max_uses_per_user') ? 'is-invalid' : '' }}" name="max_uses_per_user" placeholder="{{ __('promo_code_cashbacks_max_uses_per_user') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('cashback_method')   }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_cashback_method_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_cashback_method_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('cashback_method') ? 'is-invalid' : '' }}" name="cashback_method" placeholder="{{ __('promo_code_cashbacks_cashback_method') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('cashback_expiry')   }}" data-placement="left"  data-content="{{ __('promo_code_cashbacks_cashback_expiry_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_code_cashbacks_cashback_expiry_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('cashback_expiry') ? 'is-invalid' : '' }}" name="cashback_expiry" placeholder="{{ __('promo_code_cashbacks_cashback_expiry') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                    

     



                  </div>
                </div>


                </div>
                <div class="col-md-2 col-sm-12">



                </div>
            </div>
            <div class="row justify-content-end mt-3">
                <div class="col-sm-4">
                    <button type="reset" class="btn btn-outline-warning">{{ __('Reset') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </div>
            </div>
        </form>
    </section>



@endsection
