@extends('layouts.app')
@section('content')

{{ $fixed->services->services_name }}

@foreach ($negotiations as $negotiation)
    {{ $negotiation->message }}
    {{ $negotiation->user->name }}
@endforeach 
@endsection
