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
  <link href="css/login_signin.css" rel="stylesheet"/>
  
</head>
<body class="logSignBackground">
<?php
include 'header.php'
?>

<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4 signInContainer">
		<form action="/action_page.php">
			<div class="signIn">Log In</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input id="signInUserName" type="text" class="form-control" name="signInUserName" placeholder="Enter username">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input id="signInPassword" type="text" class="form-control" name="signInPassword" placeholder="Enter password">
			</div>

			<div class="checkbox">
			  <label class="textInLogSign"><input type="checkbox" name="remember"> Remember me</label>
			</div>
			<button type="submit" class="btn btn-danger btn-block">Log In</button>
			<br>
			<div class="textCen"><a href="choose.html" role="button" class="btn btn-info">Create Account?</a></div>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>

<?php include 'footer.php' ?>
</body>
</html>
