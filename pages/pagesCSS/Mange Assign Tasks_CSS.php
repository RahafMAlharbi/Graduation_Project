<?php
// mysql connection000
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"muqu");

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// $qury="select complaintid , date , category from complaint where status='Not Processed'";//Under Processing
$qury= "SELECT complaint.complaintId , complaint.status, complaint.date , complaint.category , deal.userId , deal.completeness ,deal.reason , worker.userId,worker.userName
        FROM  complaint INNER JOIN deal
        ON complaint.complaintId=deal.complaintId
        INNER JOIN worker
        ON worker.userId=deal.userId
        -- RIGHT JOIN deal
        WHERE complaint.status='Under Processing'";

$result = $conn->query($qury);

?>
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=0.80'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'> -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<title>Mange Assign Tasks</title>

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
                                  <div class="b-example-divider pt-3 pb- pe-5 ">

                                    <header class="p-3 ms-3 mb- border-bottom ps-1">
                                      <div class="container">
                                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                                          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">  <img src="img/MUQU.png" width="80" height="80" alt=""></svg>
                                          </a>

                                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">


                                    <!--  <img src="img/MUQU.png" width="80" height="80" alt="">-->
                                    <li ><a href="maheader.php" class="nav-link px-2 nav ps-5 hedermaargin link-secondary">Home</a></li>
                                            <!--  <li><a href="Fcheader.php" class="nav-link px-2 link-dark">map</a></li>-->

                                            <li ><a href="#" class="nav-link px-2 ms-5 hedermaargin link-dark">Assign Tasks</a></li>
                                            <li ><a href="#" class="nav-link px-2 ms-5  hedermaargin link-dark">Mange Assign Tasks</a></li>
                                            <li ><a href="#" class="nav-link px-2 ms-5  hedermaargin link-dark">Make Momplaint</a></li>
                                            <li ><a href="#" class="nav-link px-2 ms-5 hedermaargin  link-dark">Statestcs</a></li>
                                          </ul>

                                          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 heder-search">
                                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                                          </form>

                                          <div class="dropdown text-end heder-search">
                                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                              <img src="img/person3.jpeg" alt="mdo" width="32" height="32" class="rounded-circle">
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




                                    <!-- here2 -->
                                <div class="container position-relative table- ">
                                  <!-- here2 -->
                                    <div class="col-md-12 position-absolute mt- start-translate-middle ">

                                                <div class="card-body ">
                                                  <form  id="form" name ="myFormName" action ="setStatusSolved.php" onsubmit="ajaxpost();"  method="POST" class="row g-3 needs-validation" >
                                                    <input type="hidden" name="comment" id="comment2">

                                                    <input type="text" id="myInput" class="search-bar form-control"  onkeyup="myFunction()" placeholder="Search for complaint id..">
                                       <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for complaint id.." > -->

                                       <br/>
                                       <br/>
                                       <!-- <div class="tableFixHead"> -->
                                         <table  id="myTable" class="table" >
                                         <thead class="">
                                         <tr>
                                           <!-- here -->
                                  <th><label class="ontainer"><input type="checkbox"  value="bar1" onClick="toggle(this)"  /><div class="heckmark"></th>

                                    <th scope="col">ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Worker</th>
                                    <th scope="col">Completeness</th>
                                    <th scope="col">Reason	</th>
                                          </tr>
                                         </thead>
                                         <tbody class="" >
                                       <?php

                                                                     while($row=$result->fetch_assoc()){
                                                                       // $result1 = $conn->query($sql1);
                                                                       echo"<tr>";
                                                                       echo"<td> <label class='ontainer'><input type='checkbox' class='box' name='box_".$row["complaintId"]."' id='box_".$row["complaintId"]."' onchange='callFunction();callFunction1()' onclick='chk(this)' /> <div class='heckmark'></div></label></td>";
                                                                       echo'
                                                                        <td name=name_"'.$row["complaintId"].'">
                                                                        <button id="YourID" type="button" name='.$row["complaintId"].' value='.$row["complaintId"].'
                                                                         class=" xc"data-toggle="modal" data-target="#exampleModal"
                                                                          onclick="selectRoomNum(this)">
                                                                        '.$row["complaintId"].'</button></td>';
                                                                       echo"<td>".$row["date"]."</td>";
                                                                       echo"<td>".$row["userName"]."</td>";
                                                                       echo"<td>".$row["completeness"]."</td>";
                                                                       echo"<td>".$row["reason"]."</td>";
                                                                      echo"</tr>";
                                                                   }
                                                                     ?>
                                                                     </tbody>
                                                                     </table>
                                                                     <input type="submit" value="Confirm" class="btn btn-primary choose_file" disabled id="Assign">
                                                                     <input type="button" value="Reassign" class="btn btn-primary choose_file" disabled id=""  data-toggle="modal" disabled data-target="#exampleModal2" onclick="idcomp()">
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

                                   <div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog p-5">
                                           <div class="modal-content  csstext ">
                                             <div class="modal-header modelhedercss float-right ">

                                                 <h5 class="mytitelreson">Reassign Complaint</h5>
                                                 <div class="text-right">
                                                   <i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i> </div>
                                             </div>
                                             <form  id="formReassign" name ="FormName"  onsubmit="ajaxpostReassign()" method="POST" class="row g-3 pe-5 ps-5 needs-validation" >
                                               <!-- <form  id="form" name ="myFormName" action ="" onsubmit="ajaxpost()" method="POST" class="row g-3 needs-validation" novalidate> -->



                                                                             <div class=" row justify-content-center modal-body">
                                                                                 <div class="col-12">
                                                                                   <!-- <select  class="form-select form-select-lg mb-2 form-control " aria-label=".form-select-lg example" id="workerSelect">
                                                                                   </select> -->
                                                                                   <!-- <div class="row"> -->
                                                                                   <h6 class="mytitelscss m-3"> Pleas Select Worker</h6>


                                                                                   <?php
                                                                                   $servername = "localhost";
                                                                                   $username = "root";
                                                                                   $password = "";
                                                                                   $dbname = "muqu";

                                                                                   $con = mysqli_connect($servername, $username, $password, $dbname);
                                                                                   if (!$con) {
                                                                                     die('Could not connect: ' . mysqli_error($con));
                                                                                   }

                                                                                   mysqli_select_db($con,$dbname);
                                                                                   $sql="SELECT * FROM worker";


                                                                                   $result = mysqli_query($con,$sql);
                                                                                   ?>
                                                                                   <?php

                                                                                   $sql1 = "SELECT userId,userName FROM worker";



                                                                                              $result1 = $con->query($sql1);
                                                                                               // echo" <select  class='form-select'>";
                                                                                               echo"<select  class='form-select form-control' id='SelectPicker_' name='SelectPicker_'>";

                                                                                                          echo "<option class='' name='W' value='".$row1["userId"]. "'>".$row1["userName"]." Select Worker</option>";

                                                                                                          // echo "<option value='0' class=''>select worker </option>";

                                                                                               while($row1=$result1->fetch_assoc()){


                                                                                                         echo "<option class='' name='W' value='".$row1["userId"]. "'>".$row1["userName"]."</option>";
                                                                                                      }
                                                                                                     echo"</select>";
                                                                                    ?>

                                                                                    </div>
                                             <input type="hidden" readonly class="form-control-plaintext" value="" name="ClassroomN" id="compalintIDreassign"></input>

                                                                             </div>
                                                                             <div class="modal-footer">
                                                                               <!-- <input type="submit" value="Confirm" class="btn btn-primary" disabled id="Assign"> -->

                                                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                             <button type="submit" class="btn btn-primary" onclick="selectRoomNum2()">Save changes</button>
                                                                               <!-- <input type="submit" value="reassign" class="btn btn-primary"  id="Assign">
                                                                               <input type="submit" value="later" class="btn btn-primary"  id="Assign"> -->
                                                                              </div>

                                    </div>
                                                         </form>
                                               </div>
                                             </div>

                                             </div>

<!-- Modal -->

<style>
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

         /*?????????? ?????????? ?????????????? */div .csstext{
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




   <script>

   // ajax for get complaint
   function selectRoomNum(strq){
     var str= strq.value;

       if (str=="") {
     document.getElementById("exampleModal").innerHTML="";
     return;
   }
   var xmlhttp=new XMLHttpRequest();
   xmlhttp.onreadystatechange=function() {
     if (this.readyState==4 && this.status==200) {


       document.getElementById("Ctable").innerHTML=this.responseText;

     };
   }
   xmlhttp.open("GET","getComplaint.php?q="+str,true);
   xmlhttp.send();

   }


  // choose worker
  function LoadA()
  {
  console.log("hi");

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
  document.getElementById("workerSelect").innerHTML = this.responseText;
  }
  };
  xmlhttp.open("GET","getRoom.php",true);
  xmlhttp.send();

  }
  function idcomp(){
  var allCheckedBox =document.querySelectorAll('input[type="checkbox"]:checked');
  for (var checkbox of allCheckedBox) { // to check if it select an employee
  var ourbox = checkbox.id;
  var ourBoxId = ourbox.replace(/\D+/,"");
  // alert(ourBoxId);
  document.getElementById("compalintIDreassign").value= ourBoxId;

  }}

  function selectRoomNum2(str){

    // var str= strq.value;
      if (str=="") {
    document.getElementById("exampleModal").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {


      document.getElementById("Ctable").innerHTML=this.responseText;

    };
  }
  xmlhttp.open("GET","getComplaint0.php?q="+str,true);
  xmlhttp.send();
  }

  // ???? ???????? ?????? ????????
    function validateMyForm(event)
           {
      var allCheckedBox =document.querySelectorAll('input[type="checkbox"]:checked');
      for (var checkbox of allCheckedBox) { // to check if it select an employee
        var ourbox = checkbox.id;
        var ourBoxId = ourbox.replace(/\D+/,"");

        let part1 = "SelectPicker_";
        let result = part1.concat(ourBoxId);
        var ds =document.getElementById(result);
        var strUser = ds.options[ds.selectedIndex].value;
        console.log("hi");


        //var strUser1 = e.options[e.selectedIndex].text;
        if(strUser==0)
        {
           ds.classList.add("is-invalid");
           ds.focus();

          event.preventDefault();
          event.stopPropagation();
          //window.history.back();
          return false;
        }else{

          ds.classList.remove("is-invalid");

        }

              // returnToPreviousPage();
      }
               return true;

           }

  // search
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


  // for enable button
  function callFunction() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

  if (checkedOne) {
   document.querySelectorAll('input[type="submit"]')[0].disabled = false;
  }	else
   document.querySelectorAll('input[type="submit"]')[0].disabled = true;
  }
  // for enable button2
  function callFunction1() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

  if (checkedOne) {
   document.querySelectorAll('input[type="button"]')[0].disabled = false;
  }	else
   document.querySelectorAll('input[type="button"]')[0].disabled = true;
  }


  // dropdown enabled when row checked
  function enable(boxx) {

   var ourbox = boxx.id;
   var ourBoxId = ourbox.replace(/\D+/,"");
   let part1 = "SelectPicker_";
   let result = part1.concat(ourBoxId);
   var ds =document.getElementById(result);
  ds.disabled=boxx.checked ? false : true;
  if(!ds.disabled){
    ds.focus();
  }else {

     ds.value = 0 ;
  }
  var checkboxes = document. querySelectorAll('input[type="checkbox"]:checked');

  if(checkboxes. length> 0 ){
      document.querySelectorAll('input[type="submit"]')[0].disabled = false;


  }else
  document.querySelectorAll('input[type="submit"]')[0].disabled = true;

   }
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




  // coloring checked row
  function chk(result) {
  if (result.checked) {
      result.parentNode.parentNode.style.backgroundColor = "";
      result.parentNode.parentNode.parentNode.style.color = "black";
  } else {
      result.parentNode.parentNode.style.backgroundColor = "";
      result.parentNode.parentNode.parentNode.style.color  = "";
  }
  }





  function ajaxpostReassign(){
  var form1 = document.getElementById("formReassign");
  var data1 = new FormData(form1);

  // (B) AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST","RassignPost.php");
  // What to do when server responds
  xhr.onload = function () { console.log(this.response); };
  xhr.send(data1);

  // (C) PREVENT HTML FORM SUBMIT
  return false;
  }

  </script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'></script>
                                </body>
                            </html>
