  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="{{url('/ ')}}" class="logo d-flex align-items-center me-auto me-xl-0" style="color:black;">

        <h1 >Bank Loan</h1>
        <span>.</span>
      </a>
<nav id="navmenu" class="navmenu">
    <ul class="nav-links">
        <li style="color:black;"><a  class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
        <li style="color:black;"><a class="nav-link {{ Route::is('user.personal-loan') ? 'active' : '' }}" href="{{ route('user.personal-loan') }}">Personal Loan</a></li>
        <li style="color:black;"><a class="nav-link {{ Route::is('user.buisness') ? 'active' : '' }}" href="{{ route('user.buisness') }}">Business Loan</a></li>
        <li style="color:black;"><a class="nav-link {{ Route::is('user.car-auto') ? 'active' : '' }}" href="{{ route('user.car-auto') }}">Car/Auto Loan</a></li>
        <li style="color:black;"><a class="nav-link {{ Route::is('user.home-loan') ? 'active' : '' }}" href="{{ route('user.home-loan') }}">Home Loan</a></li>
        <li style="color:black;"><a class="nav-link {{ Route::is('user.banklist') ? 'active' : '' }}" href="{{ route('user.banklist') }}">Bank List</a></li>
        <li style="color:black;"><a class="nav-link {{ Route::is('user.contact-us') ? 'active' : '' }}" href="{{ route('user.contact-us') }}">Contact Us</a></li>
        <li style="color:black;"><a class="nav-link {{ Route::is('user.login') ? 'active' : '' }}" href="{{ route('user.login') }}">login</a></li>

    </ul>

    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>


    </div>
  </header>


   <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


