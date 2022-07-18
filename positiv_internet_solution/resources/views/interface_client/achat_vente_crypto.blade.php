@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Acheter et vendre Bitcoins et Altcoins
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
                    <h2>Acheter et vendre Bitcoins et Altcoinss</h2>
                    <ul class="bread-list">
                        <li><a href=" {{route('home')}} ">Accueil<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">Acheter et vendre Bitcoins et Altcoins</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<!--/ End Breadcrumbs -->

<section id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Acheter et vendre Bitcoins et Altcoins</h1>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                <crypto-component></crypto-component>
                <div class="more_price_link" align="right">
                    <a href="" style="font-size: 1.1em">Voir plus de marché <i class="fa fa-angle-right"></i></a>
                </div>
            </div> --}}
            <div class="col-md-12 col-sm-12 col-xs-12" style="border-left: 1px solid gray;">
                <div class="cc" style="text-align: center; padding: 1Opx;">
                    <h4>Investissez auprès de nos partenaires!</h4>
                    <table class="table">
                        <thead class="thead-dark" style="color: #0A1A2D;">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><img src="{{asset('client/images/cryptos/binance.png')}}" alt="Binance" width="130" height="40"></th>

                                <td><a href="https://accounts.binance.com/fr/register?ref=ZXS1S4M0" target="_blanck"> <b>Voir l'offre</b></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="{{asset('client/images/cryptos/coinbase.png')}}" alt="Coinbase" width="130" height="40"></th>

                                <td><a href="https://www.coinbase.com/fr/join/helle_51" target="_blanck"> <b>Voir l'offre</b></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="{{asset('client/images/cryptos/ftx.png')}}" alt="FTX" width="130" height="60"></th>

                                <td><a href="https://link.blockfolio.com/9dzp/aaf88480" target="_blanck"> <b>Voir l'offre</b></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="{{asset('client/images/cryptos/cex.png')}}" alt="Cex" width="130" height="40"></th>

                                <td><a href="https://cexio.page.link/cxHf" target="_blanck"> <b>Voir l'offre</b></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Start Call-To-Action -->
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="call-to-main">
                    <h2>Acheter et vendre <span>Bitcoin et Altcoins</span> auprès de nos partenaires</h2>
                    <a href="" class="btn"><i class="fa fa-send"></i>Commencer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call-To-Action -->

@endsection
