
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


           				'<br/>'.$updateSql = "UPDATE complaint
           						SET status = 'solved'
           						WHERE complaintid = $complainID ";
           						if ($conn->query($updateSql) === TRUE) {

           }

               //make it =1 to delete it


           // if(!mysqli_error($conn))
             echo '<meta http-equiv="refresh" content="0; url=Manage.php">';
           }





             }
 ?>
