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
   
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

$query = "INSERT INTO ` User`(`UID`, `Username`, `password`) VALUES ('$UID', '$username','$password')";

mysqli_query($con, $query);

echo $query;
?>
