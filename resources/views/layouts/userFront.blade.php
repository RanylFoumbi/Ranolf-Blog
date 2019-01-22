
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>{{ config('app.name', 'RanolfBlog') }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="{{ asset('frontend/plugin-frameworks/bootstrap.css')}}" rel="stylesheet">
	
	<link href="{{ asset('frontend/fonts/ionicons.css')}}" rel="stylesheet">
	
		
	<link href="{{ asset('frontend/common/styles.css')}}" rel="stylesheet">
	
	
</head>


<body>
	

     @include('partials.userHeader')
     <section class="container">
     @yield('content')
     </section>
     @include('partials.userFooter')


	<!-- SCIPTS -->
	
	<script src="{{ asset('frontend/plugin-frameworks/jquery-3.2.1.min.js')}}"></script>
	
	<script src="{{ asset('frontend/plugin-frameworks/tether.min.js')}}"></script>

	<script src="{{ asset('frontend/plugin-frameworks/bootstrap.js')}}"></script>
	
	<script src="{{ asset('frontend/common/scripts.js')}}"></script>
	
</body>
</html>