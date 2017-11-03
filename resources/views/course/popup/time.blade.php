<div class="modal fade" id="time-show" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                </button>
                <h4 class="modal-title">
                    New Time
                </h4>
            </div>
            <form action="{{route('postInsertTime')}}" method="POST" id="form-time-create">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="time" class="control-label">Time : </label>
                            <input type="text" class="form-control" id="time" name="time"
                                   placeholder="Time">
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