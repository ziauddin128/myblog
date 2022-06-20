<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>@yield('page_title')</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="{{asset('front_asset/css/main.css')}}" rel="stylesheet"/>

<link rel="stylesheet" href="{{asset('front_asset/contact/css/style.css')}}">

</head>
<body>
<!--------------------------------------
NAVBAR
--------------------------------------->
<nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
<div class="container">
	<a class="navbar-brand" href="{{url('/')}}"><strong>My Blog</strong></a>
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="navbarColor02" style="">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			
		    <li class="nav-item">
			<a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
			</li>
			
			<?php 
               use App\Http\Controllers\front\homePost;
			   $page = homePost::page_menu();
			?>
            @foreach($page as $pageList)
			 <li class="nav-item">
			  <a class="nav-link" href="{{url('/'.$pageList->slug)}}">{{$pageList->name}}</a>
			 </li>
			@endforeach

		</ul>
	</div>
</div>
</nav>
<!-- End Navbar -->
    
    
<!--------------------------------------
HEADER
--------------------------------------->
<div class="container">
	@section('topSection')

	@show
</div>
<!-- End Header -->
    
    
<!--------------------------------------
MAIN
--------------------------------------->
    
<div class="container pt-4 pb-4">
	@section('contain')

	@show
</div>
    
<div class="container">
	@section('international')

	@show
</div>
    
<!--------------------------------------
FOOTER
--------------------------------------->
<div class="container mt-5">
	<footer class="bg-white border-top p-3 text-muted small">
	<div class="row align-items-center justify-content-between">
		<div>
            <span class="navbar-brand mr-2"><strong>My Blog</strong></span> Copyright &copy;
			<script>document.write(new Date().getFullYear())</script>
			 . All rights reserved.
		</div>
	</div>
	</footer>
</div>
<!-- End Footer -->
    
<!--------------------------------------
JAVASCRIPTS
--------------------------------------->
<script src="{{asset('front_asset/js/vendor/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front_asset/js/vendor/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front_asset/js/vendor/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front_asset/js/functions.js')}}" type="text/javascript"></script>


<script src="{{asset('front_asset/js/jquery.min.js')}}"></script>
	<script src="{{asset('front_asset/js/popper.js')}}"></script>
	<script src="{{asset('front_asset/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('front_asset/js/jquery.validate.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="{{asset('front_asset/js/google-map.js')}}"></script>
	<script src="{{asset('front_asset/js/main.js')}}"></script>


</body>
</html>