@extends('layouts.layoutMaster')
@section('title', __('Additional_services | Add new additional_service') )
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
            <li class="breadcrumb-item"><a href="{{ route('additional_services.index') }}">{{ __('Additional_services') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ __('Add new additional_service') }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('additional_services.store') }}"
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
                                <h5 class="mb-0">{{ __('Additional_services') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('additional_services_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('branch_id')   }}" data-placement="left"  data-content="{{ __('additional_services_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('additional_services_branch_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('additional_services_branch_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('additional_services_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('name')   }}" data-placement="left"  data-content="{{ __('additional_services_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('additional_services_name_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('additional_services_name') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('additional_services_en_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('en_name')   }}" data-placement="left"  data-content="{{ __('additional_services_en_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('additional_services_en_name_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" name="en_name" placeholder="{{ __('additional_services_en_name') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                    

     
 
    

           <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('additional_services_image') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('image')   }}" data-placement="left"  data-content="{{ __('additional_services_image_data-content') }}" data-trigger="hover"  data-original-title="{{ __('additional_services_image_data-original-title') }}" 
                                                                     type="file"   class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" placeholder="{{ __('additional_services_image') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('additional_services_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('price')   }}" data-placement="left"  data-content="{{ __('additional_services_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('additional_services_price_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" placeholder="{{ __('additional_services_price') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('additional_services_promotional_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('promotional_price')   }}" data-placement="left"  data-content="{{ __('additional_services_promotional_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('additional_services_promotional_price_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('promotional_price') ? 'is-invalid' : '' }}" name="promotional_price" placeholder="{{ __('additional_services_promotional_price') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('promotional_price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('promotional_price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('additional_services_type') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('type')   }}" data-placement="left"  data-content="{{ __('additional_services_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('additional_services_type_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" placeholder="{{ __('additional_services_type') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('type'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('type') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

     <div class="col-12 mb-3">
  <div class="form-group row">
    <div class="col-md-4">
      <span>@lang('additional_services_is_active') </span>
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
                                                                <span>{{ __('additional_services_loyalty_points') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('loyalty_points')   }}" data-placement="left"  data-content="{{ __('additional_services_loyalty_points_data-content') }}" data-trigger="hover"  data-original-title="{{ __('additional_services_loyalty_points_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('loyalty_points') ? 'is-invalid' : '' }}" name="loyalty_points" placeholder="{{ __('additional_services_loyalty_points') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('loyalty_points'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('loyalty_points') }}
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
