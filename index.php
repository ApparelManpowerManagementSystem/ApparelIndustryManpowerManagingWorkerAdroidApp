<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A&S Manpower Solutions</title>

    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
      
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">A & S Manpower Solutions</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="./pages/about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/contact.php">Contact</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="./pages/login.php">Login</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" data-target="#signup_modal" data-toggle="modal">Signup</a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('./img/banner/banner_image.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><font color="#E5E8E8">Discover Your Career Path</font></h3>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('./img/banner/banner_image2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3><font color="#E5E8E8">Powering Your Success is Humanly Possible</font></h3>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('./img/banner/banner_image3.jpg')">
            <div class="carousel-caption d-none d-md-block">
               <h3><font color="#E5E8E8">Career Resourse</font></h3>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Welcome to A & S Manpower Solutions</h1>

      <!-- New jobs Section -->
      <div class="row">
        
            <?php
                require_once('./db_config/config.php');
                require_once('./pages/query_boxes/supplier_jobs_for_visitors.php');
            ?>
          
		</div>
      <!-- /.row -->

      <!-- Top workers Section -->
      <h2>Our Expert Members</h2>

      <div class="row">
        <?php
            require_once('./db_config/config.php');
            require_once('./pages/query_boxes/worker_rating.php');
        ?>
        
      </div>
      <!-- /.row -->

        
        <!--sign up modal-->
        <div>
            <div class="modal fade" id="signup_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Register</h4>
                    </div>
                    <div class="modal-body">
                        <!--register form-->
                        <form action="./pages/query_boxes/registerUser.php" autocomplete="on" method="post" enctype='multipart/form-data'>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Enter mobile phone number ex: 0766897330" pattern="[0]{1}[7]{1}[0-9]{8}" name="mobile" minlength="10" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Type a password" name="pwd1" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm password" name="pwd2" required>
                            </div>
                            <div class="form-group">
                                <select name="role" id="role" class="form-control">
                                    <option value="3">As a Worker</option>
                                    <option value="1">As a Company</option>
                                </select>
                            </div>
                             <div class="form-group">
                                 
                                <label class="btn btn-primary" for="upload-photo" style="width:100%;cursor: pointer;display: inline-block;" type="password">Upload your image</label> 
                                <input style="width:60%;display: none" type="file" id="upload-photo" name="file" style="opacity: 0;position: absolute;z-index: -1">
                                
                            </div>
                            
                            <div style="text-align:right" class="form-group" >
                                <input type="submit" class="form-control btn btn-success" value="SignUp" name="submitRegister" required style="width:25%">
                            </div>
                        </form>
                        <!--end register form-->
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <!--end sign up modal-->
        
      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Modern Business Features</h2>
          <p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; A & S Mnapower Solutions 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
