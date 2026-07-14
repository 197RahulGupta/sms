<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
                    <span class="text-secondary text-small">{{ auth()->user()->email === 'admin@admin.com' ? 'Super Admin' : 'Guest' }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.about.index') }}">
                <span class="menu-title">About</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.feature.index') }}">
                <span class="menu-title">Feature</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.introduction.index') }}">
                <span class="menu-title">Introduction</span>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.course.index') }}">
                <span class="menu-title">Course</span>
              <i class="mdi mdi-lock menu-icon"></i>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.student.index') }}">
                <span class="menu-title">Student</span>
                 <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
   <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.teacher.index') }}">
                <span class="menu-title">Teacher</span>
                 <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.studentfee.index') }}">
                <span class="menu-title">StudentFee</span>
                 <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
   
       
    </ul>
</nav>
