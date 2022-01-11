<header id="site_header" class="header">
    <div class="header-content clearfix">
          
      <!-- Text Logo -->
      <div class="text-logo">
        <a href="{{route('home')}}">
          {{-- <div class="logo-symbol">A</div> --}}
          <div class="logo-text">Mohamed Amine <span>AKACHA</span></div>
        </a>
      </div>
      <!-- /Text Logo -->

      <!-- Navigation -->
      <div class="site-nav mobile-menu-hide">
        <ul class="leven-classic-menu site-main-menu">

          <li class="menu-item {{ (Request::url() == route('home') ? 'current-menu-item' : '')}} ">
              <a href="{{route('home')}}">Resume</a>
          </li>

          <li class="menu-item {{ (Request::url() == route('contact') ? 'current-menu-item' : '')}}">
            <a href="{{route('contact')}}">Hire Me</a>
          </li>
        </ul>
      </div>

      <!-- Mobile Menu Toggle -->
      <a class="menu-toggle mobile-visible">
        <i class="fa fa-bars"></i>
      </a>
      <!-- Mobile Menu Toggle -->
    </div>
  </header>