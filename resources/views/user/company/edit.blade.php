@extends('layouts.app')
@section('content')
@section('title', 'تعديل الملف الشخصي')

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
                                            <h5 class="m-0 font-weight-bold">الملف الشخصي</h5>
                                        </div>
                                        <form action="{{route('profile.update', $user)}}" method="post" class="form">
                                            @method('PATCH')
                                            @csrf
                                        <div class="card-body">
                                            <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                                                <div><label for="snapnum" style="text-align: right;"><strong>اسم </strong></label>
                                                    <div style="padding-bottom: 22px;">
                                                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" >
                                                    </div>
                                                </div>
                                                <div><label for="snapnum" style="text-align: right;"><strong>البريد الالكتروني</strong></label>
                                                    <div style="padding-bottom: 22px;">
                                                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" ></div>
                                                </div>

                                                <div><label for="snapnum" style="text-align: right;"><strong> كلمة المرور</strong></label>
                                                    <div style="padding-bottom: 22px;">
                                                    <input type="password" name="password" value="" class="form-control" ></div>
                                                </div>
                                               
                                        
                                                <div
                                                    class="row">
                                                    <div class="col">
                                                        <div class="form-group" style="width: 120px;margin-bottom: 6px;">
                                                        <button type="submit" class="btn btn-sm btnprofil">تحديث البيانات</button>
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

@endsection
@section('footer')
    @include('footer')
@endsection
