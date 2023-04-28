@extends('admin.base')

@section('content')
<br>
<br>
<br>
<div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Teachers Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{route('lectures.update',$lecture->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                <div class="form-group">
                    <label>Leture ID</label>
                    <input type="text" name="lecture_id" class="form-control" placeholder="Lecture ID" value="{{$lecture->lecture_id}}">
                </div>

                <div class="form-group">
                    <label>First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" value="{{$lecture->fname}}">
                    </div>

                    <div class="form-group">
                    <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" value="{{$lecture->lname}}">
                    </div>

                    <div class="form-group">
                    <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{$lecture->email}}">
                    </div>
                   
                    <div class="form-group">
                                            <label for="inputState" class="form-label">Gender</label>
                                            <select id="inputState" class="form-select" value="{{$lecture->gender}}">
                                              <option selected>Choose...</option>
                                              <option>Male</option>
                                              <option>Female</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                    <label>Address 1</label>
                        <input type="text" name="address1" class="form-control" placeholder="Address 1" value="{{$lecture->address1}}">
                    </div>


                    <div class="form-group">
                        <label>Address 2</label>
                        <input type="text" name="address2" class="form-control" placeholder="Address 2" value="{{$lecture->address2}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button> 
                </div>
            </form>
        </div>
    </div>
</div>
@stop