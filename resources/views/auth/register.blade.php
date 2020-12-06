@extends('layouts.app')

@section('content')

<body style="direction: rtl; background-image: url({{url('/img/bg.png')}});">
    <div class="login-dark">
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
            <a class="d-xl-flex justify-content-xl-center" href="" style="margin: 22px;color: #eef4f7;font-size: 49px;">اوزون</a>
            <div class="illustration"></div>
            <p style="text-align: center;font-family: Cairo, sans-serif;font-weight: bold;">{{ __('التسجيل') }}</p>
            <div class="form-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="اسم المستخدم"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>                
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="البريد الإلكتروني" name="email" value="{{ old('email') }}" required autocomplete="email">            
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="كلمة المرور" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <input id="password-confirm" placeholder="تأكيد كلمة المرور" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="avatar" class="form-group">{{ __('الصورة الشخصية') }}</label>
                    <div class="col-md-6">
                        <input id="avatar" type="file" class="form-control" name="avatar">
                    </div>
            </div>
            <div class="form-group" style="height: 76px;">
                <p>{{ __('نوع الحساب') }}</p>
                <div><input type="radio" name="account_type" value="company" required><label for="company">{{ __('شركة معلنة') }}</label></div>
                <div><input type="radio" name="account_type" value="person" required checked><label for="person">{{ __('فرد معلن') }}</label></div>
                <div><input type="radio" name="account_type" value="orgonizer" required><label for="orgonizer">{{ __('منسق معلن') }}</label></div>
            </div>
            <div class="form-group" style="margin-bottom: 0px;text-align: center;padding-top: 30px;padding-bottom: 8px;"><a href="#" style="font-family: Cairo, sans-serif;font-size: 10px;color: #807b7b;"><br>بالضفط على "تسجيل " انت توافق على&nbsp;الشروط و الأحكام.<br></a></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">تسجيل</button></div>
        </form>
    </div>

@endsection
