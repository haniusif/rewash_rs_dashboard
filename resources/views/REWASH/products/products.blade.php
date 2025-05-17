@extends('layouts.layoutMaster')
@section('title', __('Products') )
@section('vendor-style')
@vite(['resources/assets/vendor/libs/select2/select2.scss', 'resources/assets/vendor/libs/tagify/tagify.scss', 'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss', 'resources/assets/vendor/libs/typeahead-js/typeahead.scss', 'resources/assets/vendor/libs/animate-css/animate.scss', 'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss'])
@endsection
@section('vendor-script')
    @vite(['resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/tagify/tagify.js', 'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js', 'resources/assets/vendor/libs/typeahead-js/typeahead.js', 'resources/assets/vendor/libs/bloodhound/bloodhound.js', 'resources/assets/vendor/libs/sweetalert2/sweetalert2.js'])
@endsection
@section('page-script')
    @vite(['resources/assets/js/forms-selects.js', 'resources/assets/js/forms-tagify.js', 'resources/assets/js/forms-typeahead.js'])
   <script>
        'use strict';
        // Reusable function to show confirmation alert
        function showConfirmation(button) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-primary me-3 waves-effect waves-light',
                    cancelButton: 'btn btn-label-secondary waves-effect waves-light'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    // Access the value of the button that triggered the function
                    var id = button.value;
                    document.getElementById('destroy-product_'+id).submit();

                }
            });
        }
    </script>
@if (request()->session()->exists('message'))
<script>
        Swal.fire({
      position: 'top-end',
      type: 'success',
      html: '{!! session('message') !!}',
      showConfirmButton: false,
      timer: 3000,
      confirmButtonClass: 'btn btn-primary',
      buttonsStyling: false,
    })
</script>
   @endif
@endsection
@section('content')
<div class="row">
 <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ __('Products') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.products.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Products') }}</h5>
                        @can('create products')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('products.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
                          <span class="tf-icon ti ti-plus ti-xs me-1"></span>{{ __('Add new') }}
                        </a>
                        </div>
                        @endcan
                      </div>
                <div class="table-responsive mt-1">
                    <table class="table table-hover-animation mb-0">
                        <thead>
                            <tr>
                                <th>#</th>

<th  >{{ __('products_id') }}</th>
<th  >{{ __('products_sku') }}</th>
<th  >{{ __('products_name') }}</th>
<th  >{{ __('products_en_name') }}</th>
<th  >{{ __('products_purchase_price') }}</th>
<th  >{{ __('products_price') }}</th>
<th  >{{ __('products_tax') }}</th>
<th  >{{ __('products_sales_price') }}</th>
<th  >{{ __('products_tax_type') }}</th>
<th  >{{ __('products_product_unit_id') }}</th>
<th  >{{ __('products_product_category_id') }}</th>
<th  >{{ __('products_current_stock') }}</th>
<th  >{{ __('products_created_at') }}</th>
<th  >{{ __('products_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($products as $key => $product)
            <tr>
            <td>{{ $product->firstItem + $key + 1 }}</td>
            
<td>{{ $product->id }}</td>
<td>{{ $product->sku }}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->en_name }}</td>
<td>{{ $product->purchase_price }}</td>
<td>{{ $product->price }}</td>
<td>{{ $product->tax }}</td>
<td>{{ $product->sales_price }}</td>
<td>{{ $product->tax_type }}</td>
<td>{{ $product->product_unit_id }}</td>
<td>{{ $product->product_category_id }}</td>
<td>{{ $product->current_stock }}</td>
<td>{{ $product->created_at }}</td>
<td>{{ $product->updated_at }}</td>         <td>
           <a href="{{ route('products.show', $product->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $product->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-product_{{  $product->id }}"
                                                    action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="15"  >{{$products->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                            
