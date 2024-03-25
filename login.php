<?php

session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab";

$con = new mysqli($servername,$username,$password,$dbname );

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// Get email and password from the form
$email = $_POST['email'];
$password = $_POST['password'];

// SQL query to fetch user with the provided email
$sql = "SELECT * FROM registration WHERE email = '$email'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  
  // Verify password
  if ($password == $row['password']) {
    // Password is correct, start session and redirect
    $_SESSION['email'] = $email;
    header('Location: user.php');
    exit();
  } else {
    // Password is incorrect
    echo "Invalid password";
  }
} else {
  // User with provided email not found
  echo "User not found";
}

$con->close();
?>