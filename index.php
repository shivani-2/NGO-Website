<?php
    session_start();
    $host = "localhost:3307";
    $username = "root";
    $pass = "";
    $dbname = "ngo";
    $conn = mysqli_connect($host,$username,$pass,$dbname);
    if(!$conn)
    {
      echo "Error". mysqli_connect_error();
    }
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Nurturing Lives</title>

  <!-- bootstrap scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <!-- Css stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">


<body>

  <section id="title">
    <!-- Title -->
    <div class="container1">
      <img src="images/ngo.jpg" alt="Snow" style="width:100%;">
        <div class="centered  big-heading">Give back to the society by volunteering or donating.</div> 
    </div>
    <div class="container-fluid">


    <!-- Nav Bar -->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #70ADB5">
            <a class="navbar-brand" href="index.php">
                <img src="logo.svg" width="45" height="45" class="d-inline-block align-top" alt="events.php"
                    loading="lazy">Nurturing Lives</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
                        {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="user_dashboard.php">Profile</a>
                        </li>
                        <?php } else 
                        {
                        ?>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <?php } ?>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Know Us</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="aboutus.php">Our Aim</a>
                            <a class="dropdown-item" href="events.php">Events</a>
                            <a class="dropdown-item" href="chapter.php">Chapters</a>
                            <a class="dropdown-item" href="volunteer.php">Volunteer Now!</a>
                            </div>
                        </li>
                        <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
                       {
                        ?>
              <li class="nav-item">
                <a class="nav-link" id="signout" href="logout.php">Sign Out</a>
              </li>
            <?php }else{ ?>
              <li class="nav-item">
                <a class="nav-link" id="signup" href="Login.php">Sign Up/Login</a>
              </li>
            <?php } ?>
              
              <li class="nav-item">
                <a class="nav-link" id="donate" href="donation.php">DONATE!</a>
              </li>
                        
                        
                  
                </ul>
            </div>
        </nav>
    </div>
  </div>
  
    <!-- End of Navbar
    </div>
  </section>

  <!-- Features -->
  <section id="features">
    <div class="row">
      <div class="col-lg-4 col-md-12 feature-box">
        <i class="fas fa-check-circle fa-3x fa-img"></i>
        <h3 class="feat">CSR Approved.</h3>
        <p class="fa-p">Goverment approved NGO.</p>
      </div>
      <div class="col-lg-4 col-md-12 feature-box">
        <i class="fas fa-peace fa-3x fa-img"></i>
        <h3 class="feat">Trustworthy</h3>
        <p class="fa-p">A non profit organization since 2014.</p>
      </div>
      <div class="col-lg-4 col-md-12 feature-box">
        <i class="fas fa-heart fa-3x fa-img"></i>
        <h3 class="feat" style="color:#132743;">Donate</h3>
        <p class="fa-p">Donate money, food, stationary, books and clothes.</p>
      </div>
    </div>
  </section>

  <!-- Vision and Mission -->
  <section id="vision">
    <div class="">
      <h2 class="big-heading">Vision:</h2>
      <p class="vision-text">
        To help build a more influential, equal and socially conscious society.
      </p>
      <h2 class="big-heading">Mission:</h2>
      <p class="vision-text">
        Nurturing Lives drives social change by fostering an environment where young adults & children learn, lead and thrive.
      </p>
      <a type="button" class="btn btn-outline-light btn-lg download-button" href="aboutus.php">Learn More!</i></a>
    </div>
  </section>

  <!-- About Us Link -->
  <section id="AboutArea">
    <div class="row">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="about_img">
            <img src="images/volunteer.png" class="img-fluid" alt="VOLUNTEERS">
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="about_content">
            <h2 class="about_heading">
              We are a nonprofit team <br>
              and we work worldwide
            </h2>
            <p class="vision-text">
              Nurturing Lives promotes the development and well-being of everyone
              so that they may individually and collectively reach their fullest potential.
            </p>
            <p class="vision-text">
              Our team works hard to find ways to create a level playing field for
              children with intellectual and developmental challenges, so that they
              too, can play a meaningful role in building tomorrow’s world.
            </p>
            <a type="button" class="btn btn-outline-success btn-md download-button" href="chapter.php">Learn more!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- World Map -->
  <section id="wmap">
    <h3 class="big-heading">We are located all around the world! <i class="fas fa-globe-asia"></i></h3>
        <iframe
            src="https://www.google.com/maps/d/u/0/embed?mid=1SjBur8dKE49HzahGcMhkZU8kw3aQJnYt"
            width="600" height="300px" frameborder="0" style="border:0" title="worldmap"></iframe>
  </section>

  <!-- Count -->
  <section id="count">
    <div class="row">
      <div class="col-lg-3 col-md-12">
        <i class="fas fa-hands-helping fa-img fa-4x"></i>
        <h1 class="count-text">
            <?php 
                $query = "SELECT count(distinct user_id) AS numbers_of_volunteer FROM volunteers";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['numbers_of_volunteer'];
              ?>
      </h1>
        <p class="count-desc">VOLUNTEERS ENGAGED THIS YEAR</p>
      </div>
      <div class="col-lg-3 col-md-12">
        <i class="fas fa-globe-asia fa-img fa-4x"></i>
        <h1 class="count-text">11</h1>
        <p class="count-desc">CHAPTERS ACROSS THE WORLD</p>
      </div>
      <div class="col-lg-3 col-md-12">
        <i class="far fa-calendar-alt fa-img fa-4x"></i>
        <h1 class="count-text">6</h1>
        <p class="count-desc">YEARS OF SERVICE</p>
      </div>
      <div class="col-lg-3 col-md-12">
        <i class="fas fa-rupee-sign fa-img fa-4x"></i>
        <h1 class="count-text">
            <?php 
                $query = "SELECT sum(total_amount) AS total_donation FROM donation_amount";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['total_donation'];
              ?> Rs
        </h1>
        <p class="count-desc">FUNDS RAISED THIS YEAR</p>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials">
    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h3 class="testimonial-text">Working with Nurturing Lives, I have discovered the leader side I had always possessed. I grew from a shy girl to being a woman who supervised a project alone for 1.5 years without any other support. I have
            developed a lot and learnt a lot from staying here.</h3>
          <img class="testimonial-img" src="https://images.unsplash.com/photo-1485893086445-ed75865251e0?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDZ8fGdpcmxzfGVufDB8MnwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="dog-profile">
          <em>Amelia Jane, Dublin</em></em>
        </div>
        <div class="carousel-item">
          <h3 class="testimonial-text">Everyday was a learning experience by meeting different people at office for discussion about new projects and enhancing existing education programmes.</h3>
          <img class="testimonial-img" src="images/pict33.jpg" alt="lady-profile">
          <em>Kriti Sharma, Mumbai</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>


  <!-- start of arrow -->
  <i class="fas fa-hand-point-up fa-3x" id="up-arrow" onclick="topFunction()" ></i>
    </div>
    <!-- End of landing page Page -->


  <!-- Footer -->

  <footer id="footer">
    <a href="https://twitter.com/"><i class="foot fab fa-twitter"></i></a>
    <a href="https://www.facebook.com/"><i class="foot fab fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/"><i class="foot fab fa-instagram"></i></a>
    <i class="foot fas fa-envelope" onclick="copyToClipboard('contact@nurturinglives.org'),alert('contact info copied to clipboard')"></i>
    <i class="foot fas fa-phone-alt" onclick="copyToClipboard('9637512841'),alert('contact info copied to clipboard')"></i>
    <p class="p-foot">© Copyright 2020 Nurturing Lives NGO</p>
  </footer>
  <!-- End of Footer -->

  <!-- JS Scripts -->
    <script type="text/javascript" src="project.js"></script>
    <script src="index.js" charset="utf-8"></script>

</body>

</html>
