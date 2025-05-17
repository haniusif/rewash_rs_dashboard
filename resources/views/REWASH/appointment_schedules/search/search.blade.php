 <div class="col-12">
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title">{{ __('Filters') }}</h4>
                <form action="{{ route('appointment_schedules.index') }}" method="GET">
                    <div class="row">

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-id">{{ __('appointment_schedules_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="id" type="number" value="{{ request()->id }}"  placeholder="{{ __('appointment_schedules_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-branch_id">{{ __('appointment_schedules_branch_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="branch_id" type="number" value="{{ request()->branch_id }}"  placeholder="{{ __('appointment_schedules_branch_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-zone_id">{{ __('appointment_schedules_zone_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="zone_id" type="number" value="{{ request()->zone_id }}"  placeholder="{{ __('appointment_schedules_zone_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-appointment_id">{{ __('appointment_schedules_appointment_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_id" type="number" value="{{ request()->appointment_id }}"  placeholder="{{ __('appointment_schedules_appointment_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-appointment_schedule_status_id">{{ __('appointment_schedules_appointment_schedule_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_schedule_status_id" type="number" value="{{ request()->appointment_schedule_status_id }}"  placeholder="{{ __('appointment_schedules_appointment_schedule_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-user_id">{{ __('appointment_schedules_user_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="user_id" type="number" value="{{ request()->user_id }}"  placeholder="{{ __('appointment_schedules_user_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-appointment_date">{{ __('appointment_schedules_appointment_date') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="appointment_date" type="date" value="{{ request()->appointment_date }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-is_appointment_date_changed">{{ __('appointment_schedules_is_appointment_date_changed') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_appointment_date_changed" class="form-control" id="appointment_schedules-list-is_appointment_date_changed">

                                                        <option value="all" @if(request()->is_appointment_date_changed == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_appointment_date_changed == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_appointment_date_changed == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-slot_id">{{ __('appointment_schedules_slot_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="slot_id" type="number" value="{{ request()->slot_id }}"  placeholder="{{ __('appointment_schedules_slot_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-neighborhood_id">{{ __('appointment_schedules_neighborhood_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="neighborhood_id" type="number" value="{{ request()->neighborhood_id }}"  placeholder="{{ __('appointment_schedules_neighborhood_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-location">{{ __('appointment_schedules_location') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="location" value="{{ request()->location }}"  type="text" placeholder="{{ __('appointment_schedules_location') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-address">{{ __('appointment_schedules_address') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="address" value="{{ request()->address }}"  type="text" placeholder="{{ __('appointment_schedules_address') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-is_location_changed">{{ __('appointment_schedules_is_location_changed') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_location_changed" class="form-control" id="appointment_schedules-list-is_location_changed">

                                                        <option value="all" @if(request()->is_location_changed == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_location_changed == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_location_changed == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-notes">{{ __('appointment_schedules_notes') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="notes" value="{{ request()->notes }}"  type="text" placeholder="{{ __('appointment_schedules_notes') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-feedback">{{ __('appointment_schedules_feedback') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="feedback" value="{{ request()->feedback }}"  type="text" placeholder="{{ __('appointment_schedules_feedback') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-is_scheduled">{{ __('appointment_schedules_is_scheduled') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="is_scheduled" type="number" value="{{ request()->is_scheduled }}"  placeholder="{{ __('appointment_schedules_is_scheduled') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-can_cancel">{{ __('appointment_schedules_can_cancel') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="can_cancel" class="form-control" id="appointment_schedules-list-can_cancel">

                                                        <option value="all" @if(request()->can_cancel == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->can_cancel == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->can_cancel == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-can_reschedule">{{ __('appointment_schedules_can_reschedule') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="can_reschedule" class="form-control" id="appointment_schedules-list-can_reschedule">

                                                        <option value="all" @if(request()->can_reschedule == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->can_reschedule == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->can_reschedule == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-can_rate">{{ __('appointment_schedules_can_rate') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="can_rate" type="number" value="{{ request()->can_rate }}"  placeholder="{{ __('appointment_schedules_can_rate') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-can_change_location">{{ __('appointment_schedules_can_change_location') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="can_change_location" class="form-control" id="appointment_schedules-list-can_change_location">

                                                        <option value="all" @if(request()->can_change_location == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->can_change_location == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->can_change_location == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-can_track_worker">{{ __('appointment_schedules_can_track_worker') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="can_track_worker" class="form-control" id="appointment_schedules-list-can_track_worker">

                                                        <option value="all" @if(request()->can_track_worker == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->can_track_worker == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->can_track_worker == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-created_at">{{ __('appointment_schedules_created_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="created_at" type="date" value="{{ request()->created_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-updated_at">{{ __('appointment_schedules_updated_at') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="updated_at" type="date" value="{{ request()->updated_at }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-in_process">{{ __('appointment_schedules_in_process') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="in_process" class="form-control" id="appointment_schedules-list-in_process">

                                                        <option value="all" @if(request()->in_process == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->in_process == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->in_process == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-is_completed">{{ __('appointment_schedules_is_completed') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_completed" class="form-control" id="appointment_schedules-list-is_completed">

                                                        <option value="all" @if(request()->is_completed == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_completed == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_completed == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-worker_status_id">{{ __('appointment_schedules_worker_status_id') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="worker_status_id" type="number" value="{{ request()->worker_status_id }}"  placeholder="{{ __('appointment_schedules_worker_status_id') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-e_washing_time">{{ __('appointment_schedules_e_washing_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="e_washing_time" type="number" value="{{ request()->e_washing_time }}"  placeholder="{{ __('appointment_schedules_e_washing_time') }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-go_to_client">{{ __('appointment_schedules_go_to_client') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="go_to_client" type="date" value="{{ request()->go_to_client }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-arrived_and_cancel_time">{{ __('appointment_schedules_arrived_and_cancel_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="arrived_and_cancel_time" type="date" value="{{ request()->arrived_and_cancel_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-start_wash_time">{{ __('appointment_schedules_start_wash_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="start_wash_time" type="date" value="{{ request()->start_wash_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-finish_wash_time">{{ __('appointment_schedules_finish_wash_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="finish_wash_time" type="date" value="{{ request()->finish_wash_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-cancel_wash_time">{{ __('appointment_schedules_cancel_wash_time') }}</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control" name="cancel_wash_time" type="date" value="{{ request()->cancel_wash_time }}"  />

                                                </fieldset>
                                            </div>

                                          <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="appointment_schedules-list-is_skip_rate">{{ __('appointment_schedules_is_skip_rate') }}</label>
                                                <fieldset class="form-group">
                                                    <select  name="is_skip_rate" class="form-control" id="appointment_schedules-list-is_skip_rate">

                                                        <option value="all" @if(request()->is_skip_rate == 'all') selected @endif >{{ __('All') }}</option>
                                                        <option value="1" @if(request()->is_skip_rate == '1') selected @endif >{{ __('YES') }}</option>
                                                        <option value="0" @if(request()->is_skip_rate == '0') selected @endif >{{ __('NO') }}</option>



                                                    </select>
                                                </fieldset>
                                            </div>
 <div class=" mt-3">
                                                <button type="submit" class="btn btn-info" >{{ __('Find') }}</button>
                                                <a href="{{ route('appointment_schedules.index') }}" class="btn btn-link" >{{ __('Reset') }}</a>
                                            </div>
            </div>
                                    </form>
                                </div>
                            </div>
                              </div>
