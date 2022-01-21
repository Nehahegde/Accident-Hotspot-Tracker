<?php
$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection successful";
}else{
    echo "Connection failed";
}

mysqli_select_db($con, 'Accident_Hotspot_db');

$UID =$_POST['UserID'];
$username =$_POST['username'];
$password =$_POST['password'];


if (empty($UID)) { array_push($errors , "Enter User-ID "); }
if (empty($username)) { array_push($errors , "Enter Username "); }
if (empty($password)) { array_push($errors , "Enter Password "); }

$query = "INSERT INTO ` User`(`UID`, `Username`, `password`) VALUES ('$UID', '$username','$password')";

mysqli_query($con, $query);

echo $query;
?>