 

<section style="height: 120px; background: linear-gradient(90deg, rgb(5, 2, 77) 0%, rgb(26, 14, 154) 35%, rgba(0,212,255,1) 100%);" id="topbar" class="d-flex align-items-center">
  <div class="container d-flex flex-column flex-md-row justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-right" data-aos="zoom-out" data-aos-delay="100">
          <img src="{{ asset('assets/img/butuan-city-health-logo.png') }}" class="img-fluid d-none d-md-inline" alt="AdminLTE Logo" style="max-height: 100px; width: auto;">
      </div>
      <div class="contact-info d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
       <p class="text-light font-weight-bold h1 text-center">Food Sanitation Code Advisor</p>
    </div>
      <div class="contact-info d-flex align-items-left" data-aos="zoom-out" data-aos-delay="100">
          <img src="{{ asset('assets/img/butuan-logo.webp') }}" class="img-fluid d-none d-md-inline" alt="AdminLTE Logo" style="max-height: 100px; width: auto;">
      </div>
  </div>
</section>

<nav class="main-header navbar navbar-expand-lg navbar-white navbar-light">
    <div class="container">

        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">

                <!-- Your navigation items here -->

                @if(Auth::user()->user_type == 1)
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard')active @endif">
                        <p>Menu</p>
                    </a>
                </li>
               

@elseif(Auth::user()->user_type == 2)

<li class="nav-item">
   <a href="{{ url('student/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
     
     <p>
       Menu
       
     </p>
   </a>
 </li> 

 @elseif(Auth::user()->user_type == 3)

<li class="nav-item">
   <a href="{{ url('inspector/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
     
     <p>
       Menu
       
     </p>
   </a>
 </li>  




       @endif  
       </ul>
       <ul class="navbar-nav ml-auto">

        @php
        $userTypes = [
            1 => 'Admin',
            2 => 'Client',
            3 => 'Inspector',
            
        ];
    
        $userType = Auth::user()->user_type;
    @endphp
  
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img style="height: 40px; width: 40px;" src="{{  Auth::user()->getProfileDirect() }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
                        {{ Auth::user()->name }} {{ Auth::user()->last_name }}  ({{ isset($userTypes[$userType]) ? $userTypes[$userType] : 'Unknown Role' }} )
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ url(Auth::user()->user_type == 1 ? 'admin/account' : (Auth::user()->user_type == 2 ? 'student/account' : 'inspector/account')) }}">My Account</a>
                        <a class="dropdown-item" href="{{ url(Auth::user()->user_type == 1 ? 'admin/change_password' : (Auth::user()->user_type == 2 ? 'student/change_password' : 'inspector/change_password')) }}">Change Password</a>
                        <a class="dropdown-item" href="{{ url('logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
