
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
  	$prodname=$_POST['chk_wrkid'][$key];
  	$prod_price= $_POST['chk_complaint'][$key];
  	$prod_qty= $_POST['chk_category'][$key];

   $insertqry="INSERT INTO `deal`(`userId`, `complaintId`, `completeness`) VALUES ('$prodname','$prod_price','$prod_qty')";
   $insertqry=mysqli_query($con,$insertqry);

}

  }



  }
 ?>
