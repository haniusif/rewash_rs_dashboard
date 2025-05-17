@extends('layouts.layoutMaster')
@section('title', __('Gift_appointment_schedules') )
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
                    document.getElementById('destroy-gift_appointment_schedule_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Gift_appointment_schedules') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.gift_appointment_schedules.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Gift_appointment_schedules') }}</h5>
                        @can('create gift_appointment_schedules')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('gift_appointment_schedules.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('gift_appointment_schedules_id') }}</th>
<th  >{{ __('gift_appointment_schedules_branch_id') }}</th>
<th  >{{ __('gift_appointment_schedules_user_id') }}</th>
<th  >{{ __('gift_appointment_schedules_appointment_date') }}</th>
<th  >{{ __('gift_appointment_schedules_slot_id') }}</th>
<th  >{{ __('gift_appointment_schedules_receiver_name') }}</th>
<th  >{{ __('gift_appointment_schedules_receiver_phone_number') }}</th>
<th  >{{ __('gift_appointment_schedules_receiver_event') }}</th>
<th  >{{ __('gift_appointment_schedules_neighborhood_id') }}</th>
<th  >{{ __('gift_appointment_schedules_number_of_vehicles') }}</th>
<th  >{{ __('gift_appointment_schedules_promo_code_id') }}</th>
<th  >{{ __('gift_appointment_schedules_payment_mode_id') }}</th>
<th  >{{ __('gift_appointment_schedules_total_price') }}</th>
<th  >{{ __('gift_appointment_schedules_notes') }}</th>
<th  >{{ __('gift_appointment_schedules_created_at') }}</th>
<th  >{{ __('gift_appointment_schedules_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($gift_appointment_schedules as $key => $gift_appointment_schedule)
            <tr>
            <td>{{ $gift_appointment_schedule->firstItem + $key + 1 }}</td>
            
<td>{{ $gift_appointment_schedule->id }}</td>
<td>{{ $gift_appointment_schedule->branch_id }}</td>
<td>{{ $gift_appointment_schedule->user_id }}</td>
<td>{{ $gift_appointment_schedule->appointment_date }}</td>
<td>{{ $gift_appointment_schedule->slot_id }}</td>
<td>{{ $gift_appointment_schedule->receiver_name }}</td>
<td>{{ $gift_appointment_schedule->receiver_phone_number }}</td>
<td>{{ $gift_appointment_schedule->receiver_event }}</td>
<td>{{ $gift_appointment_schedule->neighborhood_id }}</td>
<td>{{ $gift_appointment_schedule->number_of_vehicles }}</td>
<td>{{ $gift_appointment_schedule->promo_code_id }}</td>
<td>{{ $gift_appointment_schedule->payment_mode_id }}</td>
<td>{{ $gift_appointment_schedule->total_price }}</td>
<td>{{ $gift_appointment_schedule->notes }}</td>
<td>{{ $gift_appointment_schedule->created_at }}</td>
<td>{{ $gift_appointment_schedule->updated_at }}</td>         <td>
           <a href="{{ route('gift_appointment_schedules.show', $gift_appointment_schedule->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $gift_appointment_schedule->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-gift_appointment_schedule_{{  $gift_appointment_schedule->id }}"
                                                    action="{{ route('gift_appointment_schedules.destroy', $gift_appointment_schedule->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="17"  >{{$gift_appointment_schedules->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                                
