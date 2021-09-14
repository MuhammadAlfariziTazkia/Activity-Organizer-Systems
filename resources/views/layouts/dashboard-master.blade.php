@php
    $new_title = $title ?? 'AOS';
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>{{ $new_title }}</title>
</head>

<body @if ($new_title == 'AOS')
style="background-image: url('images/login-bg.jpg')"
@else
style="background-image: url('images/background.jpg')"
@endif>
    @include('layouts.navbar')

    <div class="container" style="margin-top: 7rem">
        @yield('content')
    </div>

</body>

</html>
