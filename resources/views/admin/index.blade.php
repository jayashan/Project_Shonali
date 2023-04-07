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




                        <div class="row"> 
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>


                         <div class="row m-t-25"> <!-- first row-->
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                          
                                            <div class="text">
                                                <h2>0</h2>
                                                <span>Total Students</span>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                          
                                            <div class="text">
                                                <h2>0</h2>
                                                <span>Total Employees</span>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                     </div><!-- end first row-->
                                   
                     

                        <div class="row"><!--second row-->
                            <div class="col-lg-6">
                                     <div class="au-card recent-report">
                                     
                                        <div class="au-card-inner">
                                            <h3 class="title-2">Total Present Students </h3>
                                           
                                            <div class="chart-info">
                                                <div class="chart-info__left">  
                                                                                      
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                            </div>                                                       
                            
                            <div class="col-lg-6">
                                     <div class="au-card recent-report">
                                     
                                        <div class="au-card-inner">
                                            <h3 class="title-2">Total Present Employees </h3>
                                           
                                            <div class="chart-info">
                                                <div class="chart-info__left">  
                                                                                      
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                            </div> 
                        </div> <!--end second row-->

                     <!--table-->
                            <div class="col-lg-7">
                                <h2 class="title-1 m-b-25">Classes</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                <tr>
                                                        <td>Class</td>
                                                        <td class="text-right">Number of Students</td>
                                                        <td class="text-right">Class Teacher</td>
                                                    </tr>
                                                    <tr>
                                                        <td>UKG</td>
                                                        <td class="text-right">35</td>
                                                        <td class="text-right">Rosy Fernando</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LKG</td>   
                                                        <td class="text-right">44</td>
                                                        <td class="text-right">Chris Perera</td>                                                  
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 1</td>                                                   
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 2</td>                                                 
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 3</td>                                                
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 4</td>                                                    
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 5</td>                                                    
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 7</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 8</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 9</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Grade 12</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end table-->
                        


                                       <div class="row"> <!-- third row-->
                                                    <div class="col-lg-6">
                                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                                            <div class="au-card-title" style="background-image:url('images/iconstudent.png');">
                                                            <div class="bg-overlay bg-overlay--blue"></div>
                                                            <h3> <i class=""></i>New Admission</h3>
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
                                                    
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                                            <div class="au-card-title" style="background-image:url('images/iconteacher.png');">
                                                            <div class="bg-overlay bg-overlay--blue"></div>
                                                            <h3> <i class=""></i>Add New Teacher</h3>
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
    

        @stop