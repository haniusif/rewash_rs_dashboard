@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.user_wallet_transactions_user_wallet_transactions')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.user_wallet_transactions_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/user_wallet_transactions">     @lang('messages.user_wallet_transactions_user_wallet_transactions')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/user_wallet_transactions/create" title = "@lang('messages.user_wallet_transactions_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.user_wallet_transactions_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user_wallet_transactions') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_wallet_transactions_user_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("user_id" , $user_wallet_transaction->user_id)  }}" data-placement="left"  data-content="{{ __('user_wallet_transactions_user_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_wallet_transactions_user_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" placeholder="{{ __('user_wallet_transactions_user_id') }}">
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
                                                                <span>{{ __('user_wallet_transactions_actual_balance') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("actual_balance" , $user_wallet_transaction->actual_balance)  }}" data-placement="left"  data-content="{{ __('user_wallet_transactions_actual_balance_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_wallet_transactions_actual_balance_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('actual_balance') ? 'is-invalid' : '' }}" name="actual_balance" placeholder="{{ __('user_wallet_transactions_actual_balance') }}">
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
                                                                <span>{{ __('user_wallet_transactions_amount') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("amount" , $user_wallet_transaction->amount)  }}" data-placement="left"  data-content="{{ __('user_wallet_transactions_amount_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_wallet_transactions_amount_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" name="amount" placeholder="{{ __('user_wallet_transactions_amount') }}">
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
                                                                <span>{{ __('user_wallet_transactions_transaction_type') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("transaction_type" , $user_wallet_transaction->transaction_type)  }}" data-placement="left"  data-content="{{ __('user_wallet_transactions_transaction_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_wallet_transactions_transaction_type_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('transaction_type') ? 'is-invalid' : '' }}" name="transaction_type" placeholder="{{ __('user_wallet_transactions_transaction_type') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('transaction_type'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('transaction_type') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






       <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('user_wallet_transactions_transaction_comments') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea  data-toggle="popover"   data-placement="left"  data-content="{{ __('user_wallet_transactions_transaction_comments_data-content') }}" data-trigger="hover"  data-original-title="{{ __('user_wallet_transactions_transaction_comments_data-original-title') }}"    class="form-control {{ $errors->has('transaction_comments') ? 'is-invalid' : '' }}" name="transaction_comments" placeholder="{{ __('user_wallet_transactions_transaction_comments') }}"   >{{ $user_wallet_transaction->transaction_comments   }}</textarea>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-text"></i>
                                                                    </div>


                                @if ($errors->has('transaction_comments'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('transaction_comments') }}
                                                </div>
                                              @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.user_wallet_transactions_update') 
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
