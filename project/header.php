<?php //include('db.php');

//session_start();
$flag="";
if(isset($_GET['logout']))
{
	session_destroy();

	//header('location:login_doctor.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctors 24/7</title>
  <link rel = "icon" type="image/png" href="images/icon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/header.css" rel="stylesheet"/>
</head>
<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
         <div class="img-logo">
            <img  id = "logo" src="images/logo.png" class="img-responsive">
            </div>
            </div>
            <div class="col-md-4"></div>
    <div class="col-md-4"></div>
       </div>
      </div>
      </div>




		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
	</div>

			<div class="collapse navbar-collapse" id="myNavbar">
<div class="container">
<div class="row">
	<div class="col-lg-12">
<ul class=" nav navbar-nav ">
<li class="nav-item"><a class="nav-link active" href="homepage_with_login.php">Home</a></li>
<li class="nav-item"> <a href="doctors.php" > Doctors </a></li>
<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Donors
	<span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><a href="donor.php">A+</a></li>
		<li><a href="#">B+</a></li>
		<li><a href="#">AB+</a></li>
		<li><a href="#">O+</a></li>
		<li><a href="#">A-</a></li>
		<li><a href="#">B-</a></li>
		<li><a href="#">AB-</a></li>
		<li><a href="#">O-</a></li>
	</ul>
</li>

	<li class="nav-item"> <a href="hospital.php"> Hospitals </a></li>
	<li class="nav-item"> <a href="healthcard.php"> Health Cards </a></li>
	<li class="nav-item"> <a href="#"> Health Blogs </a></li>
		<li class="nav-item"> <a href="contact.php"> Contact Us </a></li>
		<li class="nav-item"> <a href="aboutus.php"> About Us </a></li>
		<li class="nav-item"> <a href="#"> Listed Data </a></li>
		 <li class="nav-item"> <a href="#"> Admin Panel </a></li>
	 </ul>

	 <ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
	 <?php if(isset($_SESSION['success'])): ?>
	 <p>
		<?php
			echo $_SESSION['success'];
			unset($_SESSION['success']);
		?>
	 </p>
	 <?php endif; ?>
	 <a  class="dropdown-toggle" data-toggle="dropdown">

		<!-- <?php if(isset($_SESSION["signUpUserName"])):
		?>
		<p><?php echo $_SESSION['signUpUserName']; ?><span class="caret"></span></p>
	 <?php endif; ?> -->
		<?php if(isset($_SESSION["signInUserName"])) :
		?>
		<p><?php echo $_SESSION['signInUserName']; ?> <span class="caret"></span></p>


		<?php endif; ?>
				</a>
		<ul class="dropdown-menu">
			<!-- <?php if(isset($_SESSION["signUpUserName"])):
 ?>
 <li> <a href="doctor_private.php"> Profile </a></li>

 <?php endif ;?> -->
 <?php if(isset($_SESSION["signInUserName"])):
?>
<li> <a href="doctor_private.php"> Profile </a></li>

<?php endif ;?>

				 <!-- <?php if(isset($_SESSION["signUpUserName"])):
		?>
		<li> <a href="logout.php"> Logout </a></li>

		<?php endif ;?> -->

				 <?php if(isset($_SESSION["signInUserName"])):
		?>
		<li> <a href="logout.php"> Logout </a></li>

		<?php endif ;?>
	 </ul>
	 </li>
	 </ul>

				</div>
				</div>
</div>
</div>
		</nav>
  </header>

</body>
</html>
