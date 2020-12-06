@extends('layouts.app')
@section('content')
@section('title', 'طلب خدمة')

<body>

    <nav class="navbar navbar-light navbar-expand" id="brandNav">
        <div class="container"><a class="navbar-brand mx-auto" id="brand" href="{{ route('home') }}" style="font-size: 36px;font-weight: bold;color: rgb(56,212,242);">اوزون</a><button class="navbar-toggler navbar-toggler-right text-white rounded" data-toggle="collapse" data-target="#navbarResponsive"
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
                                            <h5 class="m-0 font-weight-bold">نموذج طلب اعلان</h5>
                                        </div>
                                        <form  action="{{ route('fixed.store',$request->id) }}" method="post" class="form">
                                            @csrf
                                        <div class="card-body">
                                            <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                                                <div><label for="snapnum" style="text-align: right;"><strong>اسم الخدمة</strong></label>
                                                    <div style="padding-bottom: 22px;">
                                                        <input type="text" name="service_name" class="form-control">
                                                    </div>
                                                </div>
                                                <div><label for="snapnum" style="text-align: right;"><strong>مكان الاعلان</strong></label>
                                                    <div style="padding-bottom: 22px;"><input type="text" name="place" class="form-control"></div>
                                                </div>
                                                <div style="padding-bottom: 22px;"><label for="snapnum" style="text-align: right;"><strong>المبلغ المقترح</strong></label>
                                                    <div style="padding-bottom: 12px;"><input type="text" name="price" class="form-control"></div>
                                                </div>
                                                <div style="padding-bottom: 22px;"><label for="snapnum" style="text-align: right;"><strong>تاريخ الاعلان</strong></label>
                                                    <div style="padding-bottom: 12px;"><input type="date"  name="date" class="form-control"></div>
                                                </div>
                                                <div style="padding-bottom: 22px;"><label for="snapnum" style="text-align: right;"><strong>الوقت</strong><br></label>
                                                    <div style="padding-bottom: 12px;"><input type="time" name="time" class="form-control"></div>
                                                </div><label for="snapnum" style="text-align: right;"><strong>ملاحظات اخرى</strong><br></label><textarea name="notes" style="text-align: right;display: block;width: 100%;height: calc(6.5em + .75rem + 2px);padding: .375rem .75rem;font-size: 1rem;font-weight: 400;line-height: 1.5;color: #6e707e;background-color: #fff;background-clip: padding-box;border: 1px solid #d1d3e2;border-radius: .35rem;transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;margin-bottom: 14px;"></textarea>
                                                <div
                                                    class="row">
                                                    <div class="col">
                                                        <div class="form-group" style="width: 120px;margin-bottom: 6px;"><button class="btn btn-sm btnprofil" type="submit">ارسل الطلب</button></div>
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
@endsection
@section('footer')
    @include('footer')
@endsection