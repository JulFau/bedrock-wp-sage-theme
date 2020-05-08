<header class="hero">
  <div class="hero-head">
    <div class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="{{ home_url('/') }}"> 
          <img src="{{get_theme_mod('logo')}}" alt="LogoBrand">
          </a>
          <a class="navbar-burger burger" data-target="navbarMenuHeroC" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
       
         <div id="navbarMenuHeroC" class="navbar-menu">
      

          @if (has_nav_menu('header'))
          {!! wp_nav_menu($primarymenu) !!}

          @else

          <div class="navbar-end">
            <a class="navbar-item">
              Home
            </a>
            <a class="navbar-item">
              About us
            </a>
            <a class="navbar-item">
              Our services
            </a>
            <a class="navbar-item">
               Tour package
            </a>
            </span>
          </div>
          @endif
       
        </div> 
      </div>
    </header>
  </div>

  