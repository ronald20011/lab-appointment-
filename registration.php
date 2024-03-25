<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <title>ABC LAB</title>
</head>
<body>

<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">WELCOME ABC LAB</label>
      <ul>
        <li><a class="active" href="user.php">Appointment</a></li>
        <li><a href="date.php">patient details</a></li>
        <li><a href="payment.php">Payment</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>

<div class="container">
<h1>


<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $name=$_POST['name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $test=$_POST['test'];
    $date=$_POST['date'];

   /* $sql="insert into `registration`(name,age,address,email,password) values('$name','$age','$address','$email','$password')";
    $result=mysqli_query($con,$sql);

    if($result){
        echo "data inserted successfully";
    }else{
        die(mysqli_error($con));
    }*/

    $sql="Select * from `registration` where name='$name'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "user alredy exist";
        }else{
            $sql="insert into `registration`(name,age,address,email,password,test,date) values('$name','$age','$address','$email','$password','$test','$date')";
    $result=mysqli_query($con,$sql); 
    if($result){
        $last_id=$con->insert_id;
        
        echo "Thank you for your Registration<br><br>";
        echo "wellcome $name <br><br>Your appointmnet number is : $last_id";
    }else{
        die(mysqli_error($con));
    } 
        }
    }
    
}

?>


</h1>



</div>












    
</body>
</html>
