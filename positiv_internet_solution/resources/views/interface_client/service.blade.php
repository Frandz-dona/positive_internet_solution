@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Nos Services
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

<!-- Start Breadcrumbs -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Nos Services</h2>
                <ul class="bread-list">
                    <li><a href=" {{route("home")}} ">Accueil<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="{{route("service")}}">Services</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Start Services -->
<section id="services" class="services section">
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Nos services</h1>
                    <p>Nous accompagnons tous ceux qui ont la rage d'en finir avec la pauvreté à gagner plus d'argent afin d'assurer leur indépendance financière. Pour se faire :</p>
                    <p>1-Nous aidons tous les internautes à gagner jusqu'à 2000€ par jour à l'aide de notre programme d'affiliation. </p>
                    <p>2- Nous sponsorisons des formations (jusqu'au 1/3 des frais) aux métiers de la blockchain, au Marketing digital, à L'IA, au Développement web et d'application mobile pour tous nos affiliés.</p>
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
                    <a href="" class="btn_cta_opacity" style="margin-top: 15px;"><i class="fa fa-chevron-right"></i> <b>Découvrir nos formations</b></a>
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
                    <a href="" class="btn_cta_opacity" style="margin-top: 15px;"><i class="fa fa-chevron-right"></i> <b>Explorer les actualités</b></a>
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
                    <a href="" class="btn_cta_opacity" style="margin-top: 15px;"><i class="fa fa-chevron-right"></i> <b>Découvrir nos formations</b></a>
                </div>
            </div>
            <!--/ End Single Service -->

            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-book"></i></div>
                    <div class="icon two"><i class="fa fa-book"></i></div>
                    <h2><a href="#">Les éditions CRYPTO FORTUNE</a></h2>
                    <p>Nous accompagnons les écrivains/auteurs débutants comme confirmés. Publiez et vendez vos ouvrages dans notre librairie en ligne.
                    </p>
                    <a href="" class="btn_cta_opacity" style="margin-top: 15px;"><i class="fa fa-chevron-right"></i> <b>Soumettez votre ouvrage</b></a>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                    <div class="icon two"><i class="fa fa-shopping-cart"></i></div>
                    <h2><a href="#">E-commerce</a></h2>
                    <p>Vendez vos livres et formations sur toutes nos plateformes. La publication des livres et formations se font à 0€ de frais d'hébergement sur toutes nos plateformes.</p>
                    <a href="" class="btn_cta_opacity" style="margin-top: 15px;"><i class="fa fa-chevron-right"></i> <b>Découvrir comment</b></a>
                </div>
            </div>
            <!--/ End Single Service -->
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-services">
                    <div class="icon"><i class="fa fa-laptop"></i></div>
                    <div class="icon two"><i class="fa fa-laptop"></i></div>
                    <h2><a href="#">Solutions numériques de pointe</a></h2>
                    <p>Création et développement de projets sur la blockchain, Intelligence Artificielle, développement d'outils numériques et référencement SEO.</p>
                    <a href="" class="btn_cta_opacity" style="margin-top: 15px;"><i class="fa fa-chevron-right"></i> <b>Soumettez vos projets</b></a>
                </div>
            </div>
            <!--/ End Single Service -->
        </div>
    </div>
</section>
<!--/ End Services -->

<!--/ End Services -->
<!-- Start Call-To-Action -->
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="call-to-main">
                    <h2>Acheter et vendre <span>Bitcoin et Altcoins</span> auprès de nos partenaires</h2>
                    <a href=" {{route('achat_vente_crypto')}}" class="btn"><i class="fa fa-send"></i>Commencer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call-To-Action -->

@endsection
