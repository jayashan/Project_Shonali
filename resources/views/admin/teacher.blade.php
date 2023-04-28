@extends('admin.base')

@section('content')
<div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview
                                      
                                    </h2>
                                    <a href="{{url('generatereport')}}"class="btn btn-success float-right"> Generate Report</a>
                                    
                                    <!--<button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus" >Add item</button></i>-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Add Lecture Details</h3>
                                     
                                      <form class="row g-3" action="{{route('lectures.store')}}" method="POST">
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
                                              <label class="form-check-label" for="gridCheck">

                                              </label>
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
                          
                        <div class="row">                   
                      
                        <div class="col-8">
                        
                                <h2 class="title-1 m-b-25">Lecture Details</h2>
                                <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search Teachers" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <br>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning"style="width:40%">
                                        <thead>
                                            <tr>

                                                <th>Lecture ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th class="text-right">Email</th>
                                                <th class="text-right">Gender</th>
                                                <th class="text-right">Address1</th>
                                                <th class="text-right">Address2</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($lectures as $lecture)
                                            <tr>
                                                <td>{{ $lecture->lecture_id }}</td>
                                                <td>{{ $lecture->fname }}</td>
                                                <td>{{ $lecture->lname }}</td>
                                                <td>{{ $lecture->email }}</td>
                                                <td>{{ $lecture->gender }}</td>
                                                <td>{{ $lecture->address1 }}</td>
                                                <td>{{ $lecture->address2 }}</td>
                                                <td>
                                                <form action="{{route('lectures.destroy',$lecture->id)}}" method="POST">
                                                <a class="btn btn-info" href="{{route('lectures.show',$lecture->id)}}">Show</a>
                                                <a class="btn btn-primary" href="{{route('lectures.edit',$lecture->id)}}">Edit</a>
                                            
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $lectures->links() !!}
                                </div>
                            </div>

                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
</div>

@stop