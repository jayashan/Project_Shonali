@extends('admin.base')
    <!-- MAIN MENUEBAR-->
    @include('includes.subjects.CreateSubject')
    @include('includes.admin_main_menuebar')
            
        <!-- HMAIN MENUEBAR -->
@section('content')
    <div class="page-container">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">overview</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="au-card recent-report">
                                <div class="au-card-inner">
                                    <h3 class="title-2"></h3>
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#exampleModal">
                                        <i class="zmdi zmdi-plus"></i>Add Subject
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                    <div class="col-12">
                            <h2 class="title-1 m-b-25">Subject Details</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Subject Code</th>
                                        <th>Subject Name</th>
                                        <th>Description</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $subjects as $subject )
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$subject->subject_code}}</td>
                                        <td>{{$subject->subject_name}}</td>
                                        <td>{{$subject->description}}</td>
                                        <td>
                                            <form action="{{route('subjects.destroy',$subject->id)}}" method="POST">
                                                <a class="btn btn-info" href="{{route('subjects.show',$subject->id)}}">Show</a>
                                                <a class="btn btn-primary" href="{{route('subjects.edit',$subject->id)}}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

@stop