@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Crypto Fortune
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
                <h2>Crypto Fortune</h2>
                <ul class="bread-list">
                    <li><a href="{{route('home')}}">Accueil<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="">Crypto fortune</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->


<section id="services team" class="services section team section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Découvrez notre riche bibliotheque (Crypto Fortune)</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Service -->
            @if($livres)
            @foreach ($livres as $livre)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a href=" {{route('livre')}} ">
                    <div class="single-team one default">
                        <!-- Team Head -->
                        <div class="t-head">
                            <a href="{{route('livre')}}">
                                <img src="{{asset('client/images/livres/m1.png')}}" alt="">
                            </a>
                            <div class="t-hover">
                                <ul class="t-social">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom" style="text-align: left; padding: 15px 15px 15px 15px;">
                            <div class="t-icon">
                                <a href="#team1"><i class="fa fa-share"></i></a>
                            </div>
                            @if(1==2)
                            <h2 class="t-name" style="text-align: left;"><a href="" style="color: #353535;">Gratuit</a></h2>
                            @else
                            <h2 class="t-name" style="text-align: left;"><a href="" style="color: #353535;">€</a></h2>
                            @endif
                            <p class="what" style="margin-top: 5px;"><a href="" style="color: #353535;"><?php echo substr("Crypto", 0, 60); ?>...</a></p>
                            <div class="team-kpi-stars">
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                            </div>
                            <div class="meta" style="margin-top: 10px;">
                                <?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); ?>
                                <span><a href="#" class="badge badge-primary" style="background-color: rgb(0, 0, 255, 0.5); color: #fff; font-size: 14px; font-weight:100; padding: 8px 15px 8px 15px; border-radius: 4px;">categorie</a></span>
                                <span style="margin-left: 1px; font-size: 12px;">publié le</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
            <!--/ End Single Service -->
            <!-- Single Service -->


            {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                <a href=" {{route('livre')}} ">
                    <div class="single-team one default">
                        <!-- Team Head -->
                        <div class="t-head">
                            <a href="{{route('livre')}}">
                                <img src="{{asset('client/images/livres/m1.png')}}" alt="">
                            </a>
                            <div class="t-hover">
                                <ul class="t-social">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom" style="text-align: left; padding: 15px 15px 15px 15px;">
                            <div class="t-icon">
                                <a href="#team1"><i class="fa fa-share"></i></a>
                            </div>
                            @if(1==1)
                            <h2 class="t-name" style="text-align: left;"><a href="" style="color: #353535;">Gratuit</a></h2>
                            @else
                            <h2 class="t-name" style="text-align: left;"><a href="" style="color: #353535;"></a></h2>
                            @endif
                            <p class="what" style="margin-top: 5px;"><a href="" style="color: #353535;">...</a></p>
                            <div class="team-kpi-stars">
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                            </div>
                            <div class="meta" style="margin-top: 10px;">
                                <?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); ?>
                                <span><a href="#" class="badge badge-primary" style="background-color: rgb(0, 0, 255, 0.5); color: #fff; font-size: 14px; font-weight:100; padding: 8px 15px 8px 15px; border-radius: 4px;"></a></span>
                                <span style="margin-left: 1px; font-size: 12px;"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div> --}}


            <!--/ End Single Service -->
            <!-- Single Service -->

            {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                <a href=" {{route('livre')}} ">
                    <div class="single-team one default">
                        <!-- Team Head -->
                        <div class="t-head">
                            <a href="{{route('livre')}}">
                                <img src="{{asset('client/images/livres/m1.png')}}" alt="">
                            </a>
                            <div class="t-hover">
                                <ul class="t-social">
                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom" style="text-align: left; padding: 15px 15px 15px 15px;">
                            <div class="t-icon">
                                <a href="#team1"><i class="fa fa-share"></i></a>
                            </div>
                            @if(1==1)
                            <h2 class="t-name" style="text-align: left;"><a href="" style="color: #353535;">Gratuit</a></h2>
                            @else
                            <h2 class="t-name" style="text-align: left;"><a href="" style="color: #353535;"></a></h2>
                            @endif
                            <p class="what" style="margin-top: 5px;"><a href="" style="color: #353535;">...</a></p>
                            <div class="team-kpi-stars">
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                                <i class="fa fa-star" style=" color: #FFA300;"></i>
                            </div>
                            <div class="meta" style="margin-top: 10px;">
                                <?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); ?>
                                <span><a href="#" class="badge badge-primary" style="background-color: rgb(0, 0, 255, 0.5); color: #fff; font-size: 14px; font-weight:100; padding: 8px 15px 8px 15px; border-radius: 4px;"></a></span>
                                <span style="margin-left: 1px; font-size: 12px;"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div> --}}

            <!--/ End Single Service -->
        </div>
        
    </div>

     <!-- Start Blog -->
			<section id="blog-main" class="blog-main archive single section">
				<div class="container">
					<div class="row">
						<div class="blog-main">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									{{-- <div class="col-md-8 col-sm-12 col-xs-12">
										<div class="blog-comments" style="none">
											<h2>Comments (23)</h2>
											<div class="comments-body">
												<!-- Single Comments -->
												<div class="single-comments">
													<div class="main">
														<div class="head">
															<img src="{{asset('client/images/author.jpg')}}" alt="#"/>
														</div>
														<div class="body">
															<h4>John Shakil<span class="meta">June 05, 2017</span></h4>
															<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas <a href="#"><i class="fa fa-reply"></i>replay</a></p>
														</div>
													</div>
													<div class="comment-list">
														<div class="head">
															<img src="{{asset("client/images/author2.jpg")}}" alt="#"/>
														</div>
														<div class="body">
															<h4>Smith Ron<span class="meta">Sep 20, 2017</span></h4>
															<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas <a href="#"><i class="fa fa-reply"></i>replay</a></p>
														</div>
													</div>
												</div>
												<!--/ End Single Comments -->

												<!-- Single Comments -->
												<div class="single-comments">
													<div class="main">
														<div class="head">
															<img src="{{asset('client/images/author3.jpg')}}" alt="#"/>
														</div>
														<div class="body">
															<h4>Frase Rimu<span class="meta">June 05, 2017</span></h4>
															<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas <a href="#"><i class="fa fa-reply"></i>replay</a></p>
														</div>
													</div>
												</div>
												<!--/ End Single Comments -->
											</div>
										</div>
									</div> --}}

									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="comments-form">
											<h2>COMMENTEZ</h2>
											<!-- Contact Form -->
											<form class="form" method="post" action="">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<i class="fa fa-user"></i>
															<input type="text" name="name" placeholder="Full Name" required="required">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<i class="fa fa-envelope"></i>
															<input type="email" name="email" placeholder="Your Email" required="required">
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<i class="fa fa-pencil"></i>
															<textarea name="message" rows="7" placeholder="Type Your Message Here" ></textarea>
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group button">
															<button type="submit" class="button primary"><i class="fa fa-send"></i>Submit</button>
														</div>
													</div>
												</div>
											</form>
											<!--/ End Contact Form -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
    	<!--/ End Blog -->
</section>

<!-- Start Call-To-Action -->
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="call-to-main">
                    <h2><span>Restez informé </span> recevez des astuces pour augmenter vos gains .</h2>
                    <a href="https://wa.me/22891325637" class="btn"><i class="fa fa-send"></i> <b>Rejoindre la communauté</b></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call-To-Action -->
@endsection
