<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', '记账小本本')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link href="{{asset('assets/fontawesome-free-5.11.2-web/css/all.css')}}" rel="stylesheet"> <!--load all styles -->
	<link href="{{asset('assets/startbootstrap-simple-sidebar/css/simple-sidebar.css')}}" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/external.css')}}" rel="stylesheet">
	<style>
		.float{
			position:fixed;
			width:60px;
			height:60px;
			bottom:40px;
			right:40px;
			background-color:#0C9;
			color:#FFF;
			border-radius:50px;
			text-align:center;
			box-shadow: 2px 2px 3px #999;
		}

		.my-float{
			margin-top:22px;
		}

		.sticky {
		  position: fixed;
		  top: 0;
		  z-index: 1;
		  background: #ffffff;
		  width: 100%;
		}
	</style>

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
</head>
<body>
	<div id="app">
		@yield('content')
	</div>
	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
