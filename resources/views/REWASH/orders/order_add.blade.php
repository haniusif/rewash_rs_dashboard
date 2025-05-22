@extends('layouts.layoutMaster')
@section('title', __('Orders | Add new order') )
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
            <li class="breadcrumb-item"><a href="{{ route('orders.index') }}">{{ __('Orders') }}</a>
            </li>
            <li class="breadcrumb-item active"> {{ __('Add new order') }}
            </li>
        </ol>
    </div>
    @include('_partials.alerts')
    <section>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('orders.store') }}"
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
                                <h5 class="mb-0">{{ __('Orders') }}</h5> <small
                                    class="text-muted float-end">.</small>
                            </div>
                  <div class="card-body">
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_order_number') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('order_number')   }}" data-placement="left"  data-content="{{ __('orders_order_number_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_order_number_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('order_number') ? 'is-invalid' : '' }}" name="order_number" placeholder="{{ __('orders_order_number') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('order_number'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('order_number') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

     


           <div class="col-12  mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_order_status_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select   data-toggle="popover"   data-placement="left"  data-content="{{ __('orders_order_status_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_order_status_id_data-original-title') }}"  class="form-control {{ $errors->has('order_status_id') ? 'is-invalid' : '' }}"     data-validation-required-message="{{ __('This field is required') }}" name="order_status_id" >

                            @foreach($order_statuses as $order_status)
                             <option  @selected(old('order_status_id' ) == $order_status->id)   value="{{ $order_status->id }}" >{{ $order_status->name }}</option>
                             @endforeach
                            </select>

                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('order_status_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('order_status_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12  mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select   data-toggle="popover"   data-placement="left"  data-content="{{ __('orders_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_user_id_data-original-title') }}"  class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}"     data-validation-required-message="{{ __('This field is required') }}" name="user_id" >

                            @foreach($providers as $provider)
                             <option  @selected(old('user_id' ) == $provider->id)   value="{{ $provider->id }}" >{{ $provider->created_at }}</option>
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



           <div class="col-12  mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_provider_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select   data-toggle="popover"   data-placement="left"  data-content="{{ __('orders_provider_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_provider_id_data-original-title') }}"  class="form-control {{ $errors->has('provider_id') ? 'is-invalid' : '' }}"     data-validation-required-message="{{ __('This field is required') }}" name="provider_id" >

                            @foreach($providers as $provider)
                             <option  @selected(old('provider_id' ) == $provider->id)   value="{{ $provider->id }}" >{{ $provider->created_at }}</option>
                             @endforeach
                            </select>

                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('provider_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('provider_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
 



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_go_to_user_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('go_to_user_time')   }}" data-placement="left"  data-content="{{ __('orders_go_to_user_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_go_to_user_time_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('go_to_user_time') ? 'is-invalid' : '' }}" name="go_to_user_time" placeholder="{{ __('orders_go_to_user_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('go_to_user_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('go_to_user_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_start_work_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('start_work_time')   }}" data-placement="left"  data-content="{{ __('orders_start_work_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_start_work_time_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('start_work_time') ? 'is-invalid' : '' }}" name="start_work_time" placeholder="{{ __('orders_start_work_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('start_work_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('start_work_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_finish_work_time') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('finish_work_time')   }}" data-placement="left"  data-content="{{ __('orders_finish_work_time_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_finish_work_time_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('finish_work_time') ? 'is-invalid' : '' }}" name="finish_work_time" placeholder="{{ __('orders_finish_work_time') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('finish_work_time'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('finish_work_time') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_pickup_lat') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('pickup_lat')   }}" data-placement="left"  data-content="{{ __('orders_pickup_lat_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_pickup_lat_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('pickup_lat') ? 'is-invalid' : '' }}" name="pickup_lat" placeholder="{{ __('orders_pickup_lat') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('pickup_lat'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('pickup_lat') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_pickup_lng') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('pickup_lng')   }}" data-placement="left"  data-content="{{ __('orders_pickup_lng_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_pickup_lng_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('pickup_lng') ? 'is-invalid' : '' }}" name="pickup_lng" placeholder="{{ __('orders_pickup_lng') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('pickup_lng'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('pickup_lng') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_pickup_address') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('pickup_address')   }}" data-placement="left"  data-content="{{ __('orders_pickup_address_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_pickup_address_data-original-title') }}" 
                                                                     type="text"   class="form-control {{ $errors->has('pickup_address') ? 'is-invalid' : '' }}" name="pickup_address" placeholder="{{ __('orders_pickup_address') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('pickup_address'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('pickup_address') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_order_date') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('order_date')   }}" data-placement="left"  data-content="{{ __('orders_order_date_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_order_date_data-original-title') }}" 
                                                                     type="date"   class="form-control {{ $errors->has('order_date') ? 'is-invalid' : '' }}" name="order_date" placeholder="{{ __('orders_order_date') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('orders_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('amount')   }}" data-placement="left"  data-content="{{ __('orders_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_amount_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" name="amount" placeholder="{{ __('orders_amount') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('amount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('amount') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_vat') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('vat')   }}" data-placement="left"  data-content="{{ __('orders_vat_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_vat_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('vat') ? 'is-invalid' : '' }}" name="vat" placeholder="{{ __('orders_vat') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vat'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vat') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    

      



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('orders_discount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('discount')   }}" data-placement="left"  data-content="{{ __('orders_discount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_discount_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" name="discount" placeholder="{{ __('orders_discount') }}" data-validation-required-message="{{ __('This field is required') }}" >
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
                                                                <span>{{ __('orders_total_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('total_amount')   }}" data-placement="left"  data-content="{{ __('orders_total_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('orders_total_amount_data-original-title') }}" 
                                                                     type="number"   class="form-control {{ $errors->has('total_amount') ? 'is-invalid' : '' }}" name="total_amount" placeholder="{{ __('orders_total_amount') }}" data-validation-required-message="{{ __('This field is required') }}" >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('total_amount'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('total_amount') }}
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
