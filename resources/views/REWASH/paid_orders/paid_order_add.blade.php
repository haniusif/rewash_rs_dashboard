@extends('layouts.layoutMaster')
@section('title', __('Paid_orders | Add new paid_order') )
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
            <li class="breadcrumb-item"><a href="{{ route('paid_orders.index') }}">{{ __('Paid_orders') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ __('Add new paid_order') }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('paid_orders.store') }}"
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
                                <h5 class="mb-0">{{ __('Paid_orders') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_zone_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('zone_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_zone_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_zone_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('zone_id') ? 'is-invalid' : '' }}" name="zone_id" placeholder="{{ __('paid_orders_zone_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('zone_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('zone_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_zone_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('zone_name')   }}" data-placement="left"  data-content="{{ __('paid_orders_zone_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_zone_name_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('zone_name') ? 'is-invalid' : '' }}" name="zone_name" placeholder="{{ __('paid_orders_zone_name') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('zone_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('zone_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('user_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_user_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('paid_orders_user_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('user_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('user_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_user_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('user_name')   }}" data-placement="left"  data-content="{{ __('paid_orders_user_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_user_name_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('user_name') ? 'is-invalid' : '' }}" name="user_name" placeholder="{{ __('paid_orders_user_name') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('user_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('user_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_user_mobile') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('user_mobile')   }}" data-placement="left"  data-content="{{ __('paid_orders_user_mobile_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_user_mobile_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('user_mobile') ? 'is-invalid' : '' }}" name="user_mobile" placeholder="{{ __('paid_orders_user_mobile') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('user_mobile'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('user_mobile') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_number_of_vehicles') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('number_of_vehicles')   }}" data-placement="left"  data-content="{{ __('paid_orders_number_of_vehicles_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_number_of_vehicles_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('number_of_vehicles') ? 'is-invalid' : '' }}" name="number_of_vehicles" placeholder="{{ __('paid_orders_number_of_vehicles') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('number_of_vehicles'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('number_of_vehicles') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_vehicle_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('vehicle_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_vehicle_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_vehicle_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('vehicle_id') ? 'is-invalid' : '' }}" name="vehicle_id" placeholder="{{ __('paid_orders_vehicle_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_washing_plan_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('washing_plan_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_washing_plan_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_washing_plan_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('washing_plan_id') ? 'is-invalid' : '' }}" name="washing_plan_id" placeholder="{{ __('paid_orders_washing_plan_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('washing_plan_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('washing_plan_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('name')   }}" data-placement="left"  data-content="{{ __('paid_orders_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_name_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('paid_orders_name') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('paid_orders_washing_plan_validity_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('washing_plan_validity_date')   }}" data-placement="left"  data-content="{{ __('paid_orders_washing_plan_validity_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_washing_plan_validity_date_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('washing_plan_validity_date') ? 'is-invalid' : '' }}" name="washing_plan_validity_date" placeholder="{{ __('paid_orders_washing_plan_validity_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('washing_plan_validity_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('washing_plan_validity_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_number_of_washes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('number_of_washes')   }}" data-placement="left"  data-content="{{ __('paid_orders_number_of_washes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_number_of_washes_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('number_of_washes') ? 'is-invalid' : '' }}" name="number_of_washes" placeholder="{{ __('paid_orders_number_of_washes') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('paid_orders_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('status_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_status_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('status_id') ? 'is-invalid' : '' }}" name="status_id" placeholder="{{ __('paid_orders_status_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_appointment_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('appointment_date')   }}" data-placement="left"  data-content="{{ __('paid_orders_appointment_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_appointment_date_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('appointment_date') ? 'is-invalid' : '' }}" name="appointment_date" placeholder="{{ __('paid_orders_appointment_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('appointment_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('appointment_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_slot_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('slot_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_slot_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_slot_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('slot_id') ? 'is-invalid' : '' }}" name="slot_id" placeholder="{{ __('paid_orders_slot_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('slot_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('slot_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_vehicle_no') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('vehicle_no')   }}" data-placement="left"  data-content="{{ __('paid_orders_vehicle_no_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_vehicle_no_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('vehicle_no') ? 'is-invalid' : '' }}" name="vehicle_no" placeholder="{{ __('paid_orders_vehicle_no') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_no'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_no') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_location') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('location')   }}" data-placement="left"  data-content="{{ __('paid_orders_location_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_location_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location" placeholder="{{ __('paid_orders_location') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('location'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('location') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

     






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_notes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('paid_orders_notes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_notes_data-original-title') }}"    class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" placeholder="{{ __('paid_orders_notes') }}"   >{{ old('notes') }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('notes'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('notes') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_tax_avlue') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('tax_avlue')   }}" data-placement="left"  data-content="{{ __('paid_orders_tax_avlue_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_tax_avlue_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('tax_avlue') ? 'is-invalid' : '' }}" name="tax_avlue" placeholder="{{ __('paid_orders_tax_avlue') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('tax_avlue'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('tax_avlue') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_total_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('total_price')   }}" data-placement="left"  data-content="{{ __('paid_orders_total_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_total_price_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('total_price') ? 'is-invalid' : '' }}" name="total_price" placeholder="{{ __('paid_orders_total_price') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('total_price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('total_price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_total_price_befor_payment') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('total_price_befor_payment')   }}" data-placement="left"  data-content="{{ __('paid_orders_total_price_befor_payment_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_total_price_befor_payment_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('total_price_befor_payment') ? 'is-invalid' : '' }}" name="total_price_befor_payment" placeholder="{{ __('paid_orders_total_price_befor_payment') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('total_price_befor_payment'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('total_price_befor_payment') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_wallet_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('wallet_amount')   }}" data-placement="left"  data-content="{{ __('paid_orders_wallet_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_wallet_amount_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('wallet_amount') ? 'is-invalid' : '' }}" name="wallet_amount" placeholder="{{ __('paid_orders_wallet_amount') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('wallet_amount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('wallet_amount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_promo_code_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('promo_code_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_promo_code_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_promo_code_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_id') ? 'is-invalid' : '' }}" name="promo_code_id" placeholder="{{ __('paid_orders_promo_code_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('paid_orders_promo_code_discount_value') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('promo_code_discount_value')   }}" data-placement="left"  data-content="{{ __('paid_orders_promo_code_discount_value_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_promo_code_discount_value_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_discount_value') ? 'is-invalid' : '' }}" name="promo_code_discount_value" placeholder="{{ __('paid_orders_promo_code_discount_value') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('promo_code_discount_value'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('promo_code_discount_value') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_payment_mode_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('payment_mode_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_payment_mode_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_payment_mode_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('payment_mode_id') ? 'is-invalid' : '' }}" name="payment_mode_id" placeholder="{{ __('paid_orders_payment_mode_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_mode_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_mode_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_payment_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('payment_status_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_payment_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_payment_status_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('payment_status_id') ? 'is-invalid' : '' }}" name="payment_status_id" placeholder="{{ __('paid_orders_payment_status_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_payment_status') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('payment_status')   }}" data-placement="left"  data-content="{{ __('paid_orders_payment_status_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_payment_status_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('payment_status') ? 'is-invalid' : '' }}" name="payment_status" placeholder="{{ __('paid_orders_payment_status') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_status'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_status') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_payment_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('payment_time')   }}" data-placement="left"  data-content="{{ __('paid_orders_payment_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_payment_time_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('payment_time') ? 'is-invalid' : '' }}" name="payment_time" placeholder="{{ __('paid_orders_payment_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_partner_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('partner_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_partner_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_partner_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('partner_id') ? 'is-invalid' : '' }}" name="partner_id" placeholder="{{ __('paid_orders_partner_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('partner_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('partner_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_accrued_loyalty_point') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('accrued_loyalty_point')   }}" data-placement="left"  data-content="{{ __('paid_orders_accrued_loyalty_point_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_accrued_loyalty_point_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('accrued_loyalty_point') ? 'is-invalid' : '' }}" name="accrued_loyalty_point" placeholder="{{ __('paid_orders_accrued_loyalty_point') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('accrued_loyalty_point'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('accrued_loyalty_point') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_transaction_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('transaction_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_transaction_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_transaction_id_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('transaction_id') ? 'is-invalid' : '' }}" name="transaction_id" placeholder="{{ __('paid_orders_transaction_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('transaction_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('transaction_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_platform_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('platform_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_platform_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_platform_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('platform_id') ? 'is-invalid' : '' }}" name="platform_id" placeholder="{{ __('paid_orders_platform_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('platform_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('platform_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_report_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('report_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_report_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_report_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('report_id') ? 'is-invalid' : '' }}" name="report_id" placeholder="{{ __('paid_orders_report_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('report_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('report_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_payment_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('payment_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_payment_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_payment_id_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('payment_id') ? 'is-invalid' : '' }}" name="payment_id" placeholder="{{ __('paid_orders_payment_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_status') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('status')   }}" data-placement="left"  data-content="{{ __('paid_orders_status_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_status_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" placeholder="{{ __('paid_orders_status') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('status'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('status') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_description') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('description')   }}" data-placement="left"  data-content="{{ __('paid_orders_description_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_description_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" placeholder="{{ __('paid_orders_description') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
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
                                                                <span>{{ __('paid_orders_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('amount')   }}" data-placement="left"  data-content="{{ __('paid_orders_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_amount_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" name="amount" placeholder="{{ __('paid_orders_amount') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('amount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('amount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_fee') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('fee')   }}" data-placement="left"  data-content="{{ __('paid_orders_fee_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_fee_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('fee') ? 'is-invalid' : '' }}" name="fee" placeholder="{{ __('paid_orders_fee') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('fee'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('fee') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_currency') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('currency')   }}" data-placement="left"  data-content="{{ __('paid_orders_currency_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_currency_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="currency" placeholder="{{ __('paid_orders_currency') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('currency'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('currency') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_refunded') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('refunded')   }}" data-placement="left"  data-content="{{ __('paid_orders_refunded_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_refunded_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('refunded') ? 'is-invalid' : '' }}" name="refunded" placeholder="{{ __('paid_orders_refunded') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('refunded'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('refunded') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_refunded_at') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('refunded_at')   }}" data-placement="left"  data-content="{{ __('paid_orders_refunded_at_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_refunded_at_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('refunded_at') ? 'is-invalid' : '' }}" name="refunded_at" placeholder="{{ __('paid_orders_refunded_at') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('refunded_at'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('refunded_at') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_captured') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('captured')   }}" data-placement="left"  data-content="{{ __('paid_orders_captured_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_captured_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('captured') ? 'is-invalid' : '' }}" name="captured" placeholder="{{ __('paid_orders_captured') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('captured'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('captured') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_captured_at') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('captured_at')   }}" data-placement="left"  data-content="{{ __('paid_orders_captured_at_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_captured_at_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('captured_at') ? 'is-invalid' : '' }}" name="captured_at" placeholder="{{ __('paid_orders_captured_at') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('captured_at'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('captured_at') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_voided_at') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('voided_at')   }}" data-placement="left"  data-content="{{ __('paid_orders_voided_at_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_voided_at_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('voided_at') ? 'is-invalid' : '' }}" name="voided_at" placeholder="{{ __('paid_orders_voided_at') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('voided_at'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('voided_at') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_payment_created_at') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('payment_created_at')   }}" data-placement="left"  data-content="{{ __('paid_orders_payment_created_at_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_payment_created_at_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('payment_created_at') ? 'is-invalid' : '' }}" name="payment_created_at" placeholder="{{ __('paid_orders_payment_created_at') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_created_at'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_created_at') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_source') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('source')   }}" data-placement="left"  data-content="{{ __('paid_orders_source_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_source_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('source') ? 'is-invalid' : '' }}" name="source" placeholder="{{ __('paid_orders_source') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('source'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('source') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_message') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('message')   }}" data-placement="left"  data-content="{{ __('paid_orders_message_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_message_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" placeholder="{{ __('paid_orders_message') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('message'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('message') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_reference_number') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('reference_number')   }}" data-placement="left"  data-content="{{ __('paid_orders_reference_number_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_reference_number_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('reference_number') ? 'is-invalid' : '' }}" name="reference_number" placeholder="{{ __('paid_orders_reference_number') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('reference_number'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('reference_number') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_batch_number') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('batch_number')   }}" data-placement="left"  data-content="{{ __('paid_orders_batch_number_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_batch_number_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('batch_number') ? 'is-invalid' : '' }}" name="batch_number" placeholder="{{ __('paid_orders_batch_number') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('batch_number'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('batch_number') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_reconciliation_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('reconciliation_date')   }}" data-placement="left"  data-content="{{ __('paid_orders_reconciliation_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_reconciliation_date_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('reconciliation_date') ? 'is-invalid' : '' }}" name="reconciliation_date" placeholder="{{ __('paid_orders_reconciliation_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('reconciliation_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('reconciliation_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_company') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('company')   }}" data-placement="left"  data-content="{{ __('paid_orders_company_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_company_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" name="company" placeholder="{{ __('paid_orders_company') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('company'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('company') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_card_number') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('card_number')   }}" data-placement="left"  data-content="{{ __('paid_orders_card_number_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_card_number_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('card_number') ? 'is-invalid' : '' }}" name="card_number" placeholder="{{ __('paid_orders_card_number') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('card_number'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('card_number') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_first_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('first_name')   }}" data-placement="left"  data-content="{{ __('paid_orders_first_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_first_name_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" name="first_name" placeholder="{{ __('paid_orders_first_name') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('first_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('first_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_last_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('last_name')   }}" data-placement="left"  data-content="{{ __('paid_orders_last_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_last_name_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" name="last_name" placeholder="{{ __('paid_orders_last_name') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('last_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('last_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_mobile') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('mobile')   }}" data-placement="left"  data-content="{{ __('paid_orders_mobile_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_mobile_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" name="mobile" placeholder="{{ __('paid_orders_mobile') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('mobile'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('mobile') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_stcpay_reference') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('stcpay_reference')   }}" data-placement="left"  data-content="{{ __('paid_orders_stcpay_reference_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_stcpay_reference_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('stcpay_reference') ? 'is-invalid' : '' }}" name="stcpay_reference" placeholder="{{ __('paid_orders_stcpay_reference') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('stcpay_reference'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('stcpay_reference') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_stcpay_token') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('stcpay_token')   }}" data-placement="left"  data-content="{{ __('paid_orders_stcpay_token_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_stcpay_token_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('stcpay_token') ? 'is-invalid' : '' }}" name="stcpay_token" placeholder="{{ __('paid_orders_stcpay_token') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('stcpay_token'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('stcpay_token') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_invoice_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('invoice_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_invoice_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_invoice_id_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('invoice_id') ? 'is-invalid' : '' }}" name="invoice_id" placeholder="{{ __('paid_orders_invoice_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('invoice_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('invoice_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_order_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('order_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_order_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_order_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('order_id') ? 'is-invalid' : '' }}" name="order_id" placeholder="{{ __('paid_orders_order_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('order_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('order_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_plan') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('plan')   }}" data-placement="left"  data-content="{{ __('paid_orders_plan_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_plan_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('plan') ? 'is-invalid' : '' }}" name="plan" placeholder="{{ __('paid_orders_plan') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('plan'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('plan') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('paid_orders_pament_zone_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('pament_zone_id')   }}" data-placement="left"  data-content="{{ __('paid_orders_pament_zone_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('paid_orders_pament_zone_id_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('pament_zone_id') ? 'is-invalid' : '' }}" name="pament_zone_id" placeholder="{{ __('paid_orders_pament_zone_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('pament_zone_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('pament_zone_id') }}
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
