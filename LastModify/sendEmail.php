<?php

	 $servername = "localhost";
	 $username = "root";
	 $password = "";

	 // Create connection
	 $conn = mysqli_connect($servername, $username, $password,"muqu");

	 if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	 }
	 $complainId=$_GET['complainId'];
	 // $idofuser=$_GET['idofuser'];
	 mysqli_select_db($conn,"muqu");


//get faculty member email and name
   $qury1= "SELECT complaint.idofuser , facultymember.userId , facultymember.userEmail , facultymember.userName
             FROM  complaint INNER JOIN facultymember
             ON complaint.idofuser=facultymember.userId
             WHERE complaint.complaintId='$complainId'";

             $result = $conn->query($qury1);
             while($row=$result->fetch_assoc()){

         echo $userEmail=$row["userEmail"];
         echo $userName=$row["userName"];

             }
echo $userEmail;
echo $userName;

use PHPMailer\PHPMailer\PHPMailer;


    $name ="Administrator ";// $_POST['name'];
    $email ="Bayader.2040@gmail.com";// $_POST['email'];
    $subject = "confirmation";//$_POST['subject'];
    $body = "my body 222";//$_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "Bayader.2040@gmail.com"; // put your email
    $mail->Password = '1234554321BB'; //  your pass
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settingss
    $mail->isHTML(true);
    $mail->setFrom($email, $name);

    $mail->addAddress("rahaf1418128@gmail.com");//resever email  form DB
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }


?>
