 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('appointment_users.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_users-list-id">{{ __('appointment_users_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('appointment_users_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_users-list-branch_id">{{ __('appointment_users_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('appointment_users_branch_id') }}"  />

                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_users-list-user_id">{{ __('appointment_users_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="user_id"  class="form-control" id="appointment_users-list-user_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($users as $user)
                             <option   @selected(request()->user_id == $user->id)     value="{{ $user->id }}" >{{ $user->branch_id }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>




                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_users-list-appointment_id">{{ __('appointment_users_appointment_id') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="appointment_id"  class="form-control" id="appointment_users-list-appointment_id">
                                                        <option value="all">{{ __('All') }}</option>

                                                       @foreach($appointments as $appointment)
                             <option   @selected(request()->appointment_id == $appointment->id)     value="{{ $appointment->id }}" >{{ $appointment->branch_id }}</option>
                             @endforeach

                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_users-list-discount">{{ __('appointment_users_discount') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="discount" value="{{ request()->discount }}"  type="text" placeholder="{{ __('appointment_users_discount') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_users-list-advance">{{ __('appointment_users_advance') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="advance" value="{{ request()->advance }}"  type="text" placeholder="{{ __('appointment_users_advance') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_users-list-payment_method_id">{{ __('appointment_users_payment_method_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="payment_method_id" type="number" value="{{ request()->payment_method_id }}"  placeholder="{{ __('appointment_users_payment_method_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_users-list-remark">{{ __('appointment_users_remark') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="remark" value="{{ request()->remark }}"  type="text" placeholder="{{ __('appointment_users_remark') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_users-list-created_at">{{ __('appointment_users_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_users-list-updated_at">{{ __('appointment_users_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('appointment_users.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
