

<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="loginbase.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">userEmail:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password,"muqu");

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql= "SELECT userEmail,userPassword,userId ,usertype FROM facultymember  WHERE userEmail = '$username' AND  userPassword = '$password'
              UNION SELECT userEmail,userPassword,userId ,usertype FROM manager WHERE  userEmail = '$username' AND userPassword = '$password'
              UNION SELECT userEmail, userPassword,userId ,usertype FROM worker  WHERE userEmail = '$username' AND userPassword = '$password' ";
        $result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
        $check = mysqli_fetch_array($result);

           if($check['usertype'] =="1"){
                       header("location:Fcheader.php");
                   }
                   else if($check['usertype'] == "2"){
                       header("location:woheader.php");
                   }
                   else if($check['usertype'] == "3"){
                       header("location:maheader.php");
                   }
         // header("lcation:muqumap.php");
        }

        session_start();
         die( mysqli_error($conn));
        $_SESSION['userid'] = $check['userId'];


        ?>
