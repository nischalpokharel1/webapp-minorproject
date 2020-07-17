				<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Bar using PHP</title>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
 
<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
     
</form>
 
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
        <table>
            <tr>
                <th>name</th>
                <th>lname</th>
                <th>email</th>
                <th>profession</th>
                <th>category</th>
                <th>idea</th>
                <th>cost</th>
               
            </tr>
            <tr>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->lname;?></td>
                <td><?php echo $row->email;?></td>
                <td><?php echo $row->profession;?></td>
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