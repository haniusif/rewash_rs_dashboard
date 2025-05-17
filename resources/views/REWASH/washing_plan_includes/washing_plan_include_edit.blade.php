@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.washing_plan_includes_washing_plan_includes')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.washing_plan_includes_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/washing_plan_includes">     @lang('messages.washing_plan_includes_washing_plan_includes')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/washing_plan_includes/create" title = "@lang('messages.washing_plan_includes_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.washing_plan_includes_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/washing_plan_includes') }}">
                        {!! csrf_field() !!}




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



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.washing_plan_includes_update') 
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
