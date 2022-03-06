
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


  <script src="~/Scripts/jquery-3.4.1.js"></Script>


<style>
.yellow {
  background-color: #F4F6F6;
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
$qury="select complaintid , date , category from complaint where status='Not Processed'";//Under Processing
$result = $conn->query($qury);

$qurey="count * from complaint";
$resultt = $conn->query($qurey);
 ?>

	<header class="navbar navbar-expand-md navbar-dark bd-navbar" > </header>
	<div class="container-fluid">
		<div class="row justify-content-center ">
			<div class="col-md-8">
			<div class="card text-left">
			  <div class="card-header">
				<h2> Assign Emploess Complain</h2>
			  </div>
			  <div class="card-body">
				 <form  id="form" name ="myFormName" action ="setEmployeeForAssign.php" method="POST" class="row g-3 needs-validation" novalidate>
									<div class="col col-md-12">
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for complaint id.." >
				<br/>
				<br/>
				  <table  id="myTable" class="table" >
				  <thead class="table-light">
					<tr>
					 <th><input type="checkbox"  value="bar1" onClick="toggle(this)"  /></th>
					 <th>ID</th>
					 <th>Date</th>
					 <th>catogry</th>
					 <th>worker</th>
				   </tr>
				  </thead>
				  <tbody>
				<?php
				$sql1 = "SELECT userId,userName FROM worker";

				//$rowcount1=mysqli_num_rows($result1);

					while($row=$result->fetch_assoc()){
						$result1 = $conn->query($sql1);
						echo"<tr>";

						echo"<td> <input type='checkbox'  class='box' name='box_".$row["complaintid"]."' id='box_".$row["complaintid"]."' onchange='callFunction()' onclick='mycomplaininfo();enable(this);chk(this)' /></td>";
            echo'
             <td name=name_"'.$row["complaintid"].'">
             <button id="YourID" type="button" name='.$row["complaintid"].' value='.$row["complaintid"].'
              class="btn btn-primary"data-toggle="modal" data-target="#exampleModal"
               onclick="selectRoomNum(this)">
             '.$row["complaintid"].'</button></td>';
						echo"<td>".$row["date"]."</td>";
						echo"<td>".$row["category"]."</td>";
						echo"<td> <select  class='form-select' id='SelectPicker_".$row["complaintid"]."' name='SelectPicker_".$row["complaintid"]."' disabled>";
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
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">compaint details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div id="Ctable" class="modal-body">

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

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
    result.parentNode.parentNode.style.backgroundColor="#D7D0D0";
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
