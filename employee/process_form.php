<?php
// Database configuration
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "employee";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn) {
    echo("Connection : ");
}
else{
    echo"failed";
}

// Retrieve data from the form
$Emp_name = $_POST["Emp_name"];
$Emp_desg = $_POST["Emp_desg"];
$Gender = $_POST["Gender"];
$Hobbies = implode(",", $_POST["Hobbies"]);  
$email = $_POST["email"];
$address = $_POST["address"];
$Phone = $_POST["Phone"];
$hire_date = $_POST["hire_date"];

// Insert data into the database
$sql = "INSERT INTO employee1_table (name, desg, sex, Hobbies, email, address, phone, date) 
        VALUES ('$Emp_name', '$Emp_desg','$Gender','$Hobbies', '$email', '$address','$Phone', '$hire_date')";

if ($conn->query($sql) === TRUE) {
    echo "Employee record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
