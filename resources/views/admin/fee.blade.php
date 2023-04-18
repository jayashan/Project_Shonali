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
                                    <h2 class="title-1">Fee</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Fee Details</h3>
                                      <form class="row g-3" action="{{route('sfees.store')}}" method="POST">
                                        @csrf
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Record Number</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="L00-" name="record_number">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Grade</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Grade" name="grade">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Fee Month</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Fee Month" name="fee_month">
                                          </div>
                                          <div class="col-md-4">
                                            <label for="inputState" class="form-label">Status</label>
                                            <select id="inputState" class="form-select" name="status">
                                              <option selected>Choose...</option>
                                              <option>Paid</option>
                                              <option>Not Paid</option>
                                            </select>
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
                                <h2 class="title-1 m-b-25">Fee Details</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning" style="width:40%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Record Number</th>
                                                <th>Grade</th>
                                                <th>Fee Month</th>
                                                <th class="text-right">Status</th>
                                                       
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sfees as $fee)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $fee->record_number}}</td>
                                                <td>{{ $fee->grade }}</td>
                                                <td>{{ $fee->fee_month }}</td>
                                                <td>{{ $fee->status }}</td>
                                                
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $sfees->links() !!}
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