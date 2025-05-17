@extends('layouts.layoutMaster')
@section('title', __('Worker_notifications') )
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
                    document.getElementById('destroy-worker_notification_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Worker_notifications') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.worker_notifications.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Worker_notifications') }}</h5>
                        @can('create worker_notifications')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('worker_notifications.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('worker_notifications_id') }}</th>
<th  >{{ __('worker_notifications_team_id') }}</th>
<th  >{{ __('worker_notifications_type') }}</th>
<th  >{{ __('worker_notifications_message') }}</th>
<th  >{{ __('worker_notifications_amount') }}</th>
<th  >{{ __('worker_notifications_image_path') }}</th>
<th  >{{ __('worker_notifications_created_at') }}</th>
<th  >{{ __('worker_notifications_updated_at') }}</th>
<th  >{{ __('worker_notifications_title') }}</th>
<th  >{{ __('worker_notifications_user_id') }}</th>
<th  >{{ __('worker_notifications_is_read') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($worker_notifications as $key => $worker_notification)
            <tr>
            <td>{{ $worker_notification->firstItem + $key + 1 }}</td>
            
<td>{{ $worker_notification->id }}</td>
<td>{{ $worker_notification->team_id }}</td>
<td>{{ $worker_notification->type }}</td>
<td>{{ $worker_notification->message }}</td>
<td>{{ $worker_notification->amount }}</td>
<td>{{ $worker_notification->image_path }}</td>
<td>{{ $worker_notification->created_at }}</td>
<td>{{ $worker_notification->updated_at }}</td>
<td>{{ $worker_notification->title }}</td>
<td>{{ $worker_notification->user_id }}</td>
<td>{{ $worker_notification->is_read }}</td>         <td>
           <a href="{{ route('worker_notifications.show', $worker_notification->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $worker_notification->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-worker_notification_{{  $worker_notification->id }}"
                                                    action="{{ route('worker_notifications.destroy', $worker_notification->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="12"  >{{$worker_notifications->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                      
