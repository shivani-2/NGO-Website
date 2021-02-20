<?php
    session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Donation</title>
    <!-- bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

    <!-- Css stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="project.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap"
        rel="stylesheet">
</head>

<body>

    <section id="title">
        <div class="container-fluid">
            <!-- Nav Bar -->
            <div class="container-fluid">
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #70ADB5">
                    <a class="navbar-brand" href="index.php">
                        <img src="logo.svg" width="45" height="45" class="d-inline-block align-top" alt="" loading="lazy">Nurturing
                        Lives</a>
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
                                    <a class="dropdown-item" href="aboutUs.php">Our Aim</a>
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



            <!-- Thank You -->
            <section id="ThankYou">
                <h3>Payment Successful!</h3>
                <h1> Thank you for donating!</h1>
            </section>


        </div>
        <!-- Footer -->
        <footer id="footer">
            <a href="https://twitter.com/"><i class="foot fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/"><i class="foot fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/"><i class="foot fab fa-instagram"></i></a>
            <i class="foot fas fa-envelope" onclick="copyToClipboard('contact@nurturinglives.org'),alert('contact info copied to clipboard')"></i>
            <i class="foot fas fa-phone-alt" onclick="copyToClipboard('9637512841'),alert('contact info copied to clipboard')"></i>
            <p class="p-foot">©️ Copyright 2020 Nurturing Lives NGO</p>
        </footer>
        <!-- End of Footer -->
    </section>
    <!-- JS Scripts -->
    <script type="text/javascript" src="project.js"></script>
</body>

</html>