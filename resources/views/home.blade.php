@extends('layouts.app')
@section('content')
@section('title', 'الصفحة الرئيسية')

<body>
    <nav class="navbar navbar-light navbar-expand" id="brandNav">
        <div class="container"><a class="navbar-brand mx-auto" id="brand" href="{{route('home')}}" style="font-size: 36px;font-weight: bold;color: rgb(56,212,242);">اوزون</a><button class="navbar-toggler navbar-toggler-right text-white rounded" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button></div>
    </nav>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- images -->
                <div class="swiper-slide" style="background-image: url({{url('/img/header1.png')}});"></div>
                <div class="swiper-slide" style="background: #de226b;"></div>
                <div class="swiper-slide" style="background: url(&quot;https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500&quot;), #50008c;"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="mt-4 mb-5">
        <div class="row d-flex justify-content-lg-center">
            <div class="col col-lg-2 col-12 mt-2 mr-3 showflt"><label class="col-form-label">عرض حسب</label></div>
            <div class="col col-lg-2 col-6 mt-3" style="text-align: center;">
                <div class="dropdown" style="text-align: center;"><a class="btn btn-link dropdown-toggle flt" data-toggle="dropdown" aria-expanded="false" role="button">الاهتمامات</a>
                    <div class="dropdown-menu text-center"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </div>
            </div>
            <div class="col col-lg-2 col-6 mt-3" style="text-align: center;">
                <div class="dropdown"><a class="btn btn-link dropdown-toggle flt" data-toggle="dropdown" aria-expanded="false" role="button">منطقة التاثر</a>
                    <div class="dropdown-menu text-center"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </div>
            </div>
            <div class="col text-center col-lg-2 col-12 mt-3">
                <div class="dropdown"><a class="btn btn-link dropdown-toggle flt" data-toggle="dropdown" aria-expanded="false" role="button">الاعلى متابعة</a>
                    <div class="dropdown-menu text-center"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </div>
            </div>
            <div class="col col-lg-3 col-12 mt-3">
                <form class="navbar-search">
                    <div class="serch"><input class="form-control small" type="text" placeholder="ابحث عن ..." style="border-top-left-radius: 0px;border-bottom-left-radius: 0px;">
                        <div class="d-flex ser"><button class="btn" type="button" style="background: #37d5f3;border-top-right-radius: 0px;border-bottom-right-radius: 0px;"><i class="fas fa-search" style="color: #f8f9fc;"></i></button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div  data-aos-duration="400" data-aos-delay="50" class="team-boxed top">
        <div class="container">
            <div class="row people">
                @foreach($users as $user)
                    @if($user->account_type == 'famous' or $user->account_type == 'orgonizer')

                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/1.jpg">
                        <h3 class="name" style="color: #50008c;">{{$user->name}}</h3>
                        
                        @foreach($statistics as $statistic)
                        <div class="d-flex d-lg-flex justify-content-center mx-auto mb-4 soci">
                            <div class="col text-nowrap"><i class="fa fa-instagram fa-2x"></i>
                                <div><strong style="font-size: 20px;">{{$statistic->follow_instagram}}</strong></div>
                            </div>
                            <div class="col text-nowrap p-0"><i class="fa fa-snapchat-ghost fa-2x"></i>
                                <div><strong style="font-size: 20px;">{{$statistic->follow_snapchat}}</strong></div>
                            </div>
                        </div>
                        @endforeach
                        <a class="btn btncard color" role="button" href="{{ route('famous.show', $user) }}">اقرأ المزيد</a></div>
                </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection