@extends('layouts.layoutMaster')
@section('title', __('Scheduled_fcm_notifications | Add new scheduled_fcm_notification') )
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
            <li class="breadcrumb-item"><a href="{{ route('scheduled_fcm_notifications.index') }}">{{ __('Scheduled_fcm_notifications') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ __('Add new scheduled_fcm_notification') }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('scheduled_fcm_notifications.store') }}"
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
                                <h5 class="mb-0">{{ __('Scheduled_fcm_notifications') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_title') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('title')   }}" data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_title_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_title_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="{{ __('scheduled_fcm_notifications_title') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('title'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('title') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

     






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_notification') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_notification_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_notification_data-original-title') }}"    class="form-control {{ $errors->has('notification') ? 'is-invalid' : '' }}" name="notification" placeholder="{{ __('scheduled_fcm_notifications_notification') }}"   >{{ old('notification') }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('notification'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('notification') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_start_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('start_date')   }}" data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_start_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_start_date_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" name="start_date" placeholder="{{ __('scheduled_fcm_notifications_start_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('start_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('start_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_end_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('end_date')   }}" data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_end_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_end_date_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('end_date') ? 'is-invalid' : '' }}" name="end_date" placeholder="{{ __('scheduled_fcm_notifications_end_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('end_date'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('end_date') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('time')   }}" data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_time_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('time') ? 'is-invalid' : '' }}" name="time" placeholder="{{ __('scheduled_fcm_notifications_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

     






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_neighborhood_ids') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_neighborhood_ids_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_neighborhood_ids_data-original-title') }}"    class="form-control {{ $errors->has('neighborhood_ids') ? 'is-invalid' : '' }}" name="neighborhood_ids" placeholder="{{ __('scheduled_fcm_notifications_neighborhood_ids') }}"   >{{ old('neighborhood_ids') }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('neighborhood_ids'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('neighborhood_ids') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('scheduled_fcm_notifications_for_all_users') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('for_all_users')   }}" data-placement="left"  data-content="{{ __('scheduled_fcm_notifications_for_all_users_data-content') }}" data-trigger="hover"  data-original-title="{{ __('scheduled_fcm_notifications_for_all_users_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('for_all_users') ? 'is-invalid' : '' }}" name="for_all_users" placeholder="{{ __('scheduled_fcm_notifications_for_all_users') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('for_all_users'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('for_all_users') }}
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
