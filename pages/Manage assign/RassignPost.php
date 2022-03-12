<?php
$servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password,"muqu");

  if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


    // $complainID = str_replace("box_", '', $key) ;
    $pickerName = "SelectPicker_";
  $employeeId= $_POST[$pickerName];

    // $employeeId = $_POST["W"];
    // $pickerName = "SelectPicker_".$complainID;

    $complainID= $_POST["ClassroomN"];
echo "<h2>" . $employeeId . "</h2>";
echo "<h2>" . $complainID . "</h2>";
      //
      echo '<br/>'.$updateSql = "UPDATE assign SET userId=$employeeId,compliantId=$complainID WHERE compliantId=$complainID";

        // echo '<br/>'.$insertSql = "INSERT INTO assign (userId ,compliantId )
        // VALUES ( $employeeId, $complainID  )";
                // echo '<br/>'.$updateSql = "UPDATE complaint
                // 		SET status = 'Under Processing'
                // 		WHERE complaintId = $complainID ";
                    if ($conn->query($updateSql) === TRUE) {
                      echo "SUCCSED: " ;

          }
?>
