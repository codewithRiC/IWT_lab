<?php
include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="container">
        
        <form action="" method="post">
            
            <div class="row">
                <label for="">Username : </label>
                <input type="text" placeholder="Enter Username" name="username" required>
            </div>
            
            <div class="row">
                <label for="">Email : </label>
                <input type="email" placeholder="Enter Email ID" name="email" required>
            </div>

             
            <div class="row">
                <label for="">Password : </label>
                <input type="text" placeholder="Enter Password" name="password" required>
            </div>

            

            <input type="submit" name="submit" id="btn" value="Log In">
            
        </form>
    </div>
</body>
</html>

<?php

if(isset($_POST['email'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `signup`(`email`, `password`, `username`) VALUES ('$email','$password','$username');";
   
    if($conn->query($sql) === true){
        echo "Successfully inserted";
        session_start();
        $_SESSION["username"] = $username;
        header('location:registration.php');
        $conn->close();
    }else{
        echo "ERROR: $sql <br> $conn->error";
    }

    
}

?>