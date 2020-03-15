<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/custom.css">
</head>
<body>
    <div class="flex-center position-ref full-height">
{{--        @include('layouts/partials/header')--}}
        @include('layouts.partials.header')
        <h1>Ceci est contenu dans master</h1>
        @yield('content')
    </div>
</body>
</html>