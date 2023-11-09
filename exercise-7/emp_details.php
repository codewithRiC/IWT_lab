<?php
$insert = false;
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
 $con = mysqli_connect($server, $username, $password);
 $query="select empid,name,age,phone from iwt_admin_emp.employee";
 $result=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emp details</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
   
    
    <div class="container">
        <h1>EMPLOYEE DETAILS</h1>
        <table>
            <tr>
              
              <td>EMPLOYEE ID</td>
              <td>Name</td>
              <td>Age</td> 
              <td>Phone</td> 
               
            </tr>
            <tr>
            <?php
               while($row=mysqli_fetch_assoc($result))
               {
            ?>
            
              <td><?php echo $row['empid'];?></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['age'];?></td>
              <td><?php echo $row['phone'];?></td>
                
            </tr>
            <?php
               }
            ?>

        </table>
        
    </div>
    <div class="container">
    <form action="index.php" method="post">
        <button class="btn" type="submit" >BACK</button>
    </form>
    </div>
    
</body>
</html>