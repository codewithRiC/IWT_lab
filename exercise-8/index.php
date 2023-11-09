<?php
$insert = false;
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$con = mysqli_connect($server, $username, $password);

// Check for connection success
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

if(isset($_POST['name'])){

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql = "INSERT INTO `iwt_contact`.`contact` (`name`, `age`, `gender`,  `phone`, `address`) VALUES ('$name', '$age', '$gender',  '$phone', '$address');";
   
    // Execute the query
    if($con->query($sql) == true){
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <div class="overlay">  <img class="bg" src="https://www.bespokeindiaholidays.com/wp-content/uploads/2013/05/North-India-Tours.gif" alt="INDIA"></div> -->
  
    <div class="container">
        <h1>Contact Details</h1>
        
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
           
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter your Address"></textarea>
            <button class="btn">Submit</button> 
           
        </form>
    </div>
    <div class="container">
    <form action="display_page.php" method="post">
        <button class="btn" type="submit">See Contact BOOK</button>
    </form>
    </div>
</body>
</html>
