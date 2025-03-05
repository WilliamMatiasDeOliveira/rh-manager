<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">
    <!-- resources -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/datatables/datatables.min.css')}}">
    <!-- custom -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>

<body>

    @include('Layouts.partials.user_bar')

    @yield('content')

    <!-- resources -->
    <script src="{{asset('assets/datatables/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/datatables/datatables.min.js')}}"></script>

</body>

</html>
