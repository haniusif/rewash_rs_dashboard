@extends('layouts.layoutMaster')
@section('title', __('User_loyalty_points | Add new user_loyalty_point') )
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
            <li class="breadcrumb-item"><a href="{{ route('user_loyalty_points.index') }}">{{ __('User_loyalty_points') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ $user_loyalty_point->id }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('user_loyalty_points.update' , $user_loyalty_point->id ) }}"
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
                                <h5 class="mb-0">{{ __('User_loyalty_points') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">










           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_loyalty_points_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $user_loyalty_point->user_id)  }}" data-placement="left"  data-content="{{ __('user_loyalty_points_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_loyalty_points_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('user_loyalty_points_user_id') }}">
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
                                                                <span>{{ __('user_loyalty_points_loyalty_points') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("loyalty_points" , $user_loyalty_point->loyalty_points)  }}" data-placement="left"  data-content="{{ __('user_loyalty_points_loyalty_points_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_loyalty_points_loyalty_points_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('loyalty_points') ? 'is-invalid' : '' }}" name="loyalty_points" placeholder="{{ __('user_loyalty_points_loyalty_points') }}">
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
                                                                <span>{{ __('user_loyalty_points_loyalty_point_text') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('user_loyalty_points_loyalty_point_text_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_loyalty_points_loyalty_point_text_data-original-title') }}"    class="form-control {{ $errors->has('loyalty_point_text') ? 'is-invalid' : '' }}" name="loyalty_point_text" placeholder="{{ __('user_loyalty_points_loyalty_point_text') }}"   >{{ $user_loyalty_point->loyalty_point_text   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('loyalty_point_text'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('loyalty_point_text') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



<div class="col-12 mb-3">
  <div class="form-group row">
    <div class="col-md-4">
      <span>{{ __('user_loyalty_points_is_active') }}</span>
    </div>
    <div class="col-md-8">
      <label class="switch">
        <input name="is_active" value="1" @checked($user_loyalty_point->is_active == 1) type="checkbox" id="is_active" class="switch-input">
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
