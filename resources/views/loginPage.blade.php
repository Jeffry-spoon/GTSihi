<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link Style Css -->
    <link rel="stylesheet" href="{{ asset('css/style_account.css') }}" />
    <title>Masuk akun</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container panels-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Selamat datang</h2>

            <p>
              <a class="btn btn-border btn-google-signup" href="#"> <img src="{{ asset('img/ic_google.svg') }}" class="icon" alt="" /> Masuk melalui  google </a>
            </p>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="panel left-panel">
          <div class="content">
            <a href="{{ route('home') }}"><img src="{{ asset('img/logo-sihi.png') }}" alt="" style="width: 250px;"></a>
          </div>
          <img src="{{ asset('img/img-signin.png') }}" class="image" alt="" />
        </div>
      </div>
    </div>

  </body>
</html>
