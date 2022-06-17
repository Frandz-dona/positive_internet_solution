<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset("client/logo/favicon.png")}}">
    <title>Positive Internet Solution | Login</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset("admin/css/feather.css")}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset("admin/css/daterangepicker.css")}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset("admin/css/app-light.css")}}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{asset('admin/css/app-dark.css')}}" id="darkTheme">
  </head>
  <body class="dark ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ route('admin.check') }}">
            @csrf
            @if(Session::get('success'))
            <div class='alert alert-success'>
                {{Session::get('success')}}
            </div>
        @endif
        @if(Session::get('fail'))
        <div class='alert alert-success'>
            {{Session::get('fail')}}
        </div>
        @endif
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <img src=" {{asset('client/logo/250X150.png')}} " alt="" style="">
          </a>
          <h1 class="h6 mb-3">Connexion admin</h1>
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <span class='text-danger'> @error('email'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
            <label for="password" class="sr-only">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <span class='text-danger'> @error('password'){{$message}}@enderror</span>
          </div>
          {{-- <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Stay logged in </label>
          </div> --}}
          <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2021 Positive Internet Solution All Right Reserved. Design & Developed By </p>
        </form>
      </div>
    </div>
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset("admin/js/popper.min.js")}}"></script>
    <script src="{{asset('admin/js/moment.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/simplebar.min.js')}}"></script>
    <script src='{{asset('admin/js/daterangepicker.js')}}'></script>
    <script src='{{asset('admin/js/jquery.stickOnScroll.js')}}'></script>
    <script src="{{asset('admin/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('admin/js/config.js')}}"></script>
    <script src="{{asset('admin/js/apps.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
</body>
</html>
