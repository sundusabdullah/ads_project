@extends('layouts.app')

@section('content')
<div class="container" dir="rtl">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">{{ __('نموذج طلب خدمة') }}</div>

                <div class="card-body">
                    <form  action="{{ route('fixed.store',$request->id) }}" method="post" class="form">
                        @csrf

                        <div class="form-group row">
                            <label for="place" class="col-md-4 col-form-label text-md-right">{{ __('مكان الإعلان') }}</label>
                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control" name="place" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('تاريخ الإعلان') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date"  required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">{{ __('الوقت') }}</label>
                            <div class="col-md-6">
                                <input id="time" type="time" class="form-control" name="time" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="notes" class="col-md-4 col-form-label text-md-right">{{ __('ملاحظات آخرى') }}</label>
                            <div class="col-md-6">
                                <textarea id="notes" type="text" class="form-control" name="notes"></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">{{__('إرسال الطلب')}}</button>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection