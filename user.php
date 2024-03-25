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
        <li><a class="active" href="#">Home</a></li>
        <li><a href="date.php">patient details</a></li>
        <li><a href="payment.php">Payment</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>


    







<div class="container">
    <form action="user.php" method="post">
        <h1>Appointment</h1>

        <div class="input-group">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="fname" required>
        </div>

        <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        </div>

        <div class="input-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="tno" required>
        </div>

        <div class="input-group">
        <label for="appointment_date">Preferred Appointment Date:</label>
        <input type="date" id="appointment_date" name="date" required>
        </div>
    
    
        <div class="input-group">
        <label for="test_type">Test Type:</label>
        <select id="test_type" name="test" required>
        <option value="Blood Test">Blood Test</option>
        <option value="Urine Test">Urine Test</option>
        <option value="Urine Test">Corona Test</option>
        <option value="Urine Test">Kidney function Test</option>
        <option value="Urine Test">Thyroid Test</option>
        <!-- Add more test types as needed -->
        </select>
        </div>
    
        <div class="input-group">
        <label for="additional_info">Additional Information:</label>
        <textarea id="additional_info" name="additional"></textarea>
        </div>

        <div class="group">
        <button type="submit" href >Submit Appointment</button>
        </div>
    
    </form>
 </div>




</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $tno=$_POST['tno'];
    $date=$_POST['date'];
    $test=$_POST['test'];
    $additional=$_POST['additional'];
    
    
    
    // Prepare SQL query
    $query = "INSERT INTO appointment (fname, email, tno, date, test, additional)
              VALUES (?, ?, ?, ?, ?, ?)";
    
    // Prepare statement
    $stmt = $con->prepare($query);
    if ($stmt === false) {
        die("Error in preparing statement: " . $con->error);
    }
    
    // Bind parameters
    $stmt->bind_param("ssssss", $fname, $email, $tno, $date, $test, $additional);
    
    // Execute statement
    if ($stmt->execute() === true) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $con->close();
   
}

?>