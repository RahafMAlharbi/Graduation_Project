
 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muqu";

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$q=$_GET['q'];
mysqli_select_db($con,$dbname);
$sql="SELECT * FROM classroom WHERE building = '".$q."'";


$result = mysqli_query($con,$sql);
?>
<?php
while($row = mysqli_fetch_array($result)) {
  ?>
 <option  value="<?php echo $row["roomNumber"]?>"> <?php echo $row["roomNumber"]?> </option>

 <?php
  }
 ?>
/
