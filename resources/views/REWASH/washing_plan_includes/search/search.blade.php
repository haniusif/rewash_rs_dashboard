 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('washing_plan_includes.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plan_includes-list-id">{{ __('washing_plan_includes_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('washing_plan_includes_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plan_includes-list-branch_id">{{ __('washing_plan_includes_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('washing_plan_includes_branch_id') }}"  />

                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plan_includes-list-washing_plan_id">{{ __('washing_plan_includes_washing_plan_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="washing_plan_id"  class="form-control" id="washing_plan_includes-list-washing_plan_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($washing_plans as $washing_plan)
                             <option   @selected(request()->washing_plan_id == $washing_plan->id)     value="{{ $washing_plan->id }}" >{{ $washing_plan->branch_id }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plan_includes-list-washing_plan_include">{{ __('washing_plan_includes_washing_plan_include') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="washing_plan_include" value="{{ request()->washing_plan_include }}"  type="text" placeholder="{{ __('washing_plan_includes_washing_plan_include') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plan_includes-list-en_washing_plan_include">{{ __('washing_plan_includes_en_washing_plan_include') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_washing_plan_include" value="{{ request()->en_washing_plan_include }}"  type="text" placeholder="{{ __('washing_plan_includes_en_washing_plan_include') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plan_includes-list-created_at">{{ __('washing_plan_includes_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plan_includes-list-updated_at">{{ __('washing_plan_includes_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plan_includes-list-additional_service_id">{{ __('washing_plan_includes_additional_service_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="additional_service_id" type="number" value="{{ request()->additional_service_id }}"  placeholder="{{ __('washing_plan_includes_additional_service_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="washing_plan_includes-list-additional_service_quantity">{{ __('washing_plan_includes_additional_service_quantity') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="additional_service_quantity" type="number" value="{{ request()->additional_service_quantity }}"  placeholder="{{ __('washing_plan_includes_additional_service_quantity') }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('washing_plan_includes.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
