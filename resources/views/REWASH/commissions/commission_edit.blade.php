@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.commissions_commissions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.commissions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/commissions">     @lang('messages.commissions_commissions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/commissions/create" title = "@lang('messages.commissions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.commissions_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/commissions') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('commissions_worker_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("worker_id" , $commission->worker_id)  }}" data-placement="left"  data-content="{{ __('commissions_worker_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('commissions_worker_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('worker_id') ? 'is-invalid' : '' }}" name="worker_id" placeholder="{{ __('commissions_worker_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('worker_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('worker_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('commissions_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("amount" , $commission->amount)  }}" data-placement="left"  data-content="{{ __('commissions_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('commissions_amount_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" name="amount" placeholder="{{ __('commissions_amount') }}">
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
                                                                <span>{{ __('commissions_operation_type') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("operation_type" , $commission->operation_type)  }}" data-placement="left"  data-content="{{ __('commissions_operation_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('commissions_operation_type_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('operation_type') ? 'is-invalid' : '' }}" name="operation_type" placeholder="{{ __('commissions_operation_type') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('operation_type'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('operation_type') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('commissions_commission_title') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("commission_title" , $commission->commission_title)  }}" data-placement="left"  data-content="{{ __('commissions_commission_title_data-content') }}" data-trigger="hover"  data-original-title="{{ __('commissions_commission_title_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('commission_title') ? 'is-invalid' : '' }}" name="commission_title" placeholder="{{ __('commissions_commission_title') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('commission_title'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('commission_title') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('commissions_commission_text') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('commissions_commission_text_data-content') }}" data-trigger="hover"  data-original-title="{{ __('commissions_commission_text_data-original-title') }}"    class="form-control {{ $errors->has('commission_text') ? 'is-invalid' : '' }}" name="commission_text" placeholder="{{ __('commissions_commission_text') }}"   >{{ $commission->commission_text   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('commission_text'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('commission_text') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.commissions_update') 
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
