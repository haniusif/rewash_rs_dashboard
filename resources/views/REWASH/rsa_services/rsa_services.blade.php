@extends('layouts.layoutMaster')
@section('title', __('Rsa_services') )
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
                    document.getElementById('destroy-rsa_service_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Rsa_services') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.rsa_services.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Rsa_services') }}</h5>
                        @can('create rsa_services')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('rsa_services.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('rsa_services_id') }}</th>
<th  >{{ __('rsa_services_category_id') }}</th>
<th  >{{ __('rsa_services_name') }}</th>
<th  >{{ __('rsa_services_en_name') }}</th>
<th  >{{ __('rsa_services_price') }}</th>
<th  >{{ __('rsa_services_promotional_price') }}</th>
<th  >{{ __('rsa_services_is_active') }}</th>
<th  >{{ __('rsa_services_sorting') }}</th>
<th  >{{ __('rsa_services_expected_duration') }}</th>
<th  >{{ __('rsa_services_created_at') }}</th>
<th  >{{ __('rsa_services_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($rsa_services as $key => $rsa_service)
            <tr>
            <td>{{ $rsa_service->firstItem + $key + 1 }}</td>
            
<td>{{ $rsa_service->id }}</td>
<td>{{ $rsa_service->category_id }}</td>
<td>{{ $rsa_service->name }}</td>
<td>{{ $rsa_service->en_name }}</td>
<td>{{ $rsa_service->price }}</td>
<td>{{ $rsa_service->promotional_price }}</td>
<td>{{ ($rsa_service->is_active == 1) ? __("YES") : __("NO") }}</td>
<td>{{ $rsa_service->sorting }}</td>
<td>{{ $rsa_service->expected_duration }}</td>
<td>{{ $rsa_service->created_at }}</td>
<td>{{ $rsa_service->updated_at }}</td>         <td>
           <a href="{{ route('rsa_services.show', $rsa_service->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $rsa_service->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-rsa_service_{{  $rsa_service->id }}"
                                                    action="{{ route('rsa_services.destroy', $rsa_service->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="12"  >{{$rsa_services->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                      
