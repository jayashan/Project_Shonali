<div class="modal fade" id="AddTeachers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Teacher Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{route('lectures.store')}}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Lecture ID</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="L00-" name="lecture_id" value="{{ old('lecture_id') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="First Name" name="fname" value="{{ old('fname') }}"required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Last Name" name="lname">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name ="password">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Gender</label>
                            <select id="inputState" class="form-select" name="gender">
                                <option selected>Choose...</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Address 1</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address1">
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <label class="form-check-label" for="gridCheck"></label>
                            </div>
                        </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            @if(count($errors))
                                <div class="form-group">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                    </form>
        </div>
    </div>
</div>