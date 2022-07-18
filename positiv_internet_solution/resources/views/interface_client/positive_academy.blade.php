@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Positive Academy
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
                <h2>Positive Academy</h2>
                <ul class="bread-list">
                    <li><a href="{{route('home')}}">Accueil<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="{{route('positive_academy')}}">Positive Academy</a></li>
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        {{-- @if(!empty($topics))
                        @foreach($topics as $topic) --}}
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <!-- Single Post -->
                            <div class="single-blog slider">
                                <div class="blog-post">
                                    <div class="blog-head">
                                        {{-- <img src="{{url('https://pis-api.positiveinternetsolution.com/storage/'.$topic->cover)}}" alt="#">
                                        <a class="link" href="blog-single.html"><i class="fa fa-paper-plane"></i></a> --}}
                                    </div>
                                    <div class="blog-info">
                                        {{-- <h2><a href="{{route('topic.show',$topic->pluck)}}" style="color: #353535;"><?php echo substr($topic->title, 0, 50); ?>...</a></h2>
                                        <br>
                                        <div class="meta">
                                            <?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); ?>
                                            <span><a href="#" class="badge badge-primary" style="background-color: rgb(0, 0, 255, 0.5); color: #fff; font-size: 14px; font-weight:100; padding: 8px 15px 8px 15px; border-radius: 4px;">{{$topic->categorie_name}}</a></span>
                                            <span style="margin-left: 1px; font-size: 12px;">{{strftime("%A %d %B %Y",strtotime($topic->created_at))}}</span> --}}
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
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 10px;">
                            <div class="pagination-main">
                                {{-- {{$topics->links()}} --}}
                            </div>
                            <!-- Start Pagination -->
                            <!-- <div class="pagination-main">
                                <ul class="pagination">
                                    <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div> -->
                            <!--/ End Pagination -->
                        </div>
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
                    <h2><span>Restez informé </span> recevez des astuces pour augmenter vos gains .</h2>
                    <a href="https://wa.me/22891325637" class="btn"><i class="fa fa-send"></i> <b>Rejoindre la communauté</b></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call-To-Action -->

@endsection
