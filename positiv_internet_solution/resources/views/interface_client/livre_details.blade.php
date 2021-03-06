@extends('layouts/client.client')
@section('title')
dona
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
	<!-- Start Breadcrumbs -->
	<section class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h2><?php echo substr('Details', 0, 40); ?>...</h2>
					<ul class="bread-list">
						<li><a href="{{route('home')}}">Accueil<i class="fa fa-angle-right"></i></a></li>
						<li><a href="{{route('livre')}}">Crypto Fortune<i class="fa fa-angle-right"></i></a></li>
						<li class="active"><a href=""><?php echo substr('details', 0, 40); ?>...</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Breadcrumbs -->

	<!-- Start Project -->
	<section id="projects" class="projects section single">
		<div class="container">

			<div class="row">
				<!--  Project -->
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="project-sidebar">
						<div class="single-sidebar project-info">
							
							<img src="/Imagelivre/{{$livre->livre_image}}" alt="" />
							
						</div>
						<div class="single-sidebar brochure">
							<!-- Single Widget -->
							<!-- <img src="" alt="" /> -->
							<!-- <a href="#" style="background: #FF3300; border: #FF3300; color: #fff">Télécharger la brochure<i class="fa fa-download"></i></a> -->
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="project-content">
						<?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); ?>
						<h2> {{$livre->livre_nom}} </h2>
						@if ($errors->any())
						<div class="alert alert-danger">
							<div class="loading">Erreur</div>
							<div class="error-message">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						</div>
						@endif

						@if(Session::has('error'))
						<div class="alert alert-danger">{{ Session::get('error') }}</div>
						@endif
						@if(Session::has('success'))
						<div class="alert alert-success">{{ Session::get('success') }}</div>
						@endif
						<div class="row">
							<div class="row">
								<div class="project-kpi">
									<ul>
										<li>
											<p>Édition en Français</p>
										</li>
										<li>
											<p>|</p>
										</li>
										<li>
											<p> de <a href="#"></a> {{$livre->livre_auteur}} (Auteur)</p>
										</li>
									</ul>
									<i class="fa fa-star" style=" color: #FFA300;"></i>
									<i class="fa fa-star" style=" color: #FFA300;"></i>
									<i class="fa fa-star" style=" color: #FFA300;"></i>
									<i class="fa fa-star" style=" color: #FFA300;"></i>
									<i class="fa fa-star" style=" color: #FFA300;"></i>
								</div>
							</div>
						</div>
						<hr>
						@if(1==2)
						<form action="" method="post">
							@csrf
							<input type="hidden" name="id_book" value="">
							<button type="submit" class="btn">Télécharger Gratuitement</button>
						</form>
						@else
						<div class="project-commande-form" style="display: flex;">
							<div class="commande-form">
								<div class="form-fields">
									<button type="submit" class="btn" data-toggle="modal" data-target="#eBookModal">Format PDF {{$livre->livre_prix_version_num}} €</button>
								</div>
							</div>
							<div class="commande-form" style="margin-left: 10px;">
								<div class="form-broche">
									<button type="submit" class="btn" data-toggle="modal" data-target="#paperBookModal">Broché {{$livre->livre_prix_version_pap}} €</button>
								</div>
							</div>
						</div>

						@endif
						<?php
						echo substr($livre->livre_description, 0, 1000);
						$cpm_amount = 100;
						?>
						<hr>
						<div class="row" style="margin-bottom: 15px;">
							<div class="project-subdetails">
								<ul>
									<li>
										<h5>Nombre de page</h5>
										<i class="fa fa-tags "></i>
										<span href="#"> {{$livre->livre_nb_page}} </span>
									</li>
									<li>
										<h5>Categorie</h5>
										<i class="fa fa-tags "></i>
										<span>{{$livre->categories->categorie_name}}</span>
										
									</li>
									<li>
										<h5>Date de publication</h5>
										<i class="fa fa-calendar"></i>
										<span href="#"> {{$livre->livre_date_sortie}} </span>
									</li>
								</ul>
							</div>
						</div>

						<!-- <a href="#" class="btn" style="background: #FF3300; border: #FF3300; color: #fff">Commander</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Project -->

	<!-- Start Call-To-Action -->
	<!-- <section class="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="call-to-main">
						<h2>Acheter et vendre <span>Bitcoin et Altcoins</span> auprès de nos partenaires</h2>
						<a href="contact.html" class="btn"><i class="fa fa-send"></i>Commencer</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--/ End Call-To-Action -->
</div>


<!-- Modal Ebook -->
<div class="modal fade" id="eBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Veuillez choisir un moyen de paiement</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align: center;">
				<div id="modal-payment-img" style="display: flex; margin-bottom: 10px;">
					<img src="{{asset('client/images/cryptocurrency.png')}}" alt="" class="img-responsive" width="50" height="50" id="payment-img">
					<img src="{{asset('client/images/mobilemoney.png')}}" alt="" class="img-responsive" width="50" height="50" id="payment-img">
				</div>
				<div id="payment-form">
					<form action="" method="post" class="form-fields">
						@csrf
						<input type="hidden" value="book" name="type">
						<input type="hidden" value="numerique" name="type_ask">
						<input type="hidden" value="Achat" name="name">
						<input type="hidden" value="Crypto Fortune tome 2" name="description">
						<input type="hidden" value="fixed_price" name="pricing_type">
						<input type="hidden" value="" name="amount">
						<input type="hidden" value="EUR" name="currency">
						<!-- <input type="text" placeholder="Format PDF" disabled> -->
						<button type="submit" class="btn">Payer par Crypto-monnaies {{$livre->livre_prix_version_num}}€</button>
					</form>
				</div>
				<div id="payment-form">
					<form action="" method="post" class="form-fields">
						@csrf
						<input type="hidden" value="book" name="type">
						<input type="hidden" value="numerique" name="type_ask">
						<input type="hidden" value="7500" name="amount">
						<input type="hidden" value="XOF" name="currency">
						<input type="hidden" value="Achat de Crypto Fortune tome 2" name="description">
						<!-- <input type="text" placeholder="Format PDF" disabled> -->
						<button type="submit" class="btn">Payer par Mobile Money 7500Fcfa</button>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #0000FF;">Annuler</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal PaperBook -->
<div class="modal fade" id="paperBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Veuillez choisir un moyen de paiement</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align: center;">
				<div id="modal-payment-img" style="display: flex; margin-bottom: 10px;">
					<img src="{{asset('client/images/cryptocurrency.png')}}" alt="" class="img-responsive" width="50" height="50" id="payment-img">
					<img src="{{asset('client/images/mobilemoney.png')}}" alt="" class="img-responsive" width="50" height="50" id="payment-img">
				</div>
				<div id="payment-form">
					<form action="" method="post" class="form-fields">
						@csrf
						<input type="hidden" value="book" name="type">
						<input type="hidden" value="papier" name="type_ask">
						<input type="hidden" value="Achat" name="name">
						<input type="hidden" value="Crypto Fortune tome 2" name="description">
						<input type="hidden" value="fixed_price" name="pricing_type">
						<input type="hidden" value="" name="amount">
						<input type="hidden" value="EUR" name="currency">

						<!-- <input type="text" placeholder="Format PDF" disabled> -->
						<button type="submit" class="btn">Payer par Crypto-monnaies {{$livre->livre_prix_version_pap}}€</button>
					</form>
				</div>
				<div id="payment-form">
					<form action="" method="post">
						@csrf
						<input type="hidden" value="book" name="type">
						<input type="hidden" value="papier" name="type_ask">
						<input type="hidden" value="15000" name="amount">
						<input type="hidden" value="XOF" name="currency">
						<input type="hidden" value="Achat de Crypto Fortune tome 2" name="description">
						<!-- <input type="text" placeholder="Broché" disabled> -->
						<button type="submit" class="btn">Payer par Mobile Money 15000Fcfa</button>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #0000FF;">Annuler</button>
			</div>
		</div>
	</div>
</div>
@endsection

@push('modal_payement')


@endpush