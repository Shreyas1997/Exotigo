<?php

// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];

// Connect to the database
$connect=mysqli_connect('localhost','root','wolverine','exotigo');
// Make sure we connected successfully
if(! $connect)
{
    die('Connection Failed'.mysqli_error());
}

// Select the database to use

$result=mysqli_query($connect,"SELECT user_email, users_pass FROM admin WHERE user_email = $email");

 $row=mysqli_fetch_array($result,$connect)
while($row["user_email"]==$email && $row["users_pass"]==$pass)
    echo"You are a validated user.";
break;
else
    echo"Sorry, your credentials are not valid, Please try again.";
break;
endwhile;
?>