@extends('layouts.layoutMaster')
@section('title', __('Gift_appointment_schedules | Add new gift_appointment_schedule') )
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
            <li class="breadcrumb-item"><a href="{{ route('gift_appointment_schedules.index') }}">{{ __('Gift_appointment_schedules') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ $gift_appointment_schedule->id }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('gift_appointment_schedules.update' , $gift_appointment_schedule->id ) }}"
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
                                <h5 class="mb-0">{{ __('Gift_appointment_schedules') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">










           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_schedules_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $gift_appointment_schedule->branch_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('gift_appointment_schedules_branch_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $gift_appointment_schedule->user_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('gift_appointment_schedules_user_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_appointment_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("appointment_date" , $gift_appointment_schedule->appointment_date)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_appointment_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_appointment_date_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('appointment_date') ? 'is-invalid' : '' }}" name="appointment_date" placeholder="{{ __('gift_appointment_schedules_appointment_date') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_slot_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("slot_id" , $gift_appointment_schedule->slot_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_slot_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_slot_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('slot_id') ? 'is-invalid' : '' }}" name="slot_id" placeholder="{{ __('gift_appointment_schedules_slot_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_receiver_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("receiver_name" , $gift_appointment_schedule->receiver_name)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_receiver_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_receiver_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('receiver_name') ? 'is-invalid' : '' }}" name="receiver_name" placeholder="{{ __('gift_appointment_schedules_receiver_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('receiver_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('receiver_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_schedules_receiver_phone_number') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("receiver_phone_number" , $gift_appointment_schedule->receiver_phone_number)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_receiver_phone_number_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_receiver_phone_number_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('receiver_phone_number') ? 'is-invalid' : '' }}" name="receiver_phone_number" placeholder="{{ __('gift_appointment_schedules_receiver_phone_number') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('receiver_phone_number'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('receiver_phone_number') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_schedules_receiver_event') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("receiver_event" , $gift_appointment_schedule->receiver_event)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_receiver_event_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_receiver_event_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('receiver_event') ? 'is-invalid' : '' }}" name="receiver_event" placeholder="{{ __('gift_appointment_schedules_receiver_event') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('receiver_event'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('receiver_event') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('gift_appointment_schedules_neighborhood_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("neighborhood_id" , $gift_appointment_schedule->neighborhood_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_neighborhood_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_neighborhood_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('neighborhood_id') ? 'is-invalid' : '' }}" name="neighborhood_id" placeholder="{{ __('gift_appointment_schedules_neighborhood_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_number_of_vehicles') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("number_of_vehicles" , $gift_appointment_schedule->number_of_vehicles)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_number_of_vehicles_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_number_of_vehicles_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('number_of_vehicles') ? 'is-invalid' : '' }}" name="number_of_vehicles" placeholder="{{ __('gift_appointment_schedules_number_of_vehicles') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_promo_code_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("promo_code_id" , $gift_appointment_schedule->promo_code_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_promo_code_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_promo_code_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('promo_code_id') ? 'is-invalid' : '' }}" name="promo_code_id" placeholder="{{ __('gift_appointment_schedules_promo_code_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_payment_mode_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("payment_mode_id" , $gift_appointment_schedule->payment_mode_id)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_payment_mode_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_payment_mode_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('payment_mode_id') ? 'is-invalid' : '' }}" name="payment_mode_id" placeholder="{{ __('gift_appointment_schedules_payment_mode_id') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_total_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("total_price" , $gift_appointment_schedule->total_price)  }}" data-placement="left"  data-content="{{ __('gift_appointment_schedules_total_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_total_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('total_price') ? 'is-invalid' : '' }}" name="total_price" placeholder="{{ __('gift_appointment_schedules_total_price') }}">
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
                                                                <span>{{ __('gift_appointment_schedules_notes') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('gift_appointment_schedules_notes_data-content') }}" data-trigger="hover"  data-original-title="{{ __('gift_appointment_schedules_notes_data-original-title') }}"    class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" placeholder="{{ __('gift_appointment_schedules_notes') }}"   >{{ $gift_appointment_schedule->notes   }}</textarea>
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
