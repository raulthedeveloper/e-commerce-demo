<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = {{ asset("css/bootstrap/css/bootstrap.min.css") }} rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('css/app.css?v=1a040064279b')}}">

        <title>{{config('app.name','e-commerce')}}</title>
 
    </head>
    <body class="bg-light">
        @include('inc/navbar')
        <div class="container">

            

            @yield('content')
        </div>
            

    </body>
</html>
