<?php
session_start();
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $server = "localhost";
    $username = "root";
    $password = "";

// Create a database connection
    $con = mysqli_connect($server, $username, $password);

// Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    } 
    $adminid=$_POST["adminid"];
    $password=$_POST["password"];
    
    
    $sql="SELECT * FROM `iwt_admin_emp`.`admin` WHERE adminid='$adminid' AND password='$password'";
    $result=mysqli_query($con,$sql);
    $num= mysqli_num_rows($result);
    if($num==1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['adminid']=$adminid;
        header ("location: emp_details.php");

    }
    else{
        $showError=true;
    }
}

?>


<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width-device-width , initial-scale=1.0" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <?php
        if($login == true){
        echo "<p class='submitMsg'>Successfully Loggedin.</p>";
       
        }
        if($showError==true)
        {
            echo "<p>Invalid Register No. Or Password.</p>";
        }
    

    ?>
    <div class="whole">
        <div>
            <label class="label1">LOGIN</label>
            <form action="login_admin.php" method="post">
                <input type="text" name="adminid" id="adminid" placeholder="Enter your Admin ID" required>
              
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
             
                <button class="btn">Submit</button> 
               
            </form>
            <!-- <label class="label_reg">Not having an Account ? <a href="register.php">Register</a></label> -->
        </div>
        <!-- <div>
            <img src="department.png" class="body_img"/>
        </div> -->
    </div>
    


</body>

</html>