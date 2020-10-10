@extends('layouts.app')
@section('content')


<h2 class="text-center">الفاتورة</h2>

    <form action="{{ route('order.store')}}" method="post">
        @csrf
        <div class="container">
            <div class="col justify-content-center text-center">
            @foreach($cartItems as $cartItem)

                <div class="col-4">
                    <label>{{__('اسم المستفيد')}}</label>
                    <h3 class="form-control"> {{ Auth::user()->name}} </h3>
                </div>

                <div class="col-4">
                    <label>{{__('مزود الخدمة')}}</label>
                    <h3 class="form-control"> </h3>
                </div>

                <div class="col-4">
                    <label>{{__('الخدمة')}}</label>
                    <h3 class="form-control"> {{ $cartItem['name'] }}</h3>
                </div>

                <div class="col-4">
                    <label>{{__('الرقم الضريبي')}}</label>
                    <h3 class="form-control">  </h3>
                </div>

                <div class="col-4">
                    <label>{{__('المجوع الكلي')}}</label>
                    <h3 class="form-control"> {{ $total += $cartItem->price }} </h3>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">متابعة للدفع</button>
                        <button type="submit" class="btn btn-danger">إلغاء</button>
                    </div>
                </div>
                    @endforeach

            </div>
        </div>
    </forrm>

@endsection