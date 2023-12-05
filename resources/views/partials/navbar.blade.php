 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>NUTRISHEESH<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="/index">Home</a></li>
            <li><a href="/index#about">About</a></li>
            <li><a href="/kandungan-user">Kandungan Gizi</a></li>
          @auth
            <li><a href="/index#resep">Resep</a></li>
            <li><a href="/index#nutrisionist">Nutritionist</a></li>
            <li><a href="/komentar">FAQ</a></li>
          @endauth
          
          <li class="dropdown"><a href="#"><span>Menu</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else

          @if (auth()->user()->level=="admin")
          <li><a href="/kandungan">Tambah Kandungan Gizi</a></li>
          
          @else

          <li><a href="/komentar">Histori Komentar</a></li>
          @endif

          

<hr>
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
                  </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        
                          @csrf
                      </form>
                  </div>
                </li>
          @endguest
        
              </li>
            </ul>
        </ul>
      </nav><!-- .navbar -->
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->