<?php
session_start();
$dbcon = mysqli_connect('localhost','root','');
mysqli_select_db($dbcon, 'userregistration');
?>