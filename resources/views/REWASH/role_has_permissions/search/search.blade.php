 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('role_has_permissions.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="role_has_permissions-list-permission_id">{{ __('role_has_permissions_permission_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="permission_id" type="number" value="{{ request()->permission_id }}"  placeholder="{{ __('role_has_permissions_permission_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="role_has_permissions-list-role_id">{{ __('role_has_permissions_role_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="role_id" type="number" value="{{ request()->role_id }}"  placeholder="{{ __('role_has_permissions_role_id') }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('role_has_permissions.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
