@extends('layouts.template')

@section('content')
<div class="list-group list-group-flush mx-3 mt-4">
    
  
    <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
      <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
    </a>
    <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
      <i class="fas fa-chart-area fa-fw me-3"></i><span>Attendance</span>
    </a>
    <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
        class="fas fa-lock fa-fw me-3"></i><span>Notice</span></a>
   
  </div>
</div>
</nav>

@stop