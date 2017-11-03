<div class="modal fade" id="group-show" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                </button>
                <h4 class="modal-title">
                    New Group
                </h4>
            </div>
            <form action="{{route('postInsertGroup')}}" method="POST" id="form-group-create">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="batch" class="control-label">Group : </label>
                            <input type="text" class="form-control" id="groups" name="groups"
                                   placeholder="Group">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                    <button type="submit" class="btn btn-success" >Save</button>
                </div>
            </form>
        </div>
    </div>
</div>