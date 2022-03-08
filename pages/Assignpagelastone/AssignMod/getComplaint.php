<?php


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"muqu");

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$q=$_GET['q'];
mysqli_select_db($conn,"muqu");

$sql="SELECT complaintId, date ,roomNum , category , description  FROM complaint WHERE complaintId= '".$q."'";
$sql1="SELECT images FROM complaint WHERE complaintId= '".$q."'";

$result = mysqli_query($conn,$sql);
$result1 = mysqli_query($conn,$sql1);
?>
<?php
$i = 0;
while($rows = mysqli_fetch_array($result)) {
  $i++;

  ?>

  complaint ID
  <input class="form-control" type="text" value="<?php echo $rows["complaintId"]; ?>" aria-label="Disabled input example" disabled readonly>
  Date
  <input class="form-control" type="text"  value="<?php echo $rows["date"]; ?>" aria-label="Disabled input example" disabled readonly>
  Room Number
  <input class="form-control" type="text"  value="<?php echo $rows["roomNum"]; ?>" aria-label="Disabled input example" disabled readonly>
  Category
  <input class="form-control" type="text"  value="<?php echo $rows["category"]; ?>"aria-label="Disabled input example" disabled readonly>
  description
  <input class="form-control" type="text"  value="<?php echo $rows["description"]; ?>" aria-label="Disabled input example" disabled readonly>
  <?php
  $ii = 0;
  while($row1 = mysqli_fetch_array($result1)){
  $ii++;
  if( !empty($row1["images"])){
    ?>
    images
   <p><img src="<?php echo $row1["images"]; ?>" width="50" height="50" /> </p>

  <?php }
  else {?>
    <p></p>
    <?php }?>
    <?php }?>
 <?php
  }
  if ($i <1) {
  ?>
<tr><td colspan="11">There are no complaint</td></tr>
<?php
}
 ?>
