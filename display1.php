<!DOCTYPE html>
<html>
<head>
	
	

<link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">
<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width= device-width, initial-scale=1" >
      <title>PROFILE</title>
      <style type="text/css">
      	.wrapper{
      		width: 500px;
      		margin: 0 auto;

      	}
      


	table{
		float: center;

		width:450px;
		border: 2px solid black;
		background-color: white;
	}

	td{
		border-bottom: 2px solid #666;
	}
	</style>

</head>
<body>
	<header>
		<h1 style="text-align: center;font-size: 70px; padding: 10px; color: black;">SPARKER</h1>
				
		</header>
<h1 style="color: black;">  Available Projects </h1>
	
			
<?php
include('y.php');

$sqlget =  "SELECT * FROM form";
$sqldata =  mysqli_query($dbcon, $sqlget) or die('error');
 
echo "<table>";
echo "<tr><th> name </th>
	<th >lname </th>
	<th> email </th>
	<th>title </th>
	<th> idea </th>
	<th> cost</th>
	<th> category</th>
</tr>";
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){

echo "<tr><td>";
echo $row ['name'];
echo "</td><td>";
echo $row ['lname'];
echo "</td><td>";
echo $row ['email'];
echo "</td><td>";
echo $row ['title'];
echo "</td><td>";
echo $row ['idea'];
echo "</td><td>";
echo $row ['cost'];
echo "</td><td>";
echo $row ['category'];
echo "</td></tr>";

}

echo " </table>";

?>

</body>
</html>