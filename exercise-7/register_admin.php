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
    $adminid = $_POST['adminid'];
    $name = $_POST['name'];  
    $age = $_POST['age'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
       
    $sql = "INSERT INTO `iwt_admin_emp`.`admin` (`adminid`,`name`, `age`,`phone`,`password`) VALUES ('$adminid','$name', '$age','$phone','$password');";
   
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

<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width-device-width , initial-scale=1.0" />
    <title>REGISTER</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <div class="whole">
        <div>
            <label class="label1">REGISTER</label>
            <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        echo "<a class='btn' href='login_admin.php'><button>LOGIN</button></a>";
        }
    

    ?>
            <form action="register_admin.php" method="post">
                <input type="text" name="adminid" id="adminid" placeholder="Enter your ADMIN ID." required>
                <input type="text" name="name" id="name" placeholder="Enter your  Name" required>
                <input type="text" name="age" id="age" placeholder="Enter your Age" required>
                <input type="phone" name="phone" id="phone" placeholder="Enter your phone" required>
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
                
             
                <button class="btn">Submit</button> 
               
            </form>
        </div>
        <!-- <div>
            <img src="department.png" class="body_img"/>
        </div> -->
    </div>
    


</body>

</html>