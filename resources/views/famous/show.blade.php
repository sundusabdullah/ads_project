@extends('layouts.app')
@section('content')
@section('title', 'الملف الشخصي')

<body>
    <nav class="navbar navbar-light navbar-expand" id="brandNav">
        <div class="container">
            <a class="navbar-brand mx-auto" id="brand" href="{{route('home')}}" style="font-size: 36px;font-weight: bold;color: rgb(56,212,242);">اوزون</a><button class="navbar-toggler navbar-toggler-right text-white rounded" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        </div>
    </nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}"><span class="text-white">الرئيسية</span></a></li>
        <li class="breadcrumb-item"><a href="#"><span class="text-white">اسم</span></a></li>
    </ol>
    <div class="row d-flex flex-wrap">
        <div class="col">
            <div id="wrapper" class="pr-2 pl-2">
                <div class="d-flex flex-column" id="content-wrapper">
                    <div id="content">
                        <div class="container-fluid"  data-aos-duration="800" data-aos-once="true">
                            <div class="row" style="margin-top: 20px;margin-left: -15px;margin-right: -15px;">
                                <div class="col">
                                    <div class="card shadow mb-4">
                                        <form action="" method="get" class="form">
                                            @csrf
                                            <div class="card-header py-3" style="text-align: center;border-width: 1px;border-color: #eef4f7;border-bottom-width: 1px;border-bottom-style: solid;"><img style="width: 120px;height: 120px;border-radius: 100px;" src="assets/img/2.jpg">
                                            <h6 class="font-weight-bold m-2" style="font-size: 28px;color: #50008c;">{{ $famous['name'] }}</h6>
                                            <p class="hobby">{{ $famous['interests'] }}</p>
                                            <p class="bio">{{ $famous['brief'] }}</p>
                                    </div>
                                    <div class="card-body">
                                    <ul class="list-inline d-flex justify-content-center p-0">
                                                <li class="list-inline-item"><span class="fa-stack fa-lg"><a href="{{url( $famous['snap_link'])}}" target="_blank"><i class="fa fa-circle fa-stack-2x" style="color: #ffc107;"></i><i class="fa fa-snapchat-ghost fa-stack-1x fa-inverse"></i></a></span></li>
                                                <li class="list-inline-item"
                                                    style="margin-right: 8px;"><span class="fa-stack fa-lg"><a href="{{url( $famous['ins_link'])}}" target="_blank"><i class="fa fa-circle fa-stack-2x" style="color: #50008c;"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></a></span></li>
                                                <li class="list-inline-item"
                                                    style="margin-right: 8px;"><span class="fa-stack fa-lg"><a href="{{url( $famous['twitter_link'])}}" target="_blank"><i class="fa fa-circle fa-stack-2x" style="color: #37d5f3;"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></a></span></li>
                                                <li class="list-inline-item" style="margin-right: 8px;"><span class="fa-stack fa-lg"><a href="{{url( $famous['youtube_link'])}}" target="_blank"><i class="fa fa-circle fa-stack-2x" style="color: #de226b;"></i><i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i></a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" style="padding-bottom: 15px;">
                                <hr>
                            </div>
                            <div class="row" data-aos-duration="800" data-aos-once="true">
                                <div class="col-lg-7 col-xl-8">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h5 class="m-0 font-weight-bold">الانتشار الاقليمي في انستجرام&nbsp;</h5>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="small font-weight-bold">{{ $statistics['spreading_instagram'] }}<span class="text-dark float-left">{{ $statistics['percentage_instagram'] }} %</span></h4>
                                            <div class="progress mb-4" style="color: #f8f9fc;">
                                                <div class="progress-bar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row rowblock">
                                        <div class="col col-info">
                                            <div class="card shadow d-block" style="background: linear-gradient(45deg, #de226b, #e06c99);">
                                                <div class="card-body"><i class="fa fa-group d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center fa-3x"></i>
                                                    <p class="h2 cardcenter">{{ $statistics['age_instagram'] }}</p>
                                                    <p class="cardtype">الاعمار الاكثر انتشار&nbsp;</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-info">
                                            <div class="card shadow" style="background: linear-gradient(45deg, #50008c, #7e43ab);">
                                                <div class="card-body"><i class="fa fa-map-marker d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center fa-3x"></i>
                                                    <p class="h2 cardcenter">{{ $famous['region'] }}</p>
                                                    <p class="cardtype">المنطقة ذات التاثير الاعلى</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4">
                                    <div class="card text-white shadow mb-4 col-info" style="background: linear-gradient(45deg, #3c007f, #6a0ad6);">
                                        <div class="card-body">
                                            <p class="h1" style="text-align: center;color: #ffffff;font-size: 50px;font-weight: normal;">{{ $statistics['follow_instagram'] }}</p>
                                            <p class="m-0 text-center">عدد المتابعين حساب انستجرام</p>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="m-0 font-weight-bold">المعلومات الديموغرافية</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-area mt-3"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;1&quot;,&quot;2&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#50008c&quot;,&quot;#de226b&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas>
                                            </div>
                                            <div class="text-center small mt-4 mb-4">
                                                <span class="ml-2">ذكور&nbsp;<i class="fa fa-male fa-2x">
                                                </i></span>
                                                <span class="ml-2" style="color: #de226b;">اناث&nbsp;<i class="fa fa-female fa-2x">
                                                </i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"  data-aos-duration="800">
                                <div class="row">
                                    <div class="col">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h5 class="m-0 font-weight-bold">خدمات حساب انستقرام</h5>
                                            </div>
                                            <div class="card-body" style="border-style: none;">
                                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>اسم الخدمة</th>
                                                            <th>السعر</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($services as $services)
                                                        <tr>
                                                            @if($services['services_instagram_name'] != null)
                                                                <td>{{ $services['services_instagram_name'] }}</td>
                                                                @if($services['services_instagram_price'] == null)
                                                                <td>تفاوض</td>
                                                                <td>
                                                                    <a type="button" class="btn"  href="{{route('fixed.create',$services['id'])}}" data-toggle="tooltip" data-placement="top" title="مفاوضة" style= "background:  linear-gradient(45deg, #50008c, #793aa9); color:#fff;" > 
                                                                    <i class="fa fa-handshake-o"></i></a>
                                                                </td>
                                                                @else
                                                                    <td>{{ $services['services_instagram_price'] }}</td>
                                                                    <td>
                                                                        <a type="button" class="btn btn-info" href="{{route('cart.add', $services['id'])}}"><i class="fa fa-plus
                                                                        "></i></a>
                                                                    </td>
                                                                @endif
                                                            </td>
                                                            @endif
                                                            </tr>
                                                        </tbody>
                                                        @endforeach
                                                    </table>
                                                    <hr style="-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;margin-top: 20px;margin-bottom: 20px;">
                                                    <p style="padding-top: 0px;margin-bottom: 10px;padding-bottom: 0px;margin-top: 20px;">اعلان حساب الانستجرام مدتة ثلاث ايام*</p>
                                                    <ul>
                                                        <li>الاسعار بالريال السعودي&nbsp;</li>
                                                        <li>الاسعار <strong>لا تشمل</strong> ضريبة القيمة المضافة 15%.</li>
                                                        <li>الاسعار <strong>لا تشمل </strong>رسوم الوكالة 15%.<br></li>
                                                    </ul>
                                                    </div>
                                    </div>            
                                <div class="col" style="padding-bottom: 15px;">
                                    <hr>
                                </div>
                                <div class="row" data-aos-duration="800" data-aos-once="true">
                                    <div class="col-lg-7 col-xl-8">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h5 class="m-0 font-weight-bold">مشاهدات حساب سناب شات (ايام الاسبوع)</h5>
                                            </div>
                                            <div class="card-body">
                                            <!-- ما اضفت القيمة -->
                                                <div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;الاحد&quot;,&quot;الاثنين&quot;,&quot;الثلاثاء&quot;,&quot;الاربعاء&quot;,&quot;الخميس&quot;,&quot;الجمعة&quot;,&quot;السبت&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;wch&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(117,221,244,0.2)&quot;,&quot;borderColor&quot;:&quot;#37d5f3&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;reverse&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:15}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:true},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:15}}]}}}"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row rowblock">
                                    <div class="col col-info">
                                        <div class="card shadow" style="background: linear-gradient(45deg, #de226b, #e06c99);">
                                            <div class="card-body"><i class="fa fa-group d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center fa-3x"></i>
                                                <p class="h2 cardcenter">{{ $statistics['age_snapchat'] }}</p>
                                                <p class="cardtype">الاعمار الاكثر انتشار&nbsp;</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-info">
                                        <div class="card shadow" style="background: linear-gradient(45deg, #50008c, #793aa9);">
                                            <div class="card-body"><i class="fa fa-map-marker d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center fa-3x"></i>
                                                <p class="h2 cardcenter">{{ $famous['region'] }}</p>
                                                <p class="cardtype">المنطقة ذات التاثير الاعلى</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-xl-4">
                                <div class="card text-white shadow mb-4 col-info" style="background: linear-gradient(45deg, #3c007f, #6a0ad6);">
                                    <div class="card-body">
                                        <p class="h1 num">{{ $statistics['follow_snapchat'] }}</p>
                                        <p class="m-0 text-center">عدد المتابعين حساب سناب شات</p>
                                    </div>
                                </div>
                                <div class="card text-white bg-white shadow mb-4 border-left-pink">
                                    <div class="card-body">
                                        <p class="h1 num" style="color: #de226b;">{{ $statistics['min_snapchat'] }}</p>
                                        <p class="m-0 text-center" style="color: #de226b;">عدد دقائق المشاهدات</p>
                                    </div>
                                </div>
                                <div class="card text-white bg-white shadow mb-4 col-info border-left-warning">
                                    <div class="card-body">
                                        <p class="h1 num" style="color: #ffc107;">{{ $statistics['story_snapchat'] }}</p>
                                        <p class="m-0 text-center" style="color: #ffc107;">عدد مشاهدات القصة</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-5">
                                <div class="card shadow mb-4" style="text-align: right;">
                                    <div class="card-header py-3">
                                        <h5 class="m-0 font-weight-bold">خدمات حساب سناب شات&nbsp;</h5>
                                    </div>
                                    <div class="card-body">
                                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>اسم الخدمة</th>
                                                    <th>السعر</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($services_2 as $services_2)
                                                <tr>
                                                @if($services_2['services_snapchat_name'] != null)
                                                    <td>{{ $services_2['services_snapchat_name'] }}</td>
                                                        @if($services_2['services_snapchat_price'] == null)
                                                    <td>تفاوض</td>
                                                    <td>
                                                        <a type="button" class="btn"  href="{{route('fixed.create',$services['id'])}}" data-toggle="tooltip" data-placement="top" title="مفاوضة" style= "background:  linear-gradient(45deg, #50008c, #793aa9); color:#fff;" > 
                                                            <i class="fa fa-handshake-o"></i></a>
                                                    </td>
                                                   
                                                @else
                                                    <td>{{ $services_2['services_snapchat_price'] }}</td>
                                                        <td>
                                                            <a type="button" class="btn btn-info" href="{{route('cart.add', $services_2['id'])}}"><i class="fa fa-plus
                                                                "></i></a>
                                                        </td>
                                                @endif
                                                        </td>
                                                @endif
                                                    </tr>
                                            </tbody>
                                                @endforeach
                                        </table>
                                        <hr style="-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;margin-top: 20px;margin-bottom: 20px;">
                                                    <p style="padding-top: 0px;margin-bottom: 10px;padding-bottom: 0px;margin-top: 20px;">اعلان حساب الانستجرام مدتة ثلاث ايام*</p>
                                                    <ul>
                                                        <li>الاسعار بالريال السعودي&nbsp;</li>
                                                        <li>الاسعار <strong>لا تشمل</strong> ضريبة القيمة المضافة 15%.</li>
                                                        <li>الاسعار <strong>لا تشمل </strong>رسوم الوكالة 15%.<br></li>
                                                    </ul>
                                        </div>
                                    </div>


        </form>








    
          
@endsection
@section('footer')
    @include('footer')
@endsection