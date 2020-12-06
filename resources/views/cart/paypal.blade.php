
@extends('layouts.app')
@section('content')
@section('title', 'صفحة الدفع')


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
                                            <h5 class="m-0 font-weight-bold">الدفع</h5>
                                        </div>
                                        <form accept-charset="UTF-8" action="https://api.moyasar.com/v1/payments.html" method="POST">
                                            <input type="hidden" name="callback_url" value="https://www.google.com" /> <!-- what will appear on the page after successful payment -->
                                            <input type="hidden" name="publishable_api_key" value="pk_test_J5NyKBhwCpTLpZAs9N6sy7V7K9cjgqrTRLgrWXsB" />

                                            <!-- <input type="hidden" name="amount" value="200" />  -->
                                            <!-- you can make this type="number" and let the user enter the amount -->
                                            <input type="hidden" name="source[type]" value="creditcard" />
                                            <input type="hidden" name="description" value="Order id 1234 by guest" />
                                        <div class="card-body">
                                            <div class="mr-5 ml-5">
                                                <div class="row">
                                                    
              <div class="col-md-3 mb-3">
                    <label for="cc-expiration">المبلغ الكلي</label>
                    @foreach($cartItems as $cartItem)

                    <input type="text" class="form-control" name="amount" value="{{ $total += $cartItem['price'] }}" id="cc-expiration" placeholder="" required="">
                @endforeach
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">الإسم</label>
                <input type="text" class="form-control"  name="source[name]" id="cc-cvv" placeholder="" required="">
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">رقم البطاقة</label>
                <input type="text" class="form-control" name="source[number]" id="cc-expiration" placeholder="" required="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">السنة</label>
                <input type="text" class="form-control"  name="source[year]" id="cc-expiration" placeholder="" required="">
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">الشهر</label>
                <input type="text" class="form-control" name="source[month]" id="cc-cvv" placeholder="" required="">
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" name="source[cvc]" id="cc-cvv" placeholder="" required="">
              </div>
            </div>
</div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group" style="text-align: left;"><button class="btn btn-sm btnprofil ml-5" type="submit">شراء</button></div>
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
</form>

        </div>
    </div>



@endsection

@section('footer')
    @include('footer')
@endsection