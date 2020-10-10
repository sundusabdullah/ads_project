@extends('layouts.app')
@section('content')

<div class="row "> 
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="{{route('famous.update', $famous['user_id'])}}" method="post" class="form" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')


                    <div class="row">
                        <div class="col-4">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('الإسم')}}</label>
                            <input name="name" class="form-control" value="{{ $user['name'] }}" required>
                        </div>

                        <div class="col-4">
                            <label for="vat" class="col-md-4 col-form-label text-md-right">{{__('الرقم الضريبي')}}</label>
                            <input name="vat" class="form-control" value="{{ $user['vat'] }}" required>
                        </div>

                        <div class="col-4">
                            <label for="brief">{{__('نبذه تعريفية')}}</label>
                            <input name="brief" class="form-control" value="{{ $famous['brief'] }}" required>
                        </div>
                        
                        <!-- instagram -->
                        <div class="col-4">
                            <label for="instagram">{{__('حساب الانستقرام')}}</label>
                            <input name="instagram" class="form-control"  value="{{ $famous['instagram'] }}" required>
                        </div>
                        <div class="col-4">
                            <label for="instagram_num">{{__(' عدد متابعين الانستقرام')}}</label>
                            <input type="number" name="instagram_num" class="form-control" value="{{ $famous['instagram_num'] }}" required>
                        </div>
                        <!-- snap -->
                        <div class="col-4">
                            <label for="snap">{{__('حساب السناب')}}</label>
                            <input name="snap" class="form-control" value="{{ $famous['snap'] }}" required>
                        </div>
                        <div class="col-4">
                            <label for="snap_num">{{__('عدد متابعين السناب')}}</label>
                            <input type="number" name="snap_num" class="form-control" value="{{ $famous['snap_num'] }}"required>
                        </div>

                        <!-- twitter -->
                        <div class="col-4">
                            <label for="twitter">{{__('حساب تويتر')}}</label>
                            <input name="twitter" class="form-control" value="{{ $famous['twitter'] }}" required>
                        </div>
                        <div class="col-4">
                            <label for="twitter_num">{{__('عدد متابعين تويتر')}}</label>
                            <input type="number" name="twitter_num" class="form-control" value="{{ $famous['twitter_num'] }}" required>
                        </div>

                        <div class="col-4">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('مناطق التأثير')}}</label>
                            <input name="region" type="text" class="form-control" value="{{ $famous['region'] }}" required>
                        </div>

                          <!-- avatar -->
                        

                        <div class="col-4">
                            <button type="submit" class="btn btn-success">{{__('تحديث')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
