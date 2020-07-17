<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User login registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="">
		<div class="login-box">
		<div class="row">
					<div class="col-md-6">
						<h2>Login here</h2>
						<form action="validation.php" method="post">
							<div class="form-group">
								<label>Username </label>
								<input type="text" name="User" class="form-control" required>
							</div>
							<div class="form-group">
								<label >Password</label>
								<input type="password" name="password" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-primary">login</button>
						</form>
							</div>
							<div class="col-md-6 ">
						<h2>Register here</h2>
						<form action="registration.php" method="post">
							<div class="form-group">
								<label>Username </label>
								<input type="text" name="user" class="form-control" required>
								</div>
								<div class="form-group">
								<label >Password</label>
								<input type="password" name="password" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-primary">Register</button>
							</form>
	                        </div>


	                        	<div class="col-md-6">
						<h2>forget paasowrd</h2>
						<form action="pw-forgot.php" method="post">
							<div>
								<button type= "submit" class="btn btn-primary"  >forget password  </button>
						</form>
							</div>
							</div>

							

</div>

</div>

</body>
</html>