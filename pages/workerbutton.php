<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "muqu";

 $con = mysqli_connect($servername, $username, $password, $dbname);
 if (!$con) {
   die('Could not connect: ' . mysqli_error($con));
 }
if(isset($_POST['submit']))
{

  $finalList=$_POST['chk_id'];

  foreach ($_POST['chk_complaint'] as $key => $value)
  {
  	if(in_array($_POST['chk_complaint'][$key], $finalList))
  	{
  	$woekerID=$_POST['chk_wrkid'][$key];
  	$complaintID= $_POST['chk_complaint'][$key];
    $insertqry="";
    if (isset($_POST['un']))
    {
      $reason= $_POST['comment'];
      $insertqry="INSERT INTO `deal`(`userId`, `complaintId`, `completeness`,`reason`)
      VALUES ('$woekerID','$complaintID','Uncompleted','$reason')";

    }
    else{
   $insertqry="INSERT INTO `deal`(`userId`, `complaintId`, `completeness`) VALUES ('$woekerID','$complaintID','Completed')";
    }
    //make it =1 to delete it
   $insertqry=mysqli_query($con,$insertqry);
   $updateqry="UPDATE assign set saved='1' where compliantId ='$complaintID' and userId='$woekerID'";
   $insertqry=mysqli_query($con,$updateqry);

if(!mysqli_error($con))
  echo '<meta http-equiv="refresh" content="0; url=workerbox.php">';
}

  }



  }
 ?>
