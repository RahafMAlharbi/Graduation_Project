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

$qurey="count * from complaint";
$resultt = $conn->query($qurey);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="bootstrap5/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
  <!-- Scrollable modal -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- for font -->  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
  <script src="html5-qrcode.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="~/Scripts/jquery-3.4.1.js"></Script>


    <style>

        /* The popup form - hidden by default */
        .form-popup {
            display: none;

            bottom: 20%;
            right: 20%;
            left: 20%;

            border: 3px solid #f1f1f1;
            z-index: 9;
        }
        .yellow {
            background-color: #F4F6F6;
        }
        body {
            background: #FFFFFF
        }

        .height {
            height: 100vh
        }
        .modal-backdrop {
            z-index: -1;
        }

        /* Add styles to the form container */

        .hidden {
            position: absolute;
            visibility: hidden;
            opacity: 0;

        }

        input[type=checkbox]+label {
            color: #fff;
            padding: 8px;
            background-color: #a0b6d5;
            border-color: #a0b6d5;
            border-radius:3px;
        }

        input[type=checkbox]:checked+label {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
            padding: 8px;
            border-radius:3px;}




/*--------------------------------*/


.mytitelscss{
color: #676767;
font-family: 'Rambla';font-size: 18px
/* font-size: 20px; */

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
.mytitelreson{
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
div.headerDatails{
  background: #2F5972;
  height: 40px;
    width: 100%;
    padding-bottom:40px;
}
.mComplaintD{
 margin-bottom: 80px;
}
.closeX{
  margin-top: 90px;
}
.resonBox{
  margin-left: 20px;
  margin-right: 20px;
}
.resonBox{
  /* position: absolute; */
  margin-top: 20px;
  -webkit-box-sizing: 190px;
     -moz-box-sizing: 10px;
     box-sizing: 100px;
     margin-left: 10px;
     width: 100%;}
     /* search bar */
     .search-bar{
       width:270px;
       margin-top:100px;
       height: 35px;
     }

    </style>

</head>

<body class="">
  <!-- <div class="container ms-5 justify-content-center"> -->

  <!-- <div class="b-example-divider pt-5 pb-5 pe-5"> -->

  <div class="b-example-divider pt-5 pb-5 pe-5">
            <header class="p-3 ms-3 mb-3  border-bottom">
              <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                  <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">  <img src="img/MUQU.png" width="80" height="80" alt=""></svg>
                  </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">


            <!--  <img src="img/MUQU.png" width="80" height="80" alt="">-->
            <li ><a href="woheader.php" class="nav-link px-2 ps-5 link-secondary">Home</a></li>
                    <!--  <li><a href="Fcheader.php" class="nav-link px-2 link-dark">map</a></li>-->

                    <li ><a href="#" class="nav-link px-2 ps-5 link-dark">check Assign task</a></li>
                    <li ><a href="#" class="nav-link px-2 ps-5 link-dark">Statestc</a></li>

                  </ul>

                  <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                  </form>

                  <div class="dropdown text-end">
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
<div class="container position-relative mt-5 pt-5">
    <div class="col-md-12 position-absolute mt-5 ps-5 start-50 translate-middle">
        <div class="">
            <div class="">
                <div class="card-body ms-5 ">
                  <!-- <form method="post" id="form" action="workerbutton.php" class=""> -->
                    <form  id="form" name ="myFormName" action ="setStatusSolved.php" onsubmit="ajaxpost();"  method="POST" class="row g-3 needs-validation" >

                        <input type="hidden" name="comment" id="comment2">
                        <div class="">
                            <input type="text" id="myInput" class="search-bar form-control"  onkeyup="myFunction()" placeholder="Search for complaint id..">
                            <br/>
                              <br/>
                              <table  id="myTable" class=" table" >
                              <thead class="">
                              <tr>
                               <th><input type="checkbox" id="select-all" value="bar1" onClick="toggle(this)"  /></th>
                               <th scope="col">ID</th>
                               <th scope="col">Date</th>
                               <th scope="col">Worker</th>
                               <th scope="col">Completeness</th>
                               <th scope="col">Reason	</th>
                               </tr>
                              </thead>
                              <tbody>
                            <?php

                              while($row=$result->fetch_assoc()){
                                // $result1 = $conn->query($sql1);
                                echo"<tr>";
                                echo"<th scope='row'> <input type='checkbox'  class='box' name='box_".$row["complaintId"]."' id='box_".$row["complaintId"]."' onchange='callFunction();callFunction1()' onclick='enable(this);chk(this)' /></th>";
                                echo'
                                 <td name=name_"'.$row["complaintId"].'">
                                 <button id="YourID" type="button" name='.$row["complaintId"].' value='.$row["complaintId"].'
                                  class=" xc"data-toggle="modal" data-target="#exampleModal"
                                   onclick="selectRoomNum(this)">
                                 '.$row["complaintId"].'</button></td>';

                                echo"<td>".$row["date"]."</td>";
                                // echo"<td>".$row["category"]."</td>";
                                echo"<td>".$row["userName"]."</td>";
                                echo"<td>".$row["completeness"]."</td>";
                                echo"<td>".$row["reason"]."</td>";
                               echo"</tr>";
                            }
                              ?>
                              </tbody>
                              </table>
                              <input type="submit" value="Confirm" class="btn btn-primary" disabled id="Assign">
                              <input type="button" value="Reassign" class="btn btn-primary" disabled id=""  data-toggle="modal" disabled data-target="#exampleModal2" onclick="idcomp()">
                            </div>
                               </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
<div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog p-5">
        <div class="modal-content  csstext ">
          <div class="modal-header modelhedercss float-right ">
              <h5 class="mytitelreson">Reassign Complaint</h5>
              <div class="text-right"> <i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i> </div>
          </div>
          <form  id="formReassign" name ="FormName"  onsubmit="ajaxpostReassign()" method="POST" class="row g-3 pe-5 ps-5 needs-validation" >
            <!-- <form  id="form" name ="myFormName" action ="" onsubmit="ajaxpost()" method="POST" class="row g-3 needs-validation" novalidate> -->



                                          <div class="modal-body">
                                              <div>
                                                <!-- <select  class="form-select form-select-lg mb-2 form-control " aria-label=".form-select-lg example" id="workerSelect">
                                                </select> -->
                                                <div class="row">
                                                <h6 class="mytitelscss m-3"> pleas Select Worker</h6>
          </div>

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


                      </form>
            </div>
          </div>

          </div>



                            <!-- complaint detail -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content csstext">
                                        <div class="modal-header modelhedercss float-right">
                                          <a href="#" class="close closeX order-1" data-dismiss="modal" aria-label="close">&times;</a>

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
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary" onclick="selectRoomNum3(this)">Save changes</button> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- reassign window -->



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

                             // select all
                             $('#select-all').click(function(event) {
                                                                 if(this.checked) {
                                                                     // Iterate each checkbox
                                                                     $(':checkbox').each(function() {
                                                                         this.checked = true;
                                                                         // this.changBackground="#D7D0D0";
                                                                          $(this).parent().parent().css('background','#D7D0D0');
                                                                     });
                                                                 }
                                                                 else {
                                                                     $(':checkbox').each(function() {
                                                                         this.checked = false;
                                                                         $(this).parent().parent().css('background','');
                                                                     });
                                                                 }

                                                                 callFunction();
                                                                 callFunction1();
                                                             });
                                                             $('#select-all').click(function(event) {
                                                    if(this.checked) {
                                                        // Iterate each checkbox
                                                        $(':checkbox').each(function() {
                                                            this.checked = true;
                                                            // this.changBackground="#D7D0D0";
                                                             $(this).parent().parent().css('background','#D7D0D0');
                                                        });
                                                    }
                                                    else {
                                                        $(':checkbox').each(function() {
                                                            this.checked = false;
                                                            $(this).parent().parent().css('background','');
                                                        });
                                                    }

                                                    callFunction();
                                                    callFunction1();
                                                });

                            //??????????????
                            // coloring checked row
                            function chk(result) {
                            if (result.checked) {
                                result.parentNode.parentNode.style.backgroundColor = "#D7D0D0";
                                result.parentNode.parentNode.style.color = "black";
                            } else {
                                result.parentNode.parentNode.style.backgroundColor = "";
                                result.parentNode.parentNode.style.color = "";
                            }
                            }



                            //??????????????
                            // select all
                            // function toggle(source) {
                            //  var  checkboxes = document.getElementsByName('foo');
                            //   for(var i=0, n=checkboxes.length;i<n;i++) {
                            //     checkboxes[i].checked = source.checked;
                            //
                            //     chk(checkboxes[i]);
                            //     enable(checkboxes[i]);
                            //     //enable button
                            //     callFunction();
                            //   }
                            // }


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
</body>
</html>
