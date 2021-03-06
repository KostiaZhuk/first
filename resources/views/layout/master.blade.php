<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/code.css')}}";
</head>
<body>
	@section('menu')
	<div class='container'>
		<div class="row ">
			<ul class='nav nav-pills mynav'>
				<li {{$page=='home' ? 'class=active':''}}>
					<a href="{{url('topic')}}">Topic</a>
				</li>
				<li {{$page=='Add Topic' ? 'class=active':''}}>
					<a href="{{url('topic/create')}}">New Topic</a>
				</li>
				<li {{$page=='AddBlock' ? 'class=active':''}}>
					<a href="{{url('block/create')}}">New Block</a>
				</li>
			</ul>
		</div>
		
	<div class="row">
		<div class='container col-lg-12 md-12 sm-12'>		
			@yield('content')
		</div>
	</div>
</div>
</body>
</html>