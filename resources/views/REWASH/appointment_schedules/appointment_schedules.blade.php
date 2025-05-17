@extends('layouts.layoutMaster')
@section('title', __('Appointment_schedules') )
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
                    document.getElementById('destroy-appointment_schedule_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Appointment_schedules') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.appointment_schedules.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Appointment_schedules') }}</h5>
                        @can('create appointment_schedules')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('appointment_schedules.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('appointment_schedules_id') }}</th>
<th  >{{ __('appointment_schedules_branch_id') }}</th>
<th  >{{ __('appointment_schedules_zone_id') }}</th>
<th  >{{ __('appointment_schedules_appointment_id') }}</th>
<th  >{{ __('appointment_schedules_appointment_schedule_status_id') }}</th>
<th  >{{ __('appointment_schedules_user_id') }}</th>
<th  >{{ __('appointment_schedules_appointment_date') }}</th>
<th  >{{ __('appointment_schedules_is_appointment_date_changed') }}</th>
<th  >{{ __('appointment_schedules_slot_id') }}</th>
<th  >{{ __('appointment_schedules_neighborhood_id') }}</th>
<th  >{{ __('appointment_schedules_location') }}</th>
<th  >{{ __('appointment_schedules_address') }}</th>
<th  >{{ __('appointment_schedules_is_location_changed') }}</th>
<th  >{{ __('appointment_schedules_notes') }}</th>
<th  >{{ __('appointment_schedules_feedback') }}</th>
<th  >{{ __('appointment_schedules_is_scheduled') }}</th>
<th  >{{ __('appointment_schedules_can_cancel') }}</th>
<th  >{{ __('appointment_schedules_can_reschedule') }}</th>
<th  >{{ __('appointment_schedules_can_rate') }}</th>
<th  >{{ __('appointment_schedules_can_change_location') }}</th>
<th  >{{ __('appointment_schedules_can_track_worker') }}</th>
<th  >{{ __('appointment_schedules_created_at') }}</th>
<th  >{{ __('appointment_schedules_updated_at') }}</th>
<th  >{{ __('appointment_schedules_in_process') }}</th>
<th  >{{ __('appointment_schedules_is_completed') }}</th>
<th  >{{ __('appointment_schedules_worker_status_id') }}</th>
<th  >{{ __('appointment_schedules_e_washing_time') }}</th>
<th  >{{ __('appointment_schedules_go_to_client') }}</th>
<th  >{{ __('appointment_schedules_arrived_and_cancel_time') }}</th>
<th  >{{ __('appointment_schedules_start_wash_time') }}</th>
<th  >{{ __('appointment_schedules_finish_wash_time') }}</th>
<th  >{{ __('appointment_schedules_cancel_wash_time') }}</th>
<th  >{{ __('appointment_schedules_is_skip_rate') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($appointment_schedules as $key => $appointment_schedule)
            <tr>
            <td>{{ $appointment_schedule->firstItem + $key + 1 }}</td>
            
<td>{{ $appointment_schedule->id }}</td>
<td>{{ $appointment_schedule->branch_id }}</td>
<td>{{ $appointment_schedule->zone_id }}</td>
<td>{{ $appointment_schedule->appointment_id }}</td>
<td>{{ $appointment_schedule->appointment_schedule_status_id }}</td>
<td>{{ $appointment_schedule->user_id }}</td>
<td>{{ $appointment_schedule->appointment_date }}</td>
<td>{{ $appointment_schedule->is_appointment_date_changed }}</td>
<td>{{ $appointment_schedule->slot_id }}</td>
<td>{{ $appointment_schedule->neighborhood_id }}</td>
<td>{{ $appointment_schedule->location }}</td>
<td>{{ $appointment_schedule->address }}</td>
<td>{{ $appointment_schedule->is_location_changed }}</td>
<td>{{ $appointment_schedule->notes }}</td>
<td>{{ $appointment_schedule->feedback }}</td>
<td>{{ $appointment_schedule->is_scheduled }}</td>
<td>{{ $appointment_schedule->can_cancel }}</td>
<td>{{ $appointment_schedule->can_reschedule }}</td>
<td>{{ $appointment_schedule->can_rate }}</td>
<td>{{ $appointment_schedule->can_change_location }}</td>
<td>{{ $appointment_schedule->can_track_worker }}</td>
<td>{{ $appointment_schedule->created_at }}</td>
<td>{{ $appointment_schedule->updated_at }}</td>
<td>{{ $appointment_schedule->in_process }}</td>
<td>{{ $appointment_schedule->is_completed }}</td>
<td>{{ $appointment_schedule->worker_status_id }}</td>
<td>{{ $appointment_schedule->e_washing_time }}</td>
<td>{{ $appointment_schedule->go_to_client }}</td>
<td>{{ $appointment_schedule->arrived_and_cancel_time }}</td>
<td>{{ $appointment_schedule->start_wash_time }}</td>
<td>{{ $appointment_schedule->finish_wash_time }}</td>
<td>{{ $appointment_schedule->cancel_wash_time }}</td>
<td>{{ $appointment_schedule->is_skip_rate }}</td>         <td>
           <a href="{{ route('appointment_schedules.show', $appointment_schedule->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $appointment_schedule->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-appointment_schedule_{{  $appointment_schedule->id }}"
                                                    action="{{ route('appointment_schedules.destroy', $appointment_schedule->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="34"  >{{$appointment_schedules->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                                                                  
