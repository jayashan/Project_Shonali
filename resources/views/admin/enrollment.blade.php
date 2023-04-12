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
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Enrollment Details</h3>
                                      <form class="row g-3" action="{{route('lectures.store')}}" method="POST">
                                        @csrf
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Enrollment Id</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="L00-" name="enroll_id">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="First Name" name="fname">
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
                                            <label for="inputPassword4" class="form-label">Contact Number</label>
                                            <input type="password" class="form-control" id="inputPassword4" name ="contact_number">
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
                                <h2 class="title-1 m-b-25">Enrollment Details</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning" style="width:40%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Enrollment ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th class="text-right">Email</th>
                                                <th class="text-right">Contact Number</th>        
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($enrollment as $enrollment)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $enrollment->enroll_id }}</td>
                                                <td>{{ $enrollment->fname }}</td>
                                                <td>{{ $enrollment->lname }}</td>
                                                <td>{{ $enrollment->email }}</td>
                                                <td>{{ $enrollment->contact_number }}</td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $enrollment->links() !!}
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