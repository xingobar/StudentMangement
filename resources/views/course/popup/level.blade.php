<div class="modal fade " id="level_show" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">New Level</h4>
            </div>

            <form action="{{route('postInsertLevel')}}" method="POST" id="form_level_create">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="program_id" class="control-label">Program : </label>
                            <select name="program_id" id="program_id" class="form-control">
                                <option>----------</option>
                                @foreach($programs as $program)
                                    <option value="{{$program->program_id}}">{{$program->program}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="level" class="control-label">Level : </label>
                            <input type="text" name="level" id="level" class="form-control" placeholder="level"/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="description" class="control-label">Description : </label>
                            <input type="text" name="description" id="description" class="form-control"
                                   placeholder="Description"/>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                    <button class="btn btn-success" type="submit">Save</button>
                </div>

            </form>


        </div>

    </div>
</div>