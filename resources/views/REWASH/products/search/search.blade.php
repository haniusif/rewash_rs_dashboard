 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('products.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-id">{{ __('products_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('products_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-sku">{{ __('products_sku') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="sku" value="{{ request()->sku }}"  type="text" placeholder="{{ __('products_sku') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-name">{{ __('products_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('products_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-en_name">{{ __('products_en_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_name" value="{{ request()->en_name }}"  type="text" placeholder="{{ __('products_en_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-purchase_price">{{ __('products_purchase_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="purchase_price" type="number" value="{{ request()->purchase_price }}"  placeholder="{{ __('products_purchase_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-price">{{ __('products_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="price" type="number" value="{{ request()->price }}"  placeholder="{{ __('products_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-tax">{{ __('products_tax') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="tax" type="number" value="{{ request()->tax }}"  placeholder="{{ __('products_tax') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-sales_price">{{ __('products_sales_price') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="sales_price" type="number" value="{{ request()->sales_price }}"  placeholder="{{ __('products_sales_price') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-tax_type">{{ __('products_tax_type') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="tax_type" value="{{ request()->tax_type }}"  type="text" placeholder="{{ __('products_tax_type') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-product_unit_id">{{ __('products_product_unit_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="product_unit_id" type="number" value="{{ request()->product_unit_id }}"  placeholder="{{ __('products_product_unit_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-product_category_id">{{ __('products_product_category_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="product_category_id" type="number" value="{{ request()->product_category_id }}"  placeholder="{{ __('products_product_category_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-current_stock">{{ __('products_current_stock') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="current_stock" type="number" value="{{ request()->current_stock }}"  placeholder="{{ __('products_current_stock') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-created_at">{{ __('products_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="products-list-updated_at">{{ __('products_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('products.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
