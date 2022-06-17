<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset("client/logo/favicon.png")}}">
    <title>Positive Internet Solution | Register</title>
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

          <form class="col-lg-6 col-md-8 col-10 mx-auto"  method="POST" action="{{route('admin.create') }}">
            @csrf

            @if(Session::get('success'))
            <div class='alert alert-success'>
                {{Session::get('success')}}
            </div>
            @endif
            @if(Session::get('fail'))
            <div class='alert alert-danger'>
                {{Session::get('fail')}}
            </div>
            @endif
            <div class="mx-auto text-center my-4">
              <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                {{-- <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                  <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                  </g>
                </svg> --}}
                <img src=" {{asset('client/logo/250X150.png')}} " alt="">
              </a>
              <h2 class="my-3">administrateur</h2>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              <span class='text-danger'> @error('email'){{$message}}@enderror</span>

            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nom</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <span class='text-danger'> @error('name'){{$message}}@enderror</span>
              </div>
              <div class="form-group col-md-6">
                <label for="lastname">Prenom</label>
                <input id="name" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                <span class='text-danger'> @error('lastname'){{$message}}@enderror</span>
              </div>
              <div class="form-group col-md-6">
                <label for="telephone">Telephone</label>
                <input id="telephone" type="telephone" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>
                <span class='text-danger'> @error('telephone'){{$message}}@enderror</span>
              </div>
              <div class="form-group col-md-6">
                <label for="role">Role</label>
                <select class="custom-select" id="custom-select" name='role'>
                    <option selected>selectionner ne niveau d acces</option>
                    <option value="admin">Admin</option>
                    <option value="super_admin">Super_Admin</option>
                    <option value="root">Root</option>
                  </select>
                <span class='text-danger'> @error('role'){{$message}}@enderror</span>
              </div>
            </div>
            <hr class="my-4">
            <div class="row mb-4">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="password">Mot de passe</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  <span class='text-danger'> @error('password'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                  <label for="password_confirmation">Confirmer Mot de passe</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  <span class='text-danger'> @error('password_confirmation'){{$message}}@enderror</span>
                </div>
              </div>

            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Créer</button>
            <a href=" {{route('admin.home')}} ">Annulre</a>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2021 Positive Internet Solution All Right Reserved. Design & Developed By </p>
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
