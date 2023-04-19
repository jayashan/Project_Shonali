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
                                    <h2 class="title-1">Class Rooms</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Add Class Room Details</h3>
                                      <form class="row g-3" action="{{route('classrooms.store')}}" method="POST">
                                        @csrf
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Class number</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="01" name="class_number">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Section</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="A" name="section">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Grade</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Grade" name="grade">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Lecture ID</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Lecture ID" name="lecture_id">
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
                        <div class="col-10">
                                <h2 class="title-1 m-b-25">Class Details</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Class Number</th>
                                                <th>Section</th>
                                                <th>Grade</th>
                                                <th>Lecture ID</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                          @foreach ($classrooms as $classroom)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $classroom->class_number }}</td>
                                                <td>{{ $classroom->section }}</td>
                                                <td>{{ $classroom->grade }}</td>
                                                <td>{{ $classroom->lecture_id }}</td>
                                               
                                                <td></td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    {!! $classrooms->links() !!}
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