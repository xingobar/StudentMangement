@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
    <link rel="stylesheet" type="text/css" href="{{asset('js/bootstrap-datepicker/css/datepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('js/bootstrap-daterangepicker/daterangepicker.css')}}"/>
@endsection


@section('content')
    @include('course.popup.academic')
    @include('course.popup.program')
    @include('course.popup.level')
    @include('course.popup.shift')
    @include('course.popup.time')
    @include('course.popup.batch')
    @include('course.popup.group')
    <h3><i class="fa fa-angle-right"></i>Manage Course</h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i>Manage Course</h4>
                <form action="{{route('postInsertClass')}}" class="form-horizontal style-form create-course-form" method="post">
                    <input type="hidden" value="1" id="active" name="active">
                    <input type="hidden" id="class_id" name="class_id">
                    <div class="form-group">
                        <div class="col-md-4">
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

                        <div class="col-md-4">
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

                        <div class="col-md-4">
                            <label for="level" class="control-label">Level</label>
                            <div class="input-group">
                                <select class="form-control" name="level_id" id="level_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add_more_level"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
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

                        <div class="col-md-3">
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

                        <div class="col-md-3">
                            <label for="startDate" class="control-label">Start Date</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="start_date" id="startDate" required/>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="endDate" class="control-label">End Date</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="end_date" id="endDate" required/>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus"></span>
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

@endsection


@section('script')
    <script type="text/javascript" src="{{asset('js/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-daterangepicker/date.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
    <script>
        $("#startDate").datepicker({
            format: "yyyy-mm-dd",
            startDate: "today",
            autoclose: true,
        });

        $("#endDate").datepicker({
            format: "yyyy-mm-dd",
            startDate: 'today',
            autoclose: true,
        });

        showClassInformation();

        $(".add_more_academic").click(function () {
            $("#academic_year_show").modal();
        });

        $('.btn-save-academic').click(function () {
            var academic = $("#academic_year").val();
            // $('#academic_id').val(academic);
            $.post("{{route ('postInsertAcademic') }}", {academic: academic}, function (response) {
                console.log(response);
                $("#academic_year_show").modal('hide');
                if (response !== "") {
                    $("#academic_id").append($("<option></option>", {
                        value: response.academic_id,
                        text: response.academic
                    }));
                }

                $("#academic_year").val("");
            });
        });

        $("#add_more_program").click(function () {
            $("#program_show").modal();
        });

        $(".btn-save-program").click(function () {
            var program = $("#program").val();
            var description = $("#description").val();

            $.post("{{route('postInsertProgram')}}", {program: program, description: description}, function (response) {
                $("#program_show").modal('hide');
                $("#program_id").append($("<option></option>", {
                    value: response.program_id,
                    text: response.program
                }));
                $("#program").val("");
                $("#description").val("");
            });
        });

        $("#add_more_level").click(function () {
            $("#level_show").modal();
        });

        $("#form_level_create").submit(function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            $.post(url, data, function (response) {
                $("#level_show").modal('hide');
                $("#level_id").append($("<option></option>", {
                    value: response.level_id,
                    text: response.level
                }));
            });
        });

        $(".create-course-form  #program_id").change(function () {
            var program_id = $(this).val();
            var level = $("#level_id");
            $(level).empty();
            $.get("{{route('showLevel')}}", {program_id: program_id}, function (response) {

                $.each(response, function (i, row) {
                    $(level).append($("<option></option>", {
                        value: row.level_id,
                        text: row.level
                    }));
                });
                //showClassInformation();
            });
        });

        $(".add_more_shift").click(function () {
            $("#shift-show").modal();
        });

        $("#form-shift-create").submit(function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            var shift = $("#shift_id");
            var url = $(this).attr('action');
            //$(shift).empty();
            $.post(url,data, function (response) {
                if(response !== ''){
                    $(shift).append($("<option></option>", {
                        value: response.shift_id,
                        text: response.shift
                    }));
                }
                $("#shift-show").modal('hide');
            });
        });

        $(".add-more-time").click(function () {
            $("#time-show").modal();
        });

        $("#form-time-create").submit(function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            var time = $("#time_id");
            var url = $(this).attr('action');
           // $(time).empty();
            $.post("{{route('postInsertTime')}}",data,function (response) {
                if(response !== ''){
                    $(time).append($("<option></option>",{
                        value : response.time_id,
                        text : response.time
                    }));
                }
                $("#form-time-create #time").val("");
                $("#time-show").modal('hide');
            });
        });

        $(".add-more-batch").click(function () {
            $("#batch-show").modal();
        });

        $("#form-batch-create").submit(function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.post("{{route('postInsertBatch')}}",data,function (response) {
                if(response !== '')
                {
                    $("#batch_id").append($("<option></option>",{
                        value : response.batch_id,
                        text : response.batch
                    }));
                }

                $("#form-batch-create #batch").val("");
                $("#batch-show").modal('hide');
            });
        });

        $(".add-more-group").click(function () {
            $("#group-show").modal();
        });

        $("#form-group-create").submit(function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.post("{{route('postInsertGroup')}}",data,function(response){
               if(response !== '')
               {
                   $("#group_id").append($("<option></option>",{
                       value : response.group_id,
                       text : response.groups
                   }));
               }
               $("#form-group-create #groups").val("");
               $("#group-show").modal('hide');
            });
        });

        $(".create-course-form").submit(function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.post("{{route('postInsertClass')}}",data,function(response){
                console.log(response);
                showClassInformation();
            });
            $(this).trigger('reset');
        })

        function showClassInformation()
        {
            var data = $(".create-course-form").serialize();
            $.get("{{route('showClassInformation')}}",data,function(response){
                $("#class_info").empty().append(response);
            });
        }

        $(document).on('click','.del-btn',function(){
            var classId = $(this).val();
            $.post('{{route('deleteClass')}}',{class_id:classId},function(response){
                showClassInformation();
            });
        });

        $(document).on('click','.edit-class',function(){
            var class_id = $(this).data('id');
            $.get("{{route('editClass')}}",{'class_id':class_id},function(response){
                $("#academic_id").val(response.academic_id);
                $("#level_id").val(response.level_id);
                $("#shift_id").val(response.shift_id);
                $("#time_id").val(response.time_id);
                $("#group_id").val(response.group_id);
                $("#batch_id").val(response.batch_id);
                $("#startDate").val(response.start_date);
                $("#endDate").val(response.end_date);
                $("#class_id").val(response.class_id);
            });
        });

        $(".btn-update-class").click(function (e) {
            e.preventDefault();
            var data = $('.create-course-form').serialize();
            $.post("{{route('updateClass')}}",data,function(response){
                showClassInformation();
            });
        });

    </script>

@endsection