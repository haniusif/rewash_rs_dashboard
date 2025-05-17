@extends('layouts.layoutMaster')
@section('title', __('Promo_codes | Add new promo_code') )
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
            <li class="breadcrumb-item"><a href="{{ route('promo_codes.index') }}">{{ __('Promo_codes') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ __('Add new promo_code') }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('promo_codes.store') }}"
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
                                <h5 class="mb-0">{{ __('Promo_codes') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('promo_codes_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('branch_id')   }}" data-placement="left"  data-content="{{ __('promo_codes_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_branch_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('promo_codes_branch_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('promo_code')   }}" data-placement="left"  data-content="{{ __('promo_codes_promo_code_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_promo_code_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('promo_code') ? 'is-invalid' : '' }}" name="promo_code" placeholder="{{ __('promo_codes_promo_code') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('is_unlimited')   }}" data-placement="left"  data-content="{{ __('promo_codes_is_unlimited_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_is_unlimited_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('is_unlimited') ? 'is-invalid' : '' }}" name="is_unlimited" placeholder="{{ __('promo_codes_is_unlimited') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('number_of_users')   }}" data-placement="left"  data-content="{{ __('promo_codes_number_of_users_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_number_of_users_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('number_of_users') ? 'is-invalid' : '' }}" name="number_of_users" placeholder="{{ __('promo_codes_number_of_users') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('discount_value')   }}" data-placement="left"  data-content="{{ __('promo_codes_discount_value_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_discount_value_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('discount_value') ? 'is-invalid' : '' }}" name="discount_value" placeholder="{{ __('promo_codes_discount_value') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('discount_type')   }}" data-placement="left"  data-content="{{ __('promo_codes_discount_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_discount_type_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('discount_type') ? 'is-invalid' : '' }}" name="discount_type" placeholder="{{ __('promo_codes_discount_type') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
      <span>@lang('promo_codes_is_active') </span>
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
                                                                <span>{{ __('promo_codes_validity_time_from') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('validity_time_from')   }}" data-placement="left"  data-content="{{ __('promo_codes_validity_time_from_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_validity_time_from_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('validity_time_from') ? 'is-invalid' : '' }}" name="validity_time_from" placeholder="{{ __('promo_codes_validity_time_from') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('validity_time_to')   }}" data-placement="left"  data-content="{{ __('promo_codes_validity_time_to_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_validity_time_to_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('validity_time_to') ? 'is-invalid' : '' }}" name="validity_time_to" placeholder="{{ __('promo_codes_validity_time_to') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('is_one_user')   }}" data-placement="left"  data-content="{{ __('promo_codes_is_one_user_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_is_one_user_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('is_one_user') ? 'is-invalid' : '' }}" name="is_one_user" placeholder="{{ __('promo_codes_is_one_user') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                    <input  data-toggle="popover" value="{{  old('is_cashback')   }}" data-placement="left"  data-content="{{ __('promo_codes_is_cashback_data-content') }}" data-trigger="hover"  data-original-title="{{ __('promo_codes_is_cashback_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('is_cashback') ? 'is-invalid' : '' }}" name="is_cashback" placeholder="{{ __('promo_codes_is_cashback') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
