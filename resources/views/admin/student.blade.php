@extends('admin.base')

@section('content')
<div class="page-container">
        <!-- MAIN MENUEBAR-->
            @include('includes.admin_main_menuebar')
        <!-- HMAIN MENUEBAR -->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <a href="{{url('generatereports')}}"class="btn btn-success float-right"> Generate Report</a>
                                  <!--  <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Add Students Details</h3>
                                      <form class="row g-3" action="{{route('students.store')}}" method="POST">
                                        @csrf
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Student Number</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="0000" name="student_number">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="0000" name="email">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="First Name" name="fname">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Last Name" name="lname">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="inputState" class="form-label">Gender</label>
                                            <select id="inputState" class="form-select" name="gender">
                                              <option selected>Choose...</option>
                                              <option>Male</option>
                                              <option>Female</option>
                                            </select>
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Date of Birth</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="--/--/----" name="dob">
                                          </div>
                                         
                                          <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Enroll ID</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="0000" name="enroll_id">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="077..." name="phone_number">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" name ="password">
                                          </div>
                                        
                                          <div class="col-12">
                                            <label for="inputAddress" class="form-label">Active</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="A/N" name="is_active">
                                          </div>
                                          <div class="col-12">
                                            <label for="inputAddress2" class="form-label">Join Date</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="--/--/----" name="join_date">
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                      
                        <div class="row">
                        <div class="col-8">
                                <h2 class="title-1 m-b-25">Student Details</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Student Number</th>
                                                <th>Enroll ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th class="text-right">Gender</th>
                                                <th class="text-right">Date of Birth</th>
                                                <th class="text-right">Email</th>
                                                <th class="text-right">Phone Number</th>
                                                <th class="text-right">Password</th>                
                                                <th class="text-right">Active</th>
                                                <th class="text-right">Join Date</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                          @foreach ($students as $student)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $student->student_number }}</td>
                                                <td>{{ $student->enroll_id }}</td>
                                                <td>{{ $student->fname }}</td>
                                                <td>{{ $student->lname }}</td>
                                                <td>{{ $student->gender }}</td>
                                                <td>{{ $student->dob }}</td>
                                                <td>{{ $student->email }}</td>
                                                <td>{{ $student->phone_number }}</td>
                                                <td>{{ $student->password }}</td>                                               
                                                <td>{{ $student->is_active }}</td>
                                                <td>{{ $student->join_date }}</td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    {!! $students->links() !!}
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
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