@extends('layouts.app')
@section('content')
@section('title', 'عرض المستخدمين')

    <nav class="navbar navbar-light navbar-expand" id="brandNav">
        <div class="container">
            <a class="navbar-brand mx-auto" id="brand" href="{{route('home')}}" style="font-size: 36px;font-weight: bold;color: rgb(56,212,242);">اوزون</a><button class="navbar-toggler navbar-toggler-right text-white rounded" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        </div>
    </nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}"><span class="text-white">الرئيسية</span></a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}"><span class="text-white"> لوحة التحكم </span></a></li>
    </ol>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">عرض جميع المستخدمين</h5>
        </div>
        <div class="card-body" style="border-style: none;">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <th>{{__('رقم المستخدم')}}</th>
                    <th>{{__('اسم المستخدم')}}</th>
                    <th>{{__('إيميل')}}</th>
                    <th>{{__('حالة المستخدم')}}</th>
                    <th>{{__('حذف')}}</th>
                    <th></th>
                    <th>{{__('تفعيل')}}</th>
                </thead>
                <tbody>
                <tbody>
                    @foreach($users as $user)

                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        @if($user->status !== 1)
                            <td>{{__('لم يتم التفعيل')}}</td>
                        @else
                            <td>{{__('تم التفعيل')}}</td>
                        @endif
                        <td>
                            <form method="post" action="{{ route('admin.destroy', $user->id) }}">

                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <form method="post" action="{{route('admin.update', $user['id'])}}" class="form">
                                @csrf
                                @method('PATCH')
                                @if($user->status !== 1)
                                <button type="submit" class="btn btn-primary">{{__('تفعيل المستخدم')}}</button>
                            </form>
                        </td>

                        @else
                            <td>
                                <button type="button" class="btn btn-success">{{__(' تم تفعيل المستخدم ')}}</button>
                            </td>
                        @endif

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>                                   
@endsection
@section('footer')
    @include('footer')
@endsection