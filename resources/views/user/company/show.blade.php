@extends('layouts.app')
@section('content')
@section('title', 'الملف الشخصي')


<div class="row "> 
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="" method="post" class="form">
                        @csrf
                    <div class="row">
                        <div class="col-4">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('الإسم')}}</label>
                            <h3 class="form-control"> {{ $user->name }}</h3>
                        </div>

                        <div class="col-4">
                            <label for="email">{{__('البريد الالكتروني')}}</label>
                            <h3 class="form-control">{{ $user->email }}</h3>
                        </div>

        

                        <div class="col-4">
                            <a href="{{route('profile.edit', $user)}}" class="btn btn-primary"> {{__('تحديث')}} </a>
                        </div>
                
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
