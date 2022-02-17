
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
 $rows = array();
 while($r = mysqli_fetch_assoc($result)) {
     $rows[] = $r;
 }
 $indexed = array_map('array_values', $rows);

          echo json_encode($indexed);
          $a = json_encode($indexed);

          if (!$rows) {
              return null;
          }

          $con->close();
       ?>
