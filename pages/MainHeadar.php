<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"muqu");

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$sql= "SELECT userPassword,userId ,usertype FROM facultymember  WHERE  userPassword = '$password'
      UNION SELECT userPassword,userId ,usertype FROM manager WHERE     userPassword = '$password'
      UNION SELECT userPassword,userId ,usertype FROM worker  WHERE   userPassword = '$password' ";
session_start();
$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
$check = mysqli_fetch_array($result);

   if($check['usertype'] =="1"){
               header("location:Fcheader.php");
           }
           else if($check['usertype'] == "2"){
               header("location:woheader.php");
           }
           else if($check['usertype'] == "3"){
               header("location:maheader.php");
           }

 // header("location:muqumap.php");

}


?>
