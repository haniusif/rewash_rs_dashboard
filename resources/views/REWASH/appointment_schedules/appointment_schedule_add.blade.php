@extends('layouts.layoutMaster')
@section('title', __('Appointment_schedules | Add new appointment_schedule') )
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
            <li class="breadcrumb-item"><a href="{{ route('appointment_schedules.index') }}">{{ __('Appointment_schedules') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ __('Add new appointment_schedule') }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('appointment_schedules.store') }}"
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
                                <h5 class="mb-0">{{ __('Appointment_schedules') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('branch_id')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_branch_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('appointment_schedules_branch_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointment_schedules_zone_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('zone_id')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_zone_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_zone_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('zone_id') ? 'is-invalid' : '' }}" name="zone_id" placeholder="{{ __('appointment_schedules_zone_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointment_schedules_appointment_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('appointment_id')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_appointment_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_appointment_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('appointment_id') ? 'is-invalid' : '' }}" name="appointment_id" placeholder="{{ __('appointment_schedules_appointment_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('appointment_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('appointment_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_appointment_schedule_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('appointment_schedule_status_id')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_appointment_schedule_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_appointment_schedule_status_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('appointment_schedule_status_id') ? 'is-invalid' : '' }}" name="appointment_schedule_status_id" placeholder="{{ __('appointment_schedules_appointment_schedule_status_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('appointment_schedule_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('appointment_schedule_status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('user_id')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_user_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('appointment_schedules_user_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointment_schedules_appointment_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('appointment_date')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_appointment_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_appointment_date_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('appointment_date') ? 'is-invalid' : '' }}" name="appointment_date" placeholder="{{ __('appointment_schedules_appointment_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointment_schedules_is_appointment_date_changed') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('is_appointment_date_changed')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_is_appointment_date_changed_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_is_appointment_date_changed_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('is_appointment_date_changed') ? 'is-invalid' : '' }}" name="is_appointment_date_changed" placeholder="{{ __('appointment_schedules_is_appointment_date_changed') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_appointment_date_changed'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_appointment_date_changed') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_slot_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('slot_id')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_slot_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_slot_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('slot_id') ? 'is-invalid' : '' }}" name="slot_id" placeholder="{{ __('appointment_schedules_slot_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointment_schedules_neighborhood_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('neighborhood_id')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_neighborhood_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_neighborhood_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('neighborhood_id') ? 'is-invalid' : '' }}" name="neighborhood_id" placeholder="{{ __('appointment_schedules_neighborhood_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('neighborhood_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('neighborhood_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_location') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('location')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_location_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_location_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location" placeholder="{{ __('appointment_schedules_location') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('appointment_schedules_address') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('address')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_address_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_address_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" placeholder="{{ __('appointment_schedules_address') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('address'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('address') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_is_location_changed') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('is_location_changed')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_is_location_changed_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_is_location_changed_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('is_location_changed') ? 'is-invalid' : '' }}" name="is_location_changed" placeholder="{{ __('appointment_schedules_is_location_changed') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_location_changed'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_location_changed') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

     






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_notes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('appointment_schedules_notes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_notes_data-original-title') }}"    class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" placeholder="{{ __('appointment_schedules_notes') }}"   >{{ old('notes') }}</textarea>
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
                                                                <span>{{ __('appointment_schedules_feedback') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('appointment_schedules_feedback_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_feedback_data-original-title') }}"    class="form-control {{ $errors->has('feedback') ? 'is-invalid' : '' }}" name="feedback" placeholder="{{ __('appointment_schedules_feedback') }}"   >{{ old('feedback') }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('feedback'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('feedback') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_is_scheduled') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('is_scheduled')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_is_scheduled_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_is_scheduled_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('is_scheduled') ? 'is-invalid' : '' }}" name="is_scheduled" placeholder="{{ __('appointment_schedules_is_scheduled') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_scheduled'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_scheduled') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_can_cancel') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('can_cancel')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_can_cancel_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_can_cancel_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('can_cancel') ? 'is-invalid' : '' }}" name="can_cancel" placeholder="{{ __('appointment_schedules_can_cancel') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('can_cancel'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('can_cancel') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_can_reschedule') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('can_reschedule')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_can_reschedule_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_can_reschedule_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('can_reschedule') ? 'is-invalid' : '' }}" name="can_reschedule" placeholder="{{ __('appointment_schedules_can_reschedule') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('can_reschedule'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('can_reschedule') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_can_rate') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('can_rate')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_can_rate_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_can_rate_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('can_rate') ? 'is-invalid' : '' }}" name="can_rate" placeholder="{{ __('appointment_schedules_can_rate') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('can_rate'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('can_rate') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_can_change_location') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('can_change_location')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_can_change_location_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_can_change_location_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('can_change_location') ? 'is-invalid' : '' }}" name="can_change_location" placeholder="{{ __('appointment_schedules_can_change_location') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('can_change_location'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('can_change_location') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_can_track_worker') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('can_track_worker')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_can_track_worker_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_can_track_worker_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('can_track_worker') ? 'is-invalid' : '' }}" name="can_track_worker" placeholder="{{ __('appointment_schedules_can_track_worker') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('can_track_worker'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('can_track_worker') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_in_process') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('in_process')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_in_process_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_in_process_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('in_process') ? 'is-invalid' : '' }}" name="in_process" placeholder="{{ __('appointment_schedules_in_process') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('in_process'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('in_process') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_is_completed') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('is_completed')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_is_completed_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_is_completed_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('is_completed') ? 'is-invalid' : '' }}" name="is_completed" placeholder="{{ __('appointment_schedules_is_completed') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_completed'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_completed') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_worker_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('worker_status_id')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_worker_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_worker_status_id_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('worker_status_id') ? 'is-invalid' : '' }}" name="worker_status_id" placeholder="{{ __('appointment_schedules_worker_status_id') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('worker_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('worker_status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_e_washing_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('e_washing_time')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_e_washing_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_e_washing_time_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('e_washing_time') ? 'is-invalid' : '' }}" name="e_washing_time" placeholder="{{ __('appointment_schedules_e_washing_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('e_washing_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('e_washing_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_go_to_client') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('go_to_client')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_go_to_client_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_go_to_client_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('go_to_client') ? 'is-invalid' : '' }}" name="go_to_client" placeholder="{{ __('appointment_schedules_go_to_client') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('go_to_client'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('go_to_client') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_arrived_and_cancel_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('arrived_and_cancel_time')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_arrived_and_cancel_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_arrived_and_cancel_time_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('arrived_and_cancel_time') ? 'is-invalid' : '' }}" name="arrived_and_cancel_time" placeholder="{{ __('appointment_schedules_arrived_and_cancel_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('arrived_and_cancel_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('arrived_and_cancel_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_start_wash_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('start_wash_time')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_start_wash_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_start_wash_time_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('start_wash_time') ? 'is-invalid' : '' }}" name="start_wash_time" placeholder="{{ __('appointment_schedules_start_wash_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('start_wash_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('start_wash_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_finish_wash_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('finish_wash_time')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_finish_wash_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_finish_wash_time_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('finish_wash_time') ? 'is-invalid' : '' }}" name="finish_wash_time" placeholder="{{ __('appointment_schedules_finish_wash_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('finish_wash_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('finish_wash_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_cancel_wash_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('cancel_wash_time')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_cancel_wash_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_cancel_wash_time_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('cancel_wash_time') ? 'is-invalid' : '' }}" name="cancel_wash_time" placeholder="{{ __('appointment_schedules_cancel_wash_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('cancel_wash_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('cancel_wash_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_schedules_is_skip_rate') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('is_skip_rate')   }}" data-placement="left"  data-content="{{ __('appointment_schedules_is_skip_rate_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_schedules_is_skip_rate_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('is_skip_rate') ? 'is-invalid' : '' }}" name="is_skip_rate" placeholder="{{ __('appointment_schedules_is_skip_rate') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_skip_rate'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_skip_rate') }}
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
