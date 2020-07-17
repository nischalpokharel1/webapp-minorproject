<?php  
 $connect = mysqli_connect("localhost", "root", "","userregistration");  
 $query ="SELECT * FROM form";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                             
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="investor_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="15%">name</th>  
                               <th width="15%">lname</th>  
                               <th width="15%">email</th>  
                               <th width="10%">title</th> 
                               <th width="15%">idea</th>  
                               <th width="10%">cost</th> 
                               <th width="10%">category</th>
                               <th width="10%">keyword</th>   
               
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["lname"]; ?></td>  
                               <td><?php echo $row["email"]; ?></td>  
                               <td><?php echo $row["title"]; ?></td>  
                               <td><?php echo $row["idea"]; ?></td>  
                               <td><?php echo $row["cost"]; ?></td>  
                               <td><?php echo $row["category"]; ?></td>
                               <td><?php echo $row["keyword"]; ?></td>  
                                 
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
