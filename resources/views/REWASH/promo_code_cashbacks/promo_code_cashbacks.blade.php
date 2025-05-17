@extends('layouts.layoutMaster')
@section('title', __('Promo_code_cashbacks') )
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
                    document.getElementById('destroy-promo_code_cashback_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Promo_code_cashbacks') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.promo_code_cashbacks.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Promo_code_cashbacks') }}</h5>
                        @can('create promo_code_cashbacks')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('promo_code_cashbacks.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('promo_code_cashbacks_id') }}</th>
<th  >{{ __('promo_code_cashbacks_promo_code_id') }}</th>
<th  >{{ __('promo_code_cashbacks_cashback_type') }}</th>
<th  >{{ __('promo_code_cashbacks_cashback_value') }}</th>
<th  >{{ __('promo_code_cashbacks_min_order_amount') }}</th>
<th  >{{ __('promo_code_cashbacks_max_cashback_amount') }}</th>
<th  >{{ __('promo_code_cashbacks_is_active') }}</th>
<th  >{{ __('promo_code_cashbacks_start_date') }}</th>
<th  >{{ __('promo_code_cashbacks_end_date') }}</th>
<th  >{{ __('promo_code_cashbacks_max_uses_per_user') }}</th>
<th  >{{ __('promo_code_cashbacks_cashback_method') }}</th>
<th  >{{ __('promo_code_cashbacks_cashback_expiry') }}</th>
<th  >{{ __('promo_code_cashbacks_created_at') }}</th>
<th  >{{ __('promo_code_cashbacks_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($promo_code_cashbacks as $key => $promo_code_cashback)
            <tr>
            <td>{{ $promo_code_cashback->firstItem + $key + 1 }}</td>
            
<td>{{ $promo_code_cashback->id }}</td>
<td>{{ $promo_code_cashback->promo_code_id }}</td>
<td>{{ $promo_code_cashback->cashback_type }}</td>
<td>{{ $promo_code_cashback->cashback_value }}</td>
<td>{{ $promo_code_cashback->min_order_amount }}</td>
<td>{{ $promo_code_cashback->max_cashback_amount }}</td>
<td>{{ ($promo_code_cashback->is_active == 1) ? __("YES") : __("NO") }}</td>
<td>{{ $promo_code_cashback->start_date }}</td>
<td>{{ $promo_code_cashback->end_date }}</td>
<td>{{ $promo_code_cashback->max_uses_per_user }}</td>
<td>{{ $promo_code_cashback->cashback_method }}</td>
<td>{{ $promo_code_cashback->cashback_expiry }}</td>
<td>{{ $promo_code_cashback->created_at }}</td>
<td>{{ $promo_code_cashback->updated_at }}</td>         <td>
           <a href="{{ route('promo_code_cashbacks.show', $promo_code_cashback->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $promo_code_cashback->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-promo_code_cashback_{{  $promo_code_cashback->id }}"
                                                    action="{{ route('promo_code_cashbacks.destroy', $promo_code_cashback->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="15"  >{{$promo_code_cashbacks->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                            
