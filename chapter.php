<?php
session_start();
$host = "localhost:3307";
$username = "root";
$pass = "";
$dbname = "ngo";

$conn = mysqli_connect($host,$username,$pass,$dbname);


if(!$conn){
echo "connection error" . mysqli_connect_error();  
}else{
    echo "successful";
}

 
                $query = "SELECT count(*) AS mumbai_members FROM volunteers where chapter = 'Mumbai'";
                $result = mysqli_query($conn, $query);
                $row1 = mysqli_fetch_assoc($result);

                 $query = "SELECT count(*) AS kolkata_members FROM volunteers where chapter = 'Kolkata'";
                $result = mysqli_query($conn, $query);
                $row2 = mysqli_fetch_assoc($result);

                 $query = "SELECT count(*) AS sydney_members FROM volunteers where chapter = 'Sydney'";
                $result = mysqli_query($conn, $query);
                $row3 = mysqli_fetch_assoc($result);

                 $query = "SELECT count(*) AS mexico_members FROM volunteers where chapter = 'Mexico City'";
                $result = mysqli_query($conn, $query);
                $row4 = mysqli_fetch_assoc($result);

                 $query = "SELECT count(*) AS budapest_members FROM volunteers where chapter = 'Budapest'";
                $result = mysqli_query($conn, $query);
                $row5 = mysqli_fetch_assoc($result);

                 $query = "SELECT count(*) AS dublin_members FROM volunteers where chapter = 'Dublin'";
                $result = mysqli_query($conn, $query);
                $row6 = mysqli_fetch_assoc($result);

                 $query = "SELECT count(*) AS barcelona_members FROM volunteers where chapter = 'Barcelona'";
                $result = mysqli_query($conn, $query);
                $row7 = mysqli_fetch_assoc($result);

                 $query = "SELECT count(*) AS venice_members FROM volunteers where chapter = 'Venice'";
                $result = mysqli_query($conn, $query);
                $row8 = mysqli_fetch_assoc($result);

                 $query = "SELECT count(*) AS greece_members FROM volunteers where chapter = 'Greece'";
                $result = mysqli_query($conn, $query);
                $row9 = mysqli_fetch_assoc($result);

                 $query = "SELECT count(*) AS vancouver_members FROM volunteers where chapter = 'Vancouver'";
                $result = mysqli_query($conn, $query);
                $row10 = mysqli_fetch_assoc($result);

                 $query = "SELECT count(*) AS moscow_members FROM volunteers where chapter = 'Moscow'";
                $result = mysqli_query($conn, $query);
                $row11 = mysqli_fetch_assoc($result);



?>





<!DOCTYPE html>
<html>
	<head>
		<title>Chapters</title>
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

		<!-- JS Scripts -->
			<script type="text/javascript" src="project.js"></script>	
	</head>
	<body>
		<!-- Nav Bar -->
		<div class="container-fluid">
		    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #70ADB5">
		  		<a class="navbar-brand" href="index.php">
		  			<img src="logo.svg" width="45" height="45" class="d-inline-block align-top" alt="events.php" loading="lazy">Nurturing Lives</a>
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
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Know Us</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="aboutUs.php">Our Aim</a>
								<a class="dropdown-item" href="events.php">Events</a>
								<a class="dropdown-item" href="chapter.php">Chapters</a>
								<a class="dropdown-item" href="volunteer.php">Volunteer Now!</a>
							</div>
						</li>
						
						<?php if(isset($_SESSION['email']) && !empty($_SESSION['email']) )
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
	        	<span style="padding-left: 10%;"> Chapters </span>
	            <label class="switch float-right mr-4 my-3"  >
	                <input type="checkbox" onclick="myFunction()">
	                <span class="slider round"></span>
	            </label>
	        </div>
	    <!-- End of Page Heading -->

		<!-- Chapters -->
		<div class="container">
			<div class="accordion pb-4" id="accordionExample">
				
			  	<div class="card bg-transparent" style="width: 100%">
			    	<div class="card-header" id="headingOne">
	      				<h2 class="mb-0">
	        				<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fas fa-map-marker-alt"></i> Mumbai <span class=" float-right"><i class="fas fa-users"></i><?php echo $row1['mumbai_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
	        				</button>
	      				</h2>
	   				</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
	      				<div class="card-body">
	      					<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Mumbai' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      						<div class="col-md-6 text-left">
	      							
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Mumbai' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
	      				</div>
	   				</div>
	  			</div>
	  			
	  			<div class="card bg-transparent" style="width: 100%">
	    			<div class="card-header" id="headingTwo">
	      				<h2 class="mb-0">
	        				<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fas fa-map-marker-alt"></i> Kolkata <span class=" float-right"><i class="fas fa-users"></i><?php echo $row2['kolkata_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
	        				</button>
	      				</h2>
	   				</div>
	    			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
	      				<div class="card-body">
	      					<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Kolkata' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      						<div class="col-md-6 text-left">
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Kolkata' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
	      				</div>
	    			</div>
	  			</div>

			  		<div class="card bg-transparent" style="width: 100%">
					    <div class="card-header" id="headingThree">
					      <h2 class="mb-0">
					        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fas fa-map-marker-alt"></i> Sydney <span class=" float-right"><i class="fas fa-users"></i><?php echo $row3['sydney_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
					        </button>
					      </h2>
					    </div>

					    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					      	<div class="card-body">
					        	<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Sydney' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								<?php
									}
										}
	  							?>
	      							</ul>
	      						</div>
	      						
	      						<div class="col-md-6 text-left">
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Sydney' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
					      	</div>
					    </div>
			  		</div>



	  		<div class="card bg-transparent" style="width: 100%">
			    <div class="card-header" id="headingFour">
			      <h2 class="mb-0">
			        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="fas fa-map-marker-alt"></i> Mexico City <span class=" float-right"><i class="fas fa-users"></i><?php echo $row4['mexico_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
			        </button>
			      </h2>
			    </div>
			    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
			      	<div class="card-body">
			        	<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Mexico City' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      						<div class="col-md-6 text-left">
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Mexico City' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
			      	</div>
			    </div>
	  		</div>
	  		<div class="card bg-transparent" style="width: 100%">
			    <div class="card-header" id="headingFive">
			      <h2 class="mb-0">
			        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><i class="fas fa-map-marker-alt"></i> Budapest <span class=" float-right"><i class="fas fa-users"></i><?php echo $row5['budapest_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
			        </button>
			      </h2>
			    </div>
			    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
			      	<div class="card-body">
			        	<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Budapest' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      						<div class="col-md-6 text-left">
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Budapest' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
			      	</div>
			    </div>
	  		</div>
	  		<div class="card bg-transparent" style="width: 100%">
			    <div class="card-header" id="headingSix">
			      	<h2 class="mb-0">
			        	<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><i class="fas fa-map-marker-alt"></i> Dublin <span class=" float-right"><i class="fas fa-users"></i><?php echo $row6['dublin_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
			        	</button>
			      	</h2>
			    </div>
			    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
			      	<div class="card-body">
			        	<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Dublin' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      						<div class="col-md-6 text-left">
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Dublin' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
			      		</div>
			    	</div>
	  			</div>
	  		<div class="card bg-transparent" style="width: 100%">
			    <div class="card-header" id="headingSeven">
			      	<h2 class="mb-0">
				        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><i class="fas fa-map-marker-alt"></i> Barcelona <span class=" float-right"><i class="fas fa-users"></i><?php echo $row7['barcelona_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
				        </button>
			      	</h2>
			    </div>
			    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
			      	<div class="card-body">
			        	<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Barcelona' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      						<div class="col-md-6 text-left">
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Barcelona' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
			      	</div>
			    </div>
	  		</div>
	  		<div class="card bg-transparent" style="width: 100%">
			    <div class="card-header " id="headingEight">
			      <h2 class="mb-0">
			        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><i class="fas fa-map-marker-alt"></i> Venice <span class=" float-right"><i class="fas fa-users"></i><?php echo $row8['venice_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
			        </button>
			      </h2>
			    </div>
			    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
			      	<div class="card-body">
			        	<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Venice' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      						<div class="col-md-6 text-left">
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Venice' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
			      	</div>
			    </div>
	  		</div>
	  		<div class="card bg-transparent" style="width: 100%">
			    <div class="card-header" id="headingNine">
			      <h2 class="mb-0">
			        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"><i class="fas fa-map-marker-alt"></i> Greece<span class=" float-right"><i class="fas fa-users"></i><?php echo $row9['greece_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
			        </button>
			      </h2>
			    </div>
			    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
			      	<div class="card-body">
			        	<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Greece' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      						<div class="col-md-6 text-left">
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Greece' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
			      	</div>
			    </div>
	  		</div>
	  		<div class="card bg-transparent" style="width: 100%">
			    <div class="card-header" id="headingTen">
			      <h2 class="mb-0">
			        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen"><i class="fas fa-map-marker-alt"></i> Vancouver <span class=" float-right"><i class="fas fa-users"></i><?php echo $row10['vancouver_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
			        </button>
			      </h2>
			    </div>
			    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
			      	<div class="card-body">
			        	<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Vancouver' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      						<div class="col-md-6 text-left">
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Vancouver' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
			      	</div>
			    </div>
	  		</div>
	  		<div class="card bg-transparent" style="width: 100%">
			    <div class="card-header" id="headingEleven">
			      <h2 class="mb-0">
			        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven"><i class="fas fa-map-marker-alt"></i> Moscow <span class=" float-right"><i class="fas fa-users"></i><?php echo $row11['moscow_members']; ?>  <a href="#volunteer"><i class="far fa-heart"></i></a></span>
			        </button>
			      </h2>
			    </div>
			    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
			      	<div class="card-body">
			        	<div class="row">
	      						<div class="col-md-6 text-left">
	      							<h3>Upcoming Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Moscow' and date >= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>
	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      						<div class="col-md-6 text-left">
	      							<h3>Past Events</h3>
	      							<ul>
	      								<?php
											$query = "SELECT * FROM events where address = 'Moscow' and date <= CURDATE()";
											$result = mysqli_query($conn, $query);
											$check_events = mysqli_num_rows($result) > 0;
											if($check_events)
											{
												while($row = mysqli_fetch_assoc($result))
											{

										?>

	      								<li><a href="events.php"><?php echo $row['name_of_event']; ?></a></li>
	      								
	      								
	      								<?php
									}
										}
	  								?>
	      							</ul>
	      						</div>
	      					</div>
			      	</div>
			    </div>
	  		</div>
		</div>
	</div><i class="fas fa-hand-point-up fa-3x" id="up-arrow" onclick="topFunction()" ></i>
    </div>
    <!-- End of Chapter Page -->

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
