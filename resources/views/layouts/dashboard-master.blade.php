<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Scripts -->

        <script src="{{ asset('js/app.js') }}" defer></script>

   

        <!-- Styles -->
    
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{$title}}</title>
</head>
<body style="background-image: url('images/background.jpg')">
    @include('layouts.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>