@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.vehicle_modals_vehicle_modals')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.vehicle_modals_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/vehicle_modals">     @lang('messages.vehicle_modals_vehicle_modals')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/vehicle_modals/create" title = "@lang('messages.vehicle_modals_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.vehicle_modals_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/vehicle_modals') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('vehicle_modals_branch_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("branch_id" , $vehicle_modal->branch_id)  }}" data-placement="left"  data-content="{{ __('vehicle_modals_branch_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('vehicle_modals_branch_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('branch_id') ? 'is-invalid' : '' }}" name="branch_id" placeholder="{{ __('vehicle_modals_branch_id') }}">
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
                                                                <span>{{ __('vehicle_modals_vehicle_modal') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("vehicle_modal" , $vehicle_modal->vehicle_modal)  }}" data-placement="left"  data-content="{{ __('vehicle_modals_vehicle_modal_data-content') }}" data-trigger="hover"  data-original-title="{{ __('vehicle_modals_vehicle_modal_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('vehicle_modal') ? 'is-invalid' : '' }}" name="vehicle_modal" placeholder="{{ __('vehicle_modals_vehicle_modal') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_modal'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_modal') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('vehicle_modals_vehicle_en_modal') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("vehicle_en_modal" , $vehicle_modal->vehicle_en_modal)  }}" data-placement="left"  data-content="{{ __('vehicle_modals_vehicle_en_modal_data-content') }}" data-trigger="hover"  data-original-title="{{ __('vehicle_modals_vehicle_en_modal_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('vehicle_en_modal') ? 'is-invalid' : '' }}" name="vehicle_en_modal" placeholder="{{ __('vehicle_modals_vehicle_en_modal') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_en_modal'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_en_modal') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('vehicle_modals_vehicle_company_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">

                                                                     <select data-toggle="popover"   data-placement="left"  data-content="{{ __('vehicle_modals_vehicle_company_id_data-content') }}" data-trigger="hover" data-original-title="{{ __('vehicle_modals_vehicle_company_id_data-original-title') }}"  class="form-control  {{ $errors->has('vehicle_company_id') ? 'is-invalid' : '' }} "  name="vehicle_company_id" >

                            @foreach($vehicle_companies as $vehicle_company)
                             <option  @selected(old('vehicle_company_id' , $vehicle_modal->vehicle_company_id) == $vehicle_company->id)    value="{{ $vehicle_company->id }}" >{{ $vehicle_company->branch_id }}</option>
                             @endforeach
                            </select>

                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('vehicle_company_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('vehicle_company_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.vehicle_modals_update') 
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
