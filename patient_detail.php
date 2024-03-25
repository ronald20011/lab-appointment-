<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'lab';


$con=mysqli_connect($hostname,$username,$password,$database);

if(!$con){
    die(mysqli_error($con));
}

// SQL query to fetch patient registration data
$sql = "SELECT * FROM registration";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Patient ID: " . $row["id"]. " Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
        // You can fetch other fields as needed
    }
} else {
    echo "0 results";
}

$con->close();
?>