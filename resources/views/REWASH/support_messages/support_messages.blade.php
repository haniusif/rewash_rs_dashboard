@extends('layouts.layoutMaster')
@section('title', __('Support_messages') )
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
                    document.getElementById('destroy-support_message_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Support_messages') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.support_messages.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Support_messages') }}</h5>
                        @can('create support_messages')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('support_messages.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('support_messages_id') }}</th>
<th  >{{ __('support_messages_branch_id') }}</th>
<th  >{{ __('support_messages_user_id') }}</th>
<th  >{{ __('support_messages_email') }}</th>
<th  >{{ __('support_messages_message') }}</th>
<th  >{{ __('support_messages_status') }}</th>
<th  >{{ __('support_messages_created_at') }}</th>
<th  >{{ __('support_messages_updated_at') }}</th>
<th  >{{ __('support_messages_updated_by') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($support_messages as $key => $support_message)
            <tr>
            <td>{{ $support_message->firstItem + $key + 1 }}</td>
            
<td>{{ $support_message->id }}</td>
<td>{{ $support_message->branch_id }}</td>
<td>{{ $support_message->user_id }}</td>
<td>{{ $support_message->email }}</td>
<td>{{ $support_message->message }}</td>
<td>{{ $support_message->status }}</td>
<td>{{ $support_message->created_at }}</td>
<td>{{ $support_message->updated_at }}</td>
<td>{{ $support_message->updated_by }}</td>         <td>
           <a href="{{ route('support_messages.show', $support_message->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $support_message->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-support_message_{{  $support_message->id }}"
                                                    action="{{ route('support_messages.destroy', $support_message->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="10"  >{{$support_messages->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                  
