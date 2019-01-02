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
            
            <!-- JS-->
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
                            <li class=""><a href=""><i class="fa fa-user"></i>User</a>
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
			<section class="banner-area relative" id="home" >
				<div class="overlay overlay-bg" style="background-color:white"></div>
				<div class="container" style="height:500px">
					<div class="row fullscreen d-flex align-items-center justify-content-center" style="background-color:white">
						<div class="banner-content col-lg-12" style="padding:0;">
								<h1 style="text-align:left">We have 1500+ Manpower jobs</h1>
							<form action="./query_boxes/supplier_jobs_view_by_search.php" class="serach-form-area">
								<div class="row justify-content-center form-wrap" style="background-color: white;border: 0">
									<div class="col-lg-4 form-cols">
										<input id="myInput" type="text" class="form-control" name="search" placeholder="what are you looking for?">
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects">
											<select>
												<option value="1">Select area</option>
												<option value="2">Homagama</option>
												<option value="3">Maharagama</option>
												<option value="4">Ranala</option>
												<option value="5">Pannipitiya</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2">
											<select>
												<option value="1">All Category</option>
												<option value="2">CPI</option>
												<option value="3">Shade Segrigation</option>
												<option value="4">Cutting</option>
												<option value="5">Ironing</option>
											</select>
										</div>										
									</div>
									<div class="col-lg-2 form-cols">
									    <input type="submit" class="btn btn-primary" value="Search">
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
							<ul class="nav nav-pills">
                               
								<li class="btn btn-primary" style="margin-right:2px"><a onclick="hide_div('normal');hide_div('full_jobs');hide_div('part_jobs');show_div('recent_jobs');">Recent</a></li>
								<li class="btn btn-primary" style="margin-right:2px"><a onclick="hide_div('normal');hide_div('part_jobs');hide_div('recent_jobs');show_div('full_jobs');">Full Time</a></li>
								<li class="btn btn-primary"><a onclick="hide_div('normal');hide_div('full_jobs');hide_div('recent_jobs');show_div('part_jobs');">part Time</a></li>
							</ul>
                            
                            <?php
                                    require_once('../db_config/config.php');
                                    require_once('./query_boxes/worker_accepted_job.php');
                            ?>
                            
                            
                           
                                
								
                                <div id="normal" style="margin-top:5px">
                                    <h2>All Jobs</h2>
                                    <?php
                                        require_once('../db_config/config.php');
                                        require_once('./query_boxes/supplier_jobs_accept.php');
                                    ?>
                                </div>
                                <div id="full_jobs" style="display:none;margin-top:5px">
                                    <h2>Full Time Jobs</h2>
                                    <?php
                                        require_once('../db_config/config.php');
                                       require_once('./query_boxes/supplier_jobs_accept_full.php');
                                    ?>
                                </div>
                                <div id="part_jobs" style="display:none;margin-top:5px">
                                    <h2>Part Time Jobs</h2>
                                    <?php
                                        require_once('../db_config/config.php');
                                       require_once('./query_boxes/supplier_jobs_accept_part.php');
                                    ?>
                                </div>
                                <div id="recent_jobs" style="display:none;margin-top:5px">
                                    <h2>Recent Jobs</h2>
                                    <?php
                                        require_once('../db_config/config.php');
                                        require_once('./query_boxes/supplier_jobs_accept_recent.php');
                                    ?>
                                </div>

						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Jobs by Location</h4>
								<ul>
									<?php
                                        require_once('../db_config/config.php');
                                        require_once('./query_boxes/supplier_jobs_view_by_location.php');
                                    
                                    ?>
								</ul>
							</div>

							<div class="single-slidebar">
								<h4>Top rated job posts</h4>
								<div class="active-relatedjob-carusel">					<?php
                                        require_once('../db_config/config.php');
                                        require_once('./query_boxes/supplier_jobs_view_by_rating.php');
                                    
                                    ?>											
								</div>
							</div>							

							<div class="single-slidebar">
								<h4>Jobs by Category</h4>
								<ul>
                                    
                                    <?php
                                        require_once('../db_config/config.php');
                                        require_once('./query_boxes/supplier_jobs_view_by_type.php');
                                    
                                    ?>
                                    
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


