<!-- Scrollable modal -->
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
.yellow {
  background-color: #F4F6F6;
}
.modal-backdrop {
           z-index: -1;
         }
         /--------------------------------/

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
$qury="select complaintid , date , category from complaint where status='Not Processed'";//Under Processing
$result = $conn->query($qury);

$qurey="count * from complaint";
$resultt = $conn->query($qurey);
 ?>
 <body >
   <div class="b-example-divider pt-5 pb-5 pe-5">

     <header class="p-3 ms-3 mb-3 border-bottom">
       <div class="container">
         <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
           <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
             <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">  <img src="img/MUQU.png" width="80" height="80" alt=""></svg>
           </a>

         <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">


     <!--  <img src="img/MUQU.png" width="80" height="80" alt="">-->
     <li ><a href="maheader.php" class="nav-link px-2 ps-5 link-secondary">Home</a></li>
             <!--  <li><a href="Fcheader.php" class="nav-link px-2 link-dark">map</a></li>-->

             <li ><a href="#" class="nav-link px-2 ps-5 link-dark">Assign Task</a></li>
             <li ><a href="#" class="nav-link px-2 ps-5 link-dark">mange Assign task</a></li>
             <li ><a href="#" class="nav-link px-2 ps-5 link-dark">Make complaint</a></li>
             <li ><a href="#" class="nav-link px-2 ps-5 link-dark">Statestc</a></li>
           </ul>

           <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
             <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
           </form>

           <div class="dropdown text-end">
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

 <div class="container  mt-5 pt-5 position-relative">
   <!-- here -->
     <div class="col-md-12 position-absolute mt-5 start-50 translate-middle">
         <div class="">
             <div class="">
                 <div class="card-body">
				 <form  id="form" name ="myFormName" action ="anothercopyassign.php" method="POST" class="row g-3 needs-validation" novalidate>
									<div class="">
				<input type="text" id="myInput" onkeyup="myFunction()" class="search-bar form-control" placeholder="Search for complaint id.." >
				<br/>
				<br/>
				  <table  id="myTable" class="  table" >
				  <thead class="">
					<tr>
            <!-- here -->
					 <th><input type="checkbox"  value="bar1" onClick="toggle(this)"  /></th>
					 <th scope="col">ID</th>
					 <th scope="col">Date</th>
					 <th scope="col">catogry</th>
					 <th scope="col">worker</th>
				   </tr>
				  </thead>
				  <tbody>
				<?php
				$sql1 = "SELECT userId,userName FROM worker";

				//$rowcount1=mysqli_num_rows($result1);

					while($row=$result->fetch_assoc()){
						$result1 = $conn->query($sql1);
						echo"<tr>";
            // <!-- here -->
						echo"<th scope='row'> <input type='checkbox'  class='box' name='box_".$row["complaintid"]."' id='box_".$row["complaintid"]."' onchange='callFunction()' onclick='mycomplaininfo();enable(this);chk(this)' /></th>";
            echo'
             <td name=name_"'.$row["complaintid"].'">
             <button id="YourID" type="button" name='.$row["complaintid"].' value='.$row["complaintid"].'
              class="xc" data-toggle="modal" data-target="#exampleModal"
               onclick="selectRoomNum(this)"><b>
             '.$row["complaintid"].'</b></button></td>';
						echo"<td>".$row["date"]."</td>";
						echo"<td>".$row["category"]."</td>";
						echo"<td> <select  class='form-select form-control' id='SelectPicker_".$row["complaintid"]."' name='SelectPicker_".$row["complaintid"]."' disabled>";
						echo "<option value='0' class='fs-4'  >select worker </option>";

						while($row1=$result1->fetch_assoc()){


							 echo "<option class='fs-4' value='".$row1["userId"]. "'>".$row1["userName"]."</option>";
						}
					 echo"</select></td>";
					 echo"</tr>";
				}
				  ?>
				  </tbody>
				  </table>
					<input type="submit" value="Assign" class="btn btn-primary" disabled id="Assign" onclick="validateMyForm(event);">
				</div>
					 </form>
					</div>
				</div>
			</div>
		</div>
	</div>

  <!-- Modal -->
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
  			echo '<br/>'.$insertSql = "INSERT INTO assign (userId ,compliantId )
  					VALUES ( $employeeId, $complainID  )";
  			if ($conn->query($insertSql) === TRUE) {
  				echo '<br/>'.$updateSql = "UPDATE complaint
  						SET status = 'Under Processing'
  						WHERE complaintid = $complainID ";
  				if ($conn->query($updateSql) === TRUE) {

  				} else {
  				  echo "Error: " . $sql . "<br>" . $conn->error;
  				}

  			} else {
  				  echo "Error: " . $sql . "<br>" . $conn->error;
  				}

  				if(!mysqli_error($conn))
  				  echo '<meta http-equiv="refresh" content="0; url=anothercopyassign.php">';
  		}
  	}

?>
   <script>

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


			function validateMyForm(event)
      {
				var allCheckedBox =document.querySelectorAll(".box:checked");
				for (var checkbox of allCheckedBox) { // to check if it select an employee
					var ourbox = checkbox.id;
					var ourBoxId = ourbox.replace(/\D+/,"");
					let part1 = "SelectPicker_";
					let result = part1.concat(ourBoxId);
					var ds =document.getElementById(result);
					var strUser = ds.options[ds.selectedIndex].value;

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

function mycomplaininfo(){

	var allCheBox =document.querySelectorAll(".box");
  for (var checkboxee of allCheBox) {
    var ourboxx = checkboxee.id;
    var ourBoxId = ourboxx.replace(/\D+/,"");
    var f="129";

}
}


/*$(document).ready(function(){
	//document.querySelectorAll("[name^=q1_]")

  var myrow1=0;
  $(".box").each(function() {
    myrow1=myrow1+1;
    $(this).attr("id","box_"+ myrow1);
  });
 var myrow2=0;
  $(".form-select").each(function() {
    myrow2=myrow2+1;
    $(this).attr("id","SelectPicker_"+ myrow2);
  });

});

*/
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



function callFunction() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

  if (checkedOne) {
    document.querySelectorAll('input[type="submit"]')[0].disabled = false;
  }	else
    document.querySelectorAll('input[type="submit"]')[0].disabled = true;
}



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





function chk(result){
  if(result.checked){
    result.parentNode.parentNode.style.backgroundColor="";
    result.parentNode.parentNode.style.color="black";
  } else{
    result.parentNode.parentNode.style.backgroundColor="";
    result.parentNode.parentNode.style.color="";
  }
}

  function toggle(source) {
   var  checkboxes = document.getElementsByClassName("box");
    for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = source.checked;
      chk(checkboxes[i]);
      enable(checkboxes[i]);
      callFunction();

    }
  }

//  $('input[name="foo"]').on('change', function() {
//  $(this).closest('tr').toggleClass('yellow', $(this).is(':checked'));
//});





  </script>
</body >
