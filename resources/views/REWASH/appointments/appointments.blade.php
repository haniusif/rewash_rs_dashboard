@extends('layouts.layoutMaster')
@section('title', __('Appointments') )
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
                    document.getElementById('destroy-appointment_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Appointments') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.appointments.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Appointments') }}</h5>
                        @can('create appointments')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('appointments.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('appointments_id') }}</th>
<th  >{{ __('appointments_branch_id') }}</th>
<th  >{{ __('appointments_zone_id') }}</th>
<th  >{{ __('appointments_user_id') }}</th>
<th  >{{ __('appointments_number_of_vehicles') }}</th>
<th  >{{ __('appointments_vehicle_company_id') }}</th>
<th  >{{ __('appointments_vehicle_modal_id') }}</th>
<th  >{{ __('appointments_vehicle_types_id') }}</th>
<th  >{{ __('appointments_vehicle_id') }}</th>
<th  >{{ __('appointments_washing_plan_id') }}</th>
<th  >{{ __('appointments_washing_plan_validity_date') }}</th>
<th  >{{ __('appointments_number_of_washes') }}</th>
<th  >{{ __('appointments_status_id') }}</th>
<th  >{{ __('appointments_appointment_date') }}</th>
<th  >{{ __('appointments_slot_id') }}</th>
<th  >{{ __('appointments_restore_slots') }}</th>
<th  >{{ __('appointments_vehicle_no') }}</th>
<th  >{{ __('appointments_time_frame') }}</th>
<th  >{{ __('appointments_time_frame_id') }}</th>
<th  >{{ __('appointments_appx_hour') }}</th>
<th  >{{ __('appointments_remark') }}</th>
<th  >{{ __('appointments_location') }}</th>
<th  >{{ __('appointments_notes') }}</th>
<th  >{{ __('appointments_tax_avlue') }}</th>
<th  >{{ __('appointments_total_price') }}</th>
<th  >{{ __('appointments_total_price_befor_payment') }}</th>
<th  >{{ __('appointments_wallet_amount') }}</th>
<th  >{{ __('appointments_promo_code_id') }}</th>
<th  >{{ __('appointments_promo_code_discount_value') }}</th>
<th  >{{ __('appointments_payment_mode_id') }}</th>
<th  >{{ __('appointments_payment_status_id') }}</th>
<th  >{{ __('appointments_payment_time') }}</th>
<th  >{{ __('appointments_created_by') }}</th>
<th  >{{ __('appointments_created_at') }}</th>
<th  >{{ __('appointments_updated_at') }}</th>
<th  >{{ __('appointments_partner_id') }}</th>
<th  >{{ __('appointments_accrued_loyalty_point') }}</th>
<th  >{{ __('appointments_transaction_id') }}</th>
<th  >{{ __('appointments_platform_id') }}</th>
<th  >{{ __('appointments_double_check_payment') }}</th>
<th  >{{ __('appointments_double_check_data') }}</th>
<th  >{{ __('appointments_double_check_payment_status') }}</th>
<th  >{{ __('appointments_qoyod_invoice_id') }}</th>
<th  >{{ __('appointments_qoyod_reference') }}</th>
<th  >{{ __('appointments_platform_order_id') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($appointments as $key => $appointment)
            <tr>
            <td>{{ $appointment->firstItem + $key + 1 }}</td>
            
<td>{{ $appointment->id }}</td>
<td>{{ $appointment->branch_id }}</td>
<td>{{ $appointment->zone_id }}</td>
<td>{{ $appointment->user_id }}</td>
<td>{{ $appointment->number_of_vehicles }}</td>
<td>{{ $appointment->vehicle_company_id }}</td>
<td>{{ $appointment->vehicle_modal_id }}</td>
<td>{{ $appointment->vehicle_types_id }}</td>
<td>{{ $appointment->vehicle_id }}</td>
<td>{{ $appointment->washing_plan_id }}</td>
<td>{{ $appointment->washing_plan_validity_date }}</td>
<td>{{ $appointment->number_of_washes }}</td>
<td>{{ $appointment->status_id }}</td>
<td>{{ $appointment->appointment_date }}</td>
<td>{{ $appointment->slot_id }}</td>
<td>{{ $appointment->restore_slots }}</td>
<td>{{ $appointment->vehicle_no }}</td>
<td>{{ $appointment->time_frame }}</td>
<td>{{ $appointment->time_frame_id }}</td>
<td>{{ $appointment->appx_hour }}</td>
<td>{{ $appointment->remark }}</td>
<td>{{ $appointment->location }}</td>
<td>{{ $appointment->notes }}</td>
<td>{{ $appointment->tax_avlue }}</td>
<td>{{ $appointment->total_price }}</td>
<td>{{ $appointment->total_price_befor_payment }}</td>
<td>{{ $appointment->wallet_amount }}</td>
<td>{{ $appointment->promo_code_id }}</td>
<td>{{ $appointment->promo_code_discount_value }}</td>
<td>{{ $appointment->payment_mode_id }}</td>
<td>{{ $appointment->payment_status_id }}</td>
<td>{{ $appointment->payment_time }}</td>
<td>{{ $appointment->created_by }}</td>
<td>{{ $appointment->created_at }}</td>
<td>{{ $appointment->updated_at }}</td>
<td>{{ $appointment->partner_id }}</td>
<td>{{ $appointment->accrued_loyalty_point }}</td>
<td>{{ $appointment->transaction_id }}</td>
<td>{{ $appointment->platform_id }}</td>
<td>{{ $appointment->double_check_payment }}</td>
<td>{{ $appointment->double_check_data }}</td>
<td>{{ $appointment->double_check_payment_status }}</td>
<td>{{ $appointment->qoyod_invoice_id }}</td>
<td>{{ $appointment->qoyod_reference }}</td>
<td>{{ $appointment->platform_order_id }}</td>         <td>
           <a href="{{ route('appointments.show', $appointment->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $appointment->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-appointment_{{  $appointment->id }}"
                                                    action="{{ route('appointments.destroy', $appointment->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="46"  >{{$appointments->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                                                                                          
