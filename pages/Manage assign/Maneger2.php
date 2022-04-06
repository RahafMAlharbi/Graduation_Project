<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
         <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <script src="bootstrap5/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

         <!-- Latest compiled and minified JavaScript -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
         <script src="html5-qrcode.min.js"></script>
         <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
         <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
         <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

         <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

           <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


           <script src="~/Scripts/jquery-3.4.1.js"></Script>
           </head>


         <style>
         .yellow {
           background-color: #F4F6F6;
         }
         body {
             background: #eee
         }

         .height {
             height: 100vh
         }
         .modal-backdrop {
           z-index: -1;
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
         // $qury="select complaintid , date , category from complaint where status='Not Processed'";//Under Processing
         $qury= "SELECT complaint.complaintId , complaint.status, complaint.date , complaint.category , deal.userId , deal.completeness ,deal.reason , worker.userId,worker.userName
                   FROM  complaint INNER JOIN deal
                   ON complaint.complaintId=deal.complaintId
                   INNER JOIN worker
                   ON worker.userId=deal.userId
                   -- RIGHT JOIN deal
                   WHERE complaint.status='Under Processing'";

                  // $qury= "SELECT complaint.complaintId , complaint.status, complaint.date , complaint.category , deal.userId , deal.completeness ,deal.reason , worker.userId , worker.userName,assign.userId,assign.compliantId
                  //          FROM  complaint INNER JOIN assign
                  //          ON complaint.complaintId=assign.compliantId
                  //          INNER JOIN worker
                  //          ON worker.userId=.userId
                  //          INNER JOIN deal
                  //          ON assign.userId=deal.userId
                  //          -- RIGHT JOIN deal
                  //          WHERE complaint.status='Under Processing'";
                  //

         $result = $conn->query($qury);

         $qurey="count * from complaint";
         $resultt = $conn->query($qurey);
          ?>
<body>
         	<header class="navbar navbar-expand-md navbar-dark bd-navbar" > </header>

          <div class="container-fluid">
         		<div class="row justify-content-center ">
         			<div class="col-md-8">
         			<div class="card text-left">
         			  <div class="card-header">
         				<h2> Manege Task</h2>
         			  </div>
         			  <div class="card-body">
         				 <form  id="form" name ="myFormName" action ="setStatusSolved.php" onsubmit="ajaxpost();"  method="POST" class="row g-3 " "needs-validation">
         									<div class="col col-md-12">
         				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for complaint id.." >
         				<br/>
         				<br/>
         				  <table  id="myTable" class="table" >
         				  <thead class="table-light">
         					<tr>
         					 <th><input type="checkbox" id="select-all" value="bar1" onClick="toggle(this)"  /></th>
         					 <th>ID</th>
         					 <th>Date</th>
         					 <!-- <th>Catogry</th> -->
         					 <th>Worker</th>
                   <th>Completeness</th>
                   <th>Reason	</th>
         				   </tr>
         				  </thead>
         				  <tbody>
         				<?php
         				// $sql1 = "SELECT userId,userName FROM worker";
                 // $sql1 = "SELECT userId,userName FROM worker,assign WHERE worker.userId==assign.userId";

         				//$rowcount1=mysqli_num_rows($result1);
// $modal="modal";
// $exampleModal="'#'exampleModal";
         					while($row=$result->fetch_assoc()){
         						// $result1 = $conn->query($sql1);
         						echo"<tr>";
         						echo"<td> <input type='checkbox'  class='box' name='box_".$row["complaintId"]."' id='box_".$row["complaintId"]."' onchange='callFunction();callFunction1()' onclick='enable(this);chk(this)' /></td>";
                    // echo'<td> <input type="checkbox"  class="box" name='.$row["complaintId"].' id='.$row["complaintId"].' onchange="callFunction();callFunction1()" onclick="enable(this);chk(this)" /></td>';

                  //button for info window
                    // $val="'.$row["complaintId"].'";
                    echo'
                     <td name=name_"'.$row["complaintId"].'">
                     <button id="YourID" type="button" name='.$row["complaintId"].' value='.$row["complaintId"].'
                      class="btn btn-primary"data-toggle="modal" data-target="#exampleModal"
                       onclick="selectRoomNum(this)">
                     '.$row["complaintId"].'</button></td>';




                  	echo"<td>".$row["date"]."</td>";
         						// echo"<td>".$row["category"]."</td>";
                    echo"<td>".$row["userName"]."</td>";
                    echo"<td>".$row["completeness"]."</td>";
                    echo"<td>".$row["reason"]."</td>";

         						// echo"<td> <select class='form-select' id='SelectPicker_".$row["complaintId"]."' name='SelectPicker_".$row["complaintId"]."' disabled>";
         						// echo "<option value='0'   >select worker </option>";

         						// while($row1=$result1->fetch_assoc()){
                   //
                   //
         						// 	 echo "<option value='".$row1["userId"]. "'>".$row1["userName"]."</option>";
         						// }
         					 // echo"</select></td>";
         					 echo"</tr>";
         				}
         				  ?>
         				  </tbody>
         				  </table>
         					<input type="submit" value="Confirm" class="btn btn-primary" disabled id="Assign">
                  <input type="button" value="Reassign" class="btn btn-primary" disabled id=""  data-toggle="modal" disabled data-target="#exampleModal2" onclick="idcomp()">
                  <!-- <input type="button"onclick="selectRoomNum2()"> -->

                  <!-- <input type="button" value="Assign" class="btn btn-primary" disabled id="Assign" onclick="selectRoomNum2()"> -->

                </div>

         					 </form>
         					</div>
         				</div>
         			</div>
         		</div>
         	</div>
<!-- reassign window -->
<form  id="formReassign" name ="FormName"  onsubmit="ajaxpostReassign()" method="POST" class="row g-3 needs-validation" >
  <!-- <form  id="form" name ="myFormName" action ="" onsubmit="ajaxpost()" method="POST" class="row g-3 needs-validation" novalidate> -->

                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header float-right">
                                    <h5>Reassign Complaint</h5>
                                    <div class="text-right"> <i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i> </div>
                                </div>
                                <div class="modal-body">
                                    <div>
                                      <!-- <select  class="form-select form-select-lg mb-2 form-control " aria-label=".form-select-lg example" id="workerSelect">
                                      </select> -->
                                      <h3>Select Worker</h3>

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
                                                  echo"<select  class='form-select' id='SelectPicker_' name='SelectPicker_'>";

                                                             echo "<option class='' name='W' value='".$row1["userId"]. "'>".$row1["userName"]."</option>";

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
                  </div>


                  <!-- reassign window -->
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
          </div>
<div id="message">

</div>
<?php
// pre_r($_POST);
// function pre_r(){
// 	if ( defined('PRE_R') && PRE_R !== true ){
// 		return;
// 	}
// 	foreach (func_get_args() as $arg) {
// 		echo '<pre style="display:block">';
// 		print_r($arg);
// 		echo '</pre>';
// 	}
// }
?>
<?php
	// $servername = "localhost";
  //   $username = "root";
  //   $password = "";
  //
  //   // Create connection
  //   $conn = mysqli_connect($servername, $username, $password,"muqu");
  //
  //   if (!$conn) {
	// 	die("Connection failed: " . mysqli_connect_error());
	// }
  //
	// foreach($_POST as $key => $value) {
	// 	if (strpos($key, 'box_') === 0) {
	// 		$complainID = str_replace("box_", '', $key) ;
	// 		$pickerName = "SelectPicker_".$complainID;
  //
  //
	// 			 '<br/>'.$updateSql = "UPDATE complaint
	// 					SET status = 'solved'
	// 					WHERE complaintid = $complainID ";
	// 			if ($conn->query($updateSql) === TRUE) {
  //
	// 			   // else {
	// 			   //     echo "Error: " . $sql . "<br>" . $conn->error;
	// 			   //   }
  //
	// 		}
	// 	}
	// }
?>

<?php
// 	$servername = "localhost";
//     $username = "root";
//     $password = "";
//
//     // Create connection
//     $conn = mysqli_connect($servername, $username, $password,"muqu");
//
//     if (!$conn) {
// 		die("Connection failed: " . mysqli_connect_error());
// 	}
//
//
// 			// $complainID = str_replace("box_", '', $key) ;
//       $pickerName = "SelectPicker_";
//     $employeeId= $_POST[$pickerName];
//
// 			// $employeeId = $_POST["W"];
//       // $pickerName = "SelectPicker_".$complainID;
//
//       $complainID= $_POST["ClassroomN"];
// echo "<h2>" . $employeeId . "</h2>";
// echo "<h2>" . $complainID . "</h2>";
//         //
// 				echo '<br/>'.$updateSql = "UPDATE assign SET userId=$employeeId,compliantId=$complainID WHERE compliantId=$complainID";
//
//           // echo '<br/>'.$insertSql = "INSERT INTO assign (userId ,compliantId )
// 					// VALUES ( $employeeId, $complainID  )";
//           				// echo '<br/>'.$updateSql = "UPDATE complaint
//           				// 		SET status = 'Under Processing'
//           				// 		WHERE complaintId = $complainID ";
//                       if ($conn->query($updateSql) === TRUE) {
//                         echo "SUCCSED: " ;
//
//     				}

?>

<!-- <!doctype html>
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
		</html> -->

          </body>
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
////////////////////////////////
// function getCheckValue{
//   const ckb = document.querySelectorAll("#checkbox1 input[type=checkbox]");
//
// [...ckb].forEach( el => {
//
//   if( el.checked ) {
//     // Is checked!
//     console.log( el.value )
//     el.closest("label").style.background = "gold";
//   } else {
//     // Not checked one
//     // ... do something else
//     el.closest("label").style.background = "gray";
//   }
//
// });
// }

// const js = document.querySelector('#checkbox1');
//     const bt = document.querySelector('#bt1');
//     bt.onclick = () => {
//        alert(js.name);
//
//     };

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

// ما يضغط لين سلكت
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
                     // second button
                     // function validateMyForm(event)
                     //        {
                     //   var allCheckedBox =document.querySelectorAll('input[type="checkbox"]:checked');
                     //   for (var checkbox of allCheckedBox) { // to check if it select an employee
                     //     var ourbox = checkbox.id;
                     //     var ourBoxId = ourbox.replace(/\D+/,"");
                     //     let part1 = "SelectPicker_";
                     //     let result = part1.concat(ourBoxId);
                     //     var ds =document.getElementById(result);
                     //     var strUser = ds.options[ds.selectedIndex].value;
                     //
                     //
                     //     //var strUser1 = e.options[e.selectedIndex].text;
                     //     if(strUser==0)
                     //     {
                     //        ds.classList.add("is-invalid");
                     //        ds.focus();
                     //
                     //       event.preventDefault();
                     //       event.stopPropagation();
                     //       //window.history.back();
                     //
                     //       return false;
                     //     }else{
                     //
                     //       ds.classList.remove("is-invalid");
                     //
                     //     }
                     //
                     //           // returnToPreviousPage();
                     //   }
                     //            return true;
                     //        }


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

//مايشتغل
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



         //مايشتغل
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


         //  $('input[name="foo"]').on('change', function() {
         //  $(this).closest('tr').toggleClass('yellow', $(this).is(':checked'));
         //});
         // var data = new FormData(document.getElementById("form"));
         // var xhr = new XMLHttpRequest();
         // xhr.open("POST", "setStatusSolved.php");
         // xhr.send(data);

//post form1 ajax
//          function ajaxpost() {
//   // (A) GET FORM DATA
//   var form = document.getElementById("form");
//   var data = new FormData(form);
//
//   // (B) AJAX
//   var xhr = new XMLHttpRequest();
//   xhr.open("POST", "setStatusSolved.php");
//   // What to do when server responds
//   xhr.onload = function () { console.log(this.response); };
//   xhr.send(data);
//
//   // (C) PREVENT HTML FORM SUBMIT
//   return false;
// }
// function ajaxpost() {
// // (A) GET FORM DATA
//                                var form = document.getElementById("form");
//                                var data = new FormData(form);
//
// // (B) AJAX
//                                var xhr = new XMLHttpRequest();
//                                xhr.open("POST", "setStatusSolved.php");
// // What to do when server responds
//                                xhr.onload = function () {
//                                    console.log(this.response);
//                                };
//                                xhr.send(data);
//
// // (C) PREVENT HTML FORM SUBMIT
//                                return false;
//                            }
//post Reassign form2 ajax
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

           <?php
           //
           //
           // $servername = "localhost";
           // 	$username = "root";
           // 	$password = "";
           //
           // 	// Create connection
           // 	$conn = mysqli_connect($servername, $username, $password,"muqu");
           //
           // 	if (!$conn) {
           // 	die("Connection failed: " . mysqli_connect_error());
           // }
           //
           //
           //
           //
           // 	foreach($_POST as $key => $value) {
           // 		if (strpos($key, 'box_') === 0) {
           // 			$complainID = str_replace("box_", '', $key) ;
           // 			// $employeeId= $_POST[$pickerName];
           //
           //
           // 				'<br/>'.$updateSql = "UPDATE complaint
           // 						SET status = 'solved'
           // 						WHERE complaintid = $complainID ";
           // 						if ($conn->query($updateSql) === TRUE) {
           //
           // }
           //
           //     //make it =1 to delete it
           //
           //
           // // if(!mysqli_error($conn))
           //   echo '<meta http-equiv="refresh" content="0; url=maneger2.php">';
           // }
           //
           //
           //
           //
           //
           //   }

           ?>
		</html>
