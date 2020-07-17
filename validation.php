<?php
session_start();
$name=$_POST['user'];
$pass=sha1($_POST['password']);

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');

$s ="SELECT name,password from usertable where name= '$name' && password='$pass'";
$result = mysqli_query($con, $s);
echo"first";

 $num = mysqli_num_rows($result);
 if($num == 1){
 	$_SESSION['username'] = $name;
 	header('location:home1.php');
}else{
 	header('location:login.php');
 	}
if($result){
	$_SESSION['username'] = $name;
	header('location:home1.php');
}else{
	header('location:login.php');
	}


?>