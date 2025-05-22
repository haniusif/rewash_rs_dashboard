@extends('layouts.layoutMaster')
@section('title', __('Rsa_advertisements') )
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
                    document.getElementById('destroy-rsa_advertisement_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Rsa_advertisements') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.rsa_advertisements.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Rsa_advertisements') }}</h5>
                        @can('create rsa_advertisements')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('rsa_advertisements.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('rsa_advertisements_id') }}</th>
<th  >{{ __('rsa_advertisements_title') }}</th>
<th  >{{ __('rsa_advertisements_en_title') }}</th>
<th  >{{ __('rsa_advertisements_image') }}</th>
<th  >{{ __('rsa_advertisements_advertisement_type') }}</th>
<th  >{{ __('rsa_advertisements_advertisement_data') }}</th>
<th  >{{ __('rsa_advertisements_is_active') }}</th>
<th  >{{ __('rsa_advertisements_sorting') }}</th>
<th  >{{ __('rsa_advertisements_created_at') }}</th>
<th  >{{ __('rsa_advertisements_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($rsa_advertisements as $key => $rsa_advertisement)
            <tr>
            <td>{{ $rsa_advertisement->firstItem + $key + 1 }}</td>
            
<td>{{ $rsa_advertisement->id }}</td>
<td>{{ $rsa_advertisement->title }}</td>
<td>{{ $rsa_advertisement->en_title }}</td>
<td>
<img src="{{ $rsa_advertisement->image }}" higth="100" width="100">
 </td>
<td>{{ $rsa_advertisement->advertisement_type }}</td>
<td>{{ $rsa_advertisement->advertisement_data }}</td>
<td>{{ ($rsa_advertisement->is_active == 1) ? __("YES") : __("NO") }}</td>
<td>{{ $rsa_advertisement->sorting }}</td>
<td>{{ $rsa_advertisement->created_at }}</td>
<td>{{ $rsa_advertisement->updated_at }}</td>         <td>
           <a href="{{ route('rsa_advertisements.show', $rsa_advertisement->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $rsa_advertisement->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-rsa_advertisement_{{  $rsa_advertisement->id }}"
                                                    action="{{ route('rsa_advertisements.destroy', $rsa_advertisement->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="11"  >{{$rsa_advertisements->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                    
