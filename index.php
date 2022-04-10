<?php
if(isset($_POST['name']))
{

  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server,$username,$password);
  
 if(!$con)
 {
     die("Connection to this database failed due to ".
     mysqli_connect_error());
 }
//  echo "Success connected to DB"

$NAME=$_POST['name'];
$AGE=$_POST['age'];
$GENDER=$_POST['gender'];

$EMAIL=$_POST['email'];
$PHONE=$_POST['phone'];
$OTHER=$_POST['other'];

$sql =  "INSERT INTO pk_trip.mg_tr (`name`, `age`, `gender`, `email`, `phone`, `other`, `DATE`) VALUES (
'$NAME', '$AGE', '$GENDER', '$EMAIL', '$PHONE', '$OTHER', current_timestamp());";

 echo $sql;

 if($con->query($sql)==true)
 {
     echo "Successfully inserted";
 }
 else{
     echo "ERROR: $sql <br> $con->error";
 }

 $con->close();


}
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="pg" src="pg.jpg" alt="FAST PK">
    <div class="container">
        <h2>Welcome to FAST PK Trip form</h2>
        <p>Enter your details and submit this form to conform your participation in the trip</p>
        <p class="submitMsg">Thanks for submitting your form.We are happy to see you joining us for PK trip </p>
         
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone No">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your other information here"></textarea>
            <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="index.js"></script>
</body>
</htmL>