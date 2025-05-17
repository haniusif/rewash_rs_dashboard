@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.dispatch_order_details_dispatch_order_details')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.dispatch_order_details_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/dispatch_order_details">     @lang('messages.dispatch_order_details_dispatch_order_details')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/dispatch_order_details/create" title = "@lang('messages.dispatch_order_details_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.dispatch_order_details_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/dispatch_order_details') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('dispatch_order_details_dispatch_order_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("dispatch_order_id" , $dispatch_order_detail->dispatch_order_id)  }}" data-placement="left"  data-content="{{ __('dispatch_order_details_dispatch_order_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('dispatch_order_details_dispatch_order_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('dispatch_order_id') ? 'is-invalid' : '' }}" name="dispatch_order_id" placeholder="{{ __('dispatch_order_details_dispatch_order_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('dispatch_order_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('dispatch_order_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.dispatch_order_details_update') 
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
