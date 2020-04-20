<?php
session_start();
?>
<!DOCTYPE html>

<html class="no-js">
<head>
	<title>Taysh NAL9AF</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../Principale_adminn/image/logo.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>

<body>

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>


	

	<div id="canvas">
		<div id="box_wrapper">

			<header class="page_header header_white toggler_xs_right section_padding_20">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo">
								<a href="index.php" class="logo top_logo">
									<img src="logo1.png" style="width: 25%; height: 15%;">
				
								</a>
							</div>

							<div class="header_mainmenu display_table_cell text-center">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active">
											<a href="index-2.php">Home</a>
											<ul>
												<li>
													<a href="index.php">Clients</a>
												</li>
												<li>
													<a href="index_static.php">Companies</a>
												</li>
												<li>
													<a href="services.php#">Services</a>
												</li>
												<li>
													<a href="">Rewards</a>
												</li>
											</ul>
										</li>

										<li>
											<a href="about.php">Clients</a>
											<ul>
												<!-- features -->
												<li>
													<a href="shortcodes_teasers.php">Shortcodes &amp; Widgets</a>
													<ul>
														<li>
															<a href="shortcodes_typography.php">Typography</a>
														</li>
														<li>
															<a href="shortcodes_buttons.php">Buttons</a>
														</li>
													</ul>
												</li>
												<!-- eof features -->

									</ul>
								</li>
									<li>
										<a href="Services.php">Services</a>
										<ul>
											<!-- features -->
											<li>
												<a href="shortcodes_teasers.php">Shortcodes &amp; Widgets</a>
												<ul>
													<li>
														<a href="shortcodes_typography.php">Typography</a>
													</li>
													<li>
														<a href="shortcodes_buttons.php">Buttons</a>
													</li>
												</ul>
											</li>
											<!-- eof features -->

								</ul>
							</li>
								<li>
									<a href="about.php">Rewards</a>
									<ul>
									
										<li>
											<a href="shortcodes_teasers.php">Shortcodes &amp; Widgets</a>
											<ul>
												<li>
													<a href="shortcodes_typography.php">Typography</a>
												</li>
												<li>
													<a href="shortcodes_buttons.php">Buttons</a>
												</li>
											</ul>
										</li>
								

							</ul>
						</li>
						<li>



							
						</li>
						<?php 
									if(!empty($_SESSION))
									echo "<li style=\"color:red;\">Tel :".$_SESSION["tel"]." : ".$_SESSION['score']." Coins</li>";?>
									</ul>
								
	
								 
								</nav>
							
								
							</div>
							<button type='button' class="btn btn-success" data-toggle="modal" data-target="#pop">Log In</button>
							<div class="header_right_buttons display_table_cell text-right hidden-xs">
							
												 
							<div class="header_right_buttons display_table_cell text-right hidden-xs">
								<div class="darklinks">
									<a href="#" class="social-icon border-icon rounded-icon soc-facebook"></a>
									<a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
									<a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
									<a href="lougout.php"class="social-icon border-icon rounded-icon fas fa-backspace"><i class="fas fa-backspace border-icon rounded-icon">Lougout</i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
	
			<div class="modal" id="pop">
				<div class="modal-dialog">
				  <div class="modal-content">
					<!-- header -->
					<div class="modal-header">
					  <h3 class="modal-title">Login Form</h3>
					</div>
					<!-- body -->
					<div class="modal-header">
					  <form role="form" method="post" action="conect.php">
						<div class="form-group">
						  <input type="email" name="logi" class="form-control" placeholder="Email"/>
						  <input type="password" name="pwd" class="form-control" placeholder="Password"/>
						</div>
					  
					</div>
					<!-- footer -->
					<div class="modal-footer">
					<button class="btn btn-primary btn-block">Log In</button>
				      <i><a data-toggle="modal" data-target="#sinup">  SignUp</a></i>
					</div>
					</form>
				  </div>
				</div>
			  </div>
		  </div>
		  <div class="modal" id="sinup">
				<div class="modal-dialog">
				  <div class="modal-content">
					<!-- header -->
					<div class="modal-header">
					  <h3 class="modal-title">Signup Form</h3>
					</div>
					<!-- body -->
					<div class="modal-header">
					  <form role="form" method="post" action="sing.php">
						<div class="form-group">
						<input type="Number" name="cin" class="form-control" placeholder="CIN"/>
						<input type="text" name="name" class="form-control" placeholder="Name"/>
						<input type="date" name="date" class="form-control" placeholder="Date"/>
						<input type="Number" name="tel" class="form-control" placeholder="Mobile"/>
						  <input type="email" name="logi" class="form-control" placeholder="Login"/>
						  <input type="password" name="pwd" class="form-control" placeholder="Password"/>
						</div>
					</div>
					<!-- footer -->
					<div class="modal-footer">
					  <button onclick="effect()" class="btn btn-primary btn-block">Log In</button>
					</div>
					</form>
				  </div>
				</div>
			  </div>
		  </div>
			<section class="ds section_padding_top_15 section_padding_bottom_15 table_section section_bottom_overlap">
				<div class="container-fluid">
					<center>
					<div class="row" style="padding-left:32%;">
						<div class="col-md-9 col-sm-8 text-center text-sm-left">
							<div class="media small-teaser teaser inline-block">
								<div class="media-left media-middle">
									<div class="teaser_icon light_bg_color big_bg highlight2 round size_xsmall">
										<i class="fa fa-phone"></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<span class="fontsize_20 medium grey">+21626566194</span>
									<br>
									<span class="small-text small-spacing">El Alia Bizerte Tunisia</span>
								</div>
							</div>
						
						</div>
						
					</div>
				</center>
				</div>
			</section>

			<section class="intro_section page_mainslider ds">
				<div class="flexslider" data-dots="false">
					<ul class="slides">

						<li>
							<img src="images/slide01.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight">
													<h3 class="highlight">
													<img src="logo11.png" alt="">
													</h3>
												</div>
												<br><br><br>
												<div class="intro-layer" data-animation="fadeInRight">
													<p>We make ur Garbage a cool stuff</p>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide02.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight">
													<img src="logo12.png" alt="">
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<h3 class="highlight text-uppercase bottommargin">
														Keep It Clean 
													</h3>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
												
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide03.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight">
													<img src="logo13.png" alt="">
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
											
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

					</ul>
				</div>
				<!-- eof flexslider -->

				<div class="scroll_button_wrap">
					<a href="#about" class="scroll_button">
						<span class="sr-only">scroll down</span>
					</a>
				</div>
			</section>

			<section id="about" class="ls section_padding_top_100 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
							<h2 class="section_header with_icon">
								Welcome to Taych Nel9ef
							</h2>
							<p class="small-text grey">More About Us</p>
							<p class="bottommargin_30">
								Taych Nel9ef make ur Garbage a cool	stuff			</p>
						
						</div>
					</div>
					<br><br><br>
						<?php
                           try {
							$bdd = new PDO('mysql:host=localhost;dbname=coding;charset=utf8', 'root', '');
						   } catch (Exception $e) {
							die('Erreur : ' . $e->getMessage());
						   }
						   $i=0;
						   $corr = $bdd->query('SELECT *FROM even');
						   while($data=$corr->fetch()) {
							$a =$data["nom_event"];
							$cat=$data["cat_event"];
							$date=$data["date"];
							if ($i%2==0) {
								echo "<div class=\"col-md-4\">
							<div class=\"teaser with_border rounded text-center\">
								<div class=\"teaser_icon main_bg_color3 round size_small offset_icon\">
									<i class=\"fa fa-calendar\"></i>
								</div>
								<h4 class=\"poppins hover-color3\">
									<a href=\"#\">$a</a>
								</h4>
								<p>
						We present you the $a event in $date ,which will be a $cat event.
					</p>
							</div>
						</div>";
							}
							else{
							echo "<div class=\"col-md-4\">
							<div class=\"teaser with_border rounded text-center\">
								<div class=\"teaser_icon main_bg_color3 round size_small offset_icon\">
									<i class=\"fa fa-inbox\"></i>
								</div>
								<h4 class=\"poppins hover-color3\">
								<a href=\"#\">$a</a>
								</h4>
								<p>
						We present you the $a event in $date ,which will be a $cat event.
					</p>
							</div>
						</div>";
						   }$i++;
						}
						?>
					
						</div>
						
						</div>
					</div>
				</div>
			</section>

			

			

			<footer class="page_footer ds section_padding_top_100 section_padding_bottom_65 columns_padding_25">
				<div class="container">
					<div class="row">

						<div class="col-md-4 col-sm-12 text-center">
							<div class="widget">
								<a href="index.php" class="logo bg_logo bottommargin_25">
									<img src="logo.png" alt="">
									<span class="logo_text">
										
										<span class="small-text">Recycling</span>
									</span>
								</a>
								<p>
						Family-owned company from El Alia proudly serving individuals and businesses in Tunisia.
					</p>
								<div class="line-height-thin">
								
									<br>
									<div class="media small-teaser inline-block margin_0">
										<div class="media-left media-middle">
											<i class="fa fa-phone highlight2" aria-hidden="true"></i>
										</div>
										<div class="media-body media-middle grey">
										+21626566194
										</div>
									</div>
									<br>
									<div class="media small-teaser inline-block margin_0">
										<div class="media-left media-middle">
											<i class="fa fa-map-marker highlight2" aria-hidden="true"></i>
										</div>
										<div class="media-body media-middle highlightlinks">
											<a href="#">TayeshNel9esh@support.com</a>
										</div>
									</div>
								</div>

								<div class="darklinks topmargin_20">
									<a href="#" class="social-icon border-icon rounded-icon soc-facebook"></a>
									<a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
									<a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 text-center">
							<div class="widget widget_contact topmargin_10">
								<h3>Contact Form</h3>
								<form class="contact-form topmargin_45" method="post" action="cnt.php">
									<p class="contact-form-name">
							<label for="footer-name">Name </label>
							<input type="text" size="30" value="" name="name" id="footer-name" class="form-control text-center" placeholder="Full Name">
						</p>
									<p class="contact-form-email">
							<label for="footer-email">Email </label>
							<input type="email"  size="30" value="" name="email" id="footer-email" class="form-control text-center" placeholder="Email Address">
						</p>
									<p class="contact-form-message">
							<label for="footer-message">Message</label>
							<textarea  rows="3" cols="45" name="message" class="form-control text-center" placeholder="Message"></textarea>
						</p>
									<p class="footer_contact-form-submit topmargin_30">
							<button type="submit" class="theme_button color1 wide_button">Send Message</button>
						</p>
								</form>
							</div>
						</div>

					

								</ul>
							</div>
						</div>

					</div>
				</div>
			</footer>

			<section class="ls page_copyright section_padding_15">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="small-text small-spacing grey">&copy; Copyright 2019 All Rights Reserved</p>
						</div>
					</div>
				</div>
			</section>

		</div>
	
	</div>
	
	<script>
	function effect() {
		swal({
    title: "Good job!",
  text: "You are Successfully added!",
  icon: "success",
  button: "OK!",
});	
	}
	</script>
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>

	</body>


</html>