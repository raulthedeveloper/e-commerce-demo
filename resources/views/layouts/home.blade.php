<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link href = {{ asset("css/bootstrap/css/bootstrap.min.css") }} rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('css/app.css?v=1a040064279b')}}">

    <title>{{config('app.name','e-commerce')}}</title>

</head>
<body class="bg-light">
<section class="main-hero" style="background-image: url('https://images6.alphacoders.com/435/thumb-1920-435743.jpg'); background-position: center; background-position: center">
    @include('inc.navbar')

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-light">E-Commmerce Demo</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead text-light mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
            </div>
        </div>
    </div>


</section>

<div class="container">



    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

@include('inc/footer')
</body>
</html>
