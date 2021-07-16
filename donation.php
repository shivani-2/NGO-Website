<?php
session_start();
if(!isset($_SESSION['email']))
{
   header('location: Login.php');
}
else
{

    $host = "localhost:3307";
    $username = "root";
    $pass = "";
    $dbname = "ngo";

    $conn = mysqli_connect($host,$username,$pass,$dbname);

    if(!$conn)
    {
     echo "Error". mysqli_connect_error();
    }
    $email = $_SESSION['email'];
    $user = "SELECT * FROM users WHERE email='$email'";
    $result_u = mysqli_query($conn, $user);

    $row = mysqli_fetch_assoc($result_u);
    $userid = $row['user_id'];

    //isset checks if it is
    if (isset($_POST["submit"]))
    {
        $amount = $_POST['total_amount'];
    
        $query_d = "INSERT INTO `donation_amount`(`user_id`,`total_amount`) VALUES ('$userid','$amount')";
        echo $query_d;
      //make query and get result
        $result_d = mysqli_query($conn,$query_d);
        header('location: thankyou.php'); 

        // $_SESSION['email'] = $email;
        // header('location: index.php');
    }   
}
?> -->


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<title>Donation</title>
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

<!--Start of donation page-->

<div id="donation">
    <div class=" container-fluid">
        <h1 class="big-heading">Donation</h1>
        <div id="do-form">
            <form id="DonationForm" class="donate" action="donation.php" method="POST" name="donation">
                <div class=""><label for="selectAmount">Select donation amount (in Rupees)</label>
                    <div id="selectAmount">
                        <button id="amount-1" class="btn btn-outline-primary" onclick="changeValue(this)"
                        type="button" value="100">100</button>
                        <button id="amount-2" class="btn btn-outline-primary" onclick="changeValue(this)"
                        type="button" value="250">250</button>
                        <button id="amount-3" class="btn btn-outline-primary" onclick="changeValue(this)"
                        type="button" value="500">500</button>
                        <button id="amount-4" class="btn btn-outline-primary" onclick="changeValue(this)"
                        type="button" value="45">1000</button>
                    </div>
                </div>
                <div><span class=""><span>
                    <div class="">
                        <div><span>Rs</span><input class="donation_amount" type="text" id="type" name="total_amount"
                            autocomplete="off" value="" placeholder="Or enter amount" value="" /></div>
                        </div>
                    </div>
                    <div>
                        <label for="paymentType">Payment Method</label><span><span>
                            <div class="paymentType undefined_paymentType undefined_paymentType--has-data"><select
                                name="paymentType" class="_1tz7twl" autocomplete="on" id="paymentType">
                                <option value="card">Online</option>
                                <option value="paypal">Offline</option>
                            </select><span class="_17uztdx"></span></div>
                        </span></span>
                    </div>
                    <button id="tst_submit" name='submit' class="donation_submit btn btn-primary" type="submit"
                    aria-label="Submit" href="thankyou.php">Submit</button>
                </form>
            </div>
        </div>
        <!--end of donation page-->
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
        <script>
            function changeValue(o) {
                document.getElementById('type').value = o.innerHTML;
            }
        </script>

    </body>

    </html>