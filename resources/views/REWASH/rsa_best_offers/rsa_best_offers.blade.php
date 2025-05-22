@extends('layouts.layoutMaster')
@section('title', __('Rsa_best_offers') )
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
                    document.getElementById('destroy-rsa_best_offer_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Rsa_best_offers') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.rsa_best_offers.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Rsa_best_offers') }}</h5>
                        @can('create rsa_best_offers')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('rsa_best_offers.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('rsa_best_offers_id') }}</th>
<th  >{{ __('rsa_best_offers_title') }}</th>
<th  >{{ __('rsa_best_offers_en_title') }}</th>
<th  >{{ __('rsa_best_offers_image') }}</th>
<th  >{{ __('rsa_best_offers_advertisement_type') }}</th>
<th  >{{ __('rsa_best_offers_advertisement_data') }}</th>
<th  >{{ __('rsa_best_offers_is_active') }}</th>
<th  >{{ __('rsa_best_offers_sorting') }}</th>
<th  >{{ __('rsa_best_offers_created_at') }}</th>
<th  >{{ __('rsa_best_offers_updated_at') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($rsa_best_offers as $key => $rsa_best_offer)
            <tr>
            <td>{{ $rsa_best_offer->firstItem + $key + 1 }}</td>
            
<td>{{ $rsa_best_offer->id }}</td>
<td>{{ $rsa_best_offer->title }}</td>
<td>{{ $rsa_best_offer->en_title }}</td>
<td>
<img src="{{ $rsa_best_offer->image }}" higth="100" width="100">
 </td>
<td>{{ $rsa_best_offer->advertisement_type }}</td>
<td>{{ $rsa_best_offer->advertisement_data }}</td>
<td>{{ ($rsa_best_offer->is_active == 1) ? __("YES") : __("NO") }}</td>
<td>{{ $rsa_best_offer->sorting }}</td>
<td>{{ $rsa_best_offer->created_at }}</td>
<td>{{ $rsa_best_offer->updated_at }}</td>         <td>
           <a href="{{ route('rsa_best_offers.show', $rsa_best_offer->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $rsa_best_offer->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-rsa_best_offer_{{  $rsa_best_offer->id }}"
                                                    action="{{ route('rsa_best_offers.destroy', $rsa_best_offer->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="11"  >{{$rsa_best_offers->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                    
