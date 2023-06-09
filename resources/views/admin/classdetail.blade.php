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
                                    <h2 class="title-1">Class Details</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Class Details</h3>
                                      <form class="row g-3" action="{{route('classdetails.store')}}" method="POST">
                                        @csrf
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Class ID</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="L00-" name="class_id">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Class Number</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Class Number" name="class_number">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Student Number</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Student Number" name="student_number">
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
                                <h2 class="title-1 m-b-25">Class Details</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning" style="width:40%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Class ID</th>
                                                <th>Class Number</th>
                                                <th>Student Number</th>
                                               
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($classdetails as $classdetail)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $classdetail->class_id }}</td>
                                                <td>{{ $classdetail->class_number }}</td>
                                                <td>{{ $classdetail->student_number }}</td>                                 
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $classdetails->links() !!}
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