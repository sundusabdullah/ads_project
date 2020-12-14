@extends('layouts.app')
@section('content')
@section('title', 'تعديل خدمة')

<body>
    <nav class="navbar navbar-light navbar-expand" id="brandNav">
        <div class="container"><a class="navbar-brand mx-auto" id="brand" href="{{ route('home') }}" style="font-size: 36px;font-weight: bold;color: rgb(56,212,242);">اوزون</a><button class="navbar-toggler navbar-toggler-right text-white rounded" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        </div>
    </nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><span class="text-white">الرئيسية</span></a></li>
        <li class="breadcrumb-item"><a href="#"><span class="text-white">حسابي</span></a></li>
        <li class="breadcrumb-item"><a href="#"><span class="text-white">الملف الشخصي</span></a></li>
    </ol>
    <div id="wrapper" style="display: flex;">
        <nav class="navbar navbar-light align-items-start sidebar accordion p-0 sidebarvpro">
            <div class="container-fluid d-flex flex-column p-0">
                <ul class="nav navbar-nav text-right pr-0" id="accordionSidebar">
                    <li class="nav-item d-block"><a class="nav-link active" href="{{route('famous.edit', $user)}}"><span class="mr-4 navitem">الملف الشخصي</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('statistics.edit', $user)}}"><span class="mr-4 navitem">احصائيات</span></a></li>
                    <li class="nav-item"><a class="nav-link"  href="{{route('service.edit', $user)}}"><span class="mr-4 navitem">الخدمات</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid pb-5">
            <div class="text-center mb-3">
                <div class="dropdown acc"><a class="btn btn-block btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false" role="button" style="background: #37d5f3;">حسابي&nbsp;</a>
                    <div class="dropdown-menu text-center dd"><a class="dropdown-item" href="profile.html">الملف الشخصي&nbsp;</a><a class="dropdown-item" href="num.html">احصائيات&nbsp;</a><a class="dropdown-item" href="services.html">الخدمات</a></div>
                </div>
            </div>
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <p class="m-0 font-weight-bold">تعديل خدمات حساب انستجرام</p>
                </div>
                
                <div class="card-body">
                    <form action="{{route('service.update', $user)}}" method="post" class="form">
                        @method('PATCH')
                        @csrf
                        
                    @foreach($services as $services)
                        <div class="form-row">
                            @if($services['services_instagram_name'] != null)
                                <div class="col col-lg-6 col-xl-6 col-12">
                                    <div class="form-group" style="text-align: right;">
                                        <label for="services_instagram_name"><strong>اسم الخدمة</strong><br></label>
                                        <input class="form-control" type="text" name="services_instagram_name" value="{{$services['services_instagram_name']}}">
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-xl-6 col-12">
                                    <div class="form-group" style="text-align: right;">
                                        <label for="services_instagram_price"><strong>السعر</strong><br></label>
                                        <input class="form-control" type="number" name="services_instagram_price" value="{{$services['services_instagram_price']}}">
                                        <span>إذا كانت الخدمة بالتفاوض يرجى ترك الخانه فارغة</span>
                                    </div>
                                </div>
                        </div>
                            @endif
                    @endforeach
                    <br>
                        <div class="form-row">
                            <div class="col">
                                <button class="btn btn-sm d-block btnprofil" type="submit">حفظ</button>
                            </div>
                        </div>           
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection