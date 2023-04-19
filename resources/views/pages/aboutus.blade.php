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
        <img src="images/icon/aboutus.png" alt="Image" >
        <div class="row"> 
        <div class="carousel-caption">
        </div>      
      </div>
    </div>
</div>


<div class="container text-center">    
  <br>
  <div class="row">
    <div class="col-sm-4">
      <img src="images/icon/aboutusdetail.png" class="img-responsive" style="width:150%" alt="Image">
      
    </div>
    
    <div class="col-sm-8"> 
     
    <img src="images/icon/children.jpg" class="img-responsive" style="width:50%" alt="Image">
    
     
          
    </div>
    
  </div>
</div>

<div class="container text-center">    
  <br>
  <div class="row">
    <div class="col-sm-6">
      <img src="images/icon/mission.png" class="img-responsive" style="width:75%" alt="Image">
    
    </div>
    
    <div class="col-sm-6"> 
     
    <img src="images/icon/vision.png" class="img-responsive" style="width:75%" alt="Image">
    
     
          
    </div>
    
  </div>
</div>
@stop