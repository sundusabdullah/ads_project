@extends('layouts.app')
@section('content')
@section('title', 'تعديل الطلب')


<body>
  
    <nav class="navbar navbar-light navbar-expand" id="brandNav">
        <div class="container"><a class="navbar-brand mx-auto" id="brand" href="{{route('home')}}" style="font-size: 36px;font-weight: bold;color: rgb(56,212,242);">اوزون</a><button class="navbar-toggler navbar-toggler-right text-white rounded" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button></div>
    </nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><span class="text-white">الرئيسية</span></a></li>
        <li class="breadcrumb-item"><a href="#"><span class="text-white">اسم</span></a></li>
    </ol>
    <div class="row d-flex flex-wrap">
        <div class="col">
            <div id="wrapper" class="pr-2 pl-2">
                <div class="d-flex flex-column" id="content-wrapper">
                    <div id="content">
                        <div class="container-fluid mb-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-4" style="text-align: right;">
                                        <div class="card-header py-3">
                                            <h5 class="m-0 font-weight-bold">نموذج طلب خدمة</h5>
                                        </div>
                                        <form  action="{{ route('fixed.update', $fixed)}}" method="post" class="form" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                        <div class="card-body">
                                            <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                                                <div><label for="snapnum"><strong>اسم الخدمة</strong></label>
                                                    <div style="padding-bottom: 22px;">
                                                        <input name="service_name"  value="{{ $fixed['service_name'] }}" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div><label for="snapnum"><strong>مكان الاعلان</strong></label>
                                                    <div style="padding-bottom: 22px;"><input  name="place"  value="{{ $fixed['place'] }}" type="text" class="form-control"></div>
                                                </div>
                                                <div style="padding-bottom: 22px;"><label for="snapnum"><strong>المبلغ المقترح</strong></label>
                                                    <div style="padding-bottom: 12px;"><input type="text" name="price"  value="{{ $fixed['price'] }}" class="form-control"></div>
                                                </div>
                                                <div style="padding-bottom: 22px;"><label for="snapnum"><strong>تاريخ الاعلان</strong></label>
                                                    <div style="padding-bottom: 12px;"><input type="date" name="date"  value="{{ $fixed['date'] }}" class="form-control"></div>
                                                </div>
                                                <div style="padding-bottom: 22px;"><label for="snapnum"><strong>الوقت</strong><br></label>
                                                    <div style="padding-bottom: 12px;"><input type="time" name="time"  value="{{ $fixed['time'] }}" class="form-control"></div>
                                                </div><label for="snapnum"><strong>ملاحظات اخرى</strong><br></label><textarea name="notes" >{{ $fixed['notes'] }}</textarea>
                                                <div class="row">
                                                    <div class="col d-lg-flex d-xl-flex justify-content-lg-end">
                                                        <button class="btn btn-sm btnprofil ml-2" type="submit">تعديل الطلب</button>
                                                        <a href="{{ route('paypal.show', $fixed['id'])}}" class="btn btn-sm btnprofil" type="submit">متابعة لدفع</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                


@endsection