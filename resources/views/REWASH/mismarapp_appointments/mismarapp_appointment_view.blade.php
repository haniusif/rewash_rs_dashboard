@extends('layouts.layoutMaster')
@section('title', __('Mismarapp_appointments | Add new mismarapp_appointment') )
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
            <li class="breadcrumb-item"><a href="{{ route('mismarapp_appointments.index') }}">{{ __('Mismarapp_appointments') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ $mismarapp_appointment->id }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('mismarapp_appointments.update' , $mismarapp_appointment->id ) }}"
            enctype="multipart/form-data" novalidate>
            @csrf
            @method('PUT')
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
                                <h5 class="mb-0">{{ __('Mismarapp_appointments') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">










           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('mismarapp_appointments_appointment_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("appointment_id" , $mismarapp_appointment->appointment_id)  }}" data-placement="left"  data-content="{{ __('mismarapp_appointments_appointment_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('mismarapp_appointments_appointment_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('appointment_id') ? 'is-invalid' : '' }}" name="appointment_id" placeholder="{{ __('mismarapp_appointments_appointment_id') }}">
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
                                                                <span>{{ __('mismarapp_appointments_mismar_order_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("mismar_order_id" , $mismarapp_appointment->mismar_order_id)  }}" data-placement="left"  data-content="{{ __('mismarapp_appointments_mismar_order_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('mismarapp_appointments_mismar_order_id_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('mismar_order_id') ? 'is-invalid' : '' }}" name="mismar_order_id" placeholder="{{ __('mismarapp_appointments_mismar_order_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('mismar_order_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('mismar_order_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('mismarapp_appointments_order_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("order_date" , $mismarapp_appointment->order_date)  }}" data-placement="left"  data-content="{{ __('mismarapp_appointments_order_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('mismarapp_appointments_order_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('order_date') ? 'is-invalid' : '' }}" name="order_date" placeholder="{{ __('mismarapp_appointments_order_date') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('order_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('order_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('mismarapp_appointments_mismarapp_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("mismarapp_status_id" , $mismarapp_appointment->mismarapp_status_id)  }}" data-placement="left"  data-content="{{ __('mismarapp_appointments_mismarapp_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('mismarapp_appointments_mismarapp_status_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('mismarapp_status_id') ? 'is-invalid' : '' }}" name="mismarapp_status_id" placeholder="{{ __('mismarapp_appointments_mismarapp_status_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('mismarapp_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('mismarapp_status_id') }}
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
