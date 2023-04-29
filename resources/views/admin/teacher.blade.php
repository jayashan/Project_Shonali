@extends('admin.base')
@include('includes.teacher.CreateTeacher')
@section('content')
<div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    
                                    <!--<a href="{{url('generatereport')}}"class="btn btn-success float-right"> Generate Report</a>-->
                                    <h2 class="title-1 m-b-25">Lecture Details</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#AddTeachers">
                                        <i class="zmdi zmdi-plus" ></i>Add Teacher
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                          
                                           
                      
                        <div class="col-8">
                        
                                
                            <form class="form-header" action="{{route('lectures.search')}}" type="GET" role="search">
                                <input class="au-input au-input--xl" type="text" name="fname" placeholder="Search Teachers by First Name" />
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
                                        @if($lectures->isNotEmpty())
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
                                            @else 
                                                <div>
                                                    <h2>No posts found</h2>
                                                </div>
                                            @endif
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