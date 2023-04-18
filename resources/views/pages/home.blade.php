@extends('layouts.template')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="row">
    <div class="col-sm-12">
      <img src="images/icon/hed.png" class="img-responsive" style="width:100%" alt="Image">
    
    </div>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      
        <img src="images/icon/ifhome.jpg" alt="Image" >
      
        <div class="carousel-caption">
        </div>      
      </div>
      
      
    </div>
</div>
<div class="container text-center">    
  <br>
  <div class="row">
    <div class="col-sm-12">
      <img src="images/icon/line.png" class="img-responsive" style="width:100%" alt="Image">
      
    </div>







<div class="container text-center">    
  <br>
  <div class="row">
    <div class="col-sm-4">
      <img src="images/icon/learn.jpg" class="img-responsive" style="width:70%" alt="Image">
      <h3>Learn</h3>
    </div>
    <div class="col-sm-4"> 
      <img src="images/icon/love.jpg" class="img-responsive" style="width:70%" alt="Image">
      <h3>Lead</h3>    
    </div>
    <div class="col-sm-4"> 
      <img src="images/icon/lead.jpg" class="img-responsive" style="width:70%" alt="Image">
      <h3>Love</h3>    
    </div>
    
  </div>
</div><br>
<br>

<div class="row">
    <div class="col-sm-12">
      <img src="images/icon/why.png" class="img-responsive" style="width:100%" alt="Image">
    
    </div>
@stop