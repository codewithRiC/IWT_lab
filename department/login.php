

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            
            
            <div class="row">
                <label for="">Email : </label>
                <input type="email" placeholder="Enter Email ID" name="email" required>
            </div>

             
            <div class="row">
                <label for="">Password : </label>
                <input type="text" placeholder="Enter Password" name="password" required>
            </div>

            

            <center><input type="submit" name="submit" id="btn" value="Log In" style="width:100%" >
            <span>Not registered yet ? <a href="http://department/signup.php">Sign Up</a></span> 

            </center>
            
        </form>
    </div>
</body>
</html>
<?php
include('connection.php');

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM signup WHERE email='$email' && password='$password';";
    $result = mysqli_query($conn, $query); // Execute the query
    $data = mysqli_fetch_assoc($result);
    if ($result) {
        $total = mysqli_num_rows($result);

        if ($total == 1) {
            session_start();
            $_SESSION['username'] = $data['username'];
            header("location: homepage.php");
        } else {
            //echo "<script>alert('Login Failed! Wrong email or password');</script>";
            //echo "Login failed";
        }
    } else {
        echo "Query execution failed: " . mysqli_error($conn);
    }
}
?>