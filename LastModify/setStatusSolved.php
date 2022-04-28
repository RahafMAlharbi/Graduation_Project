
<?php


           $servername = "localhost";
           	$username = "root";
           	$password = "";

           	// Create connection
           	$conn = mysqli_connect($servername, $username, $password,"muqu");

           	if (!$conn) {
           	die("Connection failed: " . mysqli_connect_error());
           }

           	foreach($_POST as $key => $value) {
           		if (strpos($key, 'box_') === 0) {
           			$complainID = str_replace("box_", '', $key) ;
           			// $employeeId= $_POST[$pickerName];

           				$updateSql = "UPDATE complaint
           						SET status = 'solved'
           						WHERE complaintid = $complainID ";

           						if ($conn->query($updateSql) === TRUE) {
                        echo "Record UPDATE successfully 1 ";
           }
         else {
             echo "Error UPDATE record: " . $conn->error;
           }

             $sql2  ="DELETE FROM deal WHERE complaintId ='$complainID'" ;

           if ($conn->query($sql2) === TRUE) {
             echo "Record deleted successfully2 ";
           } else {
             echo "Error deleting record: " . $conn->error;
           }

           // if(!mysqli_error($conn))
             echo '<meta http-equiv="refresh" content="0; url=Manage.php">';
           }

             }
 ?>
