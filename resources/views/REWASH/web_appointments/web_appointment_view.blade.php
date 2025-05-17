@extends('layouts.layoutMaster')
@section('title', __('Web_appointments | Add new web_appointment') )
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
            <li class="breadcrumb-item"><a href="{{ route('web_appointments.index') }}">{{ __('Web_appointments') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ $web_appointment->id }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('web_appointments.update' , $web_appointment->id ) }}"
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
                                <h5 class="mb-0">{{ __('Web_appointments') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">










           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('web_appointments_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $web_appointment->branch_id)  }}" data-placement="left"  data-content="{{ __('web_appointments_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('web_appointments_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('web_appointments_branch_id') }}">
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
                                                                <span>{{ __('web_appointments_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("name" , $web_appointment->name)  }}" data-placement="left"  data-content="{{ __('web_appointments_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('web_appointments_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('web_appointments_name') }}">
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
                                                                <span>{{ __('web_appointments_phone_number') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("phone_number" , $web_appointment->phone_number)  }}" data-placement="left"  data-content="{{ __('web_appointments_phone_number_data-content') }}" data-trigger="hover"  data-original-title="{{ __('web_appointments_phone_number_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" name="phone_number" placeholder="{{ __('web_appointments_phone_number') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('phone_number'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('phone_number') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('web_appointments_email') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("email" , $web_appointment->email)  }}" data-placement="left"  data-content="{{ __('web_appointments_email_data-content') }}" data-trigger="hover"  data-original-title="{{ __('web_appointments_email_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="{{ __('web_appointments_email') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('email'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('email') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('web_appointments_neighborhood') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("neighborhood" , $web_appointment->neighborhood)  }}" data-placement="left"  data-content="{{ __('web_appointments_neighborhood_data-content') }}" data-trigger="hover"  data-original-title="{{ __('web_appointments_neighborhood_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('neighborhood') ? 'is-invalid' : '' }}" name="neighborhood" placeholder="{{ __('web_appointments_neighborhood') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('neighborhood'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('neighborhood') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('web_appointments_ip') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("ip" , $web_appointment->ip)  }}" data-placement="left"  data-content="{{ __('web_appointments_ip_data-content') }}" data-trigger="hover"  data-original-title="{{ __('web_appointments_ip_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" name="ip" placeholder="{{ __('web_appointments_ip') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('ip'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('ip') }}
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
