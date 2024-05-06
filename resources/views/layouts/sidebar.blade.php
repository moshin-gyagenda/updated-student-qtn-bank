
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        @if(auth()->user()->role === 'admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#program-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Program</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="program-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('program')}}">
                        <i class="bi bi-circle"></i><span>Create Program</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('view-programs')}}">
                        <i class="bi bi-circle"></i><span>View Programs</span>
                    </a>
                </li>
                
            </ul>
        </li><!-- End Program Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#course-units-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Course Units</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="course-units-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('create-course-unit')}}">
                        <i class="bi bi-circle"></i><span>Create Course Unit</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('view-course-unit')}}">
                        <i class="bi bi-circle"></i><span>View Course Units</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Course Units Nav -->
        
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#question-bank-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Past Papers</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="question-bank-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                
                <li>
                    <a href="{{ route('create-past-paper')}}">
                        <i class="bi bi-circle"></i><span>Create Past Paper</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('view-past-paper')}}">
                        <i class="bi bi-circle"></i><span>View Past Papers</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Question Bank Nav -->

        
        
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#user-management-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user-management-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('create-user')}}">
                        <i class="bi bi-circle"></i><span>Create User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('view-users')}}">
                        <i class="bi bi-circle"></i><span>View Users</span>
                    </a>
                </li>
            </ul>
        </li>
        
        

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout')}}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li>
        @endif
        @if(auth()->user()->role === 'student')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#program-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Program</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="program-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                @foreach ($programs as $program)
                <li>
                    <a class="nav-link collapsed" data-bs-target="#program-select" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-circle"></i><span>{{ $program->program }}</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="program-select" class="nav-content collapse">
                        <li>
                            <a href="{{ route('program-past-paper') }}">
                                <i class="bi bi-circle"></i><span>Year One</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('program-past-paper') }}">
                                <i class="bi bi-circle"></i><span>Year Two</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('program-past-paper') }}">
                                <i class="bi bi-circle"></i><span>Year Three</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                @endforeach
            </ul>
        </li><!-- End Program Nav -->
        

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout')}}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li>
        @endif
        <!-- End Logout Page Nav -->
    </ul>
</aside>
