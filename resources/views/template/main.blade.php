<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>
	<script src="js/d3.js" language="JavaScript"></script>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('css/styles-1.css')}}">
	<link rel="stylesheet" href="css/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,100' rel='stylesheet' type='text/css'>
</head>
<body>

<header>

	<div class="header-wrap">
		<div id="overlay" class="hidden">
			<nav>
				<ul>
					<li><span class="about">ABOUT</span></li>
					<li><span class="work">WORK</span></li>
					<li><span class="skill">SKILL</span></li>
					<li><span class="contact">CONTACT</span></li>
				</ul>
			</nav>
		</div><!-- end overlay -->

		<div class="header-box">
			<div class="logo">
		        <span></span>
		    </div>

			<div class="menu">
				<span></span>
		    </div>
		</div><!-- end header-box -->

		<nav id="mobile-nav" class="hidden">
			<ul>
				<li><span class="about">ABOUT</span></li>
				<li><span class="work">WORK</span></li>
				<li><span class="skill">SKILL</span></li>
				<li><span class="contact">CONTACT</span></li>
			</ul>
		</nav>
	</div><!-- header-warp -->
</header>

	
	
	<main>
	
	@yield('index')
	

	</main>
	<div class="goTop">
		<span></span>
	</div>
	<div class="goDown"></div>
	<footer>
		Macho copy right
	</footer>


		
<!-- 	// <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.0.0/annyang.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>