<link rel="stylesheet" href="{{ asset('css/navStyle.css') }}">

{{-- Navbar --}}
<nav id="navBar" class="navbar navbar-expand-lg py-2 navbar-light sticky-top bg-light">
  <div class="container">

    {{-- Logo --}}
    <a class="navbar-brand navlogo" href="/"><img src="{{ asset('img/RB Nav.png') }}" alt="logo radar bogor"></a>

    {{-- Burger Menu --}}
    <button
    class="navbar-toggler collapsed d-flex d-lg-none flex-column justtify-content-around"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#toggleMobileMenu"
    aria-controls="toggleMobileMenu"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="toggler-icon top-bar"></span>
    <span class="toggler-icon middle-bar"></span>
    <span class="toggler-icon bottom-bar"></span>
    </button>
    {{-- Menu --}}
    <div class="collapse navbar-collapse" id="toggleMobileMenu">
      <ul class="navbar-nav text-center fw-bold ms-auto d-flex align-items-center">
        <li class="nav-item">
          <a class="nav-link" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Epaper</a>
        </li>
        @if (Auth::user())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('img/favicon-96x96.png' ) }}" style="width: 25px; height:25px;"  alt="User Image">
                    {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu bg-danger">
                    @if(Auth::guard('admin')->user())
                    <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                    @else
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    @endif
                </ul>
            </li>
          @endif
      </ul>
    </div>

  </div>
</nav>

<script src="js/script.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
