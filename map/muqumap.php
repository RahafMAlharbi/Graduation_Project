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
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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
         .navbar {
         margin-bottom: 0px;
         }
         #map { 		height: 400px;
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
         #paneltb{
           /* display: none; */
         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="#">map</a>
            </div>
            <ul class="nav navbar-nav">
               <li class="active"><a href="#">Home</a></li>
               <li><a href="#">Page 1</a></li>
               <li><a href="#">Page 2</a></li>
               <li><a href="#">Page 3</a></li>
            </ul>
         </div>
      </nav>
      <div class="jumbotron text-center">
         <h1>Main page </h1>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div id="map"></div>
               <!-- side nav bar -->

               <div id="mySidenavR" class="sidenavR">
                 <div id="complaint">
                   <h2>View Complaint</h2>
                 </div>
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNavR()">×</a>
                  <form class="form-inline" action="/action_page.php">
                     <div class="form-group" >

                        <label for="sel1"></label>
                        <div id="sel1"></div>
                        <h5>Select Classroom Number</h5>

                        <select id="roomN" onchange="selectRoomNum(this.value)" >
                        </select>
                        <div class="tablCLASS" id="tablP">

                        </div>
                        <div class="panel panel-primary table-wrapper-scroll-y my-custom-scrollbar" id="paneltb">
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

                              </tr>
                            </thead>
                            <tbody id="Ctable">
                     </tbody>
                          </table>
                     </div>
                  </form>
                  <div id="noComplaint">
                    <h2>There is no complaint</h2>
                  </div>
               </div>
            </div>

         </div>
      </div>
    </div>
      <div class="panel panel-default" style="margin-bottom:0px">
         <div class="panel-footer">Panel Footer</div>
      </div>
      <script >

         function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
         }

         function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
         }

         function openNavR() {
         document.getElementById("mySidenavR").style.width = "400px";

         }

         function closeNavR() {
         document.getElementById("mySidenavR").style.width = "0";
         }

         function LoadA(e)
         {
         openNavR();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("roomN").innerHTML = this.responseText;
                }
            };
             xmlhttp.open("GET","getRoom.php?q=A",true);
            xmlhttp.send();

         }
         function LoadB(e)
         {
         openNavR();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("roomN").innerHTML = this.responseText;
                }
            };
             xmlhttp.open("GET","getRoom.php?q=B",true);
            xmlhttp.send();

         }

function selectRoomNum(str){
  openNavR();

    if (str=="") {
  document.getElementById("paneltb").innerHTML="";
  return;
}
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() {
  if (this.readyState==4 && this.status==200) {
    document.getElementById("Ctable").innerHTML=this.responseText;
    document.getElementById("paneltb").style.display="block";

  };

}

xmlhttp.open("GET","getComplaint.php?q="+str,true);
xmlhttp.send();

}

//


         var map = L.map('map').setView([21.651644, 39.716137], 19);

           googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
             maxZoom: 20,
             subdomains:['mt0','mt1','mt2','mt3']
         });

         googleSat.addTo(map);


         var singleMarkerB = L.marker([21.651690, 39.716594]).on('click', LoadB);
         singleMarkerB.addTo(map);


         var singleMarkerA = L.marker([21.651846, 39.715863]).on('click', LoadA);

         singleMarkerA.addTo(map);
      </script>
   </body>
</html>
