<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Website</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('/css/master.css') }}" rel="stylesheet" type="text/css" >

</head>
<body>
<div class="container">
{{-- start main section--}}

    @yield('content')

</div>{{-- end of container --}}
</body>
</html>
