<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
       

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sign In
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/login')}}">Admin</a></li>
            <li><a class="dropdown-item" href="{{url('/login')}}">Student</a></li>
            <li><a class="dropdown-item" href="{{url('/login')}}">Teacher</a></li>
            <li><a class="dropdown-item" href="{{url('/login')}}">Parent</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Teacher
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/joinus')}}">Join with Us</a></li>
         
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Student
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/admission')}}">New Admission</a></li>
           
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More Information
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('contact-us')}}">Contact Us</a></li>
            <li><a class="dropdown-item" href="{{url('/aboutus')}}">About Us</a></li>
           <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Gallery</a></li>-->
          </ul>
        </li>
      </ul>
    <!--  <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>