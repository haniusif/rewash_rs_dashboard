@extends('layouts.layoutMaster')
@section('title', __('Additional_services') )
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
                    document.getElementById('destroy-additional_service_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Additional_services') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.additional_services.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Additional_services') }}</h5>
                        @can('create additional_services')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('additional_services.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('additional_services_id') }}</th>
<th  >{{ __('additional_services_branch_id') }}</th>
<th  >{{ __('additional_services_name') }}</th>
<th  >{{ __('additional_services_en_name') }}</th>
<th  >{{ __('additional_services_image') }}</th>
<th  >{{ __('additional_services_price') }}</th>
<th  >{{ __('additional_services_promotional_price') }}</th>
<th  >{{ __('additional_services_type') }}</th>
<th  >{{ __('additional_services_is_active') }}</th>
<th  >{{ __('additional_services_created_at') }}</th>
<th  >{{ __('additional_services_updated_at') }}</th>
<th  >{{ __('additional_services_loyalty_points') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($additional_services as $key => $additional_service)
            <tr>
            <td>{{ $additional_service->firstItem + $key + 1 }}</td>
            
<td>{{ $additional_service->id }}</td>
<td>{{ $additional_service->branch_id }}</td>
<td>{{ $additional_service->name }}</td>
<td>{{ $additional_service->en_name }}</td>
<td>
<img src="{{ $additional_service->image }}" higth="100" width="100">
 </td>
<td>{{ $additional_service->price }}</td>
<td>{{ $additional_service->promotional_price }}</td>
<td>{{ $additional_service->type }}</td>
<td>{{ ($additional_service->is_active == 1) ? __("YES") : __("NO") }}</td>
<td>{{ $additional_service->created_at }}</td>
<td>{{ $additional_service->updated_at }}</td>
<td>{{ $additional_service->loyalty_points }}</td>         <td>
           <a href="{{ route('additional_services.show', $additional_service->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $additional_service->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-additional_service_{{  $additional_service->id }}"
                                                    action="{{ route('additional_services.destroy', $additional_service->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="13"  >{{$additional_services->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                        
