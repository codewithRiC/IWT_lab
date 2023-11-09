<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database="iwt_contact";

  // Create a database connection
  $con = mysqli_connect($server, $username, $password,$database);

  // Check for connection success
  if(!$con){
      die("connection to this database failed due to" . mysqli_connect_error());
  }
 $query="select sno,name,gender,age,phone,address from contact";
 $result=mysqli_query($con,$query);
 if(isset($_GET['sno']))
 {
    $id = $_GET['sno'];
    $del = mysqli_query($con, "DELETE FROM `contact` WHERE `sno`='$id'");

 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Contact List</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
   
<!-- <div class="overlay">  <img class="bg" src="https://www.bespokeindiaholidays.com/wp-content/uploads/2013/05/North-India-Tours.gif" alt="INDIA"></div> -->
    
    <div class="container">
        <h1 >Details</h1>
        <table>
            <tr>
              <td>SL NO.</td>
              <td>Name</td>
              <td>Gender</td>
              <td>Age</td>
            
              <td>Phone</td> 
              <td>Address</td>  
              <td>UPDATE</td> 
              <td>DELETE</td> 
            </tr>
            <tr>
            <?php
               while($row=mysqli_fetch_assoc($result))
               {
            ?>
              <td><?php echo $row['sno'];?></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['gender'];?></td>
              <td><?php echo $row['age'];?></td>
              
              <td><?php echo $row['phone'];?></td>
              <td><?php echo $row['address'];?></td>
              <td><a href='update.php?sno=<?php echo $row['sno']; ?>' class="btn">UPDATE</a>
              </td> 
              <td><a href='display_page.php?sno=<?php echo $row['sno']; ?>' class="btn"> DELETE</a>
              </td>  
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