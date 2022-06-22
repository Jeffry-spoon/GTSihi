<nav class="navbar fixed-top navbar-expand-lg navbar-light py-3">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-sihi.png') }}" alt="Logo" style="width: 130px" /></a>
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

            <a href="{{ route('login') }}" class="btn btn-outline-success me-2">Masuk</a>
            <a href="{{ route('login') }}" class="btn btn-daftar text-white ms-lg-2">Daftar</a>

        </div>
      </div>
    </nav>
