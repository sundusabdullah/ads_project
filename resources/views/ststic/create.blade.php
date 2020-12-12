@extends('layouts.app')
@section('content')
@section('title', 'انشاء الإحصائيات')


<body>

    <nav class="navbar navbar-light navbar-expand" id="brandNav">
        <div class="container"><a class="navbar-brand mx-auto" id="brand" href="{{ route('home') }}" style="font-size: 36px;font-weight: bold;color: rgb(56,212,242);">اوزون</a><button class="navbar-toggler navbar-toggler-right text-white rounded" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button></div>
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
                    <li class="nav-item d-block"><a class="nav-link active" href="{{route('famous.create')}}"><span class="mr-4 navitem">الملف الشخصي</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('statistics.create')}}"><span class="mr-4 navitem">احصائيات</span></a></li>
                    <li class="nav-item"><a class="nav-link"  href="{{route('service.create')}}"><span class="mr-4 navitem">الخدمات</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid pb-5">
            <div class="text-center mb-3">
                <div class="dropdown acc"><a class="btn btn-block btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false" role="button" style="background: #37d5f3;">حسابي&nbsp;</a>
                    <div class="dropdown-menu text-center dd"><a class="dropdown-item" href="profile.html">الملف الشخصي</a><a class="dropdown-item" href="num.html">احصائيات&nbsp;</a><a class="dropdown-item" href="services.html">الخدمات</a></div>
                </div>
            </div>
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <p class="m-0 font-weight-bold text-right">حساب انستجرام</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('statistics.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group" style="text-align: right;">
                                <label for="ansta">
                                    <strong>عدد المتابعين في حساب انستجرام</strong>
                                </label>
                                <input class="form-control" type="text" name="follow_instagram"></div>
                            </div>
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group" style="text-align: right;">
                                <label for="">
                                    <strong>الاعمار الاكثر شعبية</strong>
                                </label>
                                <input class="form-control" type="text" name="age_instagram" placeholder="25 - 34 سنة">

                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group" style="text-align: right;"><label for="price2">
                                    <strong>الانشار الاقليمي</strong><br></label>
                                    <input class="form-control" name="spreading_instagram" type="text" placeholder="السعودية">
                                    <sub class="text-muted">نسبة الانتشار في للدول ومراعات شرط اكتمال مجموع النسب 100%.</sub></div>
                            </div>
                            <div class="col col-lg-6 col-xl-6 col-12" style="text-align: right;">
                                <div class="form-group" style="text-align: right;">
                                <label for="price2"><strong>النسبة</strong><br></label>
                                <input class="form-control" name="percentage_instagram" type="text" placeholder="50"></div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="m-0 font-weight-bold">حساب سناب شات</p>
                </div>
                <div class="card-body" style="text-align: right;">
                        <div class="form-row">
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group" style="text-align: right;">
                                <label for="ansta"><strong>عدد دقائق المشاهدات في حساب سناب شات</strong></label>
                                <input class="form-control" type="text" name="min_snapchat"></div>
                            </div>
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group" style="text-align: right;">
                                <label for="snapnum"><strong>الاعمار الاكثر شعبية</strong></label>
                                <input class="form-control" type="text" name="age_snapchat" placeholder="25 - 34 سنة"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group" style="text-align: right;"><label for="story_snapchat"><strong>عدد مشاهدات القصة في حساب سناب شات</strong></label><input class="form-control" type="text" name="story_snapchat"></div>
                            </div>
                        </div>
                        <div>
                            <hr style="-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;height: 1px;color: #000000;margin-top: 20px;">
                        </div>
                        <div class="form-row">
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group" style="text-align: right;"><label for="price2"><strong>المشاهدات خلال ايام الاسبوع</strong><br></label><input class="form-control" name="day_snapchat" type="text" placeholder="الاحد"><sub>عدد المشاهدات في جميع ايام الاسبوع.</sub></div>
                            </div>
                            <div class="col col-lg-6 col-xl-6 col-12" style="text-align: right;">
                                <div class="form-group" style="text-align: right;"><label for="price2"><strong>العدد</strong><br></label><input class="form-control" name="follow_snapchat" type="number" placeholder="10000"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button class="btn btn-sm d-block btnprofil" type="submit">حفظ</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection