@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Prix des crypto-monnaies
@endsection

@section('property')
<meta property="og:url" content='https://positiveinternetsolution.com/'>
<meta property="og:type" content="website">
<meta property="og:title" content="Positive Internet Solution">
<meta property="og:description" content="Si vous souhaitez développer vos propres compétences en crypto-investissement et exploiter tout le potentiel de la technologie blockchain, c'est l'endroit qu'il vous faut.
   nous vous souhaitons une belle expérience.">
<meta property="og:image" content='{{asset("pis_assets/images/logo/lg.png")}}'>
@endsection
@section('content')
<div id="app">

    <!-- Prix des cryptomonnaies -->
    <section id="services" class="services section" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1>Tendances du marché</h1>
                        <p>Etat du marché des cryptos en temps réel.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12">
                </div>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <crypto-component></crypto-component>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12">
                </div>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <all-crypto-component></all-crypto-component>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                </div>
            </div>
        </div>
    </section>
    <!--/ End Prix des cryptomonnaies -->
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
</div>
@endsection