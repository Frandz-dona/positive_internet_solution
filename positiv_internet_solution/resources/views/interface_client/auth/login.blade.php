@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Accueil
@endsection
@section('content')
<!-- Start Contact -->
<!-- Start Breadcrumbs -->
<section class="breadcrumbs">
   <div class="container">
       <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
               <h2>Connexion</h2>
               <ul class="bread-list">
                   <li><a href="{{route('home')}}">Accueil<i class="fa fa-angle-right"></i></a></li>
                   <li class="active"><a href="#">Page connexion</a></li>
               </ul>
           </div>
       </div>
   </div>
</section>
<!--/ End Breadcrumbs -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title" style="text-align: center;">
                    <h1>Connexion au compte PIS</h1>
                    <p>Bienvenue ! Connectez-vous avec votre e-mail</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">

            </div>
            <!-- Contact Form -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <form class="form" method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Votre Email') }}</label>
                        <div class="col-md-12" style="margin-bottom: 20px;">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" style="border: 1px solid gray;" required autocomplete="email" placeholder="Email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" style="border: 1px solid gray;" required autocomplete="current-password" placeholder="Mot de passe">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="login_btn">
                        <button type="submit" class=" btn mb-2 btn-primary ">
                             Se connecter
                        </button>
                    </div>
                    <br>
                    <div class="form-group">
                        {{-- <div class="col-md-12"> --}}
                            {{-- @if (Route::has('password.request')) --}}
                            {{-- <a href="{{ route('password.request') }}"> --}}
                                {{-- {{ __('Mot de passe oublié?') }} --}}
                            {{-- </a> --}}
                            {{-- @endif --}}
                            <a href="{{ route('client_register') }}" style="margin-left: 10px;">
                                 {{ __('Vous n\'avez pas de compte? Créer un compte.')}}
                            </a>
                        </div>
                     </div>
                </form>
            </div>
            <!--/ End Contact Form -->
            <div class="col-md-3 col-sm-3 col-xs-12">

            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->
@endsection