

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
 $sql="SELECT * FROM complaint WHERE complaintId= '".$q."'";


 $result = mysqli_query($conn,$sql);
 ?>
 <?php
 $i = 0;
 while($rows = mysqli_fetch_array($result)) {
   $i++;

   ?>
   <tr>
     <td> <?php echo  $rows["complaintId"]; ?> </td>
   <td> <?php echo  $rows["date"]; ?> </td>
 <td> <?php echo  $rows["category"]; ?> </td>
<td> <?php echo  $rows["status"]; ?> </td></tr>

  <?php
   }
   if ($i <1) {
?>
<tr><td colspan="11">There are no complaint</td></tr>
<?php
}
  ?>
