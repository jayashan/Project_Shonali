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
                                        <i class="zmdi zmdi-plus"></i>Add Salary</button>
                                        </div>
                                    </div>
                                </div>
                            </form> 

















                    </div> <!-- content fluid-->
                 </div>  <!-- section content-->                    
            </div> <!-- main content-->
 </div><!--page container-->