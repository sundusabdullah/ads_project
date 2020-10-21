@extends('layouts.app')
@section('content')
@section('title', 'تفعيل مستخدم')

    <form action="{{route('admin.update', $user['id'])}}" method="post" class="form" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="alert alert-info text-center" role="alert">
             بمجرد الضغط على زر تفعيل، سيتم تفعيل المستخدم والسماح له بدخول الموقع
        </div>
        <div class="row">
            <div class="col-4">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{__('الإسم')}}</label>
                <h2 name="name" class="form-control">{{ $user['name'] }}</h2>
            </div>

            <div class="col-4">
                <label for="vat" class="col-md-4 col-form-label text-md-right">{{__('الإيميل')}}</label>
                <h2 name="vat" class="form-control"> {{ $user['email'] }} </h2>
            </div>
        </div>

        <div class="col-4">
            <button type="submit" class="btn btn-success">{{__('تأكيد التفعيل')}}</button>
        </div>

    </form>
@endsection