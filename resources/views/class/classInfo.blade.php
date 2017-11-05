<style>
    #table_classInfo tbody td{
        vertical-align: middle;
        text-align: center;
    }
</style>
<table class="table table-hover table-striped table-condensed table-bordered" id="table_classInfo">
    <thead>
    <tr>
        <th>Program</th>
        <th>Level</th>
        <th>Shift</th>
        <th>Time</th>
        <th>Academic Detail</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($classes as $class)
            <tr>
                <td>{{$class->program}}</td>
                <td>{{$class->level}}</td>
                <td>{{$class->shift}}</td>
                <td>{{$class->time}}</td>
                <td class="col-md-4" >
                    <a class="edit-class" href="#" data-id="{{$class->class_id}}" style="word-break: keep-all">
                        Program : {{$class->program}} / Level : {{$class->level}} / Shift : {{$class->shift}} /
                        Time : {{$class->time}} / Batch : {{$class->batch}} / Group : {{$class->groups}} /
                        Start Date : {{ date('y-M-d',strtotime($class->start_date))}} / End Date : {{date('y-M-d',strtotime($class->end_date))}}
                    </a>
                </td>
                <td class="del" style="vertical-align: middle;width: 30px;">
                    <button type="button" class="btn btn-danger del-btn" value="{{$class->class_id}}">Del</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>