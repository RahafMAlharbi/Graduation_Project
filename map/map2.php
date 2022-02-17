<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muqu";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$a="A";
mysqli_select_db($conn,$dbname);
$sql="SELECT * FROM classroom WHERE building = '".$a."'";

?>

<?php
 $romNumerquery = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($romNumerquery);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
         integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
         crossorigin=""/>
      <!-- Make sure you put this AFTER Leaflet's CSS -->
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
         integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
         crossorigin=""></script>
      <meta charset="utf-8">
      <title>Map</title>
      <style >
         .sidenavR{background-color:#fff;
         height:400px;
         overflow-x:hidden;
         padding-top:60px;
         position:absolute;
         right:0;
         top:0;transition:.5s;width:0;z-index:1000;}
         .sidenav a,.sidenavR a{color:#818181;display:block;font-size:25px;padding:8px 8px 8px 32px;text-decoration:none;transition:.3s;}
         .sidenav a:hover,.offcanvas a:focus,.sidenavR a:hover,.offcanvas a:focus{color:#f1f1f1;}
         .sidenav .closebtn,.sidenavR .closebtn{font-size:36px;margin-left:50px;position:absolute;right:25px;top:0;}
         @media screen and max-height 450px {
         .sidenav,.sidenavR{padding-top:15px;}
         .sidenav a,.sidenavR a{font-size:18px;}
         }
         .sidenavR2{background-color:#fff;
         height:400px;
         overflow-x:hidden;
         padding-top:60px;
         position:absolute;
         right:0;

         top:0;transition:.5s;width:0;z-index:1000;}
         .sidenav a,.sidenavR2 a{color:#818181;display:block;font-size:25px;padding:8px 8px 8px 32px;text-decoration:none;transition:.3s;}
         .sidenav a:hover,.offcanvas a:focus,.sidenavR2 a:hover,.offcanvas a:focus{color:#f1f1f1;}
         .sidenav .closebtn,.sidenavR2 .closebtn{font-size:36px;margin-left:50px;position:absolute;right:25px;top:0;}
         @media screen and max-height 450px {
         .sidenav,.sidenavR2{padding-top:15px;}
         .sidenav a,.sidenavR2 a{font-size:18px;}
         }
         .navbar {
         margin-bottom: 0px;
         }
         #map { height: 400px;
         width: 1200px;
         max-width: 100%;
         max-height: 100%;

         }
         /*popup taple css */
         table{
         border:1px solid black;
         border-collapse: collapse;
         }
         td{
         border:1px solid black;
         }
      </style>
   </head>
   <body>

      <!-- <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
               <li class="active"><a href="#">Home</a></li>
               <li><a href="#">Page 1</a></li>
               <li><a href="#">Page 2</a></li>
               <li><a href="#">Page 3</a></li>
            </ul>
         </div>
      </nav> -->
      <div class="jumbotron text-center">
         <h1>Main page </h1>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div id="map"></div>
               <!-- side nav bar -->
                  <!-- A -->
               <div id="mySidenavR" class="sidenavR">
                 <div id="complaint">
                   <h2>Let AJAX change this text</h2>
                   <button type="button" onclick="loadDoc()">Change Content</button>
                 </div>
                 <a href="javascript:void(0)" class="closebtn" onclick="closeNavR()">×</a>
                  <h3>Room</h3>
                  <form class="form-inline" action="/action_page.php">
                     <div class="form-group">
                        <!-- <label for="sel1">Room will be loaded after choosing building</label> -->
                        <div id="sel1"></div>
                        <select id="roomN" onchange="renderHTMLComlaint()" >


                          <form class="row g-3 needs-validation" novalidate>
                          <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">Room Number</label>
                              <?php
                                for($i=1;$i<=$rowcount;$i++){
                                $row=mysqli_fetch_array($romNumerquery);
                               ?>
                              <option value="<?php echo $row["roomNumber"]?>"> <?php echo $row["roomNumber"]?> </option>


                              <?php
                           }
                               ?>

                        <div class="panel panel-primary table-wrapper-scroll-y my-custom-scrollbar">
                          <div class="panel-heading">
                            <h3 class="panel-title">Complaint</h3>
                            <div class="pull-right">
                              <!-- <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body"> -->
                                <i class="glyphicon glyphicon-filter"></i>
                              </span>
                            </div>
                          </div>
                          <div class="panel-body">
                            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
                          </div>
                          <table class="table table-hover table table-bordered table-striped mb-0" id="dev-table">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>info</th>

                              </tr>
                            </thead>
                            <tbody id="Ctable">
                     </tbody>
                            </tbody>
                          </table>
                     </div>
                  </form>
               </div>
            </div>






         </div>
         /////////////
         <!-- B -->
         <div id="mySidenavR2" class="sidenavR2">
           <div id="complaint">
             <h2>Let AJAX change this text</h2>
             <button type="button" onclick="loadDoc()">Change Content</button>
           </div>
           <a href="javascript:void(0)" class="closebtn" onclick="closeNavR2()">×</a>
            <h3>Room</h3>
            <form class="form-inline" action="/action_page.php">
               <div class="form-group">
                  <div id="sel1"></div>
                  <select id="roomN1" onchange="renderHTMLComlaint1()" >

                    <?php

                    $b="B";
                    mysqli_select_db($conn,$dbname);
                    $sql="SELECT * FROM classroom WHERE building = '".$b."'";

                    ?>

                    <?php
                     $romNumerquery = mysqli_query($conn,$sql);
                     $rowcount=mysqli_num_rows($romNumerquery);
                    ?>
                    <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-3">
                      <label for="validationCustom04" class="form-label">Room Number</label>
                        <?php
                          for($i=1;$i<=$rowcount;$i++){
                          $row=mysqli_fetch_array($romNumerquery);
                         ?>
                        <option value="<?php echo $row["roomNumber"]?>"> <?php echo $row["roomNumber"]?> </option>


                        <?php
                     }
                         ?>

                  <div class="panel panel-primary table-wrapper-scroll-y my-custom-scrollbar">
                    <div class="panel-heading">
                      <h3 class="panel-title">Complaint</h3>
                      <div class="pull-right">
                        <!-- <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body"> -->
                          <i class="glyphicon glyphicon-filter"></i>
                        </span>
                      </div>
                    </div>
                    <div class="panel-body">
                      <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
                    </div>
                    <table class="table table-hover table table-bordered table-striped mb-0" id="dev-table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Date</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th>info</th>

                        </tr>
                      </thead>
                      <tbody id="Ctable1">
               </tbody>
                      </tbody>
                    </table>
               </div>
            </form>
         </div>
      </div>
   </div>
      </div>
    </div>


      <!-- <div class="panel panel-default" style="margin-bottom:0px">
         <div class="panel-footer">Panel Footer</div>
      </div> -->

      <script >

         function openNavR() {
         document.getElementById("mySidenavR").style.width = "450px";
         }
         function openNavR2() {
         document.getElementById("mySidenavR2").style.width = "450px";
         }

         function closeNavR() {
         document.getElementById("mySidenavR").style.width = "0";
         }
         function closeNavR2() {
         document.getElementById("mySidenavR2").style.width = "0";
         }

         // A
         function LoadA(e)
         {
         openNavR();
            // var roomNumberInList = "";
            // var roomNumber="";
            // var xmlhttp = new XMLHttpRequest();
            // xmlhttp.open("GET","getRoom.php?q=A",true);
            // xmlhttp.onreadystatechange = function() {
            //  if (this.readyState == 4 && this.status == 200) {
            //      roomNumber = JSON.parse(xmlhttp.responseText);
            //     callroomoption();
            //     }
            // };
            // xmlhttp.send();
}

          // praint complain table "A" from json data using AJAX
          function renderHTMLComlaint() {
               const xhttp1 = new XMLHttpRequest();
               xhttp1.open("GET", "getComplaint.php", true);
               xhttp1.onload = function() {
               var result = JSON.parse(xhttp1.responseText);

            var complaintTable = "";
            for( var i=0; i < result.length; i++){
              complaintTable= "<tr><td>" + result[i][0] + "</td>"+"<td>"+ result[i][1]+ "</td>"+"<td>" + result[i][2]+ "</td>"+"<td>" + result[i][3]+"</td>"+"<td>" + result[i][4]+"</td></tr>";

              // for get the complain in specific Room
              var select = document.getElementById('roomN');
              var value = select.options[select.selectedIndex].value;
          if (value == result[i][5]){
            document.getElementById("Ctable").insertAdjacentHTML('beforeend',complaintTable);
 }}
         }
                xhttp1.send();
              }
              // praint complain table "B" from json data using AJAX
              function renderHTMLComlaint1() {
                   const xhttp1 = new XMLHttpRequest();
                   xhttp1.open("GET", "getComplaint.php", true);
                   xhttp1.onload = function() {
                   var result = JSON.parse(xhttp1.responseText);

                var complaintTable = "";
                for( var i=0; i < result.length; i++){
                  complaintTable= "<tr><td>" + result[i][0] + "</td>"+"<td>"+ result[i][1]+ "</td>"+"<td>" + result[i][2]+ "</td>"+"<td>" + result[i][3]+"</td>"+"<td>" + result[i][4]+"</td></tr>";

                  // for get the complain in specific Room
                  var select = document.getElementById('roomN1');
                  var value = select.options[select.selectedIndex].value;
              if (value == result[i][5]){
                document.getElementById("Ctable1").insertAdjacentHTML('beforeend',complaintTable);
     }}
             }
                    xhttp1.send();
                  }

              // praint room number in dropdown list
           //    function callroomoption(roomNumber) {
           //    for( var i=0; i < roomNumber.length; i++){
           //      roomNumberInList="<option value = roomNumber[i][0]>"+roomNumber[i][0]+" </option>";
           //      document.getElementById("roomN").insertAdjacentHTML('beforeend',roomNumberInList);
           // }}


         // get bullding B room
         function LoadB(e)
         {
         openNavR2();
            // var xmlhttp = new XMLHttpRequest();
            // xmlhttp.onreadystatechange = function() {
            //  if (this.readyState == 4 && this.status == 200) {
            //      document.getElementById("sel1").innerHTML = this.responseText;
            //     }
            // };
            //  xmlhttp.open("GET","getRoom.php?q=B",true);
            // xmlhttp.send();
         }

         //leaflet map
         var map = L.map('map').setView([21.651644, 39.716137], 19);

           googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
             maxZoom: 20,
             subdomains:['mt0','mt1','mt2','mt3']
         });
         googleSat.addTo(map);

         //marker B
         var singleMarkerB = L.marker([21.651690, 39.716594]).on('click', LoadB);
         singleMarkerB.addTo(map);

         //marker A
         var singleMarkerA = L.marker([21.651846, 39.715863]).on('click', LoadA);
         singleMarkerA.addTo(map);
      </script>
   </body>
</html>
