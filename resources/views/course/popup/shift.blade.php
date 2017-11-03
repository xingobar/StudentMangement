<div class="modal fade" id="shift-show" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                </button>
                <h4 class="modal-title">
                    New Shift
                </h4>
            </div>
            <form action="{{route('postInsertShift')}}" method="POST" id="form-shift-create">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="shift" name="shift"
                                placeholder="Shift">
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