@extends('layouts.app')
@section('content')

                <form action="" method="post" class="form">
                        @csrf
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">الخدمة</th>
                                    <th scope="col">السعر</th>
                                    <th scope="col">الطلب</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $services)
                                    <tr>
                                        <!-- service name -->
                                        <td>{{ $services['services_name'] }}</td>

                                        <!-- service price -->
                                        @if($services['services_type']	 == 'Fixedـprice')
                                            <td>{{ $services['services_price'] }} </td>
                                        @endif
                                        @if($services['services_type']	 == 'negotiate')
                                            <td>{{__(' بالتفاوض')}}</td>
                                        @endif

                                        <!-- service order -->
                                        @if($services['services_type'] == 'Fixedـprice')
                                            <td><a href="{{route('cart.add', $services['id'])}}" class="btn btn-primary"> {{__('شراء الخدمة')}} </a></td>
                                        @endif
                                        @if($services['services_type']	== 'negotiate')
                                            <td> <a href="{{route('fixed.create')}}" class="btn btn-primary"> {{__('اتمام الطلب')}} </a></td>
                                        @endif
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>

                            @if(auth()->user()->id == $services['user_id'])
                                <div class="col-4">
                                    <a href="{{route('service.edit', $services)}}" class="btn btn-primary"> {{__('تحديث')}} </a>
                                </div>
                                <from method="post" action= "{{route('service.destroy', $services)}}">
                                    @method('DELETE')
                                    @csrf
                                        <button class="btn btn-danger" onclick="return confirm('{{__('هل أنت متأكد؟')}}')">حذف</button>
                                </from>
                            @endif
                </form>
 
@endsection
