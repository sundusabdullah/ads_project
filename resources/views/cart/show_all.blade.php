@extends('layouts.app')
@section('content')

<form action="" method="post" class="form">
    @csrf  
    <table class="table">
 
        <thead>
            <tr>
            <th scope="col">الخدمة</th>
            <th scope="col">عرض الصفحة</th>
            </tr>
        </thead>
    @forelse($negotiate as $user_negotiate)

    <tbody>
        <tr>
        <td>{{$user_negotiate['message']}}</td>
        <td><a class="btn btn-primary"href="{{route('negotiation.show',['fixed_id'=>$user_negotiate['fixed_id']])}}"> عرض صفحة النقاش</a></td>
        
        </tr>
    @empty
        <div class="alert alert-info text-center" role="alert">
            لم تقم بأي نقاش
        </div>

    </tbody>
    @endforelse

    </table>
</form>
@endsection


