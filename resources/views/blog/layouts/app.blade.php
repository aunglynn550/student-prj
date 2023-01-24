<!DOCTYPE HTML>
<html>
	<head>
		<title>Museum!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="template/assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="template/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="template/assets/css/noscript.css" /></noscript>
	</head>

    <body class="is-preload">


    <div id="wrapper">

    <header id="header">
					<div class="inner">

						<!-- Logo -->
							<a href="index.html" class="logo">
								<span class="fa fa-home"></span> <span class="title">Museum WEBSITE</span>
							</a>

						<!-- Nav -->
							<nav>
								<ul>
									<li><a href="#menu">Menu</a></li>
								</ul>
							</nav>

					</div>
				</header>

				<form action="{{ route('search') }}" method="GET">
					<input type="text" name="search" required/>
					<button type="submit">Search</button>
				</form>
                	<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li><a href="{{ route('blogs') }}">Blogs</a></li>
							<li><a href="index.html">About</a></li>

							

							
						</ul>
					</nav>
   
    @yield('content')
    </div>
       
   
          
   

            <!-- Scripts -->
			<script src="template/assets/js/jquery.min.js"></script>
			<script src="template/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="template/assets/js/jquery.scrolly.min.js"></script>
			<script src="template/assets/js/jquery.scrollex.min.js"></script>
			<script src="template/assets/js/main.js"></script>
        </body>