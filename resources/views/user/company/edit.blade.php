@extends('layouts.app')
@section('content')
@section('title', 'تعديل الملف الشخصي')


<div class="row "> 
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="{{route('profile.update', $user)}}" method="post" class="form">
                        @method('PATCH')
                        @csrf
                    <div class="row">
                        <div class="col-4">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('الإسم')}}</label>
                            <input name="name" class="form-control" value="{{ $user->name }}" required>
                        </div>

                        <div class="col-4">
                            <label for="email">{{__('البريد الالكتروني')}}</label>
                            <input name="email" class="form-control" value="{{ $user->email }}" required>
                        </div>

                      

                        <div class="col-4">
                            <button type="submit" class="btn btn-success">{{__('حفظ')}}</button>
                        </div>
                
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
