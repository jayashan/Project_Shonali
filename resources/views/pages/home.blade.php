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
      
        <img src="images/icon/home.jpg" alt="Image" >
      
        <div class="carousel-caption">
        </div>      
      </div>
      
      
    </div>
</div>
<div class="container text-center">    
  <br>
  <div class="row">
    <div class="col-sm-4">
      <img src="images/icon/admin.png" class="img-responsive" style="width:50%" alt="Image">
      <p>Admin</p>
    </div>
    <div class="col-sm-4"> 
      <img src="images/icon/teacher.svg" class="img-responsive" style="width:50%" alt="Image">
      <p>Teacher</p>    
    </div>
    <div class="col-sm-4"> 
      <img src="images/icon/student.png" class="img-responsive" style="width:50%" alt="Image">
      <p>Student</p>    
    </div>
    
  </div>
</div><br>
@stop