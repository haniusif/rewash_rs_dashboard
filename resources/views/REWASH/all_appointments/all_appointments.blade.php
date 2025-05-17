@extends('layouts.layoutMaster')
@section('title', __('All_appointments') )
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
                    document.getElementById('destroy-all_appointment_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('All_appointments') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.all_appointments.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('All_appointments') }}</h5>
                        @can('create all_appointments')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('all_appointments.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('all_appointments_id') }}</th>
<th  >{{ __('all_appointments_zone_id') }}</th>
<th  >{{ __('all_appointments_zone_name') }}</th>
<th  >{{ __('all_appointments_user_id') }}</th>
<th  >{{ __('all_appointments_mobile') }}</th>
<th  >{{ __('all_appointments_number_of_vehicles') }}</th>
<th  >{{ __('all_appointments_vehicle_types_id') }}</th>
<th  >{{ __('all_appointments_vehicle_id') }}</th>
<th  >{{ __('all_appointments_vehicle_no') }}</th>
<th  >{{ __('all_appointments_washing_plan_id') }}</th>
<th  >{{ __('all_appointments_name') }}</th>
<th  >{{ __('all_appointments_washing_plan_price') }}</th>
<th  >{{ __('all_appointments_washing_plan_validity_date') }}</th>
<th  >{{ __('all_appointments_number_of_washes') }}</th>
<th  >{{ __('all_appointments_status_id') }}</th>
<th  >{{ __('all_appointments_status') }}</th>
<th  >{{ __('all_appointments_appointment_date') }}</th>
<th  >{{ __('all_appointments_slot_id') }}</th>
<th  >{{ __('all_appointments_location') }}</th>
<th  >{{ __('all_appointments_notes') }}</th>
<th  >{{ __('all_appointments_tax_avlue') }}</th>
<th  >{{ __('all_appointments_total_price') }}</th>
<th  >{{ __('all_appointments_total_price_befor_payment') }}</th>
<th  >{{ __('all_appointments_wallet_amount') }}</th>
<th  >{{ __('all_appointments_promo_code_id') }}</th>
<th  >{{ __('all_appointments_promo_code') }}</th>
<th  >{{ __('all_appointments_discount_type') }}</th>
<th  >{{ __('all_appointments_discount_value') }}</th>
<th  >{{ __('all_appointments_promo_code_discount_value') }}</th>
<th  >{{ __('all_appointments_additional_service_total') }}</th>
<th  >{{ __('all_appointments_payment_mode_id') }}</th>
<th  >{{ __('all_appointments_payment_mode_name') }}</th>
<th  >{{ __('all_appointments_payment_status_id') }}</th>
<th  >{{ __('all_appointments_payment_status_name') }}</th>
<th  >{{ __('all_appointments_payment_time') }}</th>
<th  >{{ __('all_appointments_created_by') }}</th>
<th  >{{ __('all_appointments_creator') }}</th>
<th  >{{ __('all_appointments_created_at') }}</th>
<th  >{{ __('all_appointments_updated_at') }}</th>
<th  >{{ __('all_appointments_partner_id') }}</th>
<th  >{{ __('all_appointments_accrued_loyalty_point') }}</th>
<th  >{{ __('all_appointments_transaction_id') }}</th>
<th  >{{ __('all_appointments_platform_id') }}</th>
<th  >{{ __('all_appointments_platform_name') }}</th>
<th  >{{ __('all_appointments_double_check_payment') }}</th>
<th  >{{ __('all_appointments_double_check_data') }}</th>
<th  >{{ __('all_appointments_double_check_payment_status') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($all_appointments as $key => $all_appointment)
            <tr>
            <td>{{ $all_appointment->firstItem + $key + 1 }}</td>
            
<td>{{ $all_appointment->id }}</td>
<td>{{ $all_appointment->zone_id }}</td>
<td>{{ $all_appointment->zone_name }}</td>
<td>{{ $all_appointment->user_id }}</td>
<td>{{ $all_appointment->mobile }}</td>
<td>{{ $all_appointment->number_of_vehicles }}</td>
<td>{{ $all_appointment->vehicle_types_id }}</td>
<td>{{ $all_appointment->vehicle_id }}</td>
<td>{{ $all_appointment->vehicle_no }}</td>
<td>{{ $all_appointment->washing_plan_id }}</td>
<td>{{ $all_appointment->name }}</td>
<td>{{ $all_appointment->washing_plan_price }}</td>
<td>{{ $all_appointment->washing_plan_validity_date }}</td>
<td>{{ $all_appointment->number_of_washes }}</td>
<td>{{ $all_appointment->status_id }}</td>
<td>{{ $all_appointment->status }}</td>
<td>{{ $all_appointment->appointment_date }}</td>
<td>{{ $all_appointment->slot_id }}</td>
<td>{{ $all_appointment->location }}</td>
<td>{{ $all_appointment->notes }}</td>
<td>{{ $all_appointment->tax_avlue }}</td>
<td>{{ $all_appointment->total_price }}</td>
<td>{{ $all_appointment->total_price_befor_payment }}</td>
<td>{{ $all_appointment->wallet_amount }}</td>
<td>{{ $all_appointment->promo_code_id }}</td>
<td>{{ $all_appointment->promo_code }}</td>
<td>{{ $all_appointment->discount_type }}</td>
<td>{{ $all_appointment->discount_value }}</td>
<td>{{ $all_appointment->promo_code_discount_value }}</td>
<td>{{ $all_appointment->additional_service_total }}</td>
<td>{{ $all_appointment->payment_mode_id }}</td>
<td>{{ $all_appointment->payment_mode_name }}</td>
<td>{{ $all_appointment->payment_status_id }}</td>
<td>{{ $all_appointment->payment_status_name }}</td>
<td>{{ $all_appointment->payment_time }}</td>
<td>{{ $all_appointment->created_by }}</td>
<td>{{ $all_appointment->creator }}</td>
<td>{{ $all_appointment->created_at }}</td>
<td>{{ $all_appointment->updated_at }}</td>
<td>{{ $all_appointment->partner_id }}</td>
<td>{{ $all_appointment->accrued_loyalty_point }}</td>
<td>{{ $all_appointment->transaction_id }}</td>
<td>{{ $all_appointment->platform_id }}</td>
<td>{{ $all_appointment->platform_name }}</td>
<td>{{ $all_appointment->double_check_payment }}</td>
<td>{{ $all_appointment->double_check_data }}</td>
<td>{{ $all_appointment->double_check_payment_status }}</td>         <td>
           <a href="{{ route('all_appointments.show', $all_appointment->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $all_appointment->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-all_appointment_{{  $all_appointment->id }}"
                                                    action="{{ route('all_appointments.destroy', $all_appointment->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="48"  >{{$all_appointments->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                                                                                              
