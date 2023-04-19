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
                                    <h2 class="title-1">Add Exam</h2>
                                    <br>
                                    <br>
                                   <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Exmas</h3>
                                      <form class="row g-3" action="{{route('addexams.store')}}" method="POST">
                                        @csrf
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Subject Name</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="subject_name">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Date</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="--/--/----" name="date">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Lecture Name</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="0000" name="lecture_name">
                                          </div>
                                          
                                          <div class="col-md-4">
                                            <label for="inputState" class="form-label">Grade</label>
                                            <select id="inputState" class="form-select" name="grade">
                                              <option selected>Choose...</option>
                                              <option>Grade 1</option>
                                              <option>Grade 2</option>
                                              <option>Grade 3</option>
                                              <option>Grade 4</option>
                                              <option>Grade 5</option>
                                            
                                            </select>
                                          </div>

                                          <div class="col-md-4">
                                            <label for="inputState" class="form-label">Exam Type</label>
                                            <select id="inputState" class="form-select" name="exam_type">
                                              <option selected>Choose...</option>
                                              <option>Term Test 1 </option>
                                              <option>Term Test 2</option>
                                              <option>Term Test 3</option>
                                              <option>Class Test 1 </option>
                                              <option>Class Test 2 </option>
                                              <option>Class Test 3 </option>
                                            
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
                        <div class="col-11">
                                <h2 class="title-1 m-b-25">Exam</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Subject Name</th>
                                                <th>Date</th>
                                                <th>Lecture Name</th>
                                                <th>Grade</th>
                                                <th>Exam Type</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                          @foreach ($addexams as $addexam)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $addexam->subject_name }}</td>
                                                <td>{{ $addexam->date }}</td>
                                                <td>{{ $addexam->lecture_name }}</td>
                                                <td>{{ $addexam->grade }}</td>
                                                <td>{{ $addexam->exam_type }}</td>
                                               
                                                <td></td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    {!! $addexams->links() !!}
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