@extends('layouts.layoutMaster')
@section('title', __('Orders') )
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
                    document.getElementById('destroy-order_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Orders') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.orders.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Orders') }}</h5>
                        @can('create orders')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('orders.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('orders_id') }}</th>
<th  >{{ __('orders_order_number') }}</th>
<th  >{{ __('orders_order_status_id') }}</th>
<th  >{{ __('orders_user_id') }}</th>
<th  >{{ __('orders_provider_id') }}</th>
<th  >{{ __('orders_go_to_user_time') }}</th>
<th  >{{ __('orders_start_work_time') }}</th>
<th  >{{ __('orders_finish_work_time') }}</th>
<th  >{{ __('orders_pickup_lat') }}</th>
<th  >{{ __('orders_pickup_lng') }}</th>
<th  >{{ __('orders_pickup_address') }}</th>
<th  >{{ __('orders_order_date') }}</th>
<th  >{{ __('orders_amount') }}</th>
<th  >{{ __('orders_vat') }}</th>
<th  >{{ __('orders_discount') }}</th>
<th  >{{ __('orders_total_amount') }}</th>
<th  >{{ __('orders_created_at') }}</th>
<th  >{{ __('orders_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($orders as $key => $order)
            <tr>
            <td>{{ $order->firstItem + $key + 1 }}</td>
            
<td>{{ $order->id }}</td>
<td>{{ $order->order_number }}</td>
<td>{{ $order->order_status_id }}</td>
<td>{{ $order->user_id }}</td>
<td>{{ $order->provider_id }}</td>
<td>{{ $order->go_to_user_time }}</td>
<td>{{ $order->start_work_time }}</td>
<td>{{ $order->finish_work_time }}</td>
<td>{{ $order->pickup_lat }}</td>
<td>{{ $order->pickup_lng }}</td>
<td>{{ $order->pickup_address }}</td>
<td>{{ $order->order_date }}</td>
<td>{{ $order->amount }}</td>
<td>{{ $order->vat }}</td>
<td>{{ $order->discount }}</td>
<td>{{ $order->total_amount }}</td>
<td>{{ $order->created_at }}</td>
<td>{{ $order->updated_at }}</td>         <td>
           <a href="{{ route('orders.show', $order->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $order->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-order_{{  $order->id }}"
                                                    action="{{ route('orders.destroy', $order->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="19"  >{{$orders->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                                    
