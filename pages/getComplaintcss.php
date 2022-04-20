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
<style>

h6.mytitelscss{
color: #676767;
font-family: 'Rambla';font-size: 18px;

}
h5.mytitelscs0{
  color: #2F5972;
  font-family: 'Roboto Mono';font-size: 17px;

  }
  input.a1{
    background:##F6F4F1;
      width: 300px;
      height: 40px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 0px solid rgb(212, 212, 212);
    border-radius: 4px;

  }


</style>

  <h6 class="mytitelscss m-4">complaint ID</h6>
  <input class="a1 m- " type="text" value="<?php echo $rows["complaintId"]; ?>" aria-label="Disabled input example" disabled readonly>
  <h6 class="mytitelscss m-4">  Date</h6>
  <input class="a1 m-" type="text"  value="<?php echo $rows["date"]; ?>" aria-label="Disabled input example" disabled readonly>
  <h6 class="mytitelscss m-4">Room Number<h6>
  <input class="a1 m-" type="text"  value="<?php echo $rows["roomNum"]; ?>" aria-label="Disabled input example" disabled readonly>
  <h6 class="mytitelscss m-4"> Category<h6>
  <input class="a1 m-" type="text"  value="<?php echo $rows["category"]; ?>"aria-label="Disabled input example" disabled readonly>
    <h6 class="mytitelscss m-4">description<h6>
  <input class="a1 m-" type="text"  value="<?php echo $rows["description"]; ?>" aria-label="Disabled input example" disabled readonly>
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
