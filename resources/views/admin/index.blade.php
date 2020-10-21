@extends('layouts.app')
@section('content')
@section('title', 'عرض المستخدمين')


<h1 class="text-center">عرض جميع المستخدمين</h1>

<table class="table text-center">

    <thead>
        <th>{{__('رقم المستخدم')}}</th>
        <th>{{__('اسم المستخدم')}}</th>
        <th>{{__('إيميل')}}</th>
        <th>{{__('حالة المستخدم')}}</th>
        <th></th>
        <th></th>
        <th>{{__('حذف')}}</th>
        <th>{{__('تفعيل')}}</th>

    </thead>

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
            <td></td>

            <td>{{$user->balance}}</td>
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

@endsection