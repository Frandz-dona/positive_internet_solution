@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Mes activités
@endsection

@section('property')
<meta property="og:url" content='https://positiveinternetsolution.com/'>
<meta property="og:type" content="website">
<meta property="og:title" content="Positive Internet Solution | Positive Academy">
<meta property="og:description" content="Si vous souhaitez développer vos propres compétences en crypto-investissement et exploiter tout le potentiel de la technologie blockchain, c'est l'endroit qu'il vous faut.
   nous vous souhaitons une belle expérience.">
<meta property="og:image" content='{{asset("pis_assets/images/img/logo/lg.png")}}'>
@endsection
@section('content')
<div id="app">
	<!-- Start Breadcrumbs -->
	<section class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h2>Tableau de bord</h2>
					<!-- Tab links -->
					<div class="tab">
						<button class="tablinks" onclick="openElements(event, 'Aperçu')" id="OpenAperçu">Formations</button>
						<button class="tablinks" onclick="openElements(event, 'Projets')" id="OpenProjets">Livres</button>
						<button class="tablinks" onclick="openElements(event, 'Accompagnement')" id="OpenAccompagnement">Achats</button>
                        <button class="tablinks" onclick="openElements(event, 'Information')" id="OpenAccompagnement">Mes Informations</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Breadcrumbs -->
	<!-- Start Accompagnenent -->
	<section id="services" class="aperçue section">
		<div class="container">
			<div class="row">
				<!-- Tab content -->
				<div id="Aperçu" class="tabcontent">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								@if(1==2)
								{{-- @foreach($courses as $course)
								<div class="col-md-4 col-sm-4 col-xs-12">
									<!-- Single Post -->
									<div class="single-blog slider">
										<div class="blog-post">
											<div class="blog-head">
												<img src="{{url('https://pis-api.positiveinternetsolution.com/storage/'.$course->cover)}}" alt="#">
												<a class="link" href="blog-single.html"><i class="fa fa-paper-plane"></i></a>
											</div>
											<div class="blog-info">
												<h2><a href="{{route('course.show',$course->pluck)}}" style="color: #353535;"><?php echo substr("dona", 0, 50); ?>...</a></h2>
												<br>
												<div class="meta">
													<?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); ?>
													<span><a href="#" class="badge badge-primary" style="background-color: rgb(0, 0, 255, 0.5); color: #fff; font-size: 14px; font-weight:100; padding: 8px 15px 8px 15px; border-radius: 4px;">Payé</a></span>
													<span style="margin-left: 1px; font-size: 12px;">{{strftime("%A %d %B %Y",strtotime($course->created_at))}}</span>
												</div>
											</div>
										</div>
									</div>
									<!--/ End Single Post -->
								</div>
								@endforeach --}}
								@else
								<div class="alert alert-warning" role="alert">
									<p>Vous ne participer à aucune formation.</p> <br>
									<a href="" class="btn_cta"><i class="fa fa-user-plus"></i> <b>Choisir une formation</b></a>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>

				<div id="Projets" class="tabcontent">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								@if(1==2)
								{{-- @foreach($books as $book)
								<div class="col-md-4 col-sm-4 col-xs-12">
									<!-- Single Post -->
									<div class="single-blog slider">
										<div class="blog-post">
											<div class="blog-head">
												<img src="{{url('https://pis-api.positiveinternetsolution.com/storage/')}}" alt="#">
												<a class="link" href="blog-single.html"><i class="fa fa-paper-plane"></i></a>
											</div>
											<div class="blog-info">
												<h2><a href="" style="color: #353535;"><?php echo substr($book->name, 0, 50); ?>...</a></h2>
												<br>
												<div class="meta">
													<?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); ?>
													<span><a href="#" class="badge badge-primary" style="background-color: rgb(0, 0, 255, 0.5); color: #fff; font-size: 14px; font-weight:100; padding: 8px 15px 8px 15px; border-radius: 4px;">Payé</a></span>
													<span style="margin-left: 1px; font-size: 12px;"></span>
												</div>
											</div>
										</div>
									</div>
									<!--/ End Single Post -->
								</div>
								@endforeach --}}
								@else
								<div class="alert alert-warning" role="alert">
									<p>Vous n avez aucun livre.</p> <br>
									<a href="" class="btn_cta"><i class="fa fa-user-plus"></i> <b>Choisir une formation</b></a>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>

				<div id="Accompagnement" class="tabcontent">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								@if(1==2)
								<table class="table table-striped">
									<thead class="order-table-thead">
										<tr>
											<th scope="col">Libellé</th>
											<th scope="col">Type</th>
											<th scope="col">Prix</th>
											<th scope="col">Statu</th>
											<th scope="col">Réception</th>
										</tr>
									</thead>
									<tbody class="order-table-tbody">
										{{-- @foreach($orders as $order)
										<tr>
											<th scope="row">
												{{$order->product_name}}
											</th>
											<th scope="row">
												@if($order->type == 'book')
												Livre
												@elseif($order->type == 'course')
												Formation
												@endif
											</th>
											<td>{{$order->amount}} Fcfa</td>
											<td>
												@if(!is_null($order->paid_at))
												<span class="order-paied">Payé</span>
												@else
												<span class="order-unpaied">Impayé</span>
												@endif
											</td>
											<td>
												@if($order->type == 'book' && $order->type_ask == 'papier' && !is_null($order->paid_at))
												@if($order->activated_at != NULL)
												<span class="order-delivered">Livré</span>
												@else
												<span>En cours de livraison</span>
												@endif
												@elseif($order->type == 'book' && $order->type_ask == 'numerique' && !is_null($order->paid_at))
												<span class="order-ebook-send">Ebook envoyé</span>
												@elseif($order->type == 'course' && !is_null($order->paid_at))
												<span class="order-ebook-send">Vous avez rejoint la formation</span>
												@endif
											</td>
										</tr>
										@endforeach --}}
									</tbody>
								</table>
								@else
								<div class="alert alert-warning" role="alert">
									<p>Vous n'avez effectué aucun achat.</p> <br>
									<a href="" class="btn_cta"><i class="fa fa-user-plus"></i> <b>Acheté un livre</b></a>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>

                <div id="Information" class="tabcontent">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								@if(1==2)
								{{-- @foreach($books as $book)
								<div class="col-md-4 col-sm-4 col-xs-12">
									<!-- Single Post -->
									<div class="single-blog slider">
										<div class="blog-post">
											<div class="blog-head">
												<img src="{{url('https://pis-api.positiveinternetsolution.com/storage/')}}" alt="#">
												<a class="link" href="blog-single.html"><i class="fa fa-paper-plane"></i></a>
											</div>
											<div class="blog-info">
												<h2><a href="" style="color: #353535;"><?php echo substr($book->name, 0, 50); ?>...</a></h2>
												<br>
												<div class="meta">
													<?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); ?>
													<span><a href="#" class="badge badge-primary" style="background-color: rgb(0, 0, 255, 0.5); color: #fff; font-size: 14px; font-weight:100; padding: 8px 15px 8px 15px; border-radius: 4px;">Payé</a></span>
													<span style="margin-left: 1px; font-size: 12px;"></span>
												</div>
											</div>
										</div>
									</div>
									<!--/ End Single Post -->
								</div>
								@endforeach --}}
								@else
								<div class="alert alert-warning" role="alert">
									<p>Vous n avez aucun livre.</p> <br>
									<a href="" class="btn_cta"><i class="fa fa-user-plus"></i> <b>Choisir une formation</b></a>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>
	</section>
	<!--/ End Accompagnement -->
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
</div>
@endsection

@push('script')
<script>
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("OpenAperçu").click();

	function clickAperçu() {
		document.getElementById("OpenAperçu").click();
		document.querySelector('#OpenAperçu').scrollIntoView({
			behavior: 'smooth'
		});
	}

	function clickProjets() {
		document.getElementById("OpenProjets").click();
		document.querySelector('#OpenProjets').scrollIntoView({
			behavior: 'smooth'
		});
	}

	function clickAccompagnement() {
		document.getElementById("OpenAccompagnement").click();
		document.querySelector('#OpenAccompagnement').scrollIntoView({
			behavior: 'smooth'
		});
	}

    
	function clickInformation() {
		document.getElementById("OpenInformation").click();
		document.querySelector('#OpenInformation').scrollIntoView({
			behavior: 'smooth'
		});
	}

	function clickDemarer() {
		document.querySelector('#why-choose').scrollIntoView({
			behavior: 'smooth'
		});
	}

	function openElements(evt, elementName) {
		// Declare all variables
		var i, tabcontent, tablinks;

		// Get all elements with class="tabcontent" and hide them
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}

		// Get all elements with class="tablinks" and remove the class "active"
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}

		// Show the current tab, and add an "active" class to the button that opened the tab
		document.getElementById(elementName).style.display = "block";
		evt.currentTarget.className += " active";
	}
</script>

@endpush