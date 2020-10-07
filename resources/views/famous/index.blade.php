@extends('layouts.app')
@section('content')

<div class="row "> 
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="" method="post" class="form">
                        @csrf

                        <figure>
                            <img src="{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                        </figure>

                    <div class="row">
                        <div class="col-4">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('الإسم')}}</label>
                            <h3 class="form-control">{{ $famous->name }}</h3>
                        </div>

                        <div class="col-4">
                            <label for="brief">{{__('نبذه تعريفية')}}</label>
                            <h3 class="form-control"> {{ $famous->brief }}</h3>
                        </div>
                        
                        <!-- instagram -->
                        <div class="col-4">
                            <label for="instagram">{{__('حساب الانستقرام')}}</label>
                            <h3 class="form-control">{{ $famous->instagram }}</h3>
                        </div>
                        <div class="col-4">
                            <label for="instagram_num">{{__(' عدد متابعين الانستقرام')}}</label>
                            <h3 class="form-control"> {{ $famous->instagram_num }}</h3>
                        </div>
                        <!-- snap -->
                        <div class="col-4">
                            <label for="snap">{{__('حساب السناب')}}</label>
                            <h3 class="form-control"> {{ $famous->snap }} </h3>
                        </div>
                        <div class="col-4">
                            <label for="snap_num">{{__('عدد متابعين السناب')}}</label>
                            <h3 class="form-control"> {{ $famous->snap_num }} </h3>
                        </div>

                        <!-- twitter -->
                        <div class="col-4">
                            <label for="twitter">{{__('حساب تويتر')}}</label>
                            <h3 class="form-control"> {{ $famous->twitter }} </h3>
                        </div>
                        <div class="col-4">
                            <label for="twitter_num">{{__('عدد متابعين تويتر')}}</label>
                            <h3 class="form-control"> {{ $famous->twitter_num }} </h3>
                        </div>

                        <div class="col-4">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('مناطق التأثير')}}</label>
                            <h3  class="form-control"> {{ $famous->region }} </h3>
                        </div>

                        <div class="col-4">
                            <a href="{{route('famous.edit', $famous)}}" class="btn btn-primary"> {{__('تحديث')}} </a>
                        </div>
                    </div>
                </form>
              
            </div>
        </div>
    </div>
</div>
@endsection
