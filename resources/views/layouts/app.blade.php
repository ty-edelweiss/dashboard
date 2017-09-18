<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Develpment chache contorl meta tag -->
    <meta http-equiv="Cache-Control" content="no-cache">

    <title>Research Dashboard</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        @include('includes.nav')
        <div class="content">
            @yield('content')
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript" charset="utf-8"></script>
</body>
</html>
