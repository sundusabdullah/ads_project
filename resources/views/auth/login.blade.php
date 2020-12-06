@extends('layouts.app')
@section('content')


<body style="direction: rtl; background-image: url({{url('/img/bg.png')}});">
    <div class="login-dark" style="">
    <form method="post" action="{{ route('login') }}">
        <a class="d-xl-flex justify-content-xl-center" href="" style="margin: 22px;color: #eef4f7;font-size: 49px;">اوزون</a>
            @csrf
            <p class="login mt-5" style="text-align: center;font-family: Cairo, sans-serif;font-weight: bold;">تسجيل دخول</p>
            <div class="form-group">
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="البريد الالكتروني" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
            </div>
            <div class="form-group">
                <div class="invalid-feedback"></div>
            </div>
            
            <div class="form-group">
                <input class="form-control input--style-6  @error('password') is-invalid @enderror" type="password" name="password" placeholder="كلمة المرور" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block mt-5" type="submit">تسجيل</button>
            </div>
            <div>
                @if (Route::has('password.request'))
                    <a class="linkform" href="{{ route('password.request') }}">{{ __('هل نسيت كلمة المرور؟') }}</a>
                    <a class="linkform" href="{{ route('register') }}">ليس لديك حساب ؟&nbsp;تسجيل&nbsp;<br></a>

                @endif
            </div>
        </form>
    </div>


@endsection
