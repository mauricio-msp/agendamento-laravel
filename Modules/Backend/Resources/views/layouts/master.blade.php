<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{url('assets/images/favicon.ico')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{url('assets/css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:400,300,700" rel="stylesheet" type="text/css"/>
    <link href="https://code.ionicframework.com/ionicons/1.4.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
@yield('content')
<script type="text/javascript" src="{{url('assets/js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/app.js')}}"></script>
</body>
</html>
