<?php
	  $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,"muqu");

    if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$roomNum =$desc =$inputGroupFile = $category=""; //cat1Proj cat1Air cat1Smart cat2Pc
	$selectpickerArray ;
	$str = "roomNum,description";

	if (empty($_POST["roomNum"])) {
		  $roomNum = "roomNum is required";
	  } else {
		 $roomNum = $_POST["roomNum"];
	  }
	  if (empty($_POST["desc"])) {
		  $desc = " ";
	  } else {
		 $desc = ($_POST["desc"]);
	  }
	  $value = "'$roomNum','". $desc ."'";
	  if (empty($_FILES["inputGroupFile"]["name"])) {
		  $inputGroupFile = "inputGroupFile is required";
	  } else {
		  $statusMsg = '';

		// File upload path
		$targetDir = "uploads/";
		 'filename' . $fileName = basename($_FILES["inputGroupFile"]["name"]);
		$targetFilePath = $targetDir . $fileName;
		$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

		if( !empty($_FILES["inputGroupFile"]["name"])){
			// Allow certain file formats
			$allowTypes = array('jpg','png','jpeg','gif','pdf');
			if(in_array(strtolower($fileType), $allowTypes)){
				// Upload file to server
				if(move_uploaded_file($_FILES["inputGroupFile"]["tmp_name"], $targetFilePath)){
					$inputGroupFile =$targetFilePath;
					$str = $str.',images ';
					$value =  $value .",'" .$inputGroupFile ."'";
					// Insert image file name into database
					$insert = 'ok';//$db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
					if($insert){
						$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
					}else{
						$statusMsg = "File upload failed, please try again.";
					}
				}else{
					$statusMsg = "Sorry, there was an error uploading your file.";
				}
			}else{
				$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
			}
		}else{
			$statusMsg = 'Please select a file to upload.';
		}

		// Display status message
		//echo $statusMsg;
	  }
	  if (!isset($_POST["category"])&& empty($_POST["category"])) {
		  $category = "";
	  } else {

			$category = $_POST["category"];
			$str = $str.',category ';
			$value =  $value .",'"  .$category."'";
	  }

	  if (empty($_POST["selectpickerArray"])) {
		  $pcnum = "pcnum is required";
	  } else {
		//print_r($selectpickerArray = explode(",",$_POST["selectpickerArray"]));
		$selectpickerArray = explode(",",$_POST["selectpickerArray"]);
	  }

	$last_id = "";
	  $sql = "INSERT INTO complaint (".$str.")
			VALUES ( ".$value.")";
	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		if (!empty($selectpickerArray)) {
			  foreach ($selectpickerArray as $roomnm) {

				 $sql =" INSERT INTO complaintpcid(compID, pcID) VALUES ('$last_id','$roomnm')";
				  $conn->query($sql) ;
				}
	  }

	//  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
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
						<h5 class="card-title">Create Complain</h5>
						<p class="card-text">Thanks! your complain was create successfully !</p>
						<a href="makeComplain.php" class="btn btn-primary">Go Back</a>
					  </div>
					</div>
				 </div>
			</div>
		</body>
		</html>
