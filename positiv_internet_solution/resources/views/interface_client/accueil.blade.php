@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Accueil
@endsection

@section('property')
<meta property="og:url" content='https://positiveinternetsolution.com/'>
<meta property="og:type" content="website">
<meta property="og:title" content="Positive Internet Solution | En savoir plus sur nous">
<meta property="og:description" content="Si vous souhaitez développer vos propres compétences en crypto-investissement et exploiter tout le potentiel de la technologie blockchain, c'est l'endroit qu'il vous faut.
   nous vous souhaitons une belle expérience.">
<meta property="og:image" content='{{asset("client/images/logo/lg.png")}}'>
@endsection


@section('content')
    <!-- Start Hero Area -->
			<section class="hero-area">
				<div class="slider-one">


                    <!-- Single Slider -->
					<div class="single-slider" style="background-image:url('client/images/banniere/banniere_1.png')">
						<div class="container">
							<div class="row">
								<div class="col-md-7 col-sm-12 col-xs-12">
									<!-- Slider Text -->
									<div class="slide-text">
										<h1 style="color: #fff; font-size: 2em;"><span class="short" style="color: #fff;"> Obtenez votre indépendance financière aujourd'hui! </span></h1>
										{{-- <p style="color: #fff; font-size: 1.1em;">welcome to tromas, Contrary to popular belief. Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old .</p> --}}
										<div class="slide-btn">
											<a href="#projects" class="btn "><b>EN SAVOIR PLUS </b> <i class='fa fa-download'></i></a>
										</div>
									</div>
									<!--/ End SLider Text -->
								</div>
							</div>
						</div>
					</div>
					<!--/ End Single Slider -->
					<!-- Single Slider -->
					<div class="single-slider" style="background-image:url('client/images/banniere/back4.png')">
						<div class="container">
							<div class="row">
								<div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
									<!-- Slider Text -->
									<div class="slide-text right">
										<h1 style="color: #fff;"><span class="short" style="color: #fff;"> Nous vous aidons à gagner jusqu'à <span>2000$</span> par jour à l'aide de notre business model basé sue l'Affiliation </span></h1>
										{{-- <p style="color: #fff; font-size: 1.1em;">welcome to tromas, Contrary to popular belief. Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old .</p> --}}
										<div class="slide-btn">
											<a href=" {{route('affiliation')}} " class="btn ">EN SAVOIR PLUS</a>
										</div>
									</div>
									<!--/ End SLider Text -->
								</div>
							</div>
						</div>
					</div>
					<!--/ End Single Slider -->

				</div>
			</section>

	<!--/ End Hero Area -->
<!-- actualité new_crypto -->
        <section class="features">
            <div class="container" >
                <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
                
                <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,ripple,binancecoin,cardano" currency="usd" background-color="#deac21" locale="fr" font-color="#1a1a1a"></coingecko-coin-price-marquee-widget>

            </div>
        </section>
<!-- actualité new_crypto -->

 <!-- Start Services -->
 <section id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-4 col-xs-4">
                <div class="section-title">
                    <h1 style="font-size: 20px; font-family:">Profitez de nos services</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-edit"></i></div>
                    <div class="icon two"><i class="fa fa-edit"></i></div>
                    <h2><a href="#">Formation Gratuite</a></h2>
                    <p>Recevez gratuitement des livres numériques et papier
                        sur les thématiques autour des cryptomonnaies, de la blockchain et du webmarketing.
                    </p>
                    <a href="#" class="btn_cta_opacity" style="margin-top: 15px;"><i class="fa fa-chevron-right"></i> <b>Rejoindre la formation</b></a>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
                    <div class="icon two"><i class="fa fa-lightbulb-o"></i></div>
                    <h2><a href="#">Crypto News</a></h2>
                    <p>Nous éditons et diffusons
                        des actualités et des articles,
                        principalement sur le marché des cryptomonnaies et la blockchain sur toutes nos plateformes.
                    </p>
                    <a href="#" class="btn_cta_opacity" style="margin-top: 15px;"><i class="fa fa-chevron-right"></i> <b>Explorer le marché</b></a>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-money"></i></div>
                    <div class="icon two"><i class="fa fa-money"></i></div>
                    <h2><a href="#">Success Pro</a></h2>
                    <p>Investissez
                        sereinement dans les cryptos, apprennez les stratégies qui gagnent,
                        connaitre la solidité des acteurs auxquels on accordera sa confiance.</p>
                    <a href="#" class="btn_cta_opacity" style="margin-top: 15px;"><i class="fa fa-chevron-right"></i> <b>Rejoindre la formation</b></a>
                </div>
            </div>
            <!--/ End Single Service -->
        </div>
        <br>
        <div class="more_price_link" align="right">
            <a href=" {{route('service')}} " style="font-size: 1.1em">Découvrir nos services <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</section>
<!--/ End Services -->

<!-- Start Blogs -->
<section id="team" class="team section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Actualités récentes sur les cryptos</h1>
                </div>
            </div>
        </div>
        <br>
        <p style="text-align: center" style="font-size: 20px">Actualités récentes sur les cryptomonaies, la blockchain et le web3.0</p>
        <br>
        <div class="more_price_link" style="text-align: center">
            <a href="#" style="font-size: 1em; font-weight: bold;">VOIR PLUS D'ARTICLES</a>
        </div>
    </div>
</section>
<!--/ End Blog -->

 <!-- Prix des cryptomonnaies -->
 <section id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Positive Academy</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">

                <img src="{{asset('client/images/academi.jpg')}}" alt="" width="400" height="400">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="cc" style="text-align: center; padding: 1Opx;">
                    <h4>C est le moment pour développer vos propres compétences à la blockchain quelque soit votre niveau</h4>
                    <br>
                    <p style="font-size: 20px">Votre temps pour trouver des contenus GRATUITS et des formations sponsorisées à 40% des frais que vous soyez débutant ou confirmé, c'est maintenant !</p>
                    <br>
                    <div class="cc_btn">
                        <a href="#" class="btn_cta" style="margin-right: 10px;"><i class="fa fa-user-plus"></i> <b>S'inscrire</b></a> <a href="https://wa.me/22891325637" class="btn_cta"><i class="fa fa-whatsapp"></i> <b>Nous contacter</b></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/ End Prix des cryptomonnaies -->

<!-- call to action livre -->
<section id="services" class="book section" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Crypto Fortune I , Dictionnaire des cryptomonnaies et de la blockchain </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p style="font-size: 20px">Découvrez notre stratégie qui permet de gagner 100€ par jour sans investissement dans les cryptomonnaies et que vous aussi
                    vous pouvez aisément appliquer.
                </p>
                <br>
                <a href="{{route('livre')}}" class="btn_cta" style="font-size: 1em; font-weight: 700;">RECEVOIR MON EXEMPLAIRE GRATUIT</a>
            </div>
            <br>
            <p>.</p>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="cc" style="text-align: left;">
                        <img src="{{asset('client/images/livres/m1.png')}}" width="400" height="400" alt="">
                    </div>

                </div>


        </div>
    </div>
</section>
<!--/ End call to action livre -->




<!-- call to action livre -->
<section id="services" class="book section" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    
                    <h1>Positive Business </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="cc" style="text-align: left;">
                     <img src="{{asset('client/images/forum.jpg')}}" width="400" height="400" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="call-to-main">
                    <h2><span>Restez informé </span></h2>
                    <h3> recevez des astuces pour augmenter vos gains .</h3>
                    <br>
                    <a href="https://t.me/joinchat/dvWirhWMXqI4MWU0" class="btn_cta" style="font-size: 1em; font-weight: 700;"> <i class="fa fa-send"></i> <b> Rejoindre la communauté</b></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End call to action livre -->

<!-- Modal crypto -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


@endsection





























@push('new_crypto')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var btc = document.getElementById("bitcoin");
        var ltc = document.getElementById("litecoin");
        var eth = document.getElementById("ethereum");
        var doge = document.getElementById("dogecoin");

var liveprice = {
    "async": true,
    "scroosDomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Clitecoin%2Cethereum%2Cdogecoin&vs_currencies=usd",

    "method": "GET",
    "headers": {}
}

$.ajax(liveprice).done(function (response){
    btc.innerHTML = response.bitcoin.usd;
    ltc.innerHTML = response.litecoin.usd;
    eth.innerHTML = response.ethereum.usd;
    doge.innerHTML = response.dogecoin.usd;


});
    </script>
@endpush

