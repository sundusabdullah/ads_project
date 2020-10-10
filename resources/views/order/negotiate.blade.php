@extends('layouts.app')

@section('content')
<div class="container" dir="rtl">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">{{ __('معلومات طلب خدمة') }}</div>

                <div class="card-body">

                    <div class="form-group row">
                        <label for="place" class="col-md-4 col-form-label text-md-right">{{ __('اسم الخدمة') }}</label>
                        <div class="col-md-6">
                            <input disabled value="{{ $fixed->services->services_name }}" id="services_name" type="text" class="form-control" name="services_name" required >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('سعر الخدمة') }}</label>

                        <div class="col-md-6">
                            <input disabled value="{{ $fixed->services->services_price }}" id="services_price" type="text" class="form-control" name="services_price"  required>
                        </div>
                    </div>
				</div>
                <div class="card-body">

                        <div class="form-group row">
                            <label for="place" class="col-md-4 col-form-label text-md-right">{{ __('مكان الإعلان') }}</label>
                            <div class="col-md-6">
                                <input disabled value="{{ $fixed->place }}" id="place" type="text" class="form-control" name="place" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('تاريخ الإعلان') }}</label>

                            <div class="col-md-6">
                                <input disabled value="{{ $fixed->date }}" id="date" type="date" class="form-control" name="date"  required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">{{ __('الوقت') }}</label>
                            <div class="col-md-6">
                                <input disabled value="{{ $fixed->time }}" id="time" type="time" class="form-control" name="time" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="notes" class="col-md-4 col-form-label text-md-right">{{ __('ملاحظات آخرى') }}</label>
                            <div class="col-md-6">
                                <textarea disabled id="notes" type="text" class="form-control" name="notes">{{ $fixed->notes }}</textarea>
                            </div>
                        </div>
                </div>
			</div>
			
			<div class="card mt-4" style="direction: rtl">
				<div class="card-header text-right">{{ __('نقاش الخدمة') }}</div>
					<div class="card-body" style="direction: rtl">
						<ul class="list-unstyled" style="direction: rtl;padding-right: 0;">
							@foreach ($negotiations as $negotiation)
							<li class="media text-right p-2 mb-2" style="background: #f7f7f7">
							  <div class="media-body">
								<h5 class="font-weight-bold mt-0 mb-3">{{ $negotiation->user->name }}</h5>
								{{ $negotiation->message }}

								<br/>
								<span class="font-italic float-left">{{ $negotiation->created_at }}</span>

								</div>
							</li>
  
							@endforeach 
						</ul>
						<form  action="{{ route('negotiation.store',$fixed->id) }}" method="post" class="form">
							@csrf
							
							<div class="form-group row">
								<div class="col-md-12">
									<textarea type="text" class="form-control" name="message"></textarea>
								</div>
							</div>
	
	
							<div class="form-group row">
								<div class="col-md-12 text-right">
									<input type="hidden" value="{{ $user_id }}" name="user_id" />
								    <input type="hidden" value="{{ $to }}" name="to"/>
									<button value="{{$fixed->id}}" name="fixed_id" type="submit" class="btn btn-primary">{{__('إرسال')}}</button>
								</div> 
							</div>
						</form>
                	</div>
			</div>
        </div>
    </div>
</div>
@endsection