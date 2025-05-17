 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('modules.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-id">{{ __('modules_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('modules_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-branch_id">{{ __('modules_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('modules_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-name">{{ __('modules_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="name" value="{{ request()->name }}"  type="text" placeholder="{{ __('modules_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-en_name">{{ __('modules_en_name') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="en_name" value="{{ request()->en_name }}"  type="text" placeholder="{{ __('modules_en_name') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-route">{{ __('modules_route') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="route" value="{{ request()->route }}"  type="text" placeholder="{{ __('modules_route') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-image">{{ __('modules_image') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="image" value="{{ request()->image }}"  type="text" placeholder="{{ __('modules_image') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-icon">{{ __('modules_icon') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="icon" value="{{ request()->icon }}"  type="text" placeholder="{{ __('modules_icon') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-parent_id">{{ __('modules_parent_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="parent_id" type="number" value="{{ request()->parent_id }}"  placeholder="{{ __('modules_parent_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-user_type_ids">{{ __('modules_user_type_ids') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_type_ids" value="{{ request()->user_type_ids }}"  type="text" placeholder="{{ __('modules_user_type_ids') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-app_type">{{ __('modules_app_type') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="app_type" value="{{ request()->app_type }}"  type="text" placeholder="{{ __('modules_app_type') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-sorting">{{ __('modules_sorting') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="sorting" type="number" value="{{ request()->sorting }}"  placeholder="{{ __('modules_sorting') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-is_active">{{ __('modules_is_active') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_active" class="form-control" id="modules-list-is_active">

                                                        <option value="all" @if(request()->is_active == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_active == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_active == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-created_at">{{ __('modules_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="modules-list-updated_at">{{ __('modules_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('modules.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
