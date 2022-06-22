<html>
  <head>
    <link rel="stylesheet" type="text/css" href="CSS.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../FrontEnd/assets/styles/main.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/LogoSiHijau2 1.ico" />

    <!-- Box Icon -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

     <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- Link Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/breakpoints.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
  </head>
  <body>

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

  </body>
</html>

 <!-- Custom Js Script -->
    <script src="{{ asset('js/js.js') }}" ></script>
     <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          360: {
            slidesPerView: 1,
          },
           520: {
            slidesPerView: 2,
          },
           980: {
            slidesPerView: 3,
          },
        },
      });
    </script>
