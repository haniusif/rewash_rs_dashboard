@extends('layouts.layoutMaster')
@section('title', __('Appointment_users') )
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
                    document.getElementById('destroy-appointment_user_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Appointment_users') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.appointment_users.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Appointment_users') }}</h5>
                        @can('create appointment_users')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('appointment_users.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('appointment_users_id') }}</th>
<th  >{{ __('appointment_users_branch_id') }}</th>
<th  >{{ __('appointment_users_user_id') }}</th>
<th  >{{ __('appointment_users_appointment_id') }}</th>
<th  >{{ __('appointment_users_discount') }}</th>
<th  >{{ __('appointment_users_advance') }}</th>
<th  >{{ __('appointment_users_payment_method_id') }}</th>
<th  >{{ __('appointment_users_remark') }}</th>
<th  >{{ __('appointment_users_created_at') }}</th>
<th  >{{ __('appointment_users_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($appointment_users as $key => $appointment_user)
            <tr>
            <td>{{ $appointment_user->firstItem + $key + 1 }}</td>
            
<td>{{ $appointment_user->id }}</td>
<td>{{ $appointment_user->branch_id }}</td>
<td>{{ $appointment_user->user_id }}</td>
<td>{{ $appointment_user->appointment_id }}</td>
<td>{{ $appointment_user->discount }}</td>
<td>{{ $appointment_user->advance }}</td>
<td>{{ $appointment_user->payment_method_id }}</td>
<td>{{ $appointment_user->remark }}</td>
<td>{{ $appointment_user->created_at }}</td>
<td>{{ $appointment_user->updated_at }}</td>         <td>
           <a href="{{ route('appointment_users.show', $appointment_user->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $appointment_user->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-appointment_user_{{  $appointment_user->id }}"
                                                    action="{{ route('appointment_users.destroy', $appointment_user->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="11"  >{{$appointment_users->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                    
