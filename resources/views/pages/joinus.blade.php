@extends('layouts.template')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">    
        <img src="images/icon/joinus.jpg" alt="Image" >        
        <div class="row"> 
        <div class="carousel-caption">
        </div>      
      </div>
    </div>
</div>




<div class="main-content">
                <div class="section__content section__content--p100">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                  <!--  <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                      <br>
                                      <br>
                                        <h1 class="title-2">Work with Us</h1>
                                        <br>
                                      <form class="row g-3" action="{{route('enquiries.store')}}" method="POST">
                                        @csrf
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="lecture_id">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Mobile</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="fname">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputAddress" class="form-label">Nationality</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="lname">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" name="email">
                                          </div>
                                          
                                          <div class="col-md-4">
                                            <label for="inputState" class="form-label">Enquiry to</label>
                                            <select id="inputState" class="form-select" name="gender">
                                              <option selected>Choose...</option>
                                              <option>General Enquiry</option>
                                              <option>Student  Enquiry</option>
                                              <option>Job Application Enquiry</option>
                                            </select>
                                          </div>
                                          <div class="col-12">
                                            <label for="inputAddress" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="address1">
                                            
                                          </div>
                                          
                                          <div class="col-12">
                                            <div class="form-check">
                                              <label class="form-check-label" for="gridCheck">

                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                          </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
@stop