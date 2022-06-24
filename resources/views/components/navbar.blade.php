<nav class="navbar fixed-top navbar-expand-lg navbar-light py-3">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/logo-sihi.png') }}" alt="Logo" style="width: 130px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('edukasi') }}">Edukasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('tentang_kami') }}">Tentang kami</a>
            </li>
          </ul>

          @auth
             <div class="d-flex user-logged nav-item no-arrow dropdown">
                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Halo, {{ Auth::user()->name}} !
                @if (Auth::user()->avatar)
                    <img src="{{ Auth::user()->avatar }}" class="user-photo" alt="">
                @else
                    <img src="https://ui-avatars.com/api/?name=admin"class="user-photo" alt="">
                @endif
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left:auto">

                    @if (Auth::user()->is_admin)
                     <li>
                        <a href="{{route('admin.discount.index')}}" class="dropdown-item">Discount</a>
                    </li>
                    @endif
                    <li>
                        <a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                            <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </li>
                </ul>
            </a>
          </div>

          @else
            <a href="{{ route('login') }}" class="btn btn-outline-success me-2">Masuk</a>
            <a href="{{ route('login') }}" class="btn btn-daftar text-white ms-lg-2">Daftar</a>
          @endauth


        </div>
      </div>
    </nav>
