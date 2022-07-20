<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content='codeglim'>

		<!-- Title Tag -->
        <title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{asset("client/logo/favicon.png")}}">

        <!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset("client/css/bootstrap.min.css")}}">

		<!-- Tromas CSS -->
		<link rel="stylesheet" href="{{asset("client/css/theme-plugins.css")}}">
        <link rel="stylesheet" href="{{asset('client/style.css')}}">
        <link rel="stylesheet" href="{{asset("client/css/responsive.css")}}">

		<!-- Tromas Color -->
		<link rel="stylesheet" href="{{asset('client/css/skin/skin1.css')}}">
        <link rel="stylesheet" href="{{asset('client/new.css')}}">
        <link rel="stylesheet" href="{{asset('client/custom_style.css')}}">

		<!--<link rel="stylesheet" href="css/skin/skin2.css">-->
		<!--<link rel="stylesheet" href="css/skin/skin3.css">-->
		<!--<link rel="stylesheet" href="css/skin/skin4.css">-->
		<!--<link rel="stylesheet" href="css/skin/skin5.css">-->
		<!--<link rel="stylesheet" href="css/skin/skin6.css">-->
		<!--<link rel="stylesheet" href="css/skin/skin7.css">-->
		<!--<link rel="stylesheet" href="css/skin/skin8.css">-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="#" id="tromas">
    </head>

    <body id="bg" style="">
		<div id="layout" class="">

            <!-- Start Header -->
            <header id="header" class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{asset("client/logo/logo_horizontal.png")}}" alt="logo" style='width:40%'></a>
                            </div>
                            <!--/ End Logo -->
                            <div class="mobile-nav"></div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <!-- Header Widget -->
                            <div class="header-widget">
                                <!-- Single Widget -->
                                <div class="single-widget">
                                    <i class="fa fa-clock-o"></i>
                                    <h4 style="font-weight: bold;"><span>Horaire d'ouverture</span></h4>
                                    <p>Lundi-Samedi: 8.00-18.00</p>
                                </div>
                                <!--/ End Single Widget -->
                                <!-- Single Widget -->
                                <div class="single-widget">
                                    <i class="fa fa-envelope"></i>
                                    <h4 style="font-weight: bold;">Email</h4>
                                <p><a href="mailto:info@yourwebsite">contact@positiveinternetsolution.com</a></p>
                                </div>
                                <!--/ End Single Widget -->
                                <!-- Single Widget -->
                                <div class="single-widget">
                                    <i class="fa fa-phone"></i>
                                    <h4 style="font-weight: bold;">Téléphone</h4>
                                <p>+228 91325637</p>
                                </div>
                                <!--/ End Single Widget -->
                            </div>
                            <!--/ End Header Widget -->
                        </div>
                    </div>
                </div>
                <!-- Header Inner -->
                <div class="header-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="nav-area">
                                    <!-- Main Menu -->
                                    <nav class="mainmenu">
                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav">
                                                <li class=" {{Request::is('/') ? 'active' : '';}} "><a href=" {{route('home')}} ">Accueil</a></li>
                                                <li><a href="{{route('crypto_actu')}}">Actu-Ctypto</a></li>
                                                <li class=" {{Request::is('service') ? 'active' : '';}} "><a href=" {{route('service')}} ">services</a></li>
                                                <li  class=" {{Request::is('livre') ? 'active' : '';}} "><a href="{{route('livre')}}">Livres</a></li>
                                                <li  class=" {{Request::is('formation') ? 'active' : '';}} "><a href=" {{route('formation')}} ">Formations</a></li>
                                                <li class=" {{Request::is('affiliation') ? 'active' : '';}} "><a href="{{route('affiliation')}}">Affiliation</a></li>
                                                @if(!Auth::guard('client')->user())
                                                    <li class=" {{Request::is('client_login') ? 'active' : '';}} "><a href="{{ route('client.client_login') }}">Se connecter</a></li>
                                                @else
                                                    <li><a href="#">Tableau de bord<i class="fa fa-angle-down"></i></a>
                                                        <ul class="drop-down">
                                                            <li><a href="{{ route('client.dashboard') }}">{{ __('Mes activités') }}</a></li>
                                                            <li><a href="{{route('affiliation')}}">Affiliation</a></li>
                                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">{{ __('Se deconnecter') }}</a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endif

                                                


                                                
                                                    
                                                
                                                
                                            </ul>
                                        </div>
                                    </nav>
                                    <!--/ End Main Menu -->
                                    <!-- Social -->
                                    <ul class="social">

                                        <li><a href="https://www.facebook.com/228PIS"><i class="fa fa-facebook"></i></a></li>
                                        <li class="active"><a href="https://www.linkedin.com/in/kodjo-helle-252b61206"><i class="fa fa-linkedin"></i></a></li>
                                        {{-- <li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                                        <li><a href="https://www.youtube.com/channel/UCbVZE23dM7BcAxCwWzyiGJw"><i class="fa fa-youtube"></i></a></li>
                                        {{-- <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
                                    </ul>
                                    <!--/ End Social -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Header Inner -->
            </header>
            <!--/ End Header -->

            @yield('content')


             <!-- Start Footer -->
        <footer id="footer" class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- Address Widget -->
                            <div class="single-widget address">
                                <h2>Positive Internet Solution</h2>
                                <p>Tout ce que vous devez savoir sur les cryptos et la blockchain.</p>
                                <ul class="list">
                                    <li><i class="fa fa-phone"></i>+228 91325637 </li>
                                    <li><i class="fa fa-envelope"></i><a href="mailto:contact@positiveinternetsolution.com">contact@positiveinternetsolution.com</a></li>
                                    <li><i class="fa fa-map-o"></i>Rue Malfakassa, Qt Kagnikopé, Lomé - Togo </li>
                                </ul>
                                <ul class="social">
                                    <li><a  href="https://www.facebook.com/228PIS"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/kodjo-helle-252b61206"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <!--/ End Address Widget -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- Links Widget -->
                            <div class="single-widget links">
                                <h2>Liens Utiles</h2>
                                <ul class="list">
                                    <li><a href="{{route('a_propos')}}"><i class="fa fa-angle-right"></i>A Propos</a></li>
                                    <li><a href="{{route('contact')}}"><i class="fa fa-angle-right"></i>Contact</a></li>
                                    {{-- <li><a href="#"><i class="fa fa-angle-right"></i>Crypto Fortune</a></li> --}}
                                    <li><a href=" {{route('positive_academy')}} "><i class="fa fa-angle-right"></i>Positive Academy</a></li>
                                    <li><a href="{{route('affiliation')}}"><i class="fa fa-angle-right"></i>Contrat d Affiliation</a></li>
                                    <li><a href=" {{route('mention_legale')}} "><i class="fa fa-angle-right"></i>Mention Légale</a></li>
                                    <li><a href=" {{route('condition_de_vente')}} "><i class="fa fa-angle-right"></i>Conditions Générales de Ventes</a></li>
                                </ul>
                            </div>
                            <!--/ End Links Widget -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- Links Widget -->
                            <div class="single-widget links">
                                <h2>Apprendre</h2>
                                <ul class="list">
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Qu'est ce que le Bitcoin ?</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Qu'est ce que la Blockchain ?</a></li>
                                    <li><a href=" {{route('achat_vente_crypto')}} "><i class="fa fa-angle-right"></i>Acheter et vendre le Bitcoins et Altcoins</a></li>

                                </ul>
                            </div>
                            <!--/ End Links Widget -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- Links Widget -->
                            <div class="single-widget links">
                                <h2>Suppport et Communauté</h2>
                                <ul class="list">
                                    <li><a href="https://wa.me/22891325637"><i class="fa fa-whatsapp"></i>Rejoignez-nous sur Whatsapp</a></li>
                                    <li><a href="https://www.facebook.com/228PIS"><i class="fa fa-facebook"></i>Page Facebook</a></li>
                                    <li><a href="https://www.facebook.com/groups/619178156830297/?ref=share"><i class="fa fa-facebook"></i>Groupe Facebook</a></li>
                                    <li><a href="https://www.instagram.com/pis_formation/"><i class="fa fa-instagram"></i>Compte Instagram</a></li>
                                    <li><a href="https://t.me/joinchat/dvWirhWMXqI4MWU0"><i class="fa fa-telegram"></i>Groupe Telegram</a></li>
                                    <li><a href="https://chat.whatsapp.com/FTxmYsVPAzO6ilxWnnZodE"><i class="fa fa-telegram"></i>Groupe WhatSapp</a></li>
                                    <li><a href="https://www.youtube.com/channel/UCbVZE23dM7BcAxCwWzyiGJw"><i class="fa fa-youtube"></i>Chaine Youtube</a></li>
                                    <li><a href="https://www.linkedin.com/in/kodjo-helle-252b61206"><i class="fa fa-linkedin"></i>Mon profil Linkedin</a></li>
                                </ul>
                            </div>
                            <!--/ End Links Widget -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- copyright -->
                            <div class="copyright">
                                <p>&copy; 2021 Positive Internet Solution All Right Reserved. Design & Developed By <a href="https://hilexpertiz.com">https://hilexpertiz.com</a></p>
                            </div>
                            <!--/ End Copyright -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/ End footer -->

            <!-- Jquery -->
			<script src="{{asset('client/js/jquery.min.js')}}" type="text/javascript"></script>
			<!-- Bootstrap JS -->
			<script src="{{asset('client/js/bootstrap.min.js')}}" type="text/javascript"></script>
			<!-- Modernizer JS -->
			<script src="{{asset("client/js/modernizr.min.js")}}" type="text/javascript"></script>
			<!-- Tromas JS -->
			<script src="{{asset("client/js/tromas.js")}}" type="text/javascript"></script>
			<!-- Tromas Plugins -->
			<script src="{{asset("client/js/theme-plugins.js")}}" type="text/javascript"></script>
			<!-- Google Map JS -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>
			<script src="{{asset('client/js/gmap.min.js')}}"  type="text/javascript" ></script>
			<!-- Main JS -->
			<script src="{{asset("client/js/main.js")}}" type="text/javascript"></script>
            <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
            @stack('new_crypto')
            @stack('script')
        </div>

    </body>

</html>
