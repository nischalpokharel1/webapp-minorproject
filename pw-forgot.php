<?php 
include "y.php";
$msg = '';
$msg1 = '';
$msg2 = '';
$name = '';
if(isset($_POST['submit'])){
	$name = $_POST['userame'];
	$password1 = $_POST['pwd1'];
	$password2 = $_POST['pwd2'];

	if(empty($name)){
	$msg = "Ënter user name";
	}
		if(empty($password1)){
	$msg2 = "Ënter password";
	}
		if(empty($password2)){
	$msg2 = "Ënter password";
	}
		if($password1 != $password2){
			?>
			<script type="text/javascript">
				alert ("The passwords does not match");
			</script>
			<?php
			$result=mysqli_query($db, "SELECT  name FROM usertable WHERE name ='$ame'");
  $retrieve = mysqli_fetch_array($result);
  mysqli_query($db, "UPDATE form SET password = $password1");
  $msg1= "Successfully changed password";

  }

		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORGOT PASSWORD</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
	<meta charset="utf-8">
      <meta name="viewport" content="width= device-width, initial-scale=1" >
</head>
<body>
<header>
		<h1 style="text-align: center;font-size: 55px; padding: 10px;">SPARKER</h1>
				
		</header>
			<section>
		<br><br><br><br>

		<div class="box2">
			<h1 style="text-align: center; font-size: 23px;"><b>Forgot Password</b></h1><br>
			<form method="post">
				<div class="form-group">
				<label>Username : </label>
				<br>	<input type="text" class="form-control" placeholder="Enter your username" name="user" value="<?php echo $name; ?>">	<?php echo $msg ; ?>				
				</div>
				
					
					<div class="form-group">
				<label>New Password : </label>
				<br>	<input type="password" class="form-control" placeholder="Enter your new Password" name="pwd1">
				<?php echo $msg2 ; ?>					
				</div>
						<div class="form-group">
				<label>Re-enter Password : </label>
				<br>	<input type="password" class="form-control" placeholder="Re-Enter your new Password" name="pwd2">
				<?php echo $msg2 ; ?>					
				</div>
				<center><button class="btn btn-success" name="submit">Submit</button></center>

			</form>					
			</div>

			
		
		
	
</body>
</html>