<!DOCTYPE html>
<html lang="en">
<head>
<title>Wee-Document | Home : W3layouts</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Wee-Document Responsive web template" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style-index.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<!-- //css files -->

	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- header -->
<header>
	<div class="container">
		<div class="header d-lg-flex justify-content-between align-items-center">
			<div class="header-agile">
				<h1>
					<a class="navbar-brand logo" href="index.html">
						<span class="fa fa-copyright" aria-hidden="true"></span>Wee-Document
					</a>
				</h1>
			</div>
			<div class="nav_w3ls">
				<nav>
					<label for="drop" class="toggle mt-lg-0 mt-2"><span class="fa fa-bars" aria-hidden="true"></span></label>
					<input type="checkbox" id="drop" />
						<ul class="menu">
							<li class="mr-lg-3 mr-2 active"><a href="{{ route('register') }}">Register</a></li>
							<li class="mr-lg-3 mr-2"><a href="#services">Services</a></li>
							<li class="mr-lg-3 mr-2"><a href="#team">Team</a></li>
							<li class="mr-lg-3 mr-2 p-0">
							<!-- First Tier Drop Down -->
							<label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
							<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2"/>
							<ul class="inner-dropdown">
								<li><a href="#blog">Latest News</a></li>
								<li><a href="#pricing">Pricing Table</a></li>
								<li><a href="#testimonials">Testimonials</a></li>
								<li><a href="#subscribe">Subscribe</a></li>
							</ul>
							</li>
							<li><a href="{{ route('login') }}">Login</a></li>
						</ul>
				</nav>
			</div>
			<div class="buttons mt-lg-0 mt-2">
				<a href="#"><span class="fa mr-1 fa-facebook"></span></a>
				<a href="#"><span class="fa mr-1 fa-twitter"></span></a>
				<a href="#"><span class="fa mr-1 fa-linkedin"></span></a>
			</div>

		</div>
	</div>
</header>
<!-- //header -->
<!-- banner -->
<div class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1"/>
		<input type="radio" name="slides" id="slides_2"/>
		<input type="radio" name="slides" id="slides_3"/>
		<input type="radio" name="slides" id="slides_4"/>

		<ul class="banner_slide_bg">
			<li>
				<div class="slider-info bg1">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are professional <span class="ml-2"><span></h5>
								<h1 class="movetxt agile-title text-capitalize">Consult Your</h1>
								<h4 class="movetxt mb-3 agile-title text-capitalize">Business With Us</h4>
								<p>We help you manage your documents and ensure they are been delivered as expected</p>
								<a class="btn mt-4 text-capitalize" href="#welcome"> Know More </a>
								<a class="btn btn1 mt-4 text-capitalize scroll" href="#contact" > Get Started </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg2">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are unique <span class="ml-2"><span></h5>
								<h4 class="movetxt agile-title text-capitalize">Creative Design </h4>
								<h4 class="movetxt mb-3 agile-title text-capitalize">Manage Business </h4>
								<p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
								ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.</p>
								<a class="btn mt-4 text-capitalize" href="#welcome"> Know More </a>
								<a class="btn btn1 mt-4 text-capitalize scroll" href="#contact" > Get Started </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg3">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are creative <span class="ml-2"><span></h5>
								<h4 class="movetxt agile-title text-capitalize">High Quality </h4>
								<h4 class="movetxt mb-3 agile-title text-capitalize">Creative thinking </h4>
								<p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
								ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.</p>
								<a class="btn mt-4 text-capitalize" href="#welcome"> Know More </a>
								<a class="btn btn1 mt-4 text-capitalize scroll" href="#contact" > Get Started </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg4">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h5 class="tag mb-3 text-uppercase">We are awesome <span class="ml-2"><span></h5>
								<h4 class="movetxt agile-title text-capitalize">Tons of Projects </h4>
								<h4 class="movetxt mb-3 agile-title text-capitalize">With Consultancy </h4>
								<p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,
								ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.</p>
								<a class="btn mt-4 text-capitalize" href="#welcome"> Know More </a>
								<a class="btn btn1 mt-4 text-capitalize scroll" href="#contact" > Get Started </a>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="navigation">
			<div>
			  <label for="slides_1"></label>
			  <label for="slides_2"></label>
			  <label for="slides_3"></label>
			  <label for="slides_4"></label>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- welcome -->
<section class="welcome py-5" id="welcome">
	<div class="container py-sm-3">
		<h3 class="heading mb-4">Welcome to Wee-Document</h3>
		<p>Something has to be written here</p>

	</div>
</section>
<!-- //welcome -->

<!-- Services -->
<section class="services py-5" id="services">
	<div class="container py-md-5">
		<h3 class="heading mb-lg-5 mb-4">Our Services </h3>
		<div class="row service-grids">
			<div class="col-lg-4 col-md-6 grid1">
				<span class="number">01</span>
				<h3> <span class="fa fa-desktop"></span> Consultancy </h3>
				<p>Nulla felis tortor, rutrum eget feugiat non, blandit nec tellus. Nam pharetra ipsum ligula volutpat, a finibus Nam pharetra ipsum ligula volutpat.</p>
				<a href="#">Read More <span class="fa fa-caret-right"></span></a>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-5 grid1">
				<span class="number">02</span>
				<h3> <span class="fa fa-building"></span> Grow Business </h3>
				<p>Nulla felis tortor, rutrum eget feugiat non, blandit nec tellus. Nam pharetra ipsum ligula volutpat, a finibus Nam pharetra ipsum ligula volutpat.</p>
				<a href="#">Read More <span class="fa fa-caret-right"></span></a>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-5 grid1">
				<span class="number">03</span>
				<h3> <span class="fa fa-ticket"></span> 24/7 Support </h3>
				<p>Nulla felis tortor, rutrum eget feugiat non, blandit nec tellus. Nam pharetra ipsum ligula volutpat, a finibus Nam pharetra ipsum ligula volutpat.</p>
				<a href="#">Read More <span class="fa fa-caret-right"></span></a>
			</div>
		</div>
	</div>
</section>
<!-- //Services -->

<!-- project -->
<section class="book text-center">
	<div class="layer py-5">
		<div class="container py-lg-5 py-md-3">
			<h3 class="mb-sm-4 mb-3">Want us to help you manage that team delivery ?</h3>
			<a href="#signup" class="scroll"> Sign up now  </a>
		</div>
	</div>
</section>
<!-- //project -->

<!-- section -->
<section class="section py-5">
	<div class="container py-md-5">
		<div class="row section_grids">
			<div class="col-lg-6">
				<h3> blandit nec tellus. Namnec elit pharetra ipsum ligula</h3>
				<p class="my-4">Nulla felis tortor, rutrum eget feugiat non, blandit nec tellus. Nam pharetra ipsum ligula volutpat, a finibus. Vivamus eget est
				init odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,ut auctor turpis cursus.
				Sed sed odio pharetra, aliquet velit cursus, vehicula enim.</p>
				<p>Nam pharetra ipsum,	ligula volutpat a finibus.Vivamus eget est ac finibus ante. Sed mattis risus eget laoreet ligula</p>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5 img">
				<img src="images/s2.jpg" class="img-fluid" alt=""/>
			</div>
		</div>
	</div>
</section>
<!-- //section -->

<!-- section -->
<section class="section py-5 bg-light">
	<div class="container py-md-5">
		<div class="row section_grids">
			<div class="col-lg-6">
				<img src="images/s1.jpg" class="img-fluid" alt=""/>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<h3> Nam pharetra ipsum ligula elit volutpat, a finibus ipsum.</h3>
				<p class="my-4">Nulla felis tortor, rutrum eget feugiat non, blandit nec tellus. Nam pharetra ipsum ligula volutpat, a finibus. Vivamus eget est
				init odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,ut auctor turpis cursus.
				Sed sed odio pharetra, aliquet velit cursus, vehicula enim.</p>
				<a href="#"> Read More </a>
			</div>
		</div>
	</div>
</section>
<!-- //section -->

<!-- pricing plans -->
<section class="pricing py-5" id="pricing">
	<div class="container py-md-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4">Pricing Table</h3>
		<div class="row pricing-grids">
			<div class="col-lg-3 col-sm-6">
				<div class="pricing-grid1 pricing-grid1-active mb-md-0 mb-sm-5 mb-4">
					<h3>Basic</h3>
					<h4>10<span>$</span></h4>
					<p class="mt-3"><span class="fa mr-1 fa-check"></span> 1 User</p>
					<p><span class="fa mr-1 fa-check"></span> 1 Project</p>
					<p><span class="fa mr-1 fa-check"></span> 10gb storage</p>
					<p><span class="fa mr-1 fa-check"></span> Email Support</p>
					<p class="mb-3"><span class="fa mr-1 fa-check"></span> No Admin Access</p>
					<a href="#">Signup </a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<div class="pricing-grid1">
					<h3>Standard</h3>
					<h4>12$</h4>
					<p class="mt-3"><span class="fa mr-1 fa-check"></span> 3 Users</p>
					<p><span class="fa mr-1 fa-check"></span> 3 Project</p>
					<p><span class="fa mr-1 fa-check"></span> 15gb storage</p>
					<p><span class="fa mr-1 fa-check"></span> Email Support</p>
					<p class="mb-3"><span class="fa mr-1 fa-check"></span> No Admin Access</p>
					<a href="#">Signup </a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="pricing-grid1">
					<h3>Business</h3>
					<h4>15$</h4>
					<p class="mt-3"><span class="fa mr-1 fa-check"></span> 5 Users</p>
					<p><span class="fa mr-1 fa-check"></span> 5 Project</p>
					<p><span class="fa mr-1 fa-check"></span> 20gb storage</p>
					<p><span class="fa mr-1 fa-check"></span> Email Support</p>
					<p class="mb-3"><span class="fa mr-1 fa-check"></span> Admin Access</p>
					<a href="#">Signup </a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="pricing-grid1">
					<h3>Premium</h3>
					<h4>20$</h4>
					<p class="mt-3"><span class="fa mr-1 fa-check"></span> 10 Users</p>
					<p><span class="fa mr-1 fa-check"></span> 10 Project</p>
					<p><span class="fa mr-1 fa-check"></span> 50gb storage</p>
					<p><span class="fa mr-1 fa-check"></span> Email Support</p>
					<p class="mb-3"><span class="fa mr-1 fa-check"></span> Admin Access</p>
					<a href="#">Signup </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //pricing plans -->

<!-- testimonials -->
<section class="testimonials banner-bottom-agile-w3ls" id="testimonials">
	<div class="layer py-5">
		<div class="container py-md-3">
			<h3 class="heading text-capitalize text-white mb-lg-5 mb-4">Testimonials</h3>
			<div class="row">
				<div class="feedback-info col-md-6">
					<div class="feedback-top">
						<span class="fa fa-quote-right"></span>
						<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec tellus.
							Nam pharetra ipsum ligula, a finibus.</p>
						<div class="clearfix"></div>
					</div>
					<div class="feedback-grids">
						<div class="feedback-img">
							<img src="images/test1.jpg" class="img-fluid" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5>Mary Jane</h5>
							<p class="font-italic">- Aug 24, 2018</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="feedback-info col-md-6 mt-md-0 mt-5">
					<div class="feedback-top">
						<span class="fa fa-quote-right"></span>
						<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec tellus.
							Nam pharetra ipsum ligula, a finibus.</p>
						<div class="clearfix"></div>
					</div>
					<div class="feedback-grids">
						<div class="feedback-img">
							<img src="images/test2.jpg" class="img-fluid" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5>Peter Guptill</h5>
							<p class="font-italic">Aug 24, 2018</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="feedback-info col-md-6 mt-5">
					<div class="feedback-top">
						<span class="fa fa-quote-right"></span>
						<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec tellus.
							Nam pharetra ipsum ligula, a finibus.</p>
						<div class="clearfix"></div>
					</div>
					<div class="feedback-grids">
						<div class="feedback-img">
							<img src="images/test1.jpg" class="img-fluid" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5>Steven Wilson</h5>
							<p class="font-italic">Aug 24, 2018</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="feedback-info col-md-6 mt-5">
					<div class="feedback-top">
						<span class="fa fa-quote-right"></span>
						<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. blandit nec tellus.
							Nam pharetra ipsum ligula, a finibus.</p>
						<div class="clearfix"></div>
					</div>
					<div class="feedback-grids">
						<div class="feedback-img">
							<img src="images/test2.jpg" class="img-fluid" alt="" />
						</div>
						<div class="feedback-img-info">
							<h5>Mary Jane</h5>
							<p class="font-italic">Aug 24, 2018</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //testimonials -->

<!-- Contact -->
<section class="contact py-5" id="contact">
	<div class="container py-sm-3">
		<h1 class="heading text-capitalize mb-lg-5 mb-4">Contact Us</h1>
		<form action="#" method="post">
			<div class="row main-agile-sectns">
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="text" name="Name" placeholder="Enter Your Name" required="">
				</div>
				<div class="col-md-6 agileits-btm-spc form-text2">
					<input type="text" name="Phone no" placeholder="Enter Phone Number" required="">
				</div>
			</div>
			<div class="row main-agile-sectns">
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="text" name="subject" placeholder="Enter Subject" required="">
				</div>

				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="email" name="email" placeholder="Enter Your Email" required="">
				</div>
			</div>
			<div class="main-agile-sectns ">
				<div class="agileits-btm-spc form-text2 p-0">
					<textarea placeholder="Enter Your Message Here"></textarea>
				</div>
			</div>
			<button type="submit" class="btn">Submit</button>
		</form>
	</div>
</section>
<!-- //Contact -->

<!-- newsletter -->
<section class="newsletter py-5" id="subscribe">
		<div class="container py-md-3">
			<div class="row">
				<div class="col-lg-6">
					<h4 class="newsletter">Sign up for Our newsletter</h4>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-3">
					<form action="#" method="post" class="">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button type="submit" class="btn">Submit</button>
						<div class="clearfix"> </div>
						<span>By signing up to our website, you agree to the <a href="#">terms and conditions.</a></span>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //newsletter -->

<!-- footer -->
<footer class="py-5">
	<div class="container">
		<div class="row footer_grids">
			<div class="col-lg-4 footer_left">
				<h2><a class="footer-logo" href="index.html">
				<span class="fa mr-1 fa-copyright"></span>Wee-Document</a></h2>
				<p>Nulla felis tortor, rutrum eget feugiat non, blandit nec tellus. Nam pharetra ipsum ligula volutpat, a finibus.
				Fusce males uada sollicitudin venenatis. </p>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-5 mt-4 footer_middle">
				<h3 class="mb-sm-4 mb-3">Twitter Feed</h3>
				<ul>
					<li class="mb-2">Ut aut reiciendis voluptatibus Nam pharet <a href="#">http://example.com</a> alias.
						<span>- <span class="fa mr-1 fa-twitter" aria-hidden="true"></span> 02 days ago</span></li>
					<li>Itaque earum rerum hic tenetur a sapiente <a href="#">http://example.com</a>
					<span>- <span class="fa mr-1 fa-twitter" aria-hidden="true"></span> 03 days ago</span></li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-5 mt-4 footer_right">
				<h3 class="mb-sm-4 mb-3">Contact Info</h3>
				<p> <span class="fa mr-1 fa-map-marker"></span> No.27 - 59436 Street Floor, Newyork. </p>
				<p> <span class="fa mr-1 fa-envelope"></span> <a href="mailto:info@example.com">info@example.com</a> </p>
				<p> <span class="fa mr-1 fa-phone"></span> +01(234) 567 8900 </p>
				<p> <span class="fa mr-1 fa-clock-o"></span> Everyday 9:00–18:00</p>
			</div>
		</div>
		<!-- To Top -->
		<div class="top-icon mt-2 text-center">
			<a href="#home" class="move-top text-center"><span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a>
		</div>
		<!-- //To Top -->
	</div>
</footer>
		<div class="copyright text-center py-3">
			<p>© 2018 CWee-Document. All Rights Reserved |  </p>
		</div>
<!-- //footer -->

</body>
</html>
