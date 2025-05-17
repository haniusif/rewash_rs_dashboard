@extends('layouts.layoutMaster')
@section('title', __('Appointments | Add new appointment') )
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
            <li class="breadcrumb-item"><a href="{{ route('appointments.index') }}">{{ __('Appointments') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ __('Add new appointment') }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('appointments.store') }}"
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
                                <h5 class="mb-0">{{ __('Appointments') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('branch_id')   }}" data-placement="left"  data-content="{{ __('appointments_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_branch_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('appointments_branch_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_zone_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('zone_id')   }}" data-placement="left"  data-content="{{ __('appointments_zone_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_zone_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('zone_id') ? 'is-invalid' : '' }}" name="zone_id" placeholder="{{ __('appointments_zone_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                    

     


           <div class="col-12  mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select   data-toggle="popover"   data-placement="left"  data-content="{{ __('appointments_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_user_id_data-original-title') }}"  class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}"     data-validation-required-message="{{ __('This field is required') }}" name="user_id" >

                            @foreach($users as $user)
                             <option  @selected(old('user_id' ) == $user->id)   value="{{ $user->id }}" >{{ $user->branch_id }}</option>
                             @endforeach
                            </select>

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
                                                                <span>{{ __('appointments_number_of_vehicles') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('number_of_vehicles')   }}" data-placement="left"  data-content="{{ __('appointments_number_of_vehicles_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_number_of_vehicles_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('number_of_vehicles') ? 'is-invalid' : '' }}" name="number_of_vehicles" placeholder="{{ __('appointments_number_of_vehicles') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_vehicle_company_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('vehicle_company_id')   }}" data-placement="left"  data-content="{{ __('appointments_vehicle_company_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_vehicle_company_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('vehicle_company_id') ? 'is-invalid' : '' }}" name="vehicle_company_id" placeholder="{{ __('appointments_vehicle_company_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_company_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_company_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_vehicle_modal_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('vehicle_modal_id')   }}" data-placement="left"  data-content="{{ __('appointments_vehicle_modal_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_vehicle_modal_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('vehicle_modal_id') ? 'is-invalid' : '' }}" name="vehicle_modal_id" placeholder="{{ __('appointments_vehicle_modal_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_modal_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_modal_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_vehicle_types_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('vehicle_types_id')   }}" data-placement="left"  data-content="{{ __('appointments_vehicle_types_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_vehicle_types_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('vehicle_types_id') ? 'is-invalid' : '' }}" name="vehicle_types_id" placeholder="{{ __('appointments_vehicle_types_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_types_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_types_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_vehicle_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('vehicle_id')   }}" data-placement="left"  data-content="{{ __('appointments_vehicle_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_vehicle_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('vehicle_id') ? 'is-invalid' : '' }}" name="vehicle_id" placeholder="{{ __('appointments_vehicle_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_washing_plan_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('washing_plan_id')   }}" data-placement="left"  data-content="{{ __('appointments_washing_plan_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_washing_plan_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('washing_plan_id') ? 'is-invalid' : '' }}" name="washing_plan_id" placeholder="{{ __('appointments_washing_plan_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_washing_plan_validity_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('washing_plan_validity_date')   }}" data-placement="left"  data-content="{{ __('appointments_washing_plan_validity_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_washing_plan_validity_date_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('washing_plan_validity_date') ? 'is-invalid' : '' }}" name="washing_plan_validity_date" placeholder="{{ __('appointments_washing_plan_validity_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_number_of_washes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('number_of_washes')   }}" data-placement="left"  data-content="{{ __('appointments_number_of_washes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_number_of_washes_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('number_of_washes') ? 'is-invalid' : '' }}" name="number_of_washes" placeholder="{{ __('appointments_number_of_washes') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('status_id')   }}" data-placement="left"  data-content="{{ __('appointments_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_status_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('status_id') ? 'is-invalid' : '' }}" name="status_id" placeholder="{{ __('appointments_status_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_appointment_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('appointment_date')   }}" data-placement="left"  data-content="{{ __('appointments_appointment_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_appointment_date_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('appointment_date') ? 'is-invalid' : '' }}" name="appointment_date" placeholder="{{ __('appointments_appointment_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_slot_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('slot_id')   }}" data-placement="left"  data-content="{{ __('appointments_slot_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_slot_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('slot_id') ? 'is-invalid' : '' }}" name="slot_id" placeholder="{{ __('appointments_slot_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_restore_slots') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('restore_slots')   }}" data-placement="left"  data-content="{{ __('appointments_restore_slots_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_restore_slots_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('restore_slots') ? 'is-invalid' : '' }}" name="restore_slots" placeholder="{{ __('appointments_restore_slots') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('restore_slots'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('restore_slots') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_vehicle_no') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('vehicle_no')   }}" data-placement="left"  data-content="{{ __('appointments_vehicle_no_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_vehicle_no_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('vehicle_no') ? 'is-invalid' : '' }}" name="vehicle_no" placeholder="{{ __('appointments_vehicle_no') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_time_frame') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('time_frame')   }}" data-placement="left"  data-content="{{ __('appointments_time_frame_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_time_frame_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('time_frame') ? 'is-invalid' : '' }}" name="time_frame" placeholder="{{ __('appointments_time_frame') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('time_frame'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('time_frame') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_time_frame_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('time_frame_id')   }}" data-placement="left"  data-content="{{ __('appointments_time_frame_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_time_frame_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('time_frame_id') ? 'is-invalid' : '' }}" name="time_frame_id" placeholder="{{ __('appointments_time_frame_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('time_frame_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('time_frame_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_appx_hour') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('appx_hour')   }}" data-placement="left"  data-content="{{ __('appointments_appx_hour_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_appx_hour_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('appx_hour') ? 'is-invalid' : '' }}" name="appx_hour" placeholder="{{ __('appointments_appx_hour') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('appx_hour'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('appx_hour') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

     






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_remark') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('appointments_remark_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_remark_data-original-title') }}"    class="form-control {{ $errors->has('remark') ? 'is-invalid' : '' }}" name="remark" placeholder="{{ __('appointments_remark') }}"   >{{ old('remark') }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('remark'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('remark') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_location') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('location')   }}" data-placement="left"  data-content="{{ __('appointments_location_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_location_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location" placeholder="{{ __('appointments_location') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_notes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('appointments_notes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_notes_data-original-title') }}"    class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" placeholder="{{ __('appointments_notes') }}"   >{{ old('notes') }}</textarea>
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
                                                                <span>{{ __('appointments_tax_avlue') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('tax_avlue')   }}" data-placement="left"  data-content="{{ __('appointments_tax_avlue_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_tax_avlue_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('tax_avlue') ? 'is-invalid' : '' }}" name="tax_avlue" placeholder="{{ __('appointments_tax_avlue') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_total_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('total_price')   }}" data-placement="left"  data-content="{{ __('appointments_total_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_total_price_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('total_price') ? 'is-invalid' : '' }}" name="total_price" placeholder="{{ __('appointments_total_price') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_total_price_befor_payment') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('total_price_befor_payment')   }}" data-placement="left"  data-content="{{ __('appointments_total_price_befor_payment_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_total_price_befor_payment_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('total_price_befor_payment') ? 'is-invalid' : '' }}" name="total_price_befor_payment" placeholder="{{ __('appointments_total_price_befor_payment') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_wallet_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('wallet_amount')   }}" data-placement="left"  data-content="{{ __('appointments_wallet_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_wallet_amount_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('wallet_amount') ? 'is-invalid' : '' }}" name="wallet_amount" placeholder="{{ __('appointments_wallet_amount') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_promo_code_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('promo_code_id')   }}" data-placement="left"  data-content="{{ __('appointments_promo_code_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_promo_code_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_id') ? 'is-invalid' : '' }}" name="promo_code_id" placeholder="{{ __('appointments_promo_code_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_promo_code_discount_value') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('promo_code_discount_value')   }}" data-placement="left"  data-content="{{ __('appointments_promo_code_discount_value_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_promo_code_discount_value_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_discount_value') ? 'is-invalid' : '' }}" name="promo_code_discount_value" placeholder="{{ __('appointments_promo_code_discount_value') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_payment_mode_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('payment_mode_id')   }}" data-placement="left"  data-content="{{ __('appointments_payment_mode_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_payment_mode_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('payment_mode_id') ? 'is-invalid' : '' }}" name="payment_mode_id" placeholder="{{ __('appointments_payment_mode_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_payment_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('payment_status_id')   }}" data-placement="left"  data-content="{{ __('appointments_payment_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_payment_status_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('payment_status_id') ? 'is-invalid' : '' }}" name="payment_status_id" placeholder="{{ __('appointments_payment_status_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_payment_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('payment_time')   }}" data-placement="left"  data-content="{{ __('appointments_payment_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_payment_time_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('payment_time') ? 'is-invalid' : '' }}" name="payment_time" placeholder="{{ __('appointments_payment_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_partner_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('partner_id')   }}" data-placement="left"  data-content="{{ __('appointments_partner_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_partner_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('partner_id') ? 'is-invalid' : '' }}" name="partner_id" placeholder="{{ __('appointments_partner_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_accrued_loyalty_point') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('accrued_loyalty_point')   }}" data-placement="left"  data-content="{{ __('appointments_accrued_loyalty_point_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_accrued_loyalty_point_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('accrued_loyalty_point') ? 'is-invalid' : '' }}" name="accrued_loyalty_point" placeholder="{{ __('appointments_accrued_loyalty_point') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_transaction_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('transaction_id')   }}" data-placement="left"  data-content="{{ __('appointments_transaction_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_transaction_id_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('transaction_id') ? 'is-invalid' : '' }}" name="transaction_id" placeholder="{{ __('appointments_transaction_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_platform_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('platform_id')   }}" data-placement="left"  data-content="{{ __('appointments_platform_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_platform_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('platform_id') ? 'is-invalid' : '' }}" name="platform_id" placeholder="{{ __('appointments_platform_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointments_double_check_payment') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('double_check_payment')   }}" data-placement="left"  data-content="{{ __('appointments_double_check_payment_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_double_check_payment_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('double_check_payment') ? 'is-invalid' : '' }}" name="double_check_payment" placeholder="{{ __('appointments_double_check_payment') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('double_check_payment'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('double_check_payment') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

     






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_double_check_data') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('appointments_double_check_data_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_double_check_data_data-original-title') }}"    class="form-control {{ $errors->has('double_check_data') ? 'is-invalid' : '' }}" name="double_check_data" placeholder="{{ __('appointments_double_check_data') }}"   >{{ old('double_check_data') }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('double_check_data'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('double_check_data') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_double_check_payment_status') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('double_check_payment_status')   }}" data-placement="left"  data-content="{{ __('appointments_double_check_payment_status_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_double_check_payment_status_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('double_check_payment_status') ? 'is-invalid' : '' }}" name="double_check_payment_status" placeholder="{{ __('appointments_double_check_payment_status') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('double_check_payment_status'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('double_check_payment_status') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_qoyod_invoice_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('qoyod_invoice_id')   }}" data-placement="left"  data-content="{{ __('appointments_qoyod_invoice_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_qoyod_invoice_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('qoyod_invoice_id') ? 'is-invalid' : '' }}" name="qoyod_invoice_id" placeholder="{{ __('appointments_qoyod_invoice_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('qoyod_invoice_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('qoyod_invoice_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_qoyod_reference') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('qoyod_reference')   }}" data-placement="left"  data-content="{{ __('appointments_qoyod_reference_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_qoyod_reference_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('qoyod_reference') ? 'is-invalid' : '' }}" name="qoyod_reference" placeholder="{{ __('appointments_qoyod_reference') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('qoyod_reference'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('qoyod_reference') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointments_platform_order_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('platform_order_id')   }}" data-placement="left"  data-content="{{ __('appointments_platform_order_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointments_platform_order_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('platform_order_id') ? 'is-invalid' : '' }}" name="platform_order_id" placeholder="{{ __('appointments_platform_order_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('platform_order_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('platform_order_id') }}
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
