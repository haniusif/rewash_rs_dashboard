@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.user_addresses_user_addresses')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.user_addresses_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/user_addresses">     @lang('messages.user_addresses_user_addresses')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/user_addresses/create" title = "@lang('messages.user_addresses_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.user_addresses_add_new')
</a>
															</li>



														</ul>

														<a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh"></i>
														</a>

                                                        		<a href="#" data-action="fullscreen" class="orange2">
														<i class="ace-icon fa fa-expand"></i>
													</a>

														<a href="#" data-action="collapse">
															<i class="ace-icon fa fa-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="ace-icon fa fa-times"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user_addresses') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_addresses_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $user_address->user_id)  }}" data-placement="left"  data-content="{{ __('user_addresses_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_addresses_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('user_addresses_user_id') }}">
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
                                                                <span>{{ __('user_addresses_address_title') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("address_title" , $user_address->address_title)  }}" data-placement="left"  data-content="{{ __('user_addresses_address_title_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_addresses_address_title_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('address_title') ? 'is-invalid' : '' }}" name="address_title" placeholder="{{ __('user_addresses_address_title') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('address_title'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('address_title') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_addresses_address_desc') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("address_desc" , $user_address->address_desc)  }}" data-placement="left"  data-content="{{ __('user_addresses_address_desc_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_addresses_address_desc_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('address_desc') ? 'is-invalid' : '' }}" name="address_desc" placeholder="{{ __('user_addresses_address_desc') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('address_desc'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('address_desc') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_addresses_latitude') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("latitude" , $user_address->latitude)  }}" data-placement="left"  data-content="{{ __('user_addresses_latitude_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_addresses_latitude_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('latitude') ? 'is-invalid' : '' }}" name="latitude" placeholder="{{ __('user_addresses_latitude') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('latitude'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('latitude') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_addresses_longitude') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("longitude" , $user_address->longitude)  }}" data-placement="left"  data-content="{{ __('user_addresses_longitude_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_addresses_longitude_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('longitude') ? 'is-invalid' : '' }}" name="longitude" placeholder="{{ __('user_addresses_longitude') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('longitude'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('longitude') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_addresses_city_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("city_id" , $user_address->city_id)  }}" data-placement="left"  data-content="{{ __('user_addresses_city_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_addresses_city_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('city_id') ? 'is-invalid' : '' }}" name="city_id" placeholder="{{ __('user_addresses_city_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('city_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('city_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_addresses_neighborhood_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("neighborhood_id" , $user_address->neighborhood_id)  }}" data-placement="left"  data-content="{{ __('user_addresses_neighborhood_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_addresses_neighborhood_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('neighborhood_id') ? 'is-invalid' : '' }}" name="neighborhood_id" placeholder="{{ __('user_addresses_neighborhood_id') }}">
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
                                                                <span>{{ __('user_addresses_is_default') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_default" , $user_address->is_default)  }}" data-placement="left"  data-content="{{ __('user_addresses_is_default_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_addresses_is_default_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_default') ? 'is-invalid' : '' }}" name="is_default" placeholder="{{ __('user_addresses_is_default') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_default'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_default') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_addresses_is_deleted') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_deleted" , $user_address->is_deleted)  }}" data-placement="left"  data-content="{{ __('user_addresses_is_deleted_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_addresses_is_deleted_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_deleted') ? 'is-invalid' : '' }}" name="is_deleted" placeholder="{{ __('user_addresses_is_deleted') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_deleted'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_deleted') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.user_addresses_update') 
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
          
               </div>
                </div>
                </div>







@endsection
