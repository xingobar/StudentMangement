<div class="modal fade" id="choose-academic" role="dialog">
    <div class="modal-dialog modal-xs">
        <h3><i class="fa fa-angle-right"></i>Choose Academic</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i>Manage Course</h4>
                    <form action="#" class="form-horizontal style-form create-view-form"
                          method="post">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="academic-year" class="control-label">Academic Year</label>
                                <div class="input-group">
                                    <select class="form-control" name="academic_id" id="academic_id">
                                        @foreach($academics as $academic)
                                            <option value="{{$academic->academic_id}}">{{$academic->academic}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus add_more_academic"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="program" class="control-label">Course</label>
                                <div class="input-group">
                                    <select class="form-control" name="program_id" id="program_id">
                                        <option value=""></option>
                                        @foreach($programs as $program)
                                            <option value="{{$program->program_id}}">{{$program->program}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus" id="add_more_program"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="level" class="control-label">Level</label>
                                <div class="input-group">
                                    <select class="form-control" name="level_id" id="level_id">

                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus" id="add_more_level"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="shift" class="control-label">Shift</label>
                                <div class="input-group">
                                    <select class="form-control" name="shift_id" id="shift_id">
                                        @foreach($shifts as $shift)
                                            <option value="{{$shift->shift_id}}">{{$shift->shift}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus add_more_shift"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="time" class="control-label">Time</label>
                                <div class="input-group">
                                    <select class="form-control" name="time_id" id="time_id">
                                        @foreach($times as $time)
                                            <option value="{{$time->time_id}}">{{$time->time}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus add-more-time"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="batch" class="control-label">Batch</label>
                                <div class="input-group">
                                    <select class="form-control" name="batch_id" id="batch_id">
                                        @foreach($batches as $batch)
                                            <option value="{{$batch->batch_id}}">{{$batch->batch}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus add-more-batch"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="group" class="control-label">Group</label>
                                <div class="input-group">
                                    <select class="form-control" name="group_id" id="group_id">
                                        @foreach($groups as $group)
                                            <option value="{{$group->group_id}}">{{$group->groups}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-addon">
                                        <span class="fa fa-plus add-more-group"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-theme">Create Course</button>
                        <button type="button" class="btn btn-success btn-update-class">Update Course</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i>Class Information</h4>
                    <div class="row">
                        <div class="col-md-12" id="class_info">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>