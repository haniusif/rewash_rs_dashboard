@extends('layouts.layoutMaster')
@section('title', __('Washing_plans | Add new washing_plan') )
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
            <li class="breadcrumb-item"><a href="{{ route('washing_plans.index') }}">{{ __('Washing_plans') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ __('Add new washing_plan') }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('washing_plans.store') }}"
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
                                <h5 class="mb-0">{{ __('Washing_plans') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('branch_id')   }}" data-placement="left"  data-content="{{ __('washing_plans_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_branch_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('washing_plans_branch_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('washing_plans_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('name')   }}" data-placement="left"  data-content="{{ __('washing_plans_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_name_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('washing_plans_name') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('washing_plans_en_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('en_name')   }}" data-placement="left"  data-content="{{ __('washing_plans_en_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_en_name_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" name="en_name" placeholder="{{ __('washing_plans_en_name') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('washing_plans_subscription_package') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('subscription_package')   }}" data-placement="left"  data-content="{{ __('washing_plans_subscription_package_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_subscription_package_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('subscription_package') ? 'is-invalid' : '' }}" name="subscription_package" placeholder="{{ __('washing_plans_subscription_package') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('subscription_package'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('subscription_package') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_en_subscription_package') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('en_subscription_package')   }}" data-placement="left"  data-content="{{ __('washing_plans_en_subscription_package_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_en_subscription_package_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('en_subscription_package') ? 'is-invalid' : '' }}" name="en_subscription_package" placeholder="{{ __('washing_plans_en_subscription_package') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('en_subscription_package'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('en_subscription_package') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_number_of_washes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('number_of_washes')   }}" data-placement="left"  data-content="{{ __('washing_plans_number_of_washes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_number_of_washes_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('number_of_washes') ? 'is-invalid' : '' }}" name="number_of_washes" placeholder="{{ __('washing_plans_number_of_washes') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('number_of_washes'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('number_of_washes') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_validity_days') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('validity_days')   }}" data-placement="left"  data-content="{{ __('washing_plans_validity_days_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_validity_days_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('validity_days') ? 'is-invalid' : '' }}" name="validity_days" placeholder="{{ __('washing_plans_validity_days') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('validity_days'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('validity_days') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('price')   }}" data-placement="left"  data-content="{{ __('washing_plans_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_price_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" placeholder="{{ __('washing_plans_price') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                    

     
 
    

           <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_image') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('image')   }}" data-placement="left"  data-content="{{ __('washing_plans_image_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_image_data-original-title') }}" 
                                                                     type="file"   class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" placeholder="{{ __('washing_plans_image') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('washing_plans_washing_plan_type_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('washing_plan_type_id')   }}" data-placement="left"  data-content="{{ __('washing_plans_washing_plan_type_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_washing_plan_type_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('washing_plan_type_id') ? 'is-invalid' : '' }}" name="washing_plan_type_id" placeholder="{{ __('washing_plans_washing_plan_type_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('washing_plan_type_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('washing_plan_type_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

     <div class="col-12 mb-3">
  <div class="form-group row">
    <div class="col-md-4">
      <span>@lang('washing_plans_is_active') </span>
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
                                                                <span>{{ __('washing_plans_show_in_home') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('show_in_home')   }}" data-placement="left"  data-content="{{ __('washing_plans_show_in_home_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_show_in_home_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('show_in_home') ? 'is-invalid' : '' }}" name="show_in_home" placeholder="{{ __('washing_plans_show_in_home') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('show_in_home'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('show_in_home') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

     






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_description') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('washing_plans_description_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_description_data-original-title') }}"    class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" placeholder="{{ __('washing_plans_description') }}"   >{{ old('description') }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('description'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('description') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>







       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_en_description') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('washing_plans_en_description_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_en_description_data-original-title') }}"    class="form-control {{ $errors->has('en_description') ? 'is-invalid' : '' }}" name="en_description" placeholder="{{ __('washing_plans_en_description') }}"   >{{ old('en_description') }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('en_description'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('en_description') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_loyalty_points') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('loyalty_points')   }}" data-placement="left"  data-content="{{ __('washing_plans_loyalty_points_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_loyalty_points_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('loyalty_points') ? 'is-invalid' : '' }}" name="loyalty_points" placeholder="{{ __('washing_plans_loyalty_points') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_is_offer') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('is_offer')   }}" data-placement="left"  data-content="{{ __('washing_plans_is_offer_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_is_offer_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('is_offer') ? 'is-invalid' : '' }}" name="is_offer" placeholder="{{ __('washing_plans_is_offer') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_offer'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_offer') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plans_with_tabby') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('with_tabby')   }}" data-placement="left"  data-content="{{ __('washing_plans_with_tabby_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plans_with_tabby_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('with_tabby') ? 'is-invalid' : '' }}" name="with_tabby" placeholder="{{ __('washing_plans_with_tabby') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('with_tabby'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('with_tabby') }}
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
