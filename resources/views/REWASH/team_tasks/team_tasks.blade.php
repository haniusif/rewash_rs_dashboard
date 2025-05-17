@extends('layouts.layoutMaster')
@section('title', __('Team_tasks') )
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
                    document.getElementById('destroy-team_task_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Team_tasks') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.team_tasks.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Team_tasks') }}</h5>
                        @can('create team_tasks')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('team_tasks.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('team_tasks_id') }}</th>
<th  >{{ __('team_tasks_branch_id') }}</th>
<th  >{{ __('team_tasks_team_id') }}</th>
<th  >{{ __('team_tasks_user_id') }}</th>
<th  >{{ __('team_tasks_task') }}</th>
<th  >{{ __('team_tasks_status_id') }}</th>
<th  >{{ __('team_tasks_appointment_id') }}</th>
<th  >{{ __('team_tasks_appointment_schedule_id') }}</th>
<th  >{{ __('team_tasks_created_at') }}</th>
<th  >{{ __('team_tasks_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($team_tasks as $key => $team_task)
            <tr>
            <td>{{ $team_task->firstItem + $key + 1 }}</td>
            
<td>{{ $team_task->id }}</td>
<td>{{ $team_task->branch_id }}</td>
<td>{{ $team_task->team_id }}</td>
<td>{{ $team_task->user_id }}</td>
<td>{{ $team_task->task }}</td>
<td>{{ $team_task->status_id }}</td>
<td>{{ $team_task->appointment_id }}</td>
<td>{{ $team_task->appointment_schedule_id }}</td>
<td>{{ $team_task->created_at }}</td>
<td>{{ $team_task->updated_at }}</td>         <td>
           <a href="{{ route('team_tasks.show', $team_task->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $team_task->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-team_task_{{  $team_task->id }}"
                                                    action="{{ route('team_tasks.destroy', $team_task->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="11"  >{{$team_tasks->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                    
