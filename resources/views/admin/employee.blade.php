@extends('admin.base')

@section('content')
<div class="page-container"><!--page container-->
        <!-- MAIN MENUEBAR-->
            @include('includes.admin_main_menuebar')
        <!-- HMAIN MENUEBAR -->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                    
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search Employees" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>                            
                                <div class="col-lg-1">
                                </div>
                                <div class="row"> 
                                    <div class="col-md-12">
                                        <div class="overview-wrap">
                                        <h2 class="title-1"></h2>
                                        <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Add New Employee</button>
                                        </div>
                                    </div>
                                </div>
                            </form> 
                            
                            <div class="row"> 
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"></h2>
                                    <button class="">
                                        <i class=""></i>Employee's Profiles</button>
                                </div>
                            </div>
                            </div>
                          
                            <div class="row"> <!-- third row-->
                                                    <div class="col-lg-2">
                                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                                            <div class="au-card-title" style="background-image:url('images/teacher.svg');">
                                                            <div class="bg-overlay bg-overlay--blue"></div>
                                                            <h3> <i class=""></i></h3>
                                                            <button class="au-btn-plus">
                                                            <i class="zmdi zmdi-plus"></i>
                                                            </button>
                                                            </div>
                                                            <div class="au-task js-list-load">
                                                            <div class="au-task__title">
                                                            <p>Okitha Sandul</p>
                                                            </div>
                                                            </div>

                                                       
                                                        </div>
                                                    </div>     
                                                    
                                                    
                                                    <div class="col-lg-2">
                                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                                            <div class="au-card-title" style="background-image:url('images/teacher.svg');">
                                                            <div class="bg-overlay bg-overlay--blue"></div>
                                                            <h3> <i class=""></i></h3>
                                                            <button class="au-btn-plus">
                                                            <i class="zmdi zmdi-plus"></i>
                                                            </button>
                                                            </div>
                                                            <div class="au-task js-list-load">
                                                            <div class="au-task__title">
                                                            <p>Emma Fernando</p>
                                                            </div>
                                                            </div>

                                                       
                                                        </div>
                                                    </div>
                                         </div> <!-- end third row-->

                                        


                                         

                                       
                    
                    </div> <!-- content fluid-->
                 </div>  <!-- section content-->                    
            </div> <!-- main content-->
 </div><!--page container-->