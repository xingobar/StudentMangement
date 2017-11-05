@extends('layouts.master')

@section('style')
    <style type="text/css">
        .student-photo {
            height: 160px;
            padding-left: 1px;
            padding-right: 1px;
            border: 1px solid #ccc;
            background-color: #eee;
            width: 140px;
            margin: 0 auto;
        }

        .photo > input[type='file'] {
            display: none;
        }

        .photo {
            width: 30px;
            height: 30px;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
        }

        .student-id {
            background-repeat: repeat-x;
            border-color: #ccc;
            text-align: center;
            background: #eee;
            border-bottom: 1px solid #ccc;
        }

        .btn-browse {
            border-color: #ccc;
            padding: 5px;
            text-align: center;
            background: #eee;
            border: none;
            border-top: 1px solid #ccc;
        }

        fieldset {
            margin-top: 5px;
        }

        fieldset legend {
            display: block;
            width: 100%;
            padding: 0;
            font-size: 15px;
            line-height: inherit;
            color: #797979;
            border: 0;
            border-bottom: 1px solid #e5e5e5;
        }
    </style>
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <i class="fa fa fa-file-text-o"></i>
                Student Registration
            </div>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <i class="icon_document_alt"></i>
                    Student
                </li>
                <li>
                    <i class="fa fa fa-file-text-o"></i>
                    Create Student
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="#collapse1" data-toggle="collapse" data-parent="#accordion"
                           style="text-decoration: none">
                            Choose Acadmemic
                        </a>
                        <a href="#" class="pull-right" id="show_class_info">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body academic-detail">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <b>
                <i class="fa fa-apple"></i>
                Student Information
            </b>
        </div>
        <form action="{{route('postStudentRegister')}}" method="POST" id="form-create-student">
            {{csrf_field()}}
            <div class="panel-body" style="margin-bottom: 4px;">

                <input type="hidden" name="class_id" id="class_id">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last_name">First Name : </label>
                                <input type="text" name="last_name" id="last_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first_name">English Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <fieldset>
                                    <legend>Sex</legend>
                                    <table for="" style="width:100%;margin-top:-14px">
                                        <tr style="border-bottom:1px solid #ccc">
                                            <td>
                                                <label for="">
                                                    <input type="radio" name="sex" id="sex" value="0" required/>
                                                    Male
                                                </label>
                                            </td>
                                            <td>
                                                <label for="">
                                                    <input type="radio" name="sex" id="sex" value="1" required/>
                                                    Female
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bod">Birth Date : </label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa fa-calendar"></i>
                                    </span>
                                    <input type="text" name="bod" id="bod" class="form-control"
                                           placeholder="yyyy-mm-dd"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="national_card">National Card</label>
                                <input type="text" name="national_card" id="national_card" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <fieldset>
                                    <legend>Status</legend>
                                    <table style="width: 100%;margin-top:-14px">
                                        <tr style="border-bottom:1px solid #ccc">
                                            <td>
                                                <label for="">
                                                    <input type="radio" name="status" id="status" value="0" required
                                                           checked>
                                                    Single
                                                </label>
                                            </td>
                                            <td>
                                                <label for="">
                                                    <input type="radio" name="status" id="status" value="1" required>
                                                    Married
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nationality">Nationality</label>
                                <input type="text" name="nationality" id="nationality" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rac">Rac</label>
                                <input type="text" name="rac" id="rac" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="passport">Passport</label>
                                <input type="text" name="passport" id="passport" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control"/>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="form-group form-group-login">
                            <table style="margin:0 auto;">
                                <thead>
                                <tr class="info">
                                    <th class="student-id">000000</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="photo">
                                        <img src="/photo/example.jpg" class="student-photo" id="studentPhoto"
                                             alt="">
                                        <input type="file" name="photo" id="photo"
                                               accept="image/x-png,image/png,image/jpg,image/jpeg"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;background-color: #ddd">
                                        <input type="button" name="browse_file" id="browse_file"
                                               class="form-control btn-browse" value="Browse">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" style="margin-top: -20px">
                    <b>
                        <i class="fa fa-apple"></i>
                        Address
                    </b>
                </div>
                <div class="panel-body" style="padding-bottom:10px;margin-top:0px">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="village">Village</label>
                                <input type="text" name="village" id="village" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="commune">Commune</label>
                                <input type="text" name="commune" id="commune" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="district">District</label>
                                <input type="text" name="district" id="district" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="province">Province</label>
                                <input type="text" name="province" id="province" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="current_address">Current Address</label>
                                <input type="text" name="current_address" id="current_address" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cas">Current Address Study</label>
                                <input type="text" name="cas" id="cas" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-footer">
                <button type="submit" class="btn btn-default btn-save">
                    Save
                    <i class="fa fa-save"></i>
                </button>
            </div>
        </form>
    </div>
@include('class.classPopup')
@endsection

@section('script')
    <script type="text/javascript">

        $("#browse_file").click(function(){
           $("#photo").click();
        });

        $("#photo").change(function(){
            showFile(this,'#showPhoto');
        });

        function showFile(fileInput,img,showName){
            if(fileInput.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $(img).attr('src',e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
                $(showName).text(fileInput.files[0].name);
            }
        }

        $("#show_class_info").click(function (e) {
            e.preventDefault();
            showClassInformation();
            $("#choose-academic").modal();
        });

        function showClassInformation()
        {
            var data = $(".create-view-form").serialize();
            $.get("{{route('showClassInformation')}}",data,function(response){
                $("#class_info").empty().append(response);
            });
        }

        $(".create-view-form  #program_id").change(function () {
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

        $(document).on('click','.edit-class',function(e){
            e.preventDefault();
            $(".academic-detail").text($(this).text());
            console.log($(this).text());
        });


    </script>

@endsection