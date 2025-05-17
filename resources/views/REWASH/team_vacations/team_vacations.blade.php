@extends('layouts.layoutMaster')
@section('title', __('Team_vacations') )
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
                    document.getElementById('destroy-team_vacation_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Team_vacations') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.team_vacations.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Team_vacations') }}</h5>
                        @can('create team_vacations')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('team_vacations.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('team_vacations_id') }}</th>
<th  >{{ __('team_vacations_team_id') }}</th>
<th  >{{ __('team_vacations_general_status_id') }}</th>
<th  >{{ __('team_vacations_start_date') }}</th>
<th  >{{ __('team_vacations_end_date') }}</th>
<th  >{{ __('team_vacations_reason') }}</th>
<th  >{{ __('team_vacations_attachments') }}</th>
<th  >{{ __('team_vacations_created_at') }}</th>
<th  >{{ __('team_vacations_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($team_vacations as $key => $team_vacation)
            <tr>
            <td>{{ $team_vacation->firstItem + $key + 1 }}</td>
            
<td>{{ $team_vacation->id }}</td>
<td>{{ $team_vacation->team_id }}</td>
<td>{{ $team_vacation->general_status_id }}</td>
<td>{{ $team_vacation->start_date }}</td>
<td>{{ $team_vacation->end_date }}</td>
<td>{{ $team_vacation->reason }}</td>
<td>{{ $team_vacation->attachments }}</td>
<td>{{ $team_vacation->created_at }}</td>
<td>{{ $team_vacation->updated_at }}</td>         <td>
           <a href="{{ route('team_vacations.show', $team_vacation->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $team_vacation->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-team_vacation_{{  $team_vacation->id }}"
                                                    action="{{ route('team_vacations.destroy', $team_vacation->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="10"  >{{$team_vacations->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                  
