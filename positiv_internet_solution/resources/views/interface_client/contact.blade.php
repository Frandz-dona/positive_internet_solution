@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Contact
@endsection

@section('property')
<meta property="og:url" content='https://positiveinternetsolution.com/'>
<meta property="og:type" content="website">
<meta property="og:title" content="Positive Internet Solution | En savoir plus sur nous">
<meta property="og:description" content="Si vous souhaitez développer vos propres compétences en crypto-investissement et exploiter tout le potentiel de la technologie blockchain, c'est l'endroit qu'il vous faut.
   nous vous souhaitons une belle expérience.">
<meta property="og:image" content='{{asset("client/images/img/logo/lg.png")}}'>
@endsection


@section('content')
<!-- Start Breadcrumbs -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Nous Contacter</h2>
                <ul class="bread-list">
                    <li><a href="{{route('home')}}">Accueil<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Vous voulez en savoir plus ?</h1>
                    <p>Contactez - nous</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-8 col-sm-6 col-xs-12">
                <form class="form" method="post" action="mail/mail.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Nom complet" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Votre Email" required="required">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Sujet" required="required">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="message" rows="7" placeholder="Ecrivez votre message ici..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group button">
                                <button type="submit" class="btn primary">Envoyer</button>
                            </div>
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
                    <a href="{{route('achat_vente_crypto')}}" class="btn"><i class="fa fa-send"></i>Commencer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call-To-Action -->
@endsection
