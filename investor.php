<?php
if(isset($_POST['submitted'])){
 include('y.php');

$name =  $_POST['name'];

$lname = $_POST['lname'];
$email = $_POST['email'];
$title = $_POST['title'];
$category = $_POST['category'];
$keyword = $_POST['keyword'];




$sqlinsert = "INSERT INTO investor(name,lname,email,title,category,keyword) VALUES ('$name','$lname','$email','$title',
'$category','$keyword')";
if (!mysqli_query($dbcon,$sqlinsert)) {
  die('try again');
  
}

}

?>

<html>
<head>
  <title>VIEW</title>
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
      <h1 style="text-align: center; font-size: 23px;">INVESTOR REGISTRATION</h1><br>

<form method='post' action = "">
      <input type="hidden" name="submitted" value="true" />
    <table>
        <tr>
          <td style="padding:10px; font-size: 18px;">Firstname</td>
          <td>
            <input class="form-control"  type="text" name="name" required placeholder="Firstname" style="height: 30px; width: 100%">
          </td>
        </tr>



        <tr>
          <td style="padding:10px; font-size: 18px;">Lastname</td>
          <td>
            <input class="form-control"  type="text" name="lname" placeholder="Lastname" style="height: 30px; width: 100%">
          </td>
        </tr>

        <tr>
          <td style="padding:10px; font-size: 18px;">Email</td>
          <td>
            <input class="form-control"  type="varchar" name="email" placeholder="Email" style="height: 30px; width: 100%">
          </td>
        </tr>
        <tr>
          <td style="padding:10px; font-size: 18px;">Title</td>
          <td>
            <input class="form-control"  type="text" name="title" placeholder="title" style="height: 30px; width: 100%">
          </td>
        </tr>
          
        <tr>
          <td style="padding:10px; font-size: 18px;">Keyword</td>
          <td>
            <input class="form-control"  type="varchar" name="keyword" placeholder="keyword" style="height: 30px; width: 100%">
          </td>
        </tr>

        <tr>
          <td style="padding:10px; font-size: 18px;">Category</td>
          <td>
            
            <select name = "category" required>
  <option value="gaming">Gaming</option>
  <option value="software">Software</option>
  <option value="drones"> Drone </option>
  <option value="robotics">Robotics</option>
  <option value="apps">Apps</option>
  <option value="design">Design</option>
  <option value="animationn">Animation</option>
  <option value="web">Web</option>
  <option value="electronics">Electronics</option>
  <option value="education">Education</option>
  <option value="music">Music</option>
  <option value="tech">Tech</option>
  <option value="fashion">Fashion</option>
 </select>
          </td>
        </tr>
            
        <tr>
          <td>&nbsp;</td>
          <td>
            <input type="submit" value ="submit" style="width: 75%;height: 35px; background-color: #20c997;">
          </td>
        </tr>
      </table>
      
    </form><br><br>
    </div>    
  </section>
</body>
</html>


