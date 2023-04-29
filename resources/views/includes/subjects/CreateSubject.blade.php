
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Subject Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{route('subjects.store')}}" method="POST">
                {{ csrf_field() }}
              <div class="modal-body">
                    <div class="form-group">
                      <label>Subject Code</label>
                      <input type="text" name="subject_code" class="form-control" placeholder="Subject Code">
                    </div>

                    <div class="form-group">
                        <label>Subject Name</label>
                        <input type="text" name="subject_name" class="form-control" placeholder="Subject Name">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  
              </div>
            </form>
        </div>
      </div>
  </div>