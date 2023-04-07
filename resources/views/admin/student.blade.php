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

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>registrationno</th>
                                                <th>class</th>
                                                <th>admissiondate</th>
                                                <th>mobileno</th>
                                                <th>dateofbirth</th>
                                                <th>gender</th>
                                                <th>fathersname</th>
                                                <th class="text-right">fprofession</th>
                                                <th class="text-right">mothersname</th>
                                                <th class="text-right">mprofession</th>
                                                <th width="280px">action</th>
                                            </tr>
                                        </thead>
                                        @foreach($student as $student)
                                        <tbody>
                                            <tr>
                                            <td>{{++$i}}</td>
                                                <td>{{$student->name}}</td>
                                                <td>{{$student->registrationno}}</td>
                                                <td>{{$student->class}}</td>
                                                <td>{{$student->address}}</td>
                                                <td>{{$student->admissiondate}}</td>
                                                <td>{{$student->mobileno}}</td>
                                                <td>{{$student->dateofbirth}}</td>
                                                <td>{{$student->gender}}</td>
                                                <td>{{$student->fathersname}}</td>
                                                <td>{{$student->fprofession}}</td>
                                                <td>{{$student->mothersname}}</td>
                                                <td>{{$student->mprofession}}</td>

                                                <td>
                                                    <form action="" method="">
                                                        <button class="btn btn-info" type="submit">view</button>
                                                        <button class="btn btn-primary" type="submit">edit</button>
                                                        <button class="btn btn-danger" type="submit">delete</button>
                                                    </form>
                                                </td>
                                                
                                            </tr>
                                         @endforeach 
                                        
                                        </tbody>
                                    </table>

                               
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

        @stop