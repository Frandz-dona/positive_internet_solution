@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Nos formations
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
                <h2>Découvrez nos formations</h2>
                <ul class="bread-list">
                    <li><a href="{{route('home')}}">Accueil<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="{{route('formation')}}">Formations</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->
	<!-- Start Project -->
	<section id="projects" class="projects section single">
		<div class="container">
			@if(!$formations)
				<p>pas de formation</p>
			@else
				
				<div class="row">
					@foreach($formations as $formation)
					<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
								<div class="col-lg-8 col-sm-6 col-lg-6">
									<img src="/Imageformation/{{$formation->photo_couverture_formation}}" class="d-block mx-lg-auto img-fluid" alt="img" width="200" height="200" loading="lazy">
								</div>
								<div class="col-lg-6" style="margin-bottom: 50px;">
									<h4> {{$formation->titre_fromation}} </h4>
									{{-- <ul style="display: flex; margin-top: 12px; margin-bottom: 10px;">
										<li style="margin-right: 10px;"><i class="fa fa-graduation-cap"></i> 1Niveau </li>
										<li><i class="fa fa-calendar"></i> {{$formation->date_debut_formation}} </li>
										<li style="margin-left: 10px;"><i class="fa fa-money"> {{$formation->prix_formation}} </i>Euro</li>
									</ul> --}}
									 <ul style="margin-bottom: 20px;">
										<li style="margin-right: 10px;"><i class="fa fa-graduation-cap"></i> 1Niveau </li>
										<li><i class="fa fa-calendar"></i> {{$formation->date_debut_formation}} </li>
										<li style="margin-right: 10px;"><i class="fa fa-money"> {{$formation->prix_formation}} </i>Euro</li>
									</ul>
									<div class="d-grid gap-2 d-md-flex justify-content-md-start" >
										<button class="btn_cta"> <a style="color: aliceblue" href=" {{route('formation_detail',$formation->id )}} ">COMMENCER</a> </button>
									</div>
								</div>
							</div>				
					</div>
					@endforeach
				</div>
				

			@endif
		</div>
	</section>
	<!--/ End Project -->

	<!-- Start Services -->
	<section id="services" class="courses-features section">
		<div class="container">
			<div class="row">
				<!-- Single Service -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="single-features">
						<div class="icon"><i class="fa fa-laptop"></i></div>
						<div class="icon two"><i class="fa fa-laptop"></i></div>
						<h2><a href="#">Formation 100% en ligne</a></h2>
						<p>Démarrez à tout moment votre nouvelle formation ! Disponible à temps partiel ? Pas de problème, étudiez à votre rythme.
						</p>
						<button class="btn_cta_opacity" style="margin-top: 15px; border: none;" onclick="clickAperçu()"> <b>Découvrir les détails</b></button>
					</div>
				</div>
				<!--/ End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="single-features">
						<div class="icon"><i class="fa fa-lightbulb-o"></i></div>
						<div class="icon two"><i class="fa fa-lightbulb-o"></i></div>
						<h2><a href="#">Projets professionnalisants</a></h2>
						<p>Apprenez les compétences clés de votre futur métier en validant des projets tirés de cas concrets.
						</p>
						<button class="btn_cta_opacity" style="margin-top: 15px; border: none;" onclick="clickProjets()"><b>Découvrir les projets</b></button>

					</div>
				</div>
				<!--/ End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="single-features">
						<div class="icon"><i class="fa fa-users"></i></div>
						<div class="icon two"><i class="fa fa-users"></i></div>
						<h2><a href="#">Accompagnement garantie</a></h2>
						<p>Bénéficiez de sessions de mentorat hebdomadaires avec un expert du domaine.</p>
						<button class="btn_cta_opacity" style="margin-top: 15px; border: none;" onclick="clickAccompagnement()"><b>Découvrir l'accompagnement</b></button>
					</div>
				</div>
				<!--/ End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="single-features">
						<div class="icon"><i class="fa fa-graduation-cap"></i></div>
						<div class="icon two"><i class="fa fa-graduation-cap"></i></div>
						<h2><a href="#">certification garantie</a></h2>
						<p>Bénéficiez de sessions de mentorat hebdomadaires avec un expert du métier.</p>
						<button class="btn_cta_opacity" style="margin-top: 15px; border: none;" onclick="clickDemarer()"><b>Démarer maintenant</b></button>
					</div>
				</div>
				<!--/ End Single Service -->
			</div>
		</div>
	</section>
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
