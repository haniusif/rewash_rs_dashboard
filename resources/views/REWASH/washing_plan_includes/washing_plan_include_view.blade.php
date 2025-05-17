@extends('layouts.layoutMaster')
@section('title', __('Washing_plan_includes | Add new washing_plan_include') )
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
            <li class="breadcrumb-item"><a href="{{ route('washing_plan_includes.index') }}">{{ __('Washing_plan_includes') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ $washing_plan_include->id }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('washing_plan_includes.update' , $washing_plan_include->id ) }}"
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
                                <h5 class="mb-0">{{ __('Washing_plan_includes') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">










           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plan_includes_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $washing_plan_include->branch_id)  }}" data-placement="left"  data-content="{{ __('washing_plan_includes_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plan_includes_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('washing_plan_includes_branch_id') }}">
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
                                                                <span>{{ __('washing_plan_includes_washing_plan_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select data-toggle="popover"   data-placement="left"  data-content="{{ __('washing_plan_includes_washing_plan_id_data-content') }}" data-trigger="hover" data-original-title="{{ __('washing_plan_includes_washing_plan_id_data-original-title') }}"  class="form-control  {{ $errors->has('washing_plan_id') ? 'is-invalid' : '' }} "  name="washing_plan_id" >

                            @foreach($washing_plans as $washing_plan)
                             <option  @selected(old('washing_plan_id' , $washing_plan_include->washing_plan_id) == $washing_plan->id)    value="{{ $washing_plan->id }}" >{{ $washing_plan->branch_id }}</option>
                             @endforeach
                            </select>

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
                                                                <span>{{ __('washing_plan_includes_washing_plan_include') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("washing_plan_include" , $washing_plan_include->washing_plan_include)  }}" data-placement="left"  data-content="{{ __('washing_plan_includes_washing_plan_include_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plan_includes_washing_plan_include_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('washing_plan_include') ? 'is-invalid' : '' }}" name="washing_plan_include" placeholder="{{ __('washing_plan_includes_washing_plan_include') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('washing_plan_include'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('washing_plan_include') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plan_includes_en_washing_plan_include') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("en_washing_plan_include" , $washing_plan_include->en_washing_plan_include)  }}" data-placement="left"  data-content="{{ __('washing_plan_includes_en_washing_plan_include_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plan_includes_en_washing_plan_include_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('en_washing_plan_include') ? 'is-invalid' : '' }}" name="en_washing_plan_include" placeholder="{{ __('washing_plan_includes_en_washing_plan_include') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('en_washing_plan_include'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('en_washing_plan_include') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plan_includes_additional_service_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("additional_service_id" , $washing_plan_include->additional_service_id)  }}" data-placement="left"  data-content="{{ __('washing_plan_includes_additional_service_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plan_includes_additional_service_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('additional_service_id') ? 'is-invalid' : '' }}" name="additional_service_id" placeholder="{{ __('washing_plan_includes_additional_service_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('additional_service_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('additional_service_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('washing_plan_includes_additional_service_quantity') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("additional_service_quantity" , $washing_plan_include->additional_service_quantity)  }}" data-placement="left"  data-content="{{ __('washing_plan_includes_additional_service_quantity_data-content') }}" data-trigger="hover"  data-original-title="{{ __('washing_plan_includes_additional_service_quantity_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('additional_service_quantity') ? 'is-invalid' : '' }}" name="additional_service_quantity" placeholder="{{ __('washing_plan_includes_additional_service_quantity') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('additional_service_quantity'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('additional_service_quantity') }}
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
