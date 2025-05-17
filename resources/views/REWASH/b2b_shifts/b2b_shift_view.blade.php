@extends('layouts.layoutMaster')
@section('title', __('B2b_shifts | Add new b2b_shift') )
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
            <li class="breadcrumb-item"><a href="{{ route('b2b_shifts.index') }}">{{ __('B2b_shifts') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ $b2b_shift->id }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('b2b_shifts.update' , $b2b_shift->id ) }}"
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
                                <h5 class="mb-0">{{ __('B2b_shifts') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">










           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('b2b_shifts_team_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("team_id" , $b2b_shift->team_id)  }}" data-placement="left"  data-content="{{ __('b2b_shifts_team_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('b2b_shifts_team_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('team_id') ? 'is-invalid' : '' }}" name="team_id" placeholder="{{ __('b2b_shifts_team_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('team_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('team_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('b2b_shifts_platform_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("platform_id" , $b2b_shift->platform_id)  }}" data-placement="left"  data-content="{{ __('b2b_shifts_platform_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('b2b_shifts_platform_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('platform_id') ? 'is-invalid' : '' }}" name="platform_id" placeholder="{{ __('b2b_shifts_platform_id') }}">
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
                                                                <span>{{ __('b2b_shifts_from_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("from_time" , $b2b_shift->from_time)  }}" data-placement="left"  data-content="{{ __('b2b_shifts_from_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('b2b_shifts_from_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('from_time') ? 'is-invalid' : '' }}" name="from_time" placeholder="{{ __('b2b_shifts_from_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('from_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('from_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('b2b_shifts_to_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("to_time" , $b2b_shift->to_time)  }}" data-placement="left"  data-content="{{ __('b2b_shifts_to_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('b2b_shifts_to_time_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('to_time') ? 'is-invalid' : '' }}" name="to_time" placeholder="{{ __('b2b_shifts_to_time') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('to_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('to_time') }}
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
