<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Search Page</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

 	<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
 	<link rel="stylesheet" href="css/index.css">
    

  </head>
  <body>

  	<header>
		<h1 style="text-align: center;font-size: 70px; padding: 10px;">SPARKER</h1>
				
		</header>
			<section>
		<br><br>

		<div class="box2">
			<h1 style="text-align: center; font-size: 45px;">SEARCH PROJECT</h1><br>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="home1.php"><h3>Home</a></h3>
				</li>
				
				<li class="nav-item dropdown ml-md-auto">
					 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Aviliable Projects</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						 <a class="dropdown-item">Gaming</a> <a class="dropdown-item">Animations</a> <a class="dropdown-item">Music</a> <a class="dropdown-item">Robotics</a> <a class="dropdown-item">Design</a> <a class="dropdown-item">Web</a> <a class="dropdown-item">Education</a> <a class="dropdown-item">Electronics</a> <a class="dropdown-item">Drone</a> <a class="dropdown-item">Tech</a>
						
				</li>
			</ul>
		</div>
	</div>



	
		
		<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
     
</form>
 

	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

<?php
 
$con = new PDO("mysql:host=localhost;dbname=userregistration",'root','');
 
if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `form` WHERE  category= '$str'");
 
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

 
    if($row = $sth->fetch())
    {
        ?>
        <br><br><br>
        <div class="table-responsive" id="search_table">  
                     <table class="table table-bordered">
            <tr>
                <th>Name</th><td>
                <th>Last Name</th></td>
                <th>Email</th>
                <th>Title</th>
                <th>Category</th>
                <th>Idea</th>
                <th>Cost</th>
               
            </tr>
            <tr>
                <td><?php echo $row->name; ?></td>

                <td><td><?php echo $row->lname;?></td></td>
                <td><?php echo $row->email;?></td>
                <td><?php echo $row->title;?></td>
                <td><?php echo $row->category;?></td>
                 <td><?php echo $row->idea;?></td>
                  <td><?php echo $row->cost;?></td>

                
            </tr>
 
        </table>
<?php 
    }
         
         
        else{
            echo "Name Does not exist";
        }
 
 
}
 
?>