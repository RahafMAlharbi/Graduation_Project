<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="bootstrap5/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
<script src="html5-qrcode.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="bootstrap5/dist/js/i18n/defaults-en_US.min.js"></script>
<!--Bootstrap CSS Reference-->


 <title>Make Complain</title>

  </head>
  <style>

  .result{
      background-color: green;
      color:#fff;
      padding:20px;
    }
  .row{
      display:flex;
    }
.inv {
  display: none;
}
.form-label-width{
  width: =100px;

}
.choose_file{
    position:relative;
    display:inline-block;
    border-radius:38px;
    border:#6F92A0 solid 1px;
    width:120px;
    height: 40px;
    padding: 4px 6px 4px 8px;
    font: normal 14px Myriad Pro, Verdana, Geneva, sans-serif;
    color: #edf1f7;
    margin-top: 2px;
    background:#6F92A0
}
.choose_file input[type="file"]{
    -webkit-appearance:none;
    position:absolute;
    top:0; left:0;
    opacity:0;
}
.QRcodeB{
    position:relative;
    display:inline-block;
    border-radius:38px;
    border:#6F92A0 solid 1px;
    width:180px;
    height: 40px;
    padding: 4px 6px 4px 8px;
    font: normal 14px Myriad Pro, Verdana, Geneva, sans-serif;
    color: #edf1f7;
    margin-top: 2px;
    background:#6F92A0
}
.card-h{
  background:#6F92A0
}
.Make-Complain{
  color: #edf1f7;
}
.card-body{
  background:#F6F4F1

}
.input-defult{
  background:#ffffff;
  width: 1040px;
  height: 40px;
padding: 12px 20px;
box-sizing: border-box;
border: 1px solid rgb(212, 212, 212);
border-radius: 4px;
}
input {accent-color:#6F92A0;}

  </style>

  <body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,"muqu");

    if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}



     $sql1 = "SELECT roomNumber FROM classroom WHERE roomType!='Lab'";
     $sql2 = "SELECT roomNumber FROM classroom WHERE roomType='Lab'";
     $result1 = $conn->query($sql1);
     $result2 = $conn->query($sql2);
     $rowcount1=mysqli_num_rows($result1);
     $rowcount2=mysqli_num_rows($result2);
    ?>

	<header class="navbar navbar-expand-md navbar-dark bd-navbar" > </header>
	<div class="container-fluid">
		<div class="row justify-content-center ">
			<div class="col-md-8">
			<div class="card text-left">
			  <div class="card-h">
				<h2 class="Make-Complain m-3"> Make Complain</h2>
			  </div>
			  <div class="card-body">
					<form action="saveComplain.php" id="form" name ="myFormName" method="POST" class="row g-3 ms-3 needs-validation" enctype="multipart/form-data" novalidate>
              <div id="errorDiv">   </div>
              <!-- <div class="ms- me-3"> -->

						<div class="col col-md-12">
              <label class="form-label me-5 ms- mb-2" for="target">Room Number</label>

							<div class="input-group mb-3 ">
							  <!-- <label class="form-label mb-3 me-5 ms-5 mb-4" for="target">Room Number</label> -->
							  <select class="form-select me-4"  name="roomNum" id="target" required>
								<option selected disabled value="">select room number</option>
									<?php
									  for($i=1;$i<=$rowcount1;$i++){
									  $row1=mysqli_fetch_array($result1);
									 ?>
									<option class="content_1"  value="<?php echo $row1["roomNumber"]?>"> <?php echo $row1["roomNumber"]?> </option>
									<?php
								  }
									 ?>
									 <?php
									   for($i=1;$i<=$rowcount2;$i++){
									   $row2=mysqli_fetch_array($result2);
									  ?>
									 <option class="content_2"  value="<?php echo $row2["roomNumber"]?>"> <?php echo $row2["roomNumber"]?> </option>
									 <?php
								 }
									  ?>
							  </select>
							    <div class="invalid-feedback">
								  Please select a room number .
								</div>
							</div>
						</div>
						<div class="row">
							 <label class="visually- form-label mb-3 me-5 ms- mb-2 mt-3 " for="floorNum">Floor</label>
							<div class="input-group  col mb-3 me- ps-">
							  <!-- <div class="form-label  mb-3 me-5 ms- mb-4 ">Floors</div> -->
							  <input type="text" class=" input-defult ms- form-label-width" id="floorNum" name="floorNum" placeholder="floor" disabled>
							</div>
						</div>

						<div class="row mb-3">
							 <label class="form-label mb-3 me-5 mb-2 mt-3 " for="BuildingNum" >Building</label>
							<div class="input-group ps-">
							  <!-- <div class="form-label me-3 ms- pe-3 mb-4 " >Building</div> -->
							  <input type="text" class="input-defult ms- form-label-width" id="BuildingNum" name="BuildingNum" placeholder="Building" disabled>
							</div>
						</div>

						  <div class="mb-3 mt-3 me-4">
                <span class="me-1 mb-3 me-5 ms- mb-4 " for ="desc">Description</span>

								<div class="input-group mb-2 mt-3">
									<!-- <span class="me-1 " for ="desc">Description</span> -->
                  <!-- <label class="form-label mb-3 me-5 ms-5 mb-4 " for="desc" >Description</label> -->

									<textarea class="form-control form-label-width ms- me-4" aria-label="Leave a comment here" id="desc" name ="desc" style="  resize: none;"required></textarea>
									 <div class="invalid-feedback">
										Please leave a Description
									</div>
								</div>
						  </div>

						<div class="col-12">
							<div class="mb-3 choose_file">
                <span class="position-absolute ps-2 pt-1">Choose File</span>

							  <input type="file" class="" id="inputGroupFile02" name="inputGroupFile" accept="image/*">
							  <!-- <label class="" for="inputGroupFile">Upload</label> -->
							</div>

						</div>

						  <div class="col-12 ">
						   <fieldset class="row mb-3 inv" id="content_1">
								<legend class="col-form-label col-sm-2 pt-0">Category</legend>
								<div class="col-sm-10">
                  <div class="form-check">
                  <input type="checkbox" name="cat1Visit" id="cat1Visit"  value="Needs an inspection visit"   class="form-check-input" checked/>
                  <label class="form-check-label" for="cat1Visit">
                    Needs an inspection visit
                  </label>
                  </div>
								  <div class="form-check">
									<input type="checkbox" name="cat1Proj" id="cat1Proj"  value="Projector"  class="form-check-input" />
									<label class="form-check-label" for="cat1Proj">
									  Projector
									</label>
								  </div>
								  <div class="form-check">
									<input type="checkbox" name="cat1Air" id="cat1Air" value="Air conditiong"  class="form-check-input" >
									<label class="form-check-label" for="cat1Air">
									  Air conditiong
									</label>
								  </div>
								  <div class="form-check disabled">
									<input type="checkbox" name="cat1Smart"  id="cat1Smart"  class="form-check-input"   value="Smart board">
									<label class="form-check-label" for="cat1Smart">
									  Smart board
									</label>
								  </div>
								</div>
							  </fieldset>

						  	<fieldset class="row mb-3 inv" id="content_2">
								<legend class="col-form-label col-sm-2 pt-0">Category</legend>
								<div class="col-sm-12">
                  <div class="form-check">
                  <input type="checkbox" name="cat2Visit" id="cat2Visit"  value="Needs an inspection visit"   class="form-check-input" checked/>
                  <label class="form-check-label" for="cat2Visit">
                    Needs an inspection visit
                  </label>
                  </div>
								  <div class="form-check">
									<input type="checkbox" name="cat2Proj" id="cat2Proj"  value="Projector"  class="form-check-input" />
									<label class="form-check-label" for="cat2Proj">
									  Projector
									</label>
								  </div>
								  <div class="form-check">
									<input type="checkbox" name="cat2Air" id="cat2Air" value="Air conditiong"  class="form-check-input" >
									<label class="form-check-label" for="cat2Air">
									  Air conditiong
									</label>
								  </div>
								  <div class="form-check ">
									<input type="checkbox" name="cat2Smart" id="cat2Smart"  class="form-check-input"   value="Smart board">
									<label class="form-check-label" for="cat2Smart">
									  Smart board
									</label>
								  </div>
								 <div class="form-check ">
								  <div class="col-12">
									<input type="checkbox" name="cat2Pc"  id="cat2Pc" class="form-check-input"   value="PC">
									<label class="form-check-label" for="cat2Pc">
									  PC
									</label>
									</div>
									 <div class="col-12">
										<div class="input-group mb-3 ">
										  <label class=""  id="selectPickerLbl" for="inputGroupSelect01">Computer Number</label>
										  <select class="form-select  selectpicker" id="mySelectpicker" multiple   name="pcnum"   onchange="changeFun();">
											<option>pc1</option>
											<option>pc2</option>
											<option>pc3</option>
										  </select>
										</div>
										<input name = "selectpickerArray" value="" type="hidden" id="selectpickerArray">
									</div>
								  </div>
								</div>
                <input name = "category" value="" type="hidden" id="category">‏
							 </fieldset>
							</div>
              <div class="d-grid gap-2 col-4 mx-auto">
              <button type="button" class="ms-4 QRcodeB" onclick="myFunction()">Scan QR code   <img src="QRcode.png "height ="30" width="30"/></button>
             </div>


             <div id="myDIV" style="display:none">
               <div  class="row">
                 <div class="col">
                 <center><div style="width:400px;" id="reader"></div></center>
                  </div>
                </div>
             </div>

               <!-- </div> -->
<span class="border-top mb-4">
            	<div class="mt-3">

							<button class="choose_file" name="submit" data-bs-toggle="modal" data-bs-target="#exampleModal1" type="submit">Submit form</button>
</span>
              </div>
						</form>
					 </div>
			    </div>
			 	</div>
			</div>
		</div>


<script>
      function myFunction() {
              var x = document.getElementById("myDIV");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                  x.style.display = "none";
              }
            }



function displaySelectOptionFn(str) {
	$.selectOptionFn(str);
 };
 function changeFun(){
	 $.changeFun();

 };

 function clearAllCheckBoxs(){

	 //cat 1
	 document.getElementById("cat1Proj").checked = false;
	 document.getElementById("cat1Air").checked = false;
	 document.getElementById("cat1Smart").checked = false;
	 //cat2
	 document.getElementById("cat2Proj").checked = false;
	 document.getElementById("cat2Air").checked = false;
	 document.getElementById("cat2Smart").checked = false;
	 document.getElementById("cat2Pc").checked = false;
	 $.clearSelectPicker();

 }
document.getElementById('target').addEventListener('change', function () {
	var e = document.getElementById("target").selectedIndex;
	var value = this.value;
	var otionClassName = document.getElementsByTagName("option")[e].className
	clearAllCheckBoxs();
	document.getElementById("content_1").style.display = otionClassName == "content_1" ? 'block' : 'none';
	if(otionClassName == "content_2"){

		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		  if (this.readyState == 4 && this.status == 200) {
			  displaySelectOptionFn(this.responseText);
		  }
		};
		xmlhttp.open("GET", "getPc.php?roomNum=" + value, true);
		xmlhttp.send();


	}
	document.getElementById("content_2").style.display = otionClassName == "content_2" ? 'block' : 'none';

	if (value.length == 0) {
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

			const myArray = this.responseText.split("-");
			document.getElementById("floorNum").value = myArray[0];
			document.getElementById("BuildingNum").value = myArray[1];
      }
    };
    xmlhttp.open("GET", "getFloor.php?roomNum=" + value, true);
    xmlhttp.send();
  }
});
	function getExtension(filename) {
	  var parts = filename.split('.');
	  return parts[parts.length - 1];
	}


  $(document).ready(function(){


	$('#cat2Pc').click(function() {

      $('#mySelectpicker').selectpicker('deselectAll');
        if(this.checked) {
      //  $("#mySelectpicker").prop("disabled", false);
			$("#mySelectpicker").prop("required", true); //.attr('requied');
			$('#mySelectpicker').selectpicker('show');
			$('#selectPickerLbl').show();

        }else {
			// $("#mySelectpicker").prop("disabled", true);
			$('#mySelectpicker').removeAttr("required");
			$('#mySelectpicker').selectpicker('hide');
			$('#selectPickerLbl').hide();
		}

		  $("#mySelectpicker").selectpicker("refresh");
    });


	  $.clearSelectPicker =function() {
			$('#mySelectpicker').find('option').remove();

			//$("#mySelectpicker").prop("disabled", true);
			$('#mySelectpicker').removeAttr("required");
			$('#mySelectpicker').selectpicker('hide');
			$('#selectPickerLbl').hide();
			$("#mySelectpicker").selectpicker("refresh");
			$.changeFun();
	  };
	  $.selectOptionFn = function(prt) {
		  $('#mySelectpicker')
			.find('option')
			.remove()
			.end()
			.append(prt);
		$("#mySelectpicker").selectpicker("refresh");

         };


	$('#mySelectpicker').selectpicker();
	$('#mySelectpicker').selectpicker('hide');
	$('#selectPickerLbl').hide();


	$.changeFun=function(){
		$('#selectpickerArray').val($("#mySelectpicker").selectpicker('val'));
	};

    $("form").submit(function(){
		function failValidation(msg) {
		  alert(msg); // just an alert for now but you can spice this up later
		  return false;
		}

		var e = document.getElementById("target").selectedIndex;

		var otionClassName = document.getElementsByTagName("option")[e].className;
		let category = [1, 123.43];
		category =[];

		if(otionClassName == "content_1"){
      if(document.getElementById("cat1Visit").checked ){
          category.push(document.getElementById("cat1Visit").value);
      }
			if(document.getElementById("cat1Proj").checked ){
		  		category.push(document.getElementById("cat1Proj").value);
			}
			if( document.getElementById("cat1Air").checked ){
						category.push(document.getElementById("cat1Air").value);
					}
			if( document.getElementById("cat1Smart").checked ){
						category.push(document.getElementById("cat1Smart").value);
					}
			$.clearSelectPicker();
		}else if(otionClassName == "content_2"){
			//cat2
      if(document.getElementById("cat2Visit").checked ){
          category.push(document.getElementById("cat2Visit").value);
      }
			 if(document.getElementById("cat2Proj").checked ){
						category.push(document.getElementById("cat2Proj").value);
					}
			if( document.getElementById("cat2Air").checked){
						category.push(document.getElementById("cat2Air").value);
					}
			 if(document.getElementById("cat2Smart").checked){
						category.push(document.getElementById("cat2Smart").value);
					}
			 if(document.getElementById("cat2Pc").checked ){
						category.push(document.getElementById("cat2Pc").value);
					}
		}
			document.getElementById("category").value = category;

		var error = document.getElementById("error");
		if ($('input:checkbox').filter(':checked').length < 1){
			  error.textContent = "Please enter at least one checkbox";
			  error.style.color = "red";
			}
		var file = $('#inputGroupFile02');
    });
});



function onScanSuccess(qrCodeMessage) {
var qrresult=qrCodeMessage;
	document.getElementById('target').value=qrresult;
     document.getElementById('target').dispatchEvent(new Event('change'));

     if(qrresult!=document.getElementById('target').value){
       document.getElementById('errorDiv').innerHTML="Please, enter a valid QR code";
       document.getElementById('errorDiv').classList.add('alert', 'alert-danger');
      //  document.getElementById('hi').setAttribute("class", "alert alert-danger");‏
    }else{
      var xx = document.getElementById("errorDiv");
         xx.style.display = "none";
    }


   }


function onScanError(errorMessage) {
  //handle scan error
}

var html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);





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

})();
</script>

  </body>
</html>
