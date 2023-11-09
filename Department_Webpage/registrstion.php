<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            
            
            <div class="row">
                <label for="">Name : </label>
                <input type="text" placeholder="Enter Name" name="name" required>
            </div>

            <div class="row">
                <label for="">Father Name : </label>
                <input type="text" placeholder="Enter Father Name" name="fname" required>
            </div>

            <div class="row">
                <label for="">DOB : </label>
                <input type="date" placeholder="Enter Date Of Birth" name="dob">
            </div>

            <div class="row">
                <label for="">Gender : </label>
                <input type="radio" id="html" name="Gender" value="Male">
                  <label for="male">Male</label><br>
                  <input type="radio" id="css" name="Gender" value="Female">
                  <label for="css">Female</label><br>
                  <input type="radio" id="others" name="Gender" value="Others">
                  <label for="others">Others</label>
            </div>

            <div class="row">
                <label for="">Category : </label>
                <select id="category" name="category" size="1">
                  <option value="Genreral">General</option>
                  <option value="obc">OBC</option>
                  <option value="sc/st">SC/ST</option>
                  <option value="EWS">EWS</option>
                </select>                
            </div>

            <div class="row">
                <label for="">Email : </label>
                <input type="email" placeholder="Enter Email" name="email" required>
            </div>

            <div class="row">
                <label for="">Phone : </label>
                <input type="number" placeholder="Enter Phone Number" name="phone" required>
            </div>

          
            <div class="row">
                <label for="">Address : </label>
                <textarea name="add" id="" cols="20" rows="2" required ></textarea>
            </div>

            <input type="submit" name="submit" id="btn" value="submit">
            
        </form>
    </div>
</body>
</html>


<?php
include('connection.php');

if(isset($_POST['name'])){
    //image data :
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "/profile-pic".$filename;

$name = $_POST["name"];
$fname = $_POST["fname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$cat = $_POST["cat"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$lang = $_POST["lang"];
$add = $_POST["add"];

$sql = "INSERT INTO `details`(`image`, `name`, `fname`, `dob`, `gender`, `category`, `email`, `phone`, `languages`, `address`) VALUES ('$tempname','$name','$fname','$dob','$gender','$cat','$email','$phone','$lang','$add');";

if($conn->query($sql) === true){
    echo "Successfully inserted";
    session_start();
    
    header('location:index.php');
    $conn->close();
}else{
    echo "ERROR: $sql <br> $conn->error";
}

}



?>