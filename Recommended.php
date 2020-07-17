<html>
<head>
	<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  
 <body>
  <header>
		<h1 style="text-align: center;font-size: 70px; padding: 10px;">SPARKER</h1>
				
		</header>
			<section>
		<br><br>

		<div class="box2">
			<h1 style="text-align: center; font-size: 45px;">RECOMENDATION</h1><br>
   <title>
     Recomendation
   </title>
  </head>

   <form method="post">

    <input type="submit" value="SEARCH" name="SEARCH">
   </form>
 </body>
</html>

<?php
	if(isset($_POST['SEARCH']))
	{
	$cmd="python recom.py";

$command = escapeshellcmd($cmd);

$output = shell_exec($command);

echo $output;
  
	}
?>
  