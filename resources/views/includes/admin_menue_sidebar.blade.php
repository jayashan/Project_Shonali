@if(Auth::user()->type=='admin')
{
    <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="images/icon/pl.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                            <li>
                                                <a href="{{url('/lectures')}}">Teachers</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/students')}}">Students</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/stsparents')}}">Parents</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/employees')}}">Employee</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/subjects')}}">Subjects</a>
                                            </li>
                                    </ul>
                        </li>
                        <li>
                            <a href="{{url('/attendances')}}">
                                <i class="fas fa-chart-bar"></i>Attendance</a>
                        </li>
                        <li>
                            <a href="{{url('/classrooms')}}">
                                <i class="fas fa-table"></i>Class Rooms</a>
                        </li>
                        <li> 
                            <a href="{{url('/enrollments')}}">
                                <i class="far fa-check-square"></i>Enrollments</a>
                        </li>
                        <li>
                            <a href="{{url('/sfees')}}">
                                <i class="fas fa-calendar-alt"></i>Fee</a>
                        </li>
                        <li>
                            <a href="{{url('/feedetails')}}">
                                <i class="fas fa-table"></i>Fee Details</a>
                        </li>
                        <li>
                            <a href="{{url('/classdetails')}}">
                                <i class="fas fa-chart-bar"></i>Class Details</a>
                        </li>
                        <li>
                            <a href="{{url('/classrooms')}}">
                                <i class="fas fa-table"></i>Resutls</a>
                        </li>
                        <li>
                            <a href="{{url('/exams')}}">
                                <i class="fas fa-copy"></i>Exams</a>
                        </li>
                      <!--  <li>
                            <a href="{{url('/enquiries')}}">
                                <i class="fas fa-copy"></i>Enquiry</a>
                        </li>-->
                       <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>-->
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
    </aside>
}
@elseif(Auth::user()->type=='user')
{
    <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="images/icon/pl.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                            <li>
                                                <a href="">Item 1</a>
                                            </li>
                                            <li>
                                                <a href="">Item 2</a>
                                            </li>
                                            <li>
                                                <a href="">Item 3</a>
                                            </li>
                                            <li>
                                                <a href="">Item 4</a>
                                            </li>
                                            <li>
                                                <a href="">Item 5</a>
                                            </li>
                                    </ul>
                        </li>
                        
                        
                      
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
    </aside>
}
@endif


