@extends('layouts.app')
@section('content')
@section('title', 'تعديل الملف الشخصي')

<body>
  
    <nav class="navbar navbar-light navbar-expand" id="brandNav">
        <div class="container"><a class="navbar-brand mx-auto" id="brand" href="{{ route('home') }}" style="font-size: 36px;font-weight: bold;color: rgb(56,212,242);">اوزون</a><button class="navbar-toggler navbar-toggler-right text-white rounded" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button></div>
    </nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}"><span class="text-white">الرئيسية</span></a></li>
        <li class="breadcrumb-item"><a href="#"><span class="text-white">حسابي</span></a></li>
        <li class="breadcrumb-item"><a href="#"><span class="text-white"> تعديل الملف الشخصي</span></a></li>
    </ol>
    <div id="wrapper" style="display: flex;">
        <nav class="navbar navbar-light align-items-start align-content-start sidebar accordion p-0 sidebarvpro">
            <div class="container-fluid d-flex flex-column p-0">
                <ul class="nav navbar-nav text-right pr-0" id="accordionSidebar">
                    <li class="nav-item d-block"><a class="nav-link active" href="{{route('famous.edit', $user)}}"><span class="mr-4 navitem">الملف الشخصي</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('statistics.edit', $user)}}"><span class="mr-4 navitem">احصائيات</span></a></li>
                    <li class="nav-item"><a class="nav-link"  href=""><span class="mr-4 navitem">الخدمات</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid pb-5">
            <div class="text-center mb-3">
                <div class="dropdown acc"><a class="btn btn-block btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false" role="button" style="background: #37d5f3;">حسابي&nbsp;</a>
                    <div class="dropdown-menu text-center dd"><a class="dropdown-item" href="#">الملف الشخصي</a><a class="dropdown-item" href="num.html">احصائيات&nbsp;</a><a class="dropdown-item" href="services.html">الخدمات</a></div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-5">
                                <div class="card-header py-3">
                                    <p class="m-0 font-weight-bold">الملف الشخصي</p>
                                </div>
                                <div class="card-body">
                                <form method="POST" action="{{route('famous.update', $user)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-row">
                                            <div class="col col-lg-6 col-xl-6 col-12">
                                                <div class="form-group"><label for="name"><strong>{{__('الصورة الشخصية')}}</strong></label>
                                                    <input id="avatar" type="file" class="form-control" value="{{ $user['avatar'] }}" name="avatar">                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col col-lg-6 col-xl-6 col-12">
                                                <div class="form-group"><label for="name"><strong>{{__('الإسم')}}</strong></label>
                                                    <input type="text" name="name" class="form-control" value="{{ $famous['name'] }}" required>                                                
                                                </div>
                                            </div>
                                            <div class="col col-lg-6 col-xl-6 col-12">
                                                <div class="form-group"><label for="email"><strong>{{__('البريد الإلكتروني ')}}</strong><br></label>
                                                    <input class="form-control" type="email" name="email" value="{{ $famous['email'] }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col col-lg-6 col-xl-6 col-12">
                                                <div class="form-group"><label for="numtax"><strong>{{__('الرقم الضريبي')}}</strong></label>
                                                    <input type="text" name="vat" class="form-control" value="{{ $famous['vat'] }}" required>                                                
                                                </div>
                                                </div>
                                            <div class="col col-lg-6 col-xl-6 col-12">
                                                <div class="form-group"><label for="nationality"><strong>{{__('الجنسية')}}</strong></label>
                                                    <select class="form-control" name="nationality" value="" data-flag="true">
                                                        <option>{{ $famous['nationality'] }}</option>
                                                        <option>اختر</option>
                                                        <option >سعودي</option>
                                                        <option>كويتي</option>
                                                        <option>This is item 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <p class="m-0 font-weight-bold">نبذة تعريفية</p>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="brief"><strong>{{__('نبذه تعريفية')}}</strong><br></label>
                        <textarea name="brief" value="">{{ $famous['brief'] }}</textarea>
                        <div><label for="interests"><strong>{{__('الاهتمامات')}}</strong></label>
                            <div style="padding-bottom: 12px;">
                            <input type="text" name="interests" class="form-control" value="{{ $famous['interests'] }}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <p class="m-0 font-weight-bold">الشبكات الاجتماعية</p>
                </div>
                <div class="card-body">
                        <div class="form-row">
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group"><label for="insta"><strong>{{__('رابط حساب الانستقرام')}}</strong></label>
                                <input class="form-control" type="url" name="ins_link" value="{{ $famous['ins_link'] }}"></div>
                            </div>
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group"><label for="snap"><strong>{{__('رابط حساب سناب شات')}}</strong><br></label>
                                <input class="form-control" type="url" name="snap_link" value="{{ $famous['snap_link'] }}"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group"><label for="ytube"><strong>{{__('رابط حساب يوتيوب')}}</strong></label>
                                <input class="form-control" type="url" name="youtube_link" value="{{ $famous['youtube_link'] }}"></div>
                            </div>
                            <div class="col col-lg-6 col-xl-6 col-12">
                                <div class="form-group"><label for="twt"><strong>{{__('رابط حساب التويتر')}}</strong></label>
                                <input class="form-control" type="url" name="twitter_link" value="{{ $famous['twitter_link'] }}"></div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="m-0 font-weight-bold">{{__('المعلومات الديموغرافية')}}</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group" style="text-align: right;"><label class="demoinfo" for=""><strong>{{__('المنطقة ذات التأثير اللأعلى')}}</strong></label>
                                    <input type="text" class="col-12 form-control" value="{{ $famous['region'] }}" placeholder="السعودية" name="region"></div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-7">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="m-0 font-weight-bold">{{__('المتابعين')}}</p>
                        </div>
                        <div class="card-body sex">
                            <div class="row">
                                <div class="col col-lg-6 x"><i class="fa fa-female d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center fa-2x"></i><input type="text" class="col-12 form-control" placeholder="50%" value="{{ $famous['female_follow'] }}" name="female_follow"></div>
                                <div class="col col-lg-6 sex"><i class="fa fa-male d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center fa-2x"></i><input type="text" class="col-12 form-control" placeholder="50%" value="{{ $famous['male_follow'] }}" name="male_follow"></div>
                            </div>
                        <div class="form-group"><button class="btn btn-sm btnprofil" type="submit">حفظ</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>


@endsection
@section('footer')
    @include('footer')
@endsection
