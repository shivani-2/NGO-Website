<?php
    session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>About Us</title>
  

    <!-- bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Css stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="project.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Nav Bar -->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #70ADB5">
            <a class="navbar-brand" href="index.php">
                <img src="logo.svg" width="45" height="45" class="d-inline-block align-top" alt="" loading="lazy">Nurturing Lives
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Know Us</a>
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
    <!-- End of Navbar -->

    <!-- Page Heading -->
    <div id="js1">
        <div class="big-heading">
            <span style="padding-left: 10%;">About Us </span>
            <label class="switch float-right mr-4 my-3"  >
                <input type="checkbox" onclick="myFunction()">
                <span class="slider round"></span>
            </label>
        </div>
    <!-- End of Page Heading -->

        <!-- About Us -->
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-interval='2000' data-ride="carousel ">
                <div class="carousel-inner">
                    <div class="carousel-item active"> 
                        <img class="d-block w-100" src="https://www.bailinson-oleary.com/wp-content/uploads/2019/08/Child-Support.jpg" alt="First slide" >
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.unsplash.com/photo-1503127241807-fdc42d3acb95?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.unsplash.com/photo-1584568518279-d781778d1481?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Third slide">
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="fas fa-angle-left fa-2x" aria-hidden="true" style="color: #70adb5"></i>    
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fas fa-angle-right fa-2x" aria-hidden="true" style="color: #70adb5"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id = "jumbo">
                Nurturing Lives is one of India’s largest independent and youth volunteer non-profit organisations.
            
                Nurturing lives was founded on August 15, 2006 by a small group of friends with a strong passion to change society today and build a better India for tomorrow. The organisation provides youngsters a platform to serve the society and bridges the gap between the educated and the uneducated.

                Our volunteers educate and mentor children from orphanages, slum and village community centres across the country to give them a better future, which will benefit them as well as our country. The learning experience is mutual – our volunteers gain perspective and the experience to mould themselves into tomorrow’s leaders. 
            </div>

            <div class="container" id="js2" >
                <h3 class="big-heading">Vission Mission Goal</h3>
                <div class="row">
                    <div class="col-md-6" style="text-align: justify;padding-top: 20px">
                        <p><b>Vision</b></p>
                        <p>
                            To help build a more influential, equal and socially conscious society.
                        </p>

                        <p><b>Mission</b></p>
                        <p>
                            Nurturing lives drives social change by fostering an environment where young adults & children learn, lead and thrive.
                        </p>

                        <p><b>Goal</b></p>
                        <p>
                            Nurturing lives drives social change by fostering an environment where young adults & children learn, lead and thrive.
                        </p>
                    </div>
                    <div class="col-md-6 ">
                        <img src="https://miro.medium.com/max/1200/0*UrelGhSwsS3wUASv.png" class="float-right" style="width: 400px;height: 400px;padding-bottom: 20px" >
                    </div>
                </div>
            </div>
        </div>
        <i class="fas fa-hand-point-up fa-3x" id="up-arrow" onclick="topFunction()" ></i>
    </div>
    <!--End of About Us Page -->

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
</body>
</html>
