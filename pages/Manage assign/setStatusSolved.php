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
			$pickerName = "SelectPicker_".$complainID;
			$employeeId= $_POST[$pickerName];


				echo '<br/>'.$updateSql = "UPDATE complaint
						SET status = 'solved'
						WHERE complaintid = $complainID ";
				if ($conn->query($updateSql) === TRUE) {

				   // else {
				   //     echo "Error: " . $sql . "<br>" . $conn->error;
				   //   }

			}
		}
	}




?>

<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="bootstrap5/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 <title>Make Complain</title>
  </head>
  <body>
	<header class="navbar navbar-expand-md navbar-dark bd-navbar" > </header>

			<div class="container-fluid">
				<div class="row justify-content-center ">
					<div class="card" style="width: 18rem;">

					  <div class="card-body">
						<h5 class="card-title">Assign Employee </h5>
						<p class="card-text">Thanks! You confirmed  complaint successfully !</p>
						<a href="anothercopyassign.php" class="btn btn-primary">Go Back</a>
					  </div>
					</div>
				 </div>
			</div>
		</body>
		</html>
