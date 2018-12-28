	<?php
        session_start();
    
    ?>
    <!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="#">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Job Listing</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../css/css-worker/linearicons.css">
			<link rel="stylesheet" href="../css/css-worker/font-awesome.min.css">
			<link rel="stylesheet" href="../css/css-worker/bootstrap.css">
			<link rel="stylesheet" href="../css/css-worker/magnific-popup.css">
			<link rel="stylesheet" href="../css/css-worker/nice-select.css">					
			<link rel="stylesheet" href="../css/css-worker/animate.min.css">
			<link rel="stylesheet" href="../css/css-worker/owl.carousel.css">
			<link rel="stylesheet" href="../css/css-worker/main.css">
            
<!--            JS-->
            <script type="text/javascript" src="../js/show_div.js"></script>
		</head>
		<body>

        <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="index.html"><img style="width:20%" src="" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li class="caret"><a href="">User</a>
                                <ul>
                                    <li><a href="">Profile</a></li>
                                    <li><a href="">Leave</a></li>
                                    <li><a href="">Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->



        <!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg" style="background-color:white"></div>
				<div class="container" style="height:400px;">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12" style="padding:0">
								
							<form action="search.html" class="serach-form-area">
								<div class="row justify-content-center form-wrap" style="background-color: white;border: 0">
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" name="search" placeholder="what are you looging for?">
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects">
											<select>
												<option value="1">Select area</option>
												<option value="2">Dhaka</option>
												<option value="3">Rajshahi</option>
												<option value="4">Barishal</option>
												<option value="5">Noakhali</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2">
											<select>
												<option value="1">All Category</option>
												<option value="2">Medical</option>
												<option value="3">Technology</option>
												<option value="4">Goverment</option>
												<option value="5">Development</option>
											</select>
										</div>										
									</div>
									<div class="col-lg-2 form-cols">
									    <button type="button" class="btn btn-primary">Search
									    </button>
									</div>								
								</div>
							</form>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a onclick="hide_div('normal');show_div('recent_jobs');">Recent</a></li>
								<li><a onclick="show_div('full_jobs');">Full Time</a></li>
								<li><a onclick="show_div('part_jobs');">part Time</a></li>
							</ul>
								
                                <div id="normal">
                                    <?php
                                        require_once('../db_config/config.php');
                                        require_once('./query_boxes/supplier_jobs_accept.php');
                                    ?>
                                </div>
                                <div id="full_jobs" style="display:none">
                                    full
                                    <?php
                                        require_once('../db_config/config.php');
                                       require_once('./query_boxes/supplier_jobs_accept_full.php');
                                    ?>
                                </div>
                                <div id="part_jobs" style="display:none">
                                    part
                                    <?php
                                        require_once('../db_config/config.php');
                                       require_once('./query_boxes/supplier_jobs_accept_part.php');
                                    ?>
                                </div>
                                <div id="recent_jobs" style="display:none">
                                    recent
                                    <?php
                                        require_once('../db_config/config.php');
                                        require_once('./query_boxes/supplier_jobs_accept_recent.php');
                                    ?>
                                </div>

						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Jobs by Location</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="category.html"><p>New York</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Park Montana</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Atlanta</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Arizona</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Florida</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Rocky Beach</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Chicago</p><span>17</span></a></li>
								</ul>
							</div>

							<div class="single-slidebar">
								<h4>Top rated job posts</h4>
								<div class="active-relatedjob-carusel">
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>																		
								</div>
							</div>							

							<div class="single-slidebar">
								<h4>Jobs by Category</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
								</ul>
							</div>


						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->




			<script src="../js/js-worker/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="../js/js-worker/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="../js/js-worker/easing.min.js"></script>			
			<script src="../js/js-worker/hoverIntent.js"></script>
			<script src="../js/js-worker/superfish.min.js"></script>	
			<script src="../js/js-worker/jquery.ajaxchimp.min.js"></script>
			<script src="../js/js-worker/jquery.magnific-popup.min.js"></script>	
			<script src="../js/js-worker/owl.carousel.min.js"></script>			
			<script src="../js/js-worker/jquery.sticky.js"></script>
			<script src="../js/js-worker/jquery.nice-select.min.js"></script>			
			<script src="../js/js-worker/parallax.min.js"></script>		
			<script src="../js/js-worker/mail-script.js"></script>	
			<script src="../js/js-worker/main.js"></script>	
		</body>
	</html>



