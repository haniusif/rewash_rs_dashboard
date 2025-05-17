@extends('layouts.layoutMaster')
@section('title', __('Contacts') )
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
                    document.getElementById('destroy-contact_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Contacts') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.contacts.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Contacts') }}</h5>
                        @can('create contacts')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('contacts.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('contacts_id') }}</th>
<th  >{{ __('contacts_branch_id') }}</th>
<th  >{{ __('contacts_c_name') }}</th>
<th  >{{ __('contacts_logo') }}</th>
<th  >{{ __('contacts_mobile') }}</th>
<th  >{{ __('contacts_phone') }}</th>
<th  >{{ __('contacts_address') }}</th>
<th  >{{ __('contacts_email') }}</th>
<th  >{{ __('contacts_website') }}</th>
<th  >{{ __('contacts_created_at') }}</th>
<th  >{{ __('contacts_updated_at') }}</th>
<th  >{{ __('contacts_logo_two') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($contacts as $key => $contact)
            <tr>
            <td>{{ $contact->firstItem + $key + 1 }}</td>
            
<td>{{ $contact->id }}</td>
<td>{{ $contact->branch_id }}</td>
<td>{{ $contact->c_name }}</td>
<td>
<img src="{{ $contact->logo }}" higth="100" width="100">
 </td>
<td>{{ $contact->mobile }}</td>
<td>{{ $contact->phone }}</td>
<td>{{ $contact->address }}</td>
<td>{{ $contact->email }}</td>
<td>{{ $contact->website }}</td>
<td>{{ $contact->created_at }}</td>
<td>{{ $contact->updated_at }}</td>
<td>{{ $contact->logo_two }}</td>         <td>
           <a href="{{ route('contacts.show', $contact->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $contact->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-contact_{{  $contact->id }}"
                                                    action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="13"  >{{$contacts->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                        
