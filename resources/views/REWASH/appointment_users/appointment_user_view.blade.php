@extends('layouts.layoutMaster')
@section('title', __('Appointment_users | Add new appointment_user') )
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
            <li class="breadcrumb-item"><a href="{{ route('appointment_users.index') }}">{{ __('Appointment_users') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ $appointment_user->id }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('appointment_users.update' , $appointment_user->id ) }}"
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
                                <h5 class="mb-0">{{ __('Appointment_users') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">










           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_users_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $appointment_user->branch_id)  }}" data-placement="left"  data-content="{{ __('appointment_users_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_users_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('appointment_users_branch_id') }}">
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
                                                                <span>{{ __('appointment_users_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select data-toggle="popover"   data-placement="left"  data-content="{{ __('appointment_users_user_id_data-content') }}" data-trigger="hover" data-original-title="{{ __('appointment_users_user_id_data-original-title') }}"  class="form-control  {{ $errors->has('user_id') ? 'is-invalid' : '' }} "  name="user_id" >

                            @foreach($users as $user)
                             <option  @selected(old('user_id' , $appointment_user->user_id) == $user->id)    value="{{ $user->id }}" >{{ $user->branch_id }}</option>
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
                                                                <span>{{ __('appointment_users_appointment_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select data-toggle="popover"   data-placement="left"  data-content="{{ __('appointment_users_appointment_id_data-content') }}" data-trigger="hover" data-original-title="{{ __('appointment_users_appointment_id_data-original-title') }}"  class="form-control  {{ $errors->has('appointment_id') ? 'is-invalid' : '' }} "  name="appointment_id" >

                            @foreach($appointments as $appointment)
                             <option  @selected(old('appointment_id' , $appointment_user->appointment_id) == $appointment->id)    value="{{ $appointment->id }}" >{{ $appointment->branch_id }}</option>
                             @endforeach
                            </select>

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
                                                                <span>{{ __('appointment_users_discount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("discount" , $appointment_user->discount)  }}" data-placement="left"  data-content="{{ __('appointment_users_discount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_users_discount_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" name="discount" placeholder="{{ __('appointment_users_discount') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('discount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('discount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_users_advance') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("advance" , $appointment_user->advance)  }}" data-placement="left"  data-content="{{ __('appointment_users_advance_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_users_advance_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('advance') ? 'is-invalid' : '' }}" name="advance" placeholder="{{ __('appointment_users_advance') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('advance'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('advance') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_users_payment_method_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("payment_method_id" , $appointment_user->payment_method_id)  }}" data-placement="left"  data-content="{{ __('appointment_users_payment_method_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_users_payment_method_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('payment_method_id') ? 'is-invalid' : '' }}" name="payment_method_id" placeholder="{{ __('appointment_users_payment_method_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('payment_method_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('payment_method_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('appointment_users_remark') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("remark" , $appointment_user->remark)  }}" data-placement="left"  data-content="{{ __('appointment_users_remark_data-content') }}" data-trigger="hover"  data-original-title="{{ __('appointment_users_remark_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('remark') ? 'is-invalid' : '' }}" name="remark" placeholder="{{ __('appointment_users_remark') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
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
