<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC LAB</title>
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>


<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">WELCOME ABC LAB</label>
      <ul>
        <li><a class="" href="user.php">Home</a></li>
        <li><a href="date.php" class="active" >patient details</a></li>
        <li><a href="payment.php">Payment</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>







<div class="container">

<h2>

<?php
// Step 1: Establish a database connection
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lab';

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Step 2: Prepare and execute SQL query
$sql = "SELECT * FROM registration";
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    die("Error executing query: " . $e->getMessage());
}

// Step 3: Fetch data
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Step 4: Process and display data
if ($result) {
    foreach ($result as $row) {
        // Output data as needed
        

        echo "Patient ". $row['name'] ." appointment number is -". $row['id'] ."<br><br>";
    }
} else {
    echo "No records found.";
}

// Step 5: Close connection
$pdo = null;
?>
</h2>

</div>











</body>
</html>