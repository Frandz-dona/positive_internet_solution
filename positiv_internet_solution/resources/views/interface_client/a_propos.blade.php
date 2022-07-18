@extends('layouts/client.client')
@section('title')
Positive Internet Solution | A propos
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
                <h2>A propos</h2>
                <ul class="bread-list">
                    <li><a href="{{route('home')}}">Accueil<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="{{route('a_propos')}}">A propos</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->
<!-- Our Skill -->
<section id="our-skill" class="our-skill section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Ce que nous faisons</h1>
                    <p>Nous accompagnons tous ceux qui ont la rage d'en finir avec la pauvreté à gagner plus d'argent afin d'assurer leur indépendance financière. Pour se faire :</p>
                    <p>1-Nous aidons tous les internautes à gagner jusqu'à 2000€ par jour à l'aide de notre programme d'affiliation. </p>
                    <p>2- Nous sponsorisons des formations (jusqu'au 1/3 des frais) aux métiers de la blockchain, au Marketing digital, à L'IA, au Développement web et d'application mobile pour tous nos affiliés.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="skill-text">
                    <h2>Comment nous travaillons</h2>
                    <p>1-Un marketplace d'E-learning (POSITIVE ACADEMY) qui héberge toutes nos formations.</p>
                    <p>2- des collaborations avec des entrepreneurs et formateurs à succès.</p>
                    <p>3- Des suivis à tous nos apprenants dans nos divers forums.</p>
                    <p>4- un média qui publie des actu crypto et blockchain</p>
                    <p>5- une fondation "Crypto-leader" qui finance des projets à plus forte valeur ajoutée de nos apprenants.</p>
                    <p>6- Une librairie et une maison d'édition en ligne pour la publication et la vente de vos ouvrages au format PDF.</p>
                    <a href="{{route('contact')}}" class="btn_cta">Nous-contacter</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <!-- Single Skill -->
                <div class="single-skill">
                    <div class="skill-info">
                        <h4>Formations</h4>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span class="percent">70%</span>
                        </div>
                    </div>
                </div>
                <!--/ End Single Skill -->
                <!-- Single Skill -->
                <div class="single-skill">
                    <div class="skill-info">
                        <h4>Blockchain</h4>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="percent">90%</span>
                        </div>
                    </div>
                </div>
                <!--/ End Single Skill -->
                <!-- Single Skill -->
                <div class="single-skill">
                    <div class="skill-info">
                        <h4>Cryptomonnaies</h4>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="percent">60%</span>
                        </div>
                    </div>
                </div>
                <!--/ End Single Skill -->
                <!-- Single Skill -->
                <div class="single-skill">
                    <div class="skill-info">
                        <h4>Coaching</h4>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            <span class="percent">80%</span>
                        </div>
                    </div>
                </div>
                <!--/ End Single Skill -->
            </div>
        </div>
    </div>
</section>
<!--/ End Our Skill -->
<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Vous voulez en savoir plus ?</h1>
                    <p>Ici vous en découvrirez un peu plus sur nous</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-8 col-sm-6 col-xs-12">
                <form class="form" method="post" action="mail/mail.php">
                    <div class="row">
                        <div class="col-md-12">
                            Amoureux de la blockchain et des cryptos, Bonjour.
                            <br>
                            <p>
                                Je suis Iniko K. Helle, Co-fondateur de POSITIVE INTERNET SOLUTION en 2018. Au départ, l’objectif était de fournir de la connexion internet à la jeunesse des milieux reculés de la capitale de mon pays afin qu’elle ait l’opportunité de se former aux nouvelles technologies de l’information et de la communication, par la mise en place des WIFI-ZONE (PIS WIFI-ZONE). <br>
                                Parlant de moi ? Je suis un jeune de trente-deux ans, diplômé en Science de l’Economie du Développement à la Faculté des Sciences Economiques et de la Gestion (FASEG) de l’Université de Lomé. Entrepreneur, je suis le fondateur du site internet <a href="https://www.positiveinternetsolution.com/ ">positiveinternetsolution.com/ </a>, du FORUM POSITIVE BUSINESS (Peut-être le forum le plus ultra rentable du web francophone) et de POSITIVE ACADEMY (l’académie de référence en matière des formations qualifiées et sponsorisées en ligne). <br>
                                Mes premiers contacts avec le bitcoin remontent en 2012, alors que j’étais encore à l’Université.
                            </p>
                            <br>
                            <p>
                                Depuis lors, je suis convaincu que les cryptomonnaies et la blockchain vont changer la façon dont le monde fonctionne.
                                L’idée, en créant <a href="https://www.positiveinternetsolution.com/">positiveinternetsolution.com/</a>, en écrivant CRYPTO FORTUNE Tome 1 et Tome 2, c’est apporter ma contribution à la réalisation du rêve de la démocratisation de la monnaie. <br> C’est aussi participer à la promotion d’un système pair à pair qui permet d’échanger de la valeur entre individus à l’échelle planétaire. <br>
                                Bref, assez parler de moi. Mon nom, mon parcours on s’en fiche. Ce qui est certain, si vous désirez développer vos propres compétences en crypto-investissement et vous approprier tout le potentiel de la technologie blockchain, ici, c’est le bon endroit
                                Je vous souhaite une belle expérience.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <!--/ End Contact Form -->
            <!-- Contact Address -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-address">
                    <div class="contact">
                        <h2>Entrons en contact</h2>
                        <p>N'hésitez pas à nous contacter, nous sommes à votre écoute.</p>
                        <!-- Single Address -->
                        <div class="single-address">
                            <span><i class="fa fa-headphones"></i>Phone</span>
                            <p>+(228) 91325637</p>
                        </div>
                        <!--/ End Single Address -->
                        <!-- Single Address -->
                        <div class="single-address">
                            <span><i class="fa fa-envelope"></i>Email</span>
                            <p><a href="mailto:contact@positiveinternetsolution.com">contact@positiveinternetsolution.com</a></p><br>
                            <span><i class="fa fa-whatsapp"></i>Whatapp :</span>
                            <p><a href="https://wa.me/22891325637">(+228) 91325637</a></p><br>
                            <span><i class="fa fa-telegram"></i>Telegram :</span>
                            <p><a href="https://t.me/joinchat/dvWirhWMXqI4MWU0">Rejooignez-nous sur Télégram</a></p><br>
                            <span><i class="fa fa-facebook"></i>Facebook:</span>
                            <p><a href="https://www.facebook.com/228PIS">Rejooignez-nous sur Facebook @228pis</a></p>
                        </div>
                        <!--/ End Single Address -->
                        <!--/ End Single Address -->
                        <!-- Single Address -->
                        <div class="single-address">
                            <span><i class="fa fa-map"></i>Positive Internet Solution:</span>
                            <p>Rue Malfakassa, Qt Kagnikopé, Lomé - Togo</p>
                        </div>
                        <!--/ End Single Address -->
                    </div>
                </div>
            </div>
            <!--/ End Contact Address -->
        </div>
    </div>
</section>
<!--/ End Contact -->

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
