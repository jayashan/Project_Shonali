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
                                    <h2 class="title-1">Parent</h2>
                                    <a href="{{url('generatereportp')}}"class="btn btn-success float-right"> Generate Report</a>
                                   <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Add Parent Details</h3>
                                      <form class="row g-3" action="{{route('stsparents.store')}}" method="POST">
                                        @csrf
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Parent ID</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="L00-" name="parent_id">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Student Number</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Student Number" name="student_number">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Phone Number" name="phone_number">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" name ="password">
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
                                <h2 class="title-1 m-b-25">Parent Details</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning" style="width:40%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Parent ID</th>
                                                <th>Student Number</th>
                                                <th>Phone Number</th>
                                                <th class="text-right">Password</th>                        
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($stsparents as $parent)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $parent->parent_id }}</td>
                                                <td>{{ $parent->student_number }}</td>
                                                <td>{{ $parent->phone_number }}</td>
                                                <td>{{ $parent->password }}</td>                               
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $stsparents->links() !!}
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