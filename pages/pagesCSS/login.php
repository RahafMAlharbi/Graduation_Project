<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
/* #login .container #login-row #login-column #login-box {
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
} */
.input-defult{
  background:#ffffff;
  width: 5px;
  height: 40px;
padding: 12px 20px;
box-sizing: border-box;
border: 1px solid rgb(212, 212, 212);
border-radius: 0px;
border: none;
border-bottom: 1px solid rgb(212, 212, 212);
}
/* input[type=text] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
} */
.input-failed {
  outline: 0;
  border-width: 0 0 2px;
  border-color: #b2bdc3;
  width: 300px;
  transition:all .8s;
}
.input-failed:focus {
  border-color: #3a7293
}
.login-div {
  border:#2F5972 solid 1px;
  color: #2F5972;

}




</style>



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
      UNION SELECT userEmail,userPassword,userId ,usertype FROM manager WHERE   userEmail = '$username' AND userPassword = '$password'
      UNION SELECT userEmail, userPassword,userId ,usertype FROM worker  WHERE userEmail = '$username' AND userPassword = '$password' ";
$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
$check = mysqli_fetch_array($result);

           if(isset($check)){
                if($check['usertype'] =="1"){
                            header("location:Fcheader.php");
                        }
                        else if($check['usertype'] == "2"){
                            header("location:woheader.php");
                        }
                        else if($check['usertype'] == "3"){
                            header("location:maheader.php");
                        }
                        session_start();
                        $_SESSION['userid'] = $check['userId'];
            }else{
              echo "<script>
                   var x = document.getElementById('error');
                   if (x.style.display == 'none') {
                       x.style.display = 'block';
                    }
                    </script>";
                 }
               }
?>


<!--Bootstrap CSS Reference-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!------ Include the above in your HEAD tag ---------->

<body>



<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login" class="">
        <h3 class="text-center  text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box container " class="col-md-12">
                        <form id="login-form container " class="form container login-div needs-validation" action="loginWithcss.php" method="post" novalidate>
                          <h3 class="text-center mt-5 ">Login</h3>
                           <div class="container ">
                               <div class="form-group row mt-5">
                                <label for="username " class="mb-3">User Email:</label><br>
                                <input type="text" name="username" id="username" class="input-failed" placeholder="user email"required>
                                <div class="invalid-feedback">
                                 Please enter your user email.
                                  </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="password" class="mb-3 mt-3">Password:</label><br>
                                <input type="password" name="password" id="password" class="input-failed" placeholder="password"required>
                                <div class="invalid-feedback">
                               Please enter your password.
                                  </div>
                                  <label for="remember-me" class="mt-5"><span><input id="remember-me" name="remember-me" type="checkbox"></span><span> Remember me</span> </label><br>

                            </div>
                            <div class="form-group row end-0 mt-5">
                                <input type="submit" name="submit" class="btn row btn-md" value="submit">
                            </div>
                            <div class="form-group row mt-5">
                              <div class="alert alert-danger" id="error" style="display:none;"  role="alert">
                                Invalid UserEmail or Password
                               </div>
                                 </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


<script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
/* #login .container #login-row #login-column #login-box {
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
} */
.input-defult{
  background:#ffffff;
  width: 5px;
  height: 40px;
padding: 12px 20px;
box-sizing: border-box;
border: 1px solid rgb(212, 212, 212);
border-radius: 0px;
border: none;
border-bottom: 1px solid rgb(212, 212, 212);
}
/* input[type=text] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
} */
.input-failed {
  outline: 0;
  border-width: 0 0 2px;
  border-color: #b2bdc3;
  width: 300px;
  transition:all .8s;
}
.input-failed:focus {
  border-color: #3a7293
}
.login-div {
  border:#2F5972 solid 1px;
  color: #2F5972;

}




</style>



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
      UNION SELECT userEmail,userPassword,userId ,usertype FROM manager WHERE   userEmail = '$username' AND userPassword = '$password'
      UNION SELECT userEmail, userPassword,userId ,usertype FROM worker  WHERE userEmail = '$username' AND userPassword = '$password' ";
$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
$check = mysqli_fetch_array($result);

           if(isset($check)){
                if($check['usertype'] =="1"){
                            header("location:Fcheader.php");
                        }
                        else if($check['usertype'] == "2"){
                            header("location:woheader.php");
                        }
                        else if($check['usertype'] == "3"){
                            header("location:maheader.php");
                        }
                        session_start();
                        $_SESSION['userid'] = $check['userId'];
            }else{
              echo "<script>
                   var x = document.getElementById('error');
                   if (x.style.display == 'none') {
                       x.style.display = 'block';
                    }
                    </script>";
                 }
               }
?>


<!--Bootstrap CSS Reference-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!------ Include the above in your HEAD tag ---------->

<body>



<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login" class="">
        <h3 class="text-center  text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box container " class="col-md-12">
                        <form id="login-form container " class="form container login-div needs-validation" action="loginWithcss.php" method="post" novalidate>
                          <h3 class="text-center mt-5 ">Login</h3>
                           <div class="container ">
                               <div class="form-group row mt-5">
                                <label for="username " class="mb-3">User Email:</label><br>
                                <input type="text" name="username" id="username" class="input-failed" placeholder="user email"required>
                                <div class="invalid-feedback">
                                 Please enter your user email.
                                  </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="password" class="mb-3 mt-3">Password:</label><br>
                                <input type="password" name="password" id="password" class="input-failed" placeholder="password"required>
                                <div class="invalid-feedback">
                               Please enter your password.
                                  </div>
                                  <label for="remember-me" class="mt-5"><span><input id="remember-me" name="remember-me" type="checkbox"></span><span> Remember me</span> </label><br>

                            </div>
                            <div class="form-group row end-0 mt-5">
                                <input type="submit" name="submit" class="btn row btn-md" value="submit">
                            </div>
                            <div class="form-group row mt-5">
                              <div class="alert alert-danger" id="error" style="display:none;"  role="alert">
                                Invalid UserEmail or Password
                               </div>
                                 </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


<script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
