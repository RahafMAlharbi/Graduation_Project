<?php
// mysql connection000
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muqu";

$con = mysqli_connect($servername, $username, $password, $dbname) or die("Error: " . mysqli_error($con));

session_start();
$check['userId']=$_SESSION['userid'];
$userid= $check['userId'];
// fetch records saved =0 that Will be showing in the page
//and fk.saved='0'
$result = @mysqli_query($con, "SELECT * FROM complaint pk, assign fk where pk.complaintId =fk.compliantId and fk.saved='0'   ") or die("Error: " . mysqli_error($con));

echo(mysqli_error($con));

?>
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'> -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<title>Check Assign tasks</title>

  </head>
                                <style>
body {
    background: #eee
}

.height {
/* height: 100vh */}
             h6.mytitelscss{
             color: #676767;
             font-family: 'Rambla';font-size: 18px;

             }
             /* .hedermaargin{
               margin-right: 30px;
             }
             .heder-search{
               margin-right: 80px;
               margin-left: 20px;
             } */
             ul.nav li a, ul.nav li a:visited {
                        color: #2F5972 !important;
                        font-family: Roboto Condensed ;
                         font-size: 20px;}
                         ul.nav li a, ul.nav li a:hover {
                                    color: #747f86 !important;
                                    font-family: Roboto Condensed ;
                                     font-size: 20px;}
      </style>
                                <body oncontextmenu='return' class='snippet-body'>
                                  <!-- here2 -->

                                    <div class="b-example-divider pt- pe-5">
                                              <header class="  pb-3 border-bottom">
                                                <div class="container">
                                                  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                                                    <a href="/" class="d-flex align-items-center mb- mb-lg-0 text-dark text-decoration-none">
                                                      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">  <img src="img/MUQU.png" width="80" height="80" alt=""></svg>
                                                    </a>

                                                  <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">


                                              <!--  <img src="img/MUQU.png" width="80" height="80" alt="">-->
                                              <li ><a href="woheader.php" class="nav-link px-2 ps-5 hedermaargin link-secondary">Home</a></li>
                                                      <!--  <li><a href="Fcheader.php" class="nav-link px-2 link-dark">map</a></li>-->

                                                      <li ><a href="#" class="nav-link px-2 ps-5 hedermaargin link-dark">Check Assign Tasks</a></li>
                                                      <li ><a href="#" class="nav-link px-2 ps-5 hedermaargin link-dark">Statestcs</a></li>

                                                    </ul>

                                                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 heder-search">
                                                      <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                                                    </form>

                                                    <div class="dropdown text-end heder-search">
                                                      <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="img/person2.jpeg" alt="mdo" width="32" height="32" class="rounded-circle">
                                                      </a>
                                                      <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">


                                                        <!--<li><a class="dropdown-item" href="#">Profile</a></li>-->
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </header>
                                              </div>
                                    <div class="container position-relative ">
                                        <div class="col-md-12 position-absolute start-translate-middle">

                                                    <div class="card-body  ">
                                                      <form method="post" id="form" action="workerbutton.php" class="">
                                                            <input type="hidden" name="comment" id="comment2">
                                                            <div class="col col-md-12">
                                                                <input type="text" id="myInput" class="search-bar form-control"  onkeyup="myFunction()" placeholder="Search for complaint id..">
                                                                <br/>
                                                                  <br/>
                                                                <table class="table" id="myTable">
                                                                    <thead  >
                                                                    <tr>
                                                                      <th>  <label class="ontainer"><input type="checkbox" value="bar1"  onclick="toggle(this)"/><div class="heckmark"></div></label></th>

                                                                        <th scope="col">ID</th>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Category</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                                                        <tr>
                                                                          <td scope="row"><label class="ontainer"><input name="chk_id[]" type="checkbox" class="box"
                                                                           onchange="callFunction();callFunction1()"
                                                                           onclick="chk(this)" class="chkbox"
                                                                          value="<?php echo $row['complaintId']; ?>"/><div class="heckmark"></div></label></td>

                                                                            <?php echo '
                                                         <td name=name_"' . $row["complaintId"] . '">
                                                         <button id="YourID" type="button" name=' . $row["complaintId"] . ' value=' . $row["complaintId"] . '
                                                          class="xc" data-toggle="modal" data-target="#exampleModal"
                                                           onclick="selectRoomNum(this)"><b>
                                                         ' . $row["complaintId"] . '</b></button></td>'; ?>


                                                                            <input type="hidden" name="chk_complaint[]"
                                                                                   value="<?php echo $row['complaintId']; ?>"></td>

                                                                            <td><label><?php echo $row['date']; ?></label>
                                                                                <input type="hidden" name="chk_date[]" value="<?php echo $row['date']; ?>">
                                                                            </td>

                                                                            <td><label><?php echo $row['category']; ?></label>
                                                                                <input type="hidden" name="chk_category[]"
                                                                                       value="<?php echo $row['category']; ?>"></td>


                                                                            <td><input type="hidden" name="chk_wrkid[]"
                                                                                       value="<?php echo $row['userId']; ?>"></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                                <input type="submit" value="completed" name="submit" class="btn btn-primary choose_file"
                                                                       disabled="disabled" id="Assign">
                                                                <input type="button" value="uncompleted" class="btn btn-primary choose_file" disabled id=""
                                                                       data-toggle="modal" disabled data-target="#exampleModal2"
                                                                       onclick="idcomp();idcomp1()">
                                                                <!--
                                                                            <input type="checkbox" class="hidden" id="un" name="un" onclick="chk()">
                                                                            <label for="un">Uncompleted</label>

                                                                            <div class="form-popup" id="myForm">
                                                                              <p>What is the reason</p>
                                                                              <textarea name="comment" rows="3" cols="40"></textarea>
                                                                            </div> -->
                                                            </div>
                                                        </form>

                                            </div>
                                        </div>
                                    </div>



                                 <!-- Modal -->
                                 <!-- complaint detail -->
                                   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                           <div class="modal-content csstext">
                                               <div class="modal-header modelhedercss float-right">
                                                 <!-- <a href="#" class="close closeX order-1" data-dismiss="modal" aria-label="close">&times;</a> -->

                                                   <h5 class="mytiteldetails">complaint detail</h5>
                                                   <div class="text-right"> <i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i> </div>
                                               </div>
                                               <div class="modal-body">
                                                   <div>
                                                       <table class="table ">

                                                           <tbody id="Ctable">

                                                           </tbody>
                                                       </table>
                                                   </div>
                                               </div>
                                               <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary choose_file" data-dismiss="modal">Close</button>
                                                 <button type="button" class="btn btn-primary choose_file" onclick="selectRoomNum3(this)">Save changes</button> </div>
                                           </div>
                                       </div>
                                   </div>
                                <!-- <div class="container">
    <div class="height d-flex justify-content-center align-items-center"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> User details </button> </div>
</div> -->
<div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content  csstext ">
          <div class="modal-header modelhedercss ">
            <!-- <a href="#" class="close closeX order-1" data-dismiss="modal" aria-label="close">&times;</a> -->

              <h5 class=" mytitelreson">Uccompleted<h5>
                <div class="text-right"><i data-dismiss="modal" aria-label="Close" class="  fa fa-close"></i></div>

              </div>
                <div class="modal-body">
                <h6 class= "modal-title mytitelscss ">Please enter the reason</h6>

                <div class="form-outline divtext me-4">
                    <label>
                        <textarea onkeyup="getTheReason()"  placeholder="reason" class="form-control resonBox" rows="4" id="comment" rows="5" cols="54"></textarea>
                    </label>
                </div>
            </div>

                            <input type="hidden" readonly class="form-control-plaintext" value="" name="workerIdname"
                                   id="workerIDUncomliet"/>
                            <input type="hidden" readonly class="form-control-plaintext" value="" name="ClassroomN"
                                   id="compalintIDreassign"/>
                                   <div class="modal-footer">

                                         <button type="button" class="btn btn-secondary choose_file " data-dismiss="modal">Close</button>
                                         <button form="form" value="submit2" name="submit2" type="submit" class="btn btn-primary choose_file">Send</button>
                                     </div>
                        </div>
                      </div>

                      </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header float-right">
                <h5>User details</h5>
                <div class="text-right"> <i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i> </div>
            </div>
            <div class="modal-body">
                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Samso</td>
                                <td>Natto</td>
                                <td>@samso</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Tinor</td>
                                <td>Horton</td>
                                <td>@tinor_har</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mythor</td>
                                <td>Bully</td>
                                <td>@myth_tobo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button> </div>
        </div>
    </div>
</div>
<style>
body{
  margin: 50px;
}
         h6.mytitelscss{
         color: #676767;
         font-family: 'Rambla';font-size: 18px

         }
         h5.mytitelscs0{
           color: #2F5972;
           font-family: 'Roboto Mono';font-size: 17px;

           }
           h5.mytiteldetails{
             color: #F6F4F1;
             font-family: 'Roboto Mono';font-size: 17px;

             }

         tbody{
           background-color: #F6F4F1;
           color: #676767;
           font-family: 'Rambla';font-size: 15px ;


         }
         thead {
           background-color: #2F5972;
             color: #FFFFFF;
             font-family: 'Roboto Mono';font-size: 18px ;
         /* font-style: italic; */



           }

         /*تنسيق الديل والريزن */div .csstext{
           background: #F6F4F1;
         border-radius: 4px;
         border: 3px solid #2F5972;
         }
         h5.mytitelreson{
           color: #F6F4F1;
           font-family: 'Roboto Mono';font-size: 17px;

         }
         .xc
         {
           padding: 0;
           border: none;
           background: none;
           text-decoration: underline;
         }
         div.modelhedercss{
         background: #2F5972;
         height: 40px;
           width: 100%;
           border-radius: 00;


         }
         .search-bar{
           width:270px;
           margin-top:100px;
           height: 35px;
         }

         div.headerDatails{
         background: #2F5972;
         height: 40px;
           width: 100%;
           padding-bottom:40px;
         }
         .closeX{
           margin-top: 90px;
           /* margin-bottom: 100px; */
         }
         .select-css{
           width:100px;
         }

         .table-complaint {
           width: 900px;
         }
         .choose_file{
             position:relative;
             display:inline-block;
              /* bottom: 42px;
             left:125px; */
             border-radius:38px;
             border:#6F92A0 solid 1px;
             width:120px;
             height: 40px;
             padding: 4px 6px 4px 8px;
             font: normal 14px Myriad Pro, Verdana, Geneva, sans-serif;
             color: #edf1f7;
             margin-top: 2px;
             /* background:#2F5972 */
         }
         .btn-primary,
         .btn-primary:active,
         .btn-primary:visited,
         .btn-primary:active:hover,
         .btn-primary.active,
         .open > .dropdown-toggle.btn-primary  {
          background-color: #2F5972 !important;
          border-color: #2F5972 !important;
         }
         .btn-primary:hover{
             background-color: #6F92A0  !important;
             border-color: #6F92A0 !important;


         }
         .btn-secondary,
         .btn-secondary:active,
         .btn-secondary:visited,
         .btn-secondary:active:hover,
         .btn-secondary.active,
         .open > .dropdown-toggle.btn-secondary  {
          background-color: white !important;
          border-color: white !important;
          color: #2F5972;
         }
         .btn-secondary:hover{
             background-color: #2F5972  !important;
             border-color: #edf1f7 !important;
             color: #edf1f7;
         }
         .btn-secondary:disabled{
            color: #2F5972;
         }
         /* From uiverse.io by @martinval9 */
         /* Hide the default checkbox */
         .ontainer input {
         position: absolute;
         opacity: 0;
         cursor: pointer;
         height: 0;
         width: 0;
         }

         .ontainer {
         display: block;
         position: relative;
         cursor: pointer;
         font-size: 17px;
         user-select: none;
         }

         /* Create a custom checkbox */
         .heckmark {
         position: relative;
         top: 0;
         left: 0;
         height:  17px;
         width: 18px;
         background-color: #ccc;
         border-radius: 25px;
         transition: 0.15s;
         }

         /* When the checkbox is checked, add a blue background */
         .ontainer input:checked ~ .heckmark {
         background-color: #2F5972;
         border-radius: 25px;
         transition: 0.15s;
         }

         /* Create the checkmark/indicator (hidden when not checked) */
         .heckmark:after {
         content: "";
         position: absolute;
         display: none;
         }

         /* Show the checkmark when checked */
         .ontainer input:checked ~ .heckmark:after {
         display: block;
         }

         /* Style the checkmark/indicator */
         .ontainer .heckmark:after {
         left: 0.48em;
         top: 0.16em;
         width: 0.2em;
         height: 0.5em;
         border: solid white;
         border-width: 0 0.15em 0.15em 0;
         transform: rotate(40deg);
         }
         .newclss{
         background-color: black;
         }
         .table-wrapper {
  position:relative;
}
.table-scroll {
  height:150px;
  overflow:auto;
  margin-top:20px;
}
.table-wrapper table {
  width:100%;

}
.table-wrapper table * {
  background:yellow;
  color:black;
}
.table-wrapper table thead th .text {
  position:absolute;
  top:-20px;
  z-index:2;
  height:20px;
  width:35%;
  border:1px solid red;
}

/* tr {
width: 100%;
display: inline-table;
table-layout: fixed;
}

table{
 height:300px;              // <-- Select the height of the table
 display: block;
}
tbody{
  overflow-y: scroll;
  height: 200px;            //  <-- Select the height of the body
  width: 100%;
  position: absolute;
} */
/* .tableFixHead
 { overflow: auto; height: 100%; }
.tableFixHead thead th
 { position: sticky; top: 0; z-index: 1;
 background:#2F5972; }

/* Just common table stuff. Really. */
table  { border-collapse: collapse; width: 100%; }
th, td { padding: 8px 16px; }
th     { background:#eee; } */
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
  	foreach($_POST as $key => $value) {
  		if (strpos($key, 'box_') === 0) {
  			$complainID = str_replace("box_", '', $key) ;
  			$pickerName = "SelectPicker_".$complainID;
  			$employeeId= $_POST[$pickerName];
  		$insertSql = "INSERT INTO assign (userId ,compliantId )
  					VALUES ( $employeeId, $complainID  )";
  			if ($conn->query($insertSql) === TRUE) {
  			$updateSql = "UPDATE complaint
  						SET status = 'Under Processing'
  						WHERE complaintid = $complainID ";
  				if ($conn->query($updateSql) === TRUE) {

  				}

  			}

  				if(!mysqli_error($conn))
  				  echo '<meta http-equiv="refresh" content="0; url=anothercopyassign.php">';
  		}
  	}

?>
   <script>


                                   function selectRoomNum(strq) {
                                       var str = strq.value;

                                       if (str == "") {
                                           document.getElementById("exampleModal").innerHTML = "";
                                           return;
                                       }
                                       var xmlhttp = new XMLHttpRequest();
                                       xmlhttp.onreadystatechange = function () {
                                           if (this.readyState == 4 && this.status == 200) {


                                               document.getElementById("Ctable").innerHTML = this.responseText;

                                           }
                                           ;
                                       }
                                       xmlhttp.open("GET", "getComplaint.php?q=" + str, true);
                                       xmlhttp.send();

                                   }

                                   $(document).ready(function () {
                                       $('.chkbox').change(function () {
                                           var ckd = $('.chkbox:checked').length
                                           //alert(ckd);
                                           if (ckd > 0) {
                                               $('#save').prop("disabled", false);

                                           } else {
                                               $('#save').prop("disabled", true);
                                           }
                                       });
                                   });
                              //select all
                                   function toggle(source) {
                                    var  checkboxes = document.getElementsByClassName("box");
                                     for(var i=0, n=checkboxes.length;i<n;i++) {
                                       checkboxes[i].checked = source.checked;
                                       chk(checkboxes[i]);

                                       callFunction();
                                       callFunction1();

                                     }
                                   }

                                   function mycomplaininfo() {

                                       var allCheBox = document.querySelectorAll(".box");
                                       for (var checkboxee of allCheBox) {
                                           var ourboxx = checkboxee.id;
                                           var ourBoxId = ourboxx.replace(/\D+/, "");
                                           var f = "129";

                                       }
                                   }



                                   function myFunction() {
                                       var input, filter, table, tr, td, i, txtValue;
                                       input = document.getElementById("myInput");
                                       filter = input.value.toUpperCase();
                                       table = document.getElementById("dev-table");
                                       tr = table.getElementsByTagName("tr");
                                       for (i = 0; i < tr.length; i++) {
                                           td = tr[i].getElementsByTagName("td")[1];
                                           if (td) {
                                               txtValue = td.textContent || td.innerText;
                                               if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                   tr[i].style.display = "";
                                               } else {
                                                   tr[i].style.display = "none";
                                               }
                                           }
                                       }
                                   }


                                   function callFunction() {
                                       var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                                       var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

                                       if (checkedOne) {
                                           document.querySelectorAll('input[type="submit"]')[0].disabled = false;
                                       } else
                                           document.querySelectorAll('input[type="submit"]')[0].disabled = true;
                                   }

                                   // for enable button2
                                   function callFunction1() {
                                       var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                                       var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

                                       if (checkedOne) {
                                           document.querySelectorAll('input[type="button"]')[0].disabled = false;
                                       } else
                                           document.querySelectorAll('input[type="button"]')[0].disabled = true;
                                   }


                                   function enable(boxx) {

                                       var ourbox = boxx.id;
                                       var ourBoxId = ourbox.replace(/\D+/, "");
                                       let part1 = "SelectPicker_";
                                       let result = part1.concat(ourBoxId);
                                       var ds = document.getElementById(result);
                                       ds.disabled = boxx.checked ? false : true;
                                       if (!ds.disabled) {
                                           ds.focus();
                                       } else {

                                           ds.value = 0;

                                       }
                                       var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

                                       if (checkboxes.length > 0) {
                                           document.querySelectorAll('input[type="submit"]')[0].disabled = false;


                                       } else
                                           document.querySelectorAll('input[type="submit"]')[0].disabled = true;

                                   }

                                 //change color
                                   function chk(result) {
                                       if (result.checked) {
                                           result.parentNode.parentNode.parentNode.style.backgroundColor = "";
                                           result.parentNode.parentNode.parentNode.style.color = "black";
                                       } else {
                                           result.parentNode.parentNode.parentNode.style.backgroundColor = "";
                                           result.parentNode.parentNode.parentNode.style.color = "";
                                       }
                                   }





                                   function ajaxpost() {
   // (A) GET FORM DATA
                                       var form = document.getElementById("form");
                                       var data = new FormData(form);

   // (B) AJAX
                                       var xhr = new XMLHttpRequest();
                                       xhr.open("POST", "SetComlintdone.php");
   // What to do when server responds
                                       xhr.onload = function () {
                                           console.log(this.response);
                                       };
                                       xhr.send(data);

   // (C) PREVENT HTML FORM SUBMIT
                                       return false;
                                   }

                                   //post Reassign form2 ajax
                                   function ajaxpostReassign() {
                                       var form1 = document.getElementById("formReassign");
                                       var data1 = new FormData(form1);

   // (B) AJAX
                                       var xhr = new XMLHttpRequest();
                                       xhr.open("POST", "uncompletepost.php");
   // What to do when server responds
                                       xhr.onload = function () {
                                           console.log(this.response);
                                       };
                                       xhr.send(data1);

   // (C) PREVENT HTML FORM SUBMIT
                                       return false;
                                   }

                                   function idcomp() {
                                       var allCheckedBox = document.querySelectorAll('input[type="checkbox"]:checked');
                                       for (var checkbox of allCheckedBox) { // to check if it select an employee
                                           var ourbox = checkbox.id;
                                           var ourBoxId = ourbox.replace(/\D+/, "");
                                           // alert(ourBoxId);
                                           document.getElementById("compalintIDreassign").value = ourBoxId;

                                       }
                                   }



                                   ////////
                                   function idcomp1() {
                                       var allCheckedBox = document.querySelectorAll('input[type="checkbox"]:checked');
                                       for (var checkbox of allCheckedBox) { // to check if it select an employee
                                           var ourbox = checkbox.id;
                                           var ourBoxId = ourbox.replace(/\D+/, "");

                                           var ds = document.getElementById("Worker").value;
                                           document.getElementById("workerIDUncomliet").value = ds;


                                       }
                                   }






                               </script>
       <script>
           function getTheReason() {
               let comment = $("#comment").val();
               $("#comment2").val(comment)
           }
           /////////
           function myFunction() {
     var input, filter, table, tr, td, i, txtValue;
     input = document.getElementById("myInput");
     filter = input.value.toUpperCase();
     table = document.getElementById("myTable");
     tr = table.getElementsByTagName("tr");
     for (i = 0; i < tr.length; i++) {
       td = tr[i].getElementsByTagName("td")[1];
       if (td) {
         txtValue = td.textContent || td.innerText;
         if (txtValue.toUpperCase().indexOf(filter) > -1) {
           tr[i].style.display = "";
         } else {
           tr[i].style.display = "none";
         }
       }
     }
   }


  </script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'></script>
                                </body>
                            </html>
