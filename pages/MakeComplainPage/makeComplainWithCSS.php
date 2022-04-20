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
  background:#2F5972

}
.Make-Complain{
  color: #edf1f7;
}
.card-body{
  background:#F6F4F1;
  border:#2F5972;
border-color:#2F5972;

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
/* uploas img button */
.download-button {
position: relative;
border-width: 0;
color: white;
font-size: 15px;
font-weight: 600;
border-radius: 4px;
z-index: 1;
}

.download-button .docs {
display: flex;
align-items: center;
justify-content: space-between;
gap: 10px;
min-height: 40px;
padding: 0 10px;
border-radius: 4px;
z-index: 1;
background-color: #242a35;
border: solid 1px #e8e8e82d;
transition: all .5s cubic-bezier(0.77, 0, 0.175, 1);
}

.download-button:hover {
/* box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; */
}

.download {
position: absolute;
inset: 0;
display: flex;
align-items: center;
justify-content: center;
max-width: 90%;
margin: 0 auto;
z-index: -1;
border-radius: 4px;
transform: translateY(0%);
background-color: #2F5972;
border: solid 1px #01e0572d;
transition: all .5s cubic-bezier(0.77, 0, 0.175, 1);
}

.download-button:hover .download {
transform: translateY(100%)
}

.download svg polyline,.download svg line {
animation: docs 1s infinite;
}

@keyframes docs {
0% {
transform: translateY(0%);
}

50% {
transform: translateY(-15%);
}

100% {
transform: translateY(0%);
}
}



/* css QR button */
.buttonQR {
  /* width:190px; */
  color: #edf1f7;

 cursor: pointer;
 /* font-weight: 700; */
 font-family: Helvetica,"sans-serif";
 transition: all .2s;
 padding: 10px 20px;
 border-radius: 100px;
 background: #2F5972;
 border: 1px solid transparent;
 display: flex;
 align-items: center;
 font-size: 15px;
}

.buttonQR:hover {
 background: #6F92A0;
}

.buttonQR > .svgQR {
 width: 28px;
 height: 28px;
 margin-left: 10px;
 transition: transform .3s ease-in-out;
}

.buttonQR:hover .svgQR {
 transform: translateX(5px);
}

.buttonQR:active {
 transform: scale(0.95);
}

/* submit */
/* From uiverse.io by @Gumpack */
.btnSUB {
 background-image: linear-gradient(45deg, #2F5972 0%, #6F92A0  100%, #2F5972  60%)
}

.btnSUB {
  height: 40px;

 margin: 5px;
 padding: 8px 25px 10px 25px;
 text-align: center;
 transition: 0.5s;
 background-size: 200% auto;
 color: white;
 border-radius: 100px;
 display: block;
 border: 0px;
 /* font-weight: 700; */
 box-shadow: 0px 0px 14px -7px #f09819;
}

.btnSUB:hover {
 background-position: right center;
 /* change the direction of the change here */
 color: #fff;
 text-decoration: none;
}

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
              <!-- uppload img input  -->
							<div class="" style="height:0px;overflow:hidden">
                <span class="position-absolute ps-2 pt-1"></span>

							  <input type="file" class="" id="inputGroupFile02" name="inputGroupFile" accept="image/*">
							  <!-- <label class="" for="inputGroupFile">Upload</label> -->
							</div>
              <!-- uppload img botton -->
              <button type="button" class=" download-button" onclick="chooseFile();">
                    <div class="docs">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                      <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                      <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                    </svg></div>
                    <div class="download">
                      <!-- <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="currentColor" height="24" width="24" viewBox=""><path d=""></path><polyline points=""></polyline></svg> -->

                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                      </svg>
                    </div>
                  </button>
						</div>

						  <div class="col-12 mt-5 ">
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
									 <div class="">
										<div class="input-group mb-3 row">
										  <label class="form-label mt-4 mb-3"  id="selectPickerLbl" for="inputGroupSelect01">Computer Number</label>
										  <select class="form-select me-2 selectpicker" id="mySelectpicker" multiple   name="pcnum"   onchange="changeFun();">
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
               <!-- QR code button -->
              <div class="d-grid gap-2 col-4 mx-auto">
              <!-- <button type="button" class="ms-4 QRcodeB" onclick="myFunction()">Scan QR code   <img src="QRcode.png "height ="30" width="30"/></button> -->
              <button type="button" class="ms-3 buttonQR QRcodeB" onclick="myFunction()">
                <span>Scan QR code</span>

                  <svg class="svgQR" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code-scan" viewBox="0 0 16 16">
                    <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"/>
                    <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"/>
                    <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"/>
                    <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"/>
                    <path d="M12 9h2V8h-2v1Z"/>
                  </svg>
              </button>
             </div>

             <div id="myDIV" style="display:none" >
               <div  class="row ">
                 <div class="col me-5 ">
                 <center><div style="width:300px;" id="reader"></div></center>
                  </div>
                </div>
             </div>

               <!-- </div> -->
<span class="border-top mb-4">
            	<div class="mt-3">

							<!-- <button class="choose_file" name="submit" data-bs-toggle="modal" data-bs-target="#exampleModal1" type="submit">Submit form</button> -->
<button class=" buttonQR mt-3 mb-3 ms-4 me-4 " name="submit" data-bs-toggle="modal" data-bs-target="#exampleModal1" type="submit">Submit</button>
</span>
              </div>
						</form>
					 </div>
			    </div>
			 	</div>
			</div>
		</div>


<script>
//jquery for button
function chooseFile() {
    $("#inputGroupFile02").click();
 }

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
