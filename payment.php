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
        <li><a href="user.php">Home</a></li>
        <li><a href="date.php">patient details</a></li>
        <li><a href="payment.php" class="active" >Payment</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>






   
    <div class="container">
        <h2>Billing and Payment</h2>
        <form action="process_payment.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="credit_card">Credit Card Number:</label>
            <input type="text" id="credit_card" name="credit_card" required><br><br>
            <label for="expiry_date">Expiry Date:</label>
            <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" required><br><br>
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required><br><br>
            <input type="submit" value="Pay Now">
        </form>
    </div>












</body>
</html>