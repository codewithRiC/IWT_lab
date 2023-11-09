<?php
$update = false;
// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$dbname = "iwt_contact";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $dbname);

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
    $sno = $_POST['sno'];

    // Update existing record in the database
    $sql = "UPDATE `contact` SET `name`='$name', `age`='$age', `gender`='$gender',  `phone`='$phone', `address`='$address' WHERE `sno`='$sno'";

    // Execute the query
    if(mysqli_query($con, $sql)){
        // Flag for successful insertion
        $update = true;
        //echo "Record updated successfully";
    }
    else{
        echo "ERROR: $sql <br> " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
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
    <?php
        // Retrieve record from database
        if(isset($_GET['sno'])){
            $sno = $_GET['sno'];
        
            // Retrieve record from database
            $sql = "SELECT * FROM `contact` WHERE `sno`='$sno'";
            $result = mysqli_query($con, $sql);
        
            // Check if the query was successful
            if($result){
                // Check if the result set is not empty
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
        
                    // Prepopulate form fields with record's values
                    $name = $row['name'];
                    $gender = $row['gender'];
                    $age = $row['age'];
                    
                    $phone = $row['phone'];
                    $address = $row['address'];
                } else {
                    // Handle empty result set
                    echo "No records found.";
                }
            } else {
                // Handle query error
                echo "Error: " . mysqli_error($con);
            }
        }
    ?>
    <div class="container">
        <h1>Welcome to Contact Book</h1>
        <p>Please update the details </p>
        <?php
        if($update == true){
        echo "<p class='submitMsg'>Thanks for submitting your UPDATED details:)</p>";
        }
    ?>
       
        <form action="update.php" method="post">
    <input type="hidden" name="sno" value="<?php echo $sno; ?>">
    <input type="text" name="name" id="name" value="<?php echo $name; ?>">
    <input type="text" name="age" id="age" value="<?php echo $age; ?>">
    <input type="text" name="gender" id="gender" value="<?php echo $gender; ?>">

    <input type="phone" name="phone" id="phone" value="<?php echo $phone; ?>">
    <textarea name="address" id="address" cols="30" rows="10"><?php echo $address; ?></textarea>
    <button class="btn">Submit</button>
    
</form>
    </div>
    <div class="container">
    <form action="display_page.php" method="post">
        <button class="btn" type="submit">See Updated details</button>
    </form>
    </div>
   
</body>
</html>
