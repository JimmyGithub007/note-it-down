<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', '记账小本本')</title>
	<meta name="_token" content="{{ csrf_token() }}"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link href="{{asset('fontawesome-free-5.11.2-web/css/all.css')}}" rel="stylesheet"> <!--load all styles -->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    @include('layouts.header')
    <div class="container-fluid">
        @yield('content')
    </div>
</body>
</html>