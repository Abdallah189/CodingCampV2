<!DOCTYPE html>
<?php
session_start();
?>
<html class="no-js">



<head>
	<title>Taych nel9ef</title>
	<meta charset="utf-8">

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="../Principale_adminn/image/logo.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	

</head>

<body>
	
	
<div class="preloader">
		<div class="preloader_image"></div>
	</div>

			<header class="page_header header_white toggler_xs_right section_padding_20">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell">
								<a href="index.php" class="logo top_logo">
									<img src="logo1.png" style="width: 200px; height: auto;">

								</a>
							</div>
							<div class="header_mainmenu display_table_cell text-center">
									<!-- main nav start -->
									<nav class="mainmenu_wrapper">
										<ul class="mainmenu nav sf-menu">
											<li >
												<a href="index.php">Home</a>
												<ul>
													<li>
														<a href="clients.php">Clients</a>
													</li>
													<li>
														<a href="companies.php">Companies</a>
													</li>
													<li class="active">
														<a href="services.php">Services</a>
													</li>
													<li>
														<a href="rewards.php">Rewards</a>
													</li>
													
												</ul>
											</li>
	
											<li>
												<a href="Clients.php">Clients</a>
												
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
									</li><li>
											<a href="Companies.php">Companies</a>
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
											<a href="services.php">Services</a>
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
									<li class="active">
										<a href="rewards.php">Rewards</a>
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
							<?php	if(!empty($_SESSION))
									echo "<li style=\"color:red;\">Tel :".$_SESSION["tel"]." : ".$_SESSION['score']." Coins</li>";?>
							</ul>
									
							
												
												
												
												
									
									
													
												
									</nav>
								<!-- eof main nav -->
								<!-- header toggler -->
								<span class="toggle_menu">
									<span></span>
								</span>
							</div>

							<div class="header_right_buttons display_table_cell text-right hidden-xs">
								<div class="darklinks">
									<a href="#" class="social-icon border-icon rounded-icon soc-facebook"></a>
									<a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
									<a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<section class="page_breadcrumbs ds parallax section_padding_top_65 section_padding_bottom_65">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h2 class="highlight">Rewards</h2>
								<ol class="breadcrumb darklinks">
									<li>
										<a href="index.php">
								Home
							</a>
									</li>
									<li>
										<a href="#">Pages</a>
									</li>
									<li href="client.php"><a href="#">Clients</a></li>
									<li href="Companies.php"><a href="#">Companies</a></li>
									<li href="services.php"><a href="#">Services</a></li>
									<li href="services.php"class="active"><a href="#">Services</a></li>
								</ol>
							</div>
						</div>
					</div>
				</section>

			<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">

								<div class="isotope-item col-lg-6 col-md-6 col-sm-12 category3">
									<div class="side-item content-padding with_background rounded overflow-hidden">
										<div class="row">
											<div class="col-md-6">
												<div class="item-media">
													<img src="DISCOUNT.png" alt="">
													<div class="media-links">
														<a class="abs-link" title="" href="team-single.php"></a>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="item-content">

													<h4 class="poppins margin_0">
														
														<a href="team-single.php">Discount 40% Zara</a>
													</h4>
													<img src="coins.png"  style="width:10%;height: auto;"alt="">
													<p class="small-text highlight2 bottommargin_10">900 Points</p>
								
								

												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-6 col-md-6 col-sm-12 category3">
									<div class="side-item content-padding with_background rounded overflow-hidden">
										<div class="row">
											<div class="col-md-6">
												<div class="item-media">
													<img src="DISCOUNT.png" alt="">
													<div class="media-links">
														<a class="abs-link" title="" href="team-single.php"></a>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="item-content">

													<h4 class="poppins margin_0">
														<a href="team-single.php">Discount 30% Restaurant Chaneb</a>
													</h4>
													<img src="coins.png"  style="width:10%;height: auto;"alt="">
													<p class="small-text highlight2 bottommargin_10">300 Points</p>
													
													<p>
									Pig sausage turducken, beef drumstick corned beef andouille.
								</p>
								

												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-6 col-md-6 col-sm-12 category3">
									<div class="side-item content-padding with_background rounded overflow-hidden">
										<div class="row">
											<div class="col-md-6">
												<div class="item-media">
													<img src="DISCOUNT.png" alt="">
													<div class="media-links">
														<a class="abs-link" title="" href="team-single.php"></a>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="item-content">

													<h4 class="poppins margin_0">
														<a href="team-single.php">Discount 30% Elect Materials</a>
													</h4>
													<img src="coins.png"  style="width:10%;height: auto;"alt="">
													<p class="small-text highlight2 bottommargin_10">700 Points</p>													<p>
									
									

												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-6 col-md-6 col-sm-12 category3">
									<div class="side-item content-padding with_background rounded overflow-hidden">
										<div class="row">
											<div class="col-md-6">
												<div class="item-media">
													<img src="DISCOUNT.png" alt="">
													<div class="media-links">
														<a class="abs-link" title="" href="team-single.php"></a>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="item-content">

													<h4 class="poppins margin_0">
														<a href="team-single.php">Forfais 3 Mois Adsl 4Mo</a>
													</h4>	<img src="coins.png"  style="width:10%;height: auto;"alt="">
													<p class="small-text highlight2 bottommargin_10">800 Points</p>
									

												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-6 col-md-6 col-sm-12 category3">
									<div class="side-item content-padding with_background rounded overflow-hidden">
										<div class="row">
											<div class="col-md-6">
												<div class="item-media">
													<img src="DISCOUNT.png" alt="">
													<div class="media-links">
														<a class="abs-link" title="" href="team-single.php"></a>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="item-content">

													<h4 class="poppins margin_0">
														<a href="team-single.php">Forfais 1 Mois Adsl 8Mo</a>
													</h4>	<img src="coins.png"  style="width:10%;height: auto;"alt="">
													<p class="small-text highlight2 bottommargin_10">600 Points</p>
								

												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-6 col-md-6 col-sm-12 category3">
									<div class="side-item content-padding with_background rounded overflow-hidden">
										<div class="row">
											<div class="col-md-6">
												<div class="item-media">
													<img src="DISCOUNT.png" alt="">
													<div class="media-links">
														<a class="abs-link" title="" href="team-single.php"></a>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="item-content">

													<h4 class="poppins margin_0">
														<a href="team-single.php">Forfais 2 Mois Adsl 4Mo</a>
													</h4>	<img src="coins.png"  style="width:10%;height: auto;"alt="">
													<p class="small-text highlight2 bottommargin_10">350 Points</p>
									

												</div>
											</div>

										</div>
									</div>
								</div>

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
												<a href="#">TayeshNel9ef@support.com</a>
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
									<form class="contact-form topmargin_45" method="post" action="">
										<p class="contact-form-name">
								<label for="footer-name">Name <span class="required">*</span></label>
								<input type="text" aria-required="true" size="30" value="" name="name" id="footer-name" class="form-control text-center" placeholder="Full Name">
							</p>
										<p class="contact-form-email">
								<label for="footer-email">Email <span class="required">*</span></label>
								<input type="email" aria-required="true" size="30" value="" name="email" id="footer-email" class="form-control text-center" placeholder="Email Address">
							</p>
										<p class="contact-form-message">
								<label for="footer-message">Message</label>
								<textarea aria-required="true" rows="3" cols="45" name="message" id="footer-message" class="form-control text-center" placeholder="Message"></textarea>
							</p>
										<p class="footer_contact-form-submit topmargin_30">
								<button type="submit" id="footer_contact_form_submit" name="contact_submit" class="theme_button color1 wide_button">Send Message</button>
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

			<section class="ls page_copyright section_padding_15">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="small-text small-spacing grey">&copy; Copyright 2017 All Rights Reserved</p>
						</div>
					</div>
				</div>
			</section>

		</div>
	</div>
	

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	

</body>


</html>