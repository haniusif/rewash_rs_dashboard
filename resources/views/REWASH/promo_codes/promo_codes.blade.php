@extends('layouts.layoutMaster')
@section('title', __('Promo_codes') )
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
                    document.getElementById('destroy-promo_code_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Promo_codes') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.promo_codes.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Promo_codes') }}</h5>
                        @can('create promo_codes')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('promo_codes.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('promo_codes_id') }}</th>
<th  >{{ __('promo_codes_branch_id') }}</th>
<th  >{{ __('promo_codes_promo_code') }}</th>
<th  >{{ __('promo_codes_is_unlimited') }}</th>
<th  >{{ __('promo_codes_number_of_users') }}</th>
<th  >{{ __('promo_codes_discount_value') }}</th>
<th  >{{ __('promo_codes_discount_type') }}</th>
<th  >{{ __('promo_codes_is_active') }}</th>
<th  >{{ __('promo_codes_validity_time_from') }}</th>
<th  >{{ __('promo_codes_validity_time_to') }}</th>
<th  >{{ __('promo_codes_is_one_user') }}</th>
<th  >{{ __('promo_codes_created_at') }}</th>
<th  >{{ __('promo_codes_updated_at') }}</th>
<th  >{{ __('promo_codes_is_cashback') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($promo_codes as $key => $promo_code)
            <tr>
            <td>{{ $promo_code->firstItem + $key + 1 }}</td>
            
<td>{{ $promo_code->id }}</td>
<td>{{ $promo_code->branch_id }}</td>
<td>{{ $promo_code->promo_code }}</td>
<td>{{ $promo_code->is_unlimited }}</td>
<td>{{ $promo_code->number_of_users }}</td>
<td>{{ $promo_code->discount_value }}</td>
<td>{{ $promo_code->discount_type }}</td>
<td>{{ ($promo_code->is_active == 1) ? __("YES") : __("NO") }}</td>
<td>{{ $promo_code->validity_time_from }}</td>
<td>{{ $promo_code->validity_time_to }}</td>
<td>{{ $promo_code->is_one_user }}</td>
<td>{{ $promo_code->created_at }}</td>
<td>{{ $promo_code->updated_at }}</td>
<td>{{ $promo_code->is_cashback }}</td>         <td>
           <a href="{{ route('promo_codes.show', $promo_code->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $promo_code->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-promo_code_{{  $promo_code->id }}"
                                                    action="{{ route('promo_codes.destroy', $promo_code->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="15"  >{{$promo_codes->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                            
