@extends('layouts.layoutMaster')
@section('title', __('Not_paid_orders') )
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
                    document.getElementById('destroy-not_paid_order_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Not_paid_orders') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.not_paid_orders.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Not_paid_orders') }}</h5>
                        @can('create not_paid_orders')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('not_paid_orders.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('not_paid_orders_id') }}</th>
<th  >{{ __('not_paid_orders_zone_id') }}</th>
<th  >{{ __('not_paid_orders_zone_name') }}</th>
<th  >{{ __('not_paid_orders_user_id') }}</th>
<th  >{{ __('not_paid_orders_user_name') }}</th>
<th  >{{ __('not_paid_orders_user_mobile') }}</th>
<th  >{{ __('not_paid_orders_number_of_vehicles') }}</th>
<th  >{{ __('not_paid_orders_vehicle_id') }}</th>
<th  >{{ __('not_paid_orders_washing_plan_id') }}</th>
<th  >{{ __('not_paid_orders_name') }}</th>
<th  >{{ __('not_paid_orders_washing_plan_validity_date') }}</th>
<th  >{{ __('not_paid_orders_number_of_washes') }}</th>
<th  >{{ __('not_paid_orders_status_id') }}</th>
<th  >{{ __('not_paid_orders_appointment_date') }}</th>
<th  >{{ __('not_paid_orders_slot_id') }}</th>
<th  >{{ __('not_paid_orders_vehicle_no') }}</th>
<th  >{{ __('not_paid_orders_location') }}</th>
<th  >{{ __('not_paid_orders_notes') }}</th>
<th  >{{ __('not_paid_orders_tax_avlue') }}</th>
<th  >{{ __('not_paid_orders_total_price') }}</th>
<th  >{{ __('not_paid_orders_total_price_befor_payment') }}</th>
<th  >{{ __('not_paid_orders_wallet_amount') }}</th>
<th  >{{ __('not_paid_orders_promo_code_id') }}</th>
<th  >{{ __('not_paid_orders_promo_code_discount_value') }}</th>
<th  >{{ __('not_paid_orders_payment_mode_id') }}</th>
<th  >{{ __('not_paid_orders_payment_status_id') }}</th>
<th  >{{ __('not_paid_orders_payment_status') }}</th>
<th  >{{ __('not_paid_orders_payment_time') }}</th>
<th  >{{ __('not_paid_orders_created_by') }}</th>
<th  >{{ __('not_paid_orders_created_at') }}</th>
<th  >{{ __('not_paid_orders_updated_at') }}</th>
<th  >{{ __('not_paid_orders_partner_id') }}</th>
<th  >{{ __('not_paid_orders_accrued_loyalty_point') }}</th>
<th  >{{ __('not_paid_orders_transaction_id') }}</th>
<th  >{{ __('not_paid_orders_platform_id') }}</th>
<th  >{{ __('not_paid_orders_report_id') }}</th>
<th  >{{ __('not_paid_orders_payment_id') }}</th>
<th  >{{ __('not_paid_orders_status') }}</th>
<th  >{{ __('not_paid_orders_description') }}</th>
<th  >{{ __('not_paid_orders_amount') }}</th>
<th  >{{ __('not_paid_orders_fee') }}</th>
<th  >{{ __('not_paid_orders_currency') }}</th>
<th  >{{ __('not_paid_orders_refunded') }}</th>
<th  >{{ __('not_paid_orders_refunded_at') }}</th>
<th  >{{ __('not_paid_orders_captured') }}</th>
<th  >{{ __('not_paid_orders_captured_at') }}</th>
<th  >{{ __('not_paid_orders_voided_at') }}</th>
<th  >{{ __('not_paid_orders_payment_created_at') }}</th>
<th  >{{ __('not_paid_orders_source') }}</th>
<th  >{{ __('not_paid_orders_message') }}</th>
<th  >{{ __('not_paid_orders_reference_number') }}</th>
<th  >{{ __('not_paid_orders_batch_number') }}</th>
<th  >{{ __('not_paid_orders_reconciliation_date') }}</th>
<th  >{{ __('not_paid_orders_company') }}</th>
<th  >{{ __('not_paid_orders_card_number') }}</th>
<th  >{{ __('not_paid_orders_first_name') }}</th>
<th  >{{ __('not_paid_orders_last_name') }}</th>
<th  >{{ __('not_paid_orders_mobile') }}</th>
<th  >{{ __('not_paid_orders_stcpay_reference') }}</th>
<th  >{{ __('not_paid_orders_stcpay_token') }}</th>
<th  >{{ __('not_paid_orders_invoice_id') }}</th>
<th  >{{ __('not_paid_orders_order_id') }}</th>
<th  >{{ __('not_paid_orders_plan') }}</th>
<th  >{{ __('not_paid_orders_pament_zone_id') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($not_paid_orders as $key => $not_paid_order)
            <tr>
            <td>{{ $not_paid_order->firstItem + $key + 1 }}</td>
            
<td>{{ $not_paid_order->id }}</td>
<td>{{ $not_paid_order->zone_id }}</td>
<td>{{ $not_paid_order->zone_name }}</td>
<td>{{ $not_paid_order->user_id }}</td>
<td>{{ $not_paid_order->user_name }}</td>
<td>{{ $not_paid_order->user_mobile }}</td>
<td>{{ $not_paid_order->number_of_vehicles }}</td>
<td>{{ $not_paid_order->vehicle_id }}</td>
<td>{{ $not_paid_order->washing_plan_id }}</td>
<td>{{ $not_paid_order->name }}</td>
<td>{{ $not_paid_order->washing_plan_validity_date }}</td>
<td>{{ $not_paid_order->number_of_washes }}</td>
<td>{{ $not_paid_order->status_id }}</td>
<td>{{ $not_paid_order->appointment_date }}</td>
<td>{{ $not_paid_order->slot_id }}</td>
<td>{{ $not_paid_order->vehicle_no }}</td>
<td>{{ $not_paid_order->location }}</td>
<td>{{ $not_paid_order->notes }}</td>
<td>{{ $not_paid_order->tax_avlue }}</td>
<td>{{ $not_paid_order->total_price }}</td>
<td>{{ $not_paid_order->total_price_befor_payment }}</td>
<td>{{ $not_paid_order->wallet_amount }}</td>
<td>{{ $not_paid_order->promo_code_id }}</td>
<td>{{ $not_paid_order->promo_code_discount_value }}</td>
<td>{{ $not_paid_order->payment_mode_id }}</td>
<td>{{ $not_paid_order->payment_status_id }}</td>
<td>{{ $not_paid_order->payment_status }}</td>
<td>{{ $not_paid_order->payment_time }}</td>
<td>{{ $not_paid_order->created_by }}</td>
<td>{{ $not_paid_order->created_at }}</td>
<td>{{ $not_paid_order->updated_at }}</td>
<td>{{ $not_paid_order->partner_id }}</td>
<td>{{ $not_paid_order->accrued_loyalty_point }}</td>
<td>{{ $not_paid_order->transaction_id }}</td>
<td>{{ $not_paid_order->platform_id }}</td>
<td>{{ $not_paid_order->report_id }}</td>
<td>{{ $not_paid_order->payment_id }}</td>
<td>{{ $not_paid_order->status }}</td>
<td>{{ $not_paid_order->description }}</td>
<td>{{ $not_paid_order->amount }}</td>
<td>{{ $not_paid_order->fee }}</td>
<td>{{ $not_paid_order->currency }}</td>
<td>{{ $not_paid_order->refunded }}</td>
<td>{{ $not_paid_order->refunded_at }}</td>
<td>{{ $not_paid_order->captured }}</td>
<td>{{ $not_paid_order->captured_at }}</td>
<td>{{ $not_paid_order->voided_at }}</td>
<td>{{ $not_paid_order->payment_created_at }}</td>
<td>{{ $not_paid_order->source }}</td>
<td>{{ $not_paid_order->message }}</td>
<td>{{ $not_paid_order->reference_number }}</td>
<td>{{ $not_paid_order->batch_number }}</td>
<td>{{ $not_paid_order->reconciliation_date }}</td>
<td>{{ $not_paid_order->company }}</td>
<td>{{ $not_paid_order->card_number }}</td>
<td>{{ $not_paid_order->first_name }}</td>
<td>{{ $not_paid_order->last_name }}</td>
<td>{{ $not_paid_order->mobile }}</td>
<td>{{ $not_paid_order->stcpay_reference }}</td>
<td>{{ $not_paid_order->stcpay_token }}</td>
<td>{{ $not_paid_order->invoice_id }}</td>
<td>{{ $not_paid_order->order_id }}</td>
<td>{{ $not_paid_order->plan }}</td>
<td>{{ $not_paid_order->pament_zone_id }}</td>         <td>
           <a href="{{ route('not_paid_orders.show', $not_paid_order->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $not_paid_order->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-not_paid_order_{{  $not_paid_order->id }}"
                                                    action="{{ route('not_paid_orders.destroy', $not_paid_order->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="65"  >{{$not_paid_orders->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                                                                                                                                
