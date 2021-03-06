<?php
include('doctor_db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Doctors 24/7 </title>
    <link rel = "icon" type="image/png" href="images/icon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/login_signin.css" rel="stylesheet"/>

</head>
<body>
 <?php
 include'header.php'
 ?>



<div class="background_height"><!-- first div ta height thik korar jonno-->
<div class="SignBackground"> <!-- 2nd div ta image add  korar jonno-->
  <div class="container">
      <div class="row">
	         <div class="col-md-3"></div>
			  <div class="col-md-6">

			  <form method ="post" action="doctor_registration.php" class="signUpContainer">
			 	<?php include('doctor_registration_errors.php');?>



    <div class="signUp">Sign Up</div>
						  <div class="col-md-6">

    		<div class="form-group">
         <input type="singUpFirstName" class="form-control" id="signUpFirstName" placeholder="FirstName" name="firstName">
        </div>
				<div><label style="color:black"><?php echo $first_name_error; ?></label></div>
          	<br>

       <div class="input-group">
         	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              				<input id="signUpUserName" type="text" class="form-control" name="signUpUserName" placeholder="Username">
              			</div>
						 <div><label style="color:black"><?php echo $username_error; ?></label></div>
						 <div><label style="color:black"><?php echo $usernameExists_error; ?></label></div>

						 <br>

                   <div class="input-group">
                     <span class="input-group-addon"><i class=" 	glyphicon glyphicon-earphone"></i></span>
                     <input id="email" type="text" class="form-control" name="contactNO" placeholder="Contact-No">
                   </div>
				    <div><label style="color:black"><?php echo $contactNO_error; ?></label></div>


              			<br>



                   <div class="input-group">

                      		<span class="input-group-addon"><i class=" 	glyphicon glyphicon-tags"></i></span>
                     <input id="signUpUserName" type="text" class="form-control" name="designation" placeholder="Title/Designation">
                   </div>


                   <br>


                  <div class="input-group">
                      		<span class="input-group-addon"><i class=" 	glyphicon glyphicon-star"></i></span>

                    <input id="signUpUserName" type="text" class="form-control" name="speciality" placeholder="Speciality">
                  </div>
				   <div><label style="color:black"><?php echo $speciality_error; ?></label></div>








						</div>


					 	  <div class="col-md-6">




              					<div class="form-group">

              					  <input type="signUpLastName" class="form-control" id="signUpLastName" placeholder="LastName" name="lastName">
              					</div>
								 <div><label style="color:black"><?php echo $last_name_error; ?></label></div>


                   <br>


              			<div class="input-group">
              				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              				<input id="email" type="text" class="form-control" name="email" placeholder="Email">
              			</div>
						 <div><label style="color:black"><?php echo $emailExists_error ; ?></label></div>
						 <div><label style="color:blaxk"><?php echo $emailExists_error; ?></label></div>


                  <br>


                 <div class="input-group">
                        <span class="input-group-addon"><i class=" 	glyphicon glyphicon-usd"></i></span>
                   <input id="email" type="text" class="form-control" name="Fees" placeholder="Fees">
                 </div>
				 <br>
				 <br>


              			<div class="input-group">
              				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              				<input id="signUpPassword" type="password" class="form-control" name="signUpPassword" placeholder="Password">
              			</div>
						 <div><label style="color:black"><?php echo $password_error; ?></label></div>



                    			<div class="input-group">
                    				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    				<input id="confermPassword" type="password" class="form-control" name="confirmPassword" placeholder="confirmPassword">
                    			</div>
								 <div><label style="color:black"><?php echo $confirm_password_error; ?></label></div>

                             		<br>




						</div>

                  <div class="input-group">
                       <span class="input-group-addon"><i class=" 	glyphicon glyphicon-map-marker"></i></span>
                    <input id="email" type="text" class="form-control" name="Address" placeholder="Address">
                  </div>
				   <div><label style="color:black"><?php echo $Address_error; ?></label></div>
				   <br>

              			<button type="submit"  class="btn btn-primary btn-block" name="signupbutton">Sign Up</button>
              			<br>
              			<div class="textCen textInLogSign">Already have account?
                      	<a href="login_doctor.php"role="button" class="btn btn-info">Log in</a></button></div>



              		</form>

				</div>
				 <div class="col-md-3"></div>

  </div>
</div>
</div>
<!--  contact background ends here -->


<?php include 'footer.php' ?>

</body>
</html>
