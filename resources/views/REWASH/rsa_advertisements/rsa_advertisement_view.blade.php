@extends('layouts.layoutMaster')
@section('title', __('Rsa_advertisements | Add new rsa_advertisement') )
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
            <li class="breadcrumb-item"><a href="{{ route('rsa_advertisements.index') }}">{{ __('Rsa_advertisements') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ $rsa_advertisement->id }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('rsa_advertisements.update' , $rsa_advertisement->id ) }}"
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
                                <h5 class="mb-0">{{ __('Rsa_advertisements') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">










           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('rsa_advertisements_title') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("title" , $rsa_advertisement->title)  }}" data-placement="left"  data-content="{{ __('rsa_advertisements_title_data-content') }}" data-trigger="hover"  data-original-title="{{ __('rsa_advertisements_title_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="{{ __('rsa_advertisements_title') }}">
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
                                                                <span>{{ __('rsa_advertisements_en_title') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("en_title" , $rsa_advertisement->en_title)  }}" data-placement="left"  data-content="{{ __('rsa_advertisements_en_title_data-content') }}" data-trigger="hover"  data-original-title="{{ __('rsa_advertisements_en_title_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" name="en_title" placeholder="{{ __('rsa_advertisements_en_title') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('en_title'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('en_title') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

    
 
    

           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('rsa_advertisements_image') }}</span>
                                                            </div>
                                                            <div class="col-md-8">

                                                               <div class="row" >
                                                                <img src="{{ asset($rsa_advertisement->image) }}" alt="image" style="height:200px; width:100%" class="img-fluid rounded-sm mb-2" />

                                                                </div>

                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('image')   }}" data-placement="left"  data-content="{{ __('rsa_advertisements_image_data-content') }}" data-trigger="hover"  data-original-title="{{ __('rsa_advertisements_image_data-original-title') }}" 
                                                                     type="file"   class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" placeholder="{{ __('rsa_advertisements_image') }}"  >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-image"></i>
                                                                    </div>

                                                                    @if ($errors->has('image'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('image') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('rsa_advertisements_advertisement_type') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("advertisement_type" , $rsa_advertisement->advertisement_type)  }}" data-placement="left"  data-content="{{ __('rsa_advertisements_advertisement_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('rsa_advertisements_advertisement_type_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('advertisement_type') ? 'is-invalid' : '' }}" name="advertisement_type" placeholder="{{ __('rsa_advertisements_advertisement_type') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('advertisement_type'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('advertisement_type') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('rsa_advertisements_advertisement_data') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('rsa_advertisements_advertisement_data_data-content') }}" data-trigger="hover"  data-original-title="{{ __('rsa_advertisements_advertisement_data_data-original-title') }}"    class="form-control {{ $errors->has('advertisement_data') ? 'is-invalid' : '' }}" name="advertisement_data" placeholder="{{ __('rsa_advertisements_advertisement_data') }}"   >{{ $rsa_advertisement->advertisement_data   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('advertisement_data'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('advertisement_data') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



<div class="col-12 mb-3">
  <div class="form-group row">
    <div class="col-md-4">
      <span>{{ __('rsa_advertisements_is_active') }}</span>
    </div>
    <div class="col-md-8">
      <label class="switch">
        <input name="is_active" value="1" @checked($rsa_advertisement->is_active == 1) type="checkbox" id="is_active" class="switch-input">
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



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('rsa_advertisements_sorting') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("sorting" , $rsa_advertisement->sorting)  }}" data-placement="left"  data-content="{{ __('rsa_advertisements_sorting_data-content') }}" data-trigger="hover"  data-original-title="{{ __('rsa_advertisements_sorting_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('sorting') ? 'is-invalid' : '' }}" name="sorting" placeholder="{{ __('rsa_advertisements_sorting') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('sorting'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('sorting') }}
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
