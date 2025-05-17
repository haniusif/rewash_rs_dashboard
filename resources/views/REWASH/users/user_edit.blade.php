@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.users_users')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.users_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/users">     @lang('messages.users_users')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/users/create" title = "@lang('messages.users_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.users_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/users') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $user->branch_id)  }}" data-placement="left"  data-content="{{ __('users_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('users_branch_id') }}">
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
                                                                <span>{{ __('users_photo') }}</span>
                                                            </div>
                                                            <div class="col-md-8">

                                                               <div class="row" >
                                                                <img src="{{ asset($user->photo) }}" alt="photo" style="height:200px; width:100%" class="img-fluid rounded-sm mb-2" />

                                                                </div>

                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{  old('photo')   }}" data-placement="left"  data-content="{{ __('users_photo_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_photo_data-original-title') }}" 
                                                                     type="file"   class="form-control {{ $errors->has('photo') ? 'is-invalid' : '' }}" name="photo" placeholder="{{ __('users_photo') }}"  >
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-image"></i>
                                                                    </div>

                                                                    @if ($errors->has('photo'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('photo') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("name" , $user->name)  }}" data-placement="left"  data-content="{{ __('users_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('users_name') }}">
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
                                                                <span>{{ __('users_email') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("email" , $user->email)  }}" data-placement="left"  data-content="{{ __('users_email_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_email_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="{{ __('users_email') }}">
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
                                                                <span>{{ __('users_two_factor_confirmed_at') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("two_factor_confirmed_at" , $user->two_factor_confirmed_at)  }}" data-placement="left"  data-content="{{ __('users_two_factor_confirmed_at_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_two_factor_confirmed_at_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('two_factor_confirmed_at') ? 'is-invalid' : '' }}" name="two_factor_confirmed_at" placeholder="{{ __('users_two_factor_confirmed_at') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('two_factor_confirmed_at'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('two_factor_confirmed_at') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_sex') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("sex" , $user->sex)  }}" data-placement="left"  data-content="{{ __('users_sex_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_sex_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('sex') ? 'is-invalid' : '' }}" name="sex" placeholder="{{ __('users_sex') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('sex'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('sex') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_dob') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("dob" , $user->dob)  }}" data-placement="left"  data-content="{{ __('users_dob_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_dob_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('dob') ? 'is-invalid' : '' }}" name="dob" placeholder="{{ __('users_dob') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('dob'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('dob') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_mobile') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("mobile" , $user->mobile)  }}" data-placement="left"  data-content="{{ __('users_mobile_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_mobile_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" name="mobile" placeholder="{{ __('users_mobile') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('mobile'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('mobile') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_phone') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("phone" , $user->phone)  }}" data-placement="left"  data-content="{{ __('users_phone_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_phone_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" placeholder="{{ __('users_phone') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('phone'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('phone') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_address') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('users_address_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_address_data-original-title') }}"    class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" placeholder="{{ __('users_address') }}"   >{{ $user->address   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('address'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('address') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_code_expires_at') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("code_expires_at" , $user->code_expires_at)  }}" data-placement="left"  data-content="{{ __('users_code_expires_at_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_code_expires_at_data-original-title') }}"
                                                                     type="date"   class="form-control {{ $errors->has('code_expires_at') ? 'is-invalid' : '' }}" name="code_expires_at" placeholder="{{ __('users_code_expires_at') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('code_expires_at'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('code_expires_at') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



<div class="col-12 mb-3">
  <div class="form-group row">
    <div class="col-md-4">
      <span>{{ __('users_is_verified') }}</span>
    </div>
    <div class="col-md-8">
      <label class="switch">
        <input name="is_verified" value="1" @checked($user->is_verified == 1) type="checkbox" id="is_verified" class="switch-input">
        <span class="switch-toggle-slider">
          <span class="switch-on"></span>
          <span class="switch-off"></span>
        </span>
        <span class="switch-label"></span>
      </label>
      @if ($errors->has('is_verified'))
      <div class="invalid-feedback">
        {{ $errors->first('is_verified') }}
      </div>
      @endif
    </div>
  </div>
</div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_actual_balance') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("actual_balance" , $user->actual_balance)  }}" data-placement="left"  data-content="{{ __('users_actual_balance_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_actual_balance_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('actual_balance') ? 'is-invalid' : '' }}" name="actual_balance" placeholder="{{ __('users_actual_balance') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('actual_balance'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('actual_balance') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_profile_completed') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("profile_completed" , $user->profile_completed)  }}" data-placement="left"  data-content="{{ __('users_profile_completed_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_profile_completed_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('profile_completed') ? 'is-invalid' : '' }}" name="profile_completed" placeholder="{{ __('users_profile_completed') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('profile_completed'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('profile_completed') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_role') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("role" , $user->role)  }}" data-placement="left"  data-content="{{ __('users_role_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_role_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }}" name="role" placeholder="{{ __('users_role') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('role'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('role') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_firebase_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('users_firebase_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_firebase_id_data-original-title') }}"    class="form-control {{ $errors->has('firebase_id') ? 'is-invalid' : '' }}" name="firebase_id" placeholder="{{ __('users_firebase_id') }}"   >{{ $user->firebase_id   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('firebase_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('firebase_id') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_is_admin') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("is_admin" , $user->is_admin)  }}" data-placement="left"  data-content="{{ __('users_is_admin_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_is_admin_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('is_admin') ? 'is-invalid' : '' }}" name="is_admin" placeholder="{{ __('users_is_admin') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('is_admin'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('is_admin') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_need_otp_resend') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("need_otp_resend" , $user->need_otp_resend)  }}" data-placement="left"  data-content="{{ __('users_need_otp_resend_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_need_otp_resend_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('need_otp_resend') ? 'is-invalid' : '' }}" name="need_otp_resend" placeholder="{{ __('users_need_otp_resend') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('need_otp_resend'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('need_otp_resend') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_city_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("city_id" , $user->city_id)  }}" data-placement="left"  data-content="{{ __('users_city_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_city_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('city_id') ? 'is-invalid' : '' }}" name="city_id" placeholder="{{ __('users_city_id') }}">
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
                                                                <span>{{ __('users_neighborhood_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("neighborhood_id" , $user->neighborhood_id)  }}" data-placement="left"  data-content="{{ __('users_neighborhood_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_neighborhood_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('neighborhood_id') ? 'is-invalid' : '' }}" name="neighborhood_id" placeholder="{{ __('users_neighborhood_id') }}">
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
                                                                <span>{{ __('users_last_zone_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("last_zone_id" , $user->last_zone_id)  }}" data-placement="left"  data-content="{{ __('users_last_zone_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_last_zone_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('last_zone_id') ? 'is-invalid' : '' }}" name="last_zone_id" placeholder="{{ __('users_last_zone_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('last_zone_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('last_zone_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_last_ip') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("last_ip" , $user->last_ip)  }}" data-placement="left"  data-content="{{ __('users_last_ip_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_last_ip_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('last_ip') ? 'is-invalid' : '' }}" name="last_ip" placeholder="{{ __('users_last_ip') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('last_ip'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('last_ip') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('users_loyalty_points') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("loyalty_points" , $user->loyalty_points)  }}" data-placement="left"  data-content="{{ __('users_loyalty_points_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_loyalty_points_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('loyalty_points') ? 'is-invalid' : '' }}" name="loyalty_points" placeholder="{{ __('users_loyalty_points') }}">
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
      <span>{{ __('users_is_active') }}</span>
    </div>
    <div class="col-md-8">
      <label class="switch">
        <input name="is_active" value="1" @checked($user->is_active == 1) type="checkbox" id="is_active" class="switch-input">
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
                                                                <span>{{ __('users_platform_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("platform_id" , $user->platform_id)  }}" data-placement="left"  data-content="{{ __('users_platform_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_platform_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('platform_id') ? 'is-invalid' : '' }}" name="platform_id" placeholder="{{ __('users_platform_id') }}">
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
                                                                <span>{{ __('users_referred_by') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("referred_by" , $user->referred_by)  }}" data-placement="left"  data-content="{{ __('users_referred_by_data-content') }}" data-trigger="hover"  data-original-title="{{ __('users_referred_by_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('referred_by') ? 'is-invalid' : '' }}" name="referred_by" placeholder="{{ __('users_referred_by') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('referred_by'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('referred_by') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.users_update') 
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
