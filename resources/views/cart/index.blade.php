@extends('layouts.app')
@section('content')

    <h2 class="text-right text-center pb-2">الشراء</h2>
    <table class="table table-bordered text-right" >
        <thead>
            <tr>
                <th scope="col">الخدمة</th>
                <th scope="col">السعر</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $cartItem)
                <tr >
                    <td scop="row">{{ $cartItem->name }}</td>
                    <td scop="row">{{ $cartItem->price }}</td>
                    <td scop="row">
                        <a href="{{ route('cart.destroy', $cartItem->id) }}">حذف</a>
                    </td>
                    <div style="display: none">{{$total += $cartItem->price}}</div>
                </tr>
            @endforeach
        </tbody>
    </table>

        <h3 class="text-right  pr-3">
         المجموع الكلي:
        {{ $total }} ريال
        </h3>
    <div class="pl-4" >
        <a class="btn btn-primary" role="button" href="#">متابعة للدفع</a>
    </div>
@endsection
