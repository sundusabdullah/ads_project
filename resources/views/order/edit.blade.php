@extends('layouts.app')
@section('content')
@section('title', 'تعديل الطلب')

<div class="container" dir="rtl">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">
                    {{ __('نموذج تعديل طلب خدمة') }}
                </div>
                <div class="card-body">
                    <form  action="{{ route('fixed.update', $fixed)}}" method="post" class="form" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="place" class="col-md-4 col-form-label text-md-right">{{ __('مكان الإعلان') }}</label>
                            <div class="col-md-6">
                                <input id="place" type="text" value="{{ $fixed['place'] }}" class="form-control" name="place" required >
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('السعر المقترح') }}</label>
                            <div class="col-md-6">
                                <input  id="price" value="{{ $fixed['price'] }}" type="number" class="form-control" name="price" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('تاريخ الإعلان') }}</label>

                            <div class="col-md-6">
                                <input id="date" value="{{ $fixed['date'] }}" type="date" class="form-control" name="date"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">{{ __('الوقت') }}</label>
                            <div class="col-md-6">
                                <input id="time" type="time" value="{{ $fixed['time'] }}" class="form-control" name="time"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="notes" class="col-md-4 col-form-label text-md-right">{{ __('ملاحظات آخرى') }}</label>
                            <div class="col-md-6">
                                <textarea id="notes" value="{{ $fixed['notes'] }}" type="text" class="form-control" name="notes"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">{{__('تحديث الطلب')}}</button>
                            </div> 
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">{{__('متابعة للدفع')}}</button>
                            </div> 
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection