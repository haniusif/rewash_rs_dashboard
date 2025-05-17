@extends('layouts.layoutMaster')
@section('title', __('User_apps_appointments') )
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
                    document.getElementById('destroy-user_apps_appointment_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('User_apps_appointments') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.user_apps_appointments.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('User_apps_appointments') }}</h5>
                        @can('create user_apps_appointments')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('user_apps_appointments.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('user_apps_appointments_id') }}</th>
<th  >{{ __('user_apps_appointments_name') }}</th>
<th  >{{ __('user_apps_appointments_mobile') }}</th>
<th  >{{ __('user_apps_appointments_zone_name') }}</th>
<th  >{{ __('user_apps_appointments_number_of_appointments') }}</th>
<th  >{{ __('user_apps_appointments_last_appointment_date') }}</th>
<th  >{{ __('user_apps_appointments_actual_balance') }}</th>
<th  >{{ __('user_apps_appointments_loyalty_points') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($user_apps_appointments as $key => $user_apps_appointment)
            <tr>
            <td>{{ $user_apps_appointment->firstItem + $key + 1 }}</td>
            
<td>{{ $user_apps_appointment->id }}</td>
<td>{{ $user_apps_appointment->name }}</td>
<td>{{ $user_apps_appointment->mobile }}</td>
<td>{{ $user_apps_appointment->zone_name }}</td>
<td>{{ $user_apps_appointment->number_of_appointments }}</td>
<td>{{ $user_apps_appointment->last_appointment_date }}</td>
<td>{{ $user_apps_appointment->actual_balance }}</td>
<td>{{ $user_apps_appointment->loyalty_points }}</td>         <td>
           <a href="{{ route('user_apps_appointments.show', $user_apps_appointment->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $user_apps_appointment->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-user_apps_appointment_{{  $user_apps_appointment->id }}"
                                                    action="{{ route('user_apps_appointments.destroy', $user_apps_appointment->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="9"  >{{$user_apps_appointments->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                
