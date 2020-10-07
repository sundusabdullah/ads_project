@extends('layouts.app')
@section('content')

<div class="row "> 
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="{{ route('service.store') }}" method="post" class="form">
                        @csrf
                        <!-- service name -->
                    <div class="row">
                        <div class="col-4">
                            <label for="services_name" class="col-md-4 col-form-label text-md-right">{{__('اسم الخدمة')}}</label>
                            <input name="services_name" type="text" class="form-control" required>
                        </div>

                        <!-- service price -->
                        <div class="col-4">
                            <label for="services_price">{{__('سعر الخدمة')}}</label>
                            <input name="services_price" type="number"  class="form-control">
                        </div>

                         <!-- service type -->
                         <div class="form-group row" >
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('نوع الخدمة') }}</label>

                            <label class="radio-inline">
                                <input type="radio" name="services_type"  value="Fixedـprice" checked> {{ __('سعر ثابت') }}
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="services_type" value="negotiate"> {{ __('تفاوض') }}
                            </label>
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
