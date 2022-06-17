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
<meta property="og:image" content='{{asset("client/images/img/logo/lg.png")}}'>
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

<!-- Start Blog -->
<section id="blog-main" class="blog-main archive grid section" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Crypto news, suivez toutes les actualités</h1>
                    <!-- <p> Fusce semper purus suscipit ultricies tincidunt. Nulla eget turpis ac leo euismod pharetra at nec diam. Etiam id purus lacus. Suspendisse ligula nulla, cursus non</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {{-- @if(!empty($courses))
                        @foreach($courses as $course) --}}
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <!-- Single Post -->
                            <div class="single-blog slider">
                                <div class="blog-post">
                                    <div class="blog-head">
                                        {{-- <img src="{{url('https://pis-api.positiveinternetsolution.com/storage/'.$course->cover)}}" alt="#"> --}}
                                        <a class="link" href="blog-single.html"><i class="fa fa-paper-plane"></i></a>
                                    </div>
                                    <div class="blog-info">
                                        {{-- <h2><a href="{{route('course.show',$course->pluck)}}" style="color: #353535;"><?php echo substr($course->name, 0, 50); ?>...</a></h2> --}}
                                        <br>
                                        <div class="meta">

                                            {{-- <span><a href="#" class="badge badge-primary" style="background-color: rgb(0, 0, 255, 0.5); color: #fff; font-size: 14px; font-weight:100; padding: 8px 15px 8px 15px; border-radius: 4px;">{{$course->categorie_name}}</a></span>
                                            <span style="margin-left: 1px; font-size: 12px;">{{strftime("%A %d %B %Y",strtotime($course->created_at))}}</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Post -->
                        </div>
                        {{-- @endforeach
                        @else --}}
                        <div class="alert alert-warning" role="alert">
                            Aucun post disponible pour le moment
                        </div>
                        {{-- @endif --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="margin-top: 10px;">
                        <!-- Start Pagination -->
                        <div class="pagination-main">

                        </div>
                        <!--/ End Pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Blog -->

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
