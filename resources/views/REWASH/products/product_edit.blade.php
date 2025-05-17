@extends('layouts.layoutMaster')

@section('content')


 			<div class="page-header">
							<h1>
							       @lang('messages.products_products')
								<small>
									<i class="ace-icon fa fa-angle-double-left"></i>
								      @lang('messages.products_update')
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">




    	<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">  <a href="/products">     @lang('messages.products_products')  </a>  </h4>

													<span class="widget-toolbar">
																	<a href="#" data-action="settings" data-toggle="dropdown">
															<i class="ace-icon fa fa-bars"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
															<li>
<a href="/products/create" title = "@lang('messages.products_add_new')  "  ><i class="fa fa-plus fa-lg"></i>
@lang('messages.products_add_new')
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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/products') }}">
                        {!! csrf_field() !!}




           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('products_sku') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("sku" , $product->sku)  }}" data-placement="left"  data-content="{{ __('products_sku_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_sku_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('sku') ? 'is-invalid' : '' }}" name="sku" placeholder="{{ __('products_sku') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('sku'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('sku') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('products_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("name" , $product->name)  }}" data-placement="left"  data-content="{{ __('products_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="{{ __('products_name') }}">
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
                                                                <span>{{ __('products_en_name') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("en_name" , $product->en_name)  }}" data-placement="left"  data-content="{{ __('products_en_name_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_en_name_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" name="en_name" placeholder="{{ __('products_en_name') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('en_name'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('en_name') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('products_purchase_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("purchase_price" , $product->purchase_price)  }}" data-placement="left"  data-content="{{ __('products_purchase_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_purchase_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('purchase_price') ? 'is-invalid' : '' }}" name="purchase_price" placeholder="{{ __('products_purchase_price') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('purchase_price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('purchase_price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('products_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("price" , $product->price)  }}" data-placement="left"  data-content="{{ __('products_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" placeholder="{{ __('products_price') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('products_tax') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("tax" , $product->tax)  }}" data-placement="left"  data-content="{{ __('products_tax_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_tax_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('tax') ? 'is-invalid' : '' }}" name="tax" placeholder="{{ __('products_tax') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('tax'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('tax') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('products_sales_price') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("sales_price" , $product->sales_price)  }}" data-placement="left"  data-content="{{ __('products_sales_price_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_sales_price_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('sales_price') ? 'is-invalid' : '' }}" name="sales_price" placeholder="{{ __('products_sales_price') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('sales_price'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('sales_price') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('products_tax_type') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("tax_type" , $product->tax_type)  }}" data-placement="left"  data-content="{{ __('products_tax_type_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_tax_type_data-original-title') }}"
                                                                     type="text"   class="form-control {{ $errors->has('tax_type') ? 'is-invalid' : '' }}" name="tax_type" placeholder="{{ __('products_tax_type') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('tax_type'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('tax_type') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('products_product_unit_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("product_unit_id" , $product->product_unit_id)  }}" data-placement="left"  data-content="{{ __('products_product_unit_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_product_unit_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('product_unit_id') ? 'is-invalid' : '' }}" name="product_unit_id" placeholder="{{ __('products_product_unit_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('product_unit_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('product_unit_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('products_product_category_id') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("product_category_id" , $product->product_category_id)  }}" data-placement="left"  data-content="{{ __('products_product_category_id_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_product_category_id_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('product_category_id') ? 'is-invalid' : '' }}" name="product_category_id" placeholder="{{ __('products_product_category_id') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('product_category_id'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('product_category_id') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



           <div class="col-12 mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{ __('products_current_stock') }}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input  data-toggle="popover" value="{{ old("current_stock" , $product->current_stock)  }}" data-placement="left"  data-content="{{ __('products_current_stock_data-content') }}" data-trigger="hover"  data-original-title="{{ __('products_current_stock_data-original-title') }}"
                                                                     type="number"   class="form-control {{ $errors->has('current_stock') ? 'is-invalid' : '' }}" name="current_stock" placeholder="{{ __('products_current_stock') }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-file-minus"></i>
                                                                    </div>

                                                                    @if ($errors->has('current_stock'))
                                                                    <div class="invalid-feedback">
                                                                    {{ $errors->first('current_stock') }}
                                                </div>
                                                @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



 <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary pull-left">
                                    <i class="fa fa-btn fa-save"></i>@lang('messages.products_update') 
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
