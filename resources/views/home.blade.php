@extends('layouts.app')
@section('content')
@section('title', 'الصفحة الرئيسية')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                @foreach($users as $user)
                        @if($user->account_type == 'famous' or $user->account_type == 'orgonizer')
                            <div class="col-4">
                                <a href="{{ route('info', $user) }}" class="btn btn-primary"> {{ $user->name }} </a>
                            </div>   
                        @endif
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection
