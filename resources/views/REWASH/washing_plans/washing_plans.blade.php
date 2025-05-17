@extends('layouts.layoutMaster')
@section('title', __('Washing_plans') )
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
                    document.getElementById('destroy-washing_plan_'+id).submit();

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
            <li class="breadcrumb-item active">{{ __('Washing_plans') }}
            </li>
        </ol>
    </div>
     @include('_partials.alerts')
     @include('REWASH.washing_plans.search.search')
    <div class="col-12">
    <div class="card">
                    <div class="card-body">
                      <div class="card-title header-elements">
                        <h5 class="m-0 me-2">{{ __('Washing_plans') }}</h5>
                        @can('create washing_plans')
                        <div class="card-title-elements ms-auto">
                         <a  href="{{ route('washing_plans.create') }}" class="btn btn-xs btn-primary waves-effect waves-light">
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

<th  >{{ __('washing_plans_id') }}</th>
<th  >{{ __('washing_plans_branch_id') }}</th>
<th  >{{ __('washing_plans_name') }}</th>
<th  >{{ __('washing_plans_en_name') }}</th>
<th  >{{ __('washing_plans_subscription_package') }}</th>
<th  >{{ __('washing_plans_en_subscription_package') }}</th>
<th  >{{ __('washing_plans_number_of_washes') }}</th>
<th  >{{ __('washing_plans_validity_days') }}</th>
<th  >{{ __('washing_plans_price') }}</th>
<th  >{{ __('washing_plans_image') }}</th>
<th  >{{ __('washing_plans_washing_plan_type_id') }}</th>
<th  >{{ __('washing_plans_is_active') }}</th>
<th  >{{ __('washing_plans_show_in_home') }}</th>
<th  >{{ __('washing_plans_description') }}</th>
<th  >{{ __('washing_plans_en_description') }}</th>
<th  >{{ __('washing_plans_created_at') }}</th>
<th  >{{ __('washing_plans_updated_at') }}</th>
<th  >{{ __('washing_plans_loyalty_points') }}</th>
<th  >{{ __('washing_plans_is_offer') }}</th>
<th  >{{ __('washing_plans_with_tabby') }}</th> <th >{{ __('Action') }}</th>
    </tr>
     </thead>
          <tbody>
          @foreach ($washing_plans as $key => $washing_plan)
            <tr>
            <td>{{ $washing_plan->firstItem + $key + 1 }}</td>
            
<td>{{ $washing_plan->id }}</td>
<td>{{ $washing_plan->branch_id }}</td>
<td>{{ $washing_plan->name }}</td>
<td>{{ $washing_plan->en_name }}</td>
<td>{{ $washing_plan->subscription_package }}</td>
<td>{{ $washing_plan->en_subscription_package }}</td>
<td>{{ $washing_plan->number_of_washes }}</td>
<td>{{ $washing_plan->validity_days }}</td>
<td>{{ $washing_plan->price }}</td>
<td>
<img src="{{ $washing_plan->image }}" higth="100" width="100">
 </td>
<td>{{ $washing_plan->washing_plan_type_id }}</td>
<td>{{ ($washing_plan->is_active == 1) ? __("YES") : __("NO") }}</td>
<td>{{ $washing_plan->show_in_home }}</td>
<td>{{ $washing_plan->description }}</td>
<td>{{ $washing_plan->en_description }}</td>
<td>{{ $washing_plan->created_at }}</td>
<td>{{ $washing_plan->updated_at }}</td>
<td>{{ $washing_plan->loyalty_points }}</td>
<td>{{ $washing_plan->is_offer }}</td>
<td>{{ $washing_plan->with_tabby }}</td>         <td>
           <a href="{{ route('washing_plans.show', $washing_plan->id) }}"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="ti ti-eye"></i></a>
            <button value="{{  $washing_plan->id }}" class="btn btn-danger mr-1 mb-1 btn-sm "  onclick="showConfirmation(this)"   ><i class="ti ti-trash"></i></button>
                                                <form id="destroy-washing_plan_{{  $washing_plan->id }}"
                                                    action="{{ route('washing_plans.destroy', $washing_plan->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
           </td>
        </tr>
 @endforeach
   </tbody>
        <tfoot>
       <tr><td      colspan="21"  >{{$washing_plans->links("pagination::bootstrap-4")}} </td></tr>
        </tfoot>
</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @stop
                                        
