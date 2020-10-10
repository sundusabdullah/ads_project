
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    مرحبًا <b>{{ $to->name }}</b> ،
<br/>
وصلك تنبيه على <a href="{{ route('negotiation.show',$neg->id)}} ">{{$neg->fixed->services->services_name}}</a> .

</body>
</html>