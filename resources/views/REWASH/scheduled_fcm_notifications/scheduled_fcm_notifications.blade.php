@extends('layouts.layoutMaster')
@section('title', __('Scheduled_fcm_notifications') )
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
                    document.getElementById('destroy-scheduled_fcm_notification_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Scheduled_fcm_notifications') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.scheduled_fcm_notifications.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Scheduled_fcm_notifications') }}</h5>
                        @can('create scheduled_fcm_notifications')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('scheduled_fcm_notifications.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('scheduled_fcm_notifications_id') }}</th>
<th  >{{ __('scheduled_fcm_notifications_title') }}</th>
<th  >{{ __('scheduled_fcm_notifications_notification') }}</th>
<th  >{{ __('scheduled_fcm_notifications_start_date') }}</th>
<th  >{{ __('scheduled_fcm_notifications_end_date') }}</th>
<th  >{{ __('scheduled_fcm_notifications_time') }}</th>
<th  >{{ __('scheduled_fcm_notifications_neighborhood_ids') }}</th>
<th  >{{ __('scheduled_fcm_notifications_for_all_users') }}</th>
<th  >{{ __('scheduled_fcm_notifications_created_at') }}</th>
<th  >{{ __('scheduled_fcm_notifications_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($scheduled_fcm_notifications as $key => $scheduled_fcm_notification)
            <tr>
            <td>{{ $scheduled_fcm_notification->firstItem + $key + 1 }}</td>
            
<td>{{ $scheduled_fcm_notification->id }}</td>
<td>{{ $scheduled_fcm_notification->title }}</td>
<td>{{ $scheduled_fcm_notification->notification }}</td>
<td>{{ $scheduled_fcm_notification->start_date }}</td>
<td>{{ $scheduled_fcm_notification->end_date }}</td>
<td>{{ $scheduled_fcm_notification->time }}</td>
<td>{{ $scheduled_fcm_notification->neighborhood_ids }}</td>
<td>{{ $scheduled_fcm_notification->for_all_users }}</td>
<td>{{ $scheduled_fcm_notification->created_at }}</td>
<td>{{ $scheduled_fcm_notification->updated_at }}</td>         <td>
           <a href="{{ route('scheduled_fcm_notifications.show', $scheduled_fcm_notification->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $scheduled_fcm_notification->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-scheduled_fcm_notification_{{  $scheduled_fcm_notification->id }}"
                                                    action="{{ route('scheduled_fcm_notifications.destroy', $scheduled_fcm_notification->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="11"  >{{$scheduled_fcm_notifications->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                    
