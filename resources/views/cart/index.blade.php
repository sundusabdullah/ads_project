@extends('layouts.app')
@section('content')

<body>
   
    <nav class="navbar navbar-light navbar-expand" id="brandNav">
        <div class="container"><a class="navbar-brand mx-auto" id="brand" href="{{route('home')}}" style="font-size: 36px;font-weight: bold;color: rgb(56,212,242);">اوزون</a><button class="navbar-toggler navbar-toggler-right text-white rounded" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button></div>
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
                        <div class="container-fluid mb-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-4" style="text-align: right;">
                                        <div class="card-header py-3">
                                            <h5 class="m-0 font-weight-bold">السلة</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group" style="margin-top: 15px;margin-right: 50px;margin-left: 50px;">
                                                <div><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th> الخدمة</th>
                <th>السعر</th>
                <th> </th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($cartItems as $cartItem)

                <td>{{ $cartItem->name }}</td>
                <td>{{ $cartItem->price }}</td>
                <td>
                    <a class="btn btn-danger" href="{{ route('cart.destroy', $cartItem->id) }}"><i class="fa fa-remove"></i></a>
                </td>
                <div style="display: none">{{$total += $cartItem->price}}</div>
            </tr>
        
            @endforeach
        </tbody>
    </table>
         <div class="row" style="box-shadow: 0px 0px;">
                                                        <div class="col"><label class="col-form-label" style="margin-top: 21px;margin-right: 15px;color: #434345;font-weight: bold;">مجموع السلة:</label></div>
                                                        <div class="col" style="text-align: left;margin-top: 20px;margin-left: 15px;font-weight: bold;"><label style="color: #434345;margin-left: 10px;">{{$total}}</label><label style="color: #434345;margin-top: 10px;">ريال سعودي</label></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col"><a href="{{ route('order.index') }}" class="btn btn-sm float-left btnprofil mt-3" type="submit">ارسل الطلب</a></div>
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
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection
