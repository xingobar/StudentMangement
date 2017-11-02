@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
    <link rel="stylesheet" type="text/css" href="{{asset('js/bootstrap-datepicker/css/datepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('js/bootstrap-daterangepicker/daterangepicker.css')}}"/>
@endsection


@section('content')
    @include('course.popup.academic')
    @include('course.popup.program')
    @include('course.popup.level')
    <h3><i class="fa fa-angle-right"></i>Manage Course</h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i>Manage Course</h4>
                <form class="form-horizontal style-form create-course-form" method="post">

                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="academic-year" class="control-label">Academic Year</label>
                            <div class="input-group">
                                <select class="form-control" name="academic_id" id="academic_id">
                                    <option>----------</option>
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
                                    <option>----------</option>
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
                                <select class="form-control" name="shift_id" id="shift">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="time" class="control-label">Time</label>
                            <div class="input-group">
                                <select class="form-control" name="time_id" id="time">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="batch" class="control-label">Batch</label>
                            <div class="input-group">
                                <select class="form-control" name="batch_id" id="batch">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="group" class="control-label">Group</label>
                            <div class="input-group">
                                <select class="form-control" name="group_id" id="group">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="startDate" class="control-label">Start Date</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="start_date" id="startDate"/>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="endDate" class="control-label">End Date</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="end_date" id="endDate"/>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-theme">Create Course</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script type="text/javascript" src="{{asset('js/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-daterangepicker/date.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
    <script>
        $("#startDate").datepicker({
            format:"yyyy-mm-dd",
            startDate:"today",
            autoclose:true,
        });

        $("#endDate").datepicker({
           format:"yyyy-mm-dd",
            startDate:'today',
            autoclose:true,
        });

        $(".add_more_academic").click(function(){
            $("#academic_year_show").modal();
        });

        $('.btn-save-academic').click(function(){
            var academic = $("#academic_year").val();
           // $('#academic_id').val(academic);
            $.post("{{route ('postInsertAcademic') }}" , {academic:academic} , function(response){
                console.log(response);
                $("#academic_year_show").modal('hide');
                if(response !== "" ){
                    $("#academic_id").append($("<option></option>",{
                        value : response.academic_id,
                        text : response.academic
                    }));
                }

                $("#academic_year").val("");
            });
        });

        $("#add_more_program").click(function(){
            $("#program_show").modal();
        });

        $(".btn-save-program").click(function(){
           var program = $("#program").val();
           var description = $("#description").val();

           $.post("{{route('postInsertProgram')}}", {program:program,description:description},function(response){
                $("#program_show").modal('hide');
                $("#program_id").append($("<option></option>",{
                    value : response.program_id,
                    text : response.program
                }));
                $("#program").val("");
                $("#description").val("");
           });
        });

        $("#add_more_level").click(function(){
           $("#level_show").modal();
        });

        $("#form_level_create").submit(function(e){
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            $.post(url,data,function(response){
               $("#level_show").modal('hide');
               $("#level_id").append($("<option></option>",{
                   value : response.level_id,
                   text : response.level
               }));
            });
        });

        $(".create-course-form  #program_id").change(function(){
           var program_id = $(this).val();
           var level = $("#level_id");
           $(level).empty();
           $.get("{{route('showLevel')}}",{program_id:program_id},function(response){

               $.each(response,function(i,row){
                   $(level).append($("<option></option>",{
                       value : row.level_id,
                       text : row.level
                   }));
               });
           });
        });

    </script>

@endsection