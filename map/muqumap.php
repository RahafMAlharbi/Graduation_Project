<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
     <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      <meta charset="utf-8">
      <title>Map</title>
      <style >
         .sidenavR{background-color:#fff;
         height:400px;

         overflow-x:hidden;
         padding:30px 10px 10px 20px;
         position:absolute;
         right:0;
         margin: 0px 00px 00 00px;

         top:0;transition:.5s;width:0;z-index:1000;}
         .sidenav a,.sidenavR a{color:#818181;display:block;font-size:25px;padding:8px 8px 8px 32px;text-decoration:none;transition:.3s;}
         .sidenav a:hover,.offcanvas a:focus,.sidenavR a:hover,.offcanvas a:focus{color:#f1f1f1;}
         .sidenav .closebtn,.sidenavR .closebtn{font-size:36px;margin-left:50px;position:absolute;right:25px;top:0;}
         @media screen and max-height 450px {
         .sidenav,.sidenavR{padding-top:15px;}
         .sidenav a,.sidenavR a{font-size:13px;}
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
         /* table{
         border:1px solid black;
         border-collapse: collapse;
         }
         td{
         border:1px solid black;
         } */
         #complaintTable{
           /* display: none; */
           padding:10px 10px 30px 0;
         }

#dev-table{
  margin: 10px 10px 10px px;

}
#roomN{
width: 384px;
}
#dev-table-filter{
  width: 360px;

}


.panel > .panel-heading {
    background-image: none;
    background-color: #345e73;
    color: white;
    border-color: #345e73;
}
#Ctable{
  border-color: #345e73;

}
tr{
  border-bottom: 1px solid #345e73;
}
#pb,#dev-table{
  background-color: #ffffff; filter: alpha(opacity=40); opacity: 0.95;border:1px #345e73 solid;
}
#pbd{
  display: none;

}
      </style>
   </head>
   <body>
      <!-- <nav class="navbar navbar-default">
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
      </nav> -->
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
                   <h2 class"panel-title display-8 lead" >View Complaint</h2>
                 </div>
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNavR()">×</a>
                  <form class="form-inline" action="/action_page.php">
                     <div class="form-group" >

                        <h4 class="lead">Select Classroom Number</h4>

                        <select  class="form-select form-select-lg mb-2 form-control " aria-label=".form-select-lg example" id="roomN" onchange="selectRoomNum(this.value)" >
                        </select>
                          </div>

                        <div id = "complaintTable"  class="">

                       <div class="form-group" id="pbd" >
                        <div class="panel" id="paneltb">
                          <div class="panel-heading">
                            <h3 class="panel-title display-8  lead">Complaint</h3>
                            <div class="pull-right">
                              <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                <!-- <i class="glyphicon glyphicon-filter"></i> -->
                              </span>
                            </div>
                          </div>

                          <div class="panel-body" id="pb" >
                            <input type="text"  onkeyup="myFunction()"type="text" class="form-control col-md-4" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Enter Complaint ID" />
                          </div>
                          <table class="table table-hover  table-bordered table- mb-0" id="dev-table">
                            <thead class="">
                              <tr >
                                <th>ID</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Status</th>

                              </tr>
                            </thead>
                            <tbody id="Ctable" class="">
                     </tbody>
                          </table>
                     </div>
                   </div>

                  </form>
                  <!-- <div id="noComplaint">
                    <h2>There is no complaint</h2>
                  </div> -->
               </div>
               </div>
            </div>

         </div>
      </div>

      <!-- <div class="panel panel-default" style="margin-bottom:0px">
         <div class="panel-footer">Panel Footer</div>
      </div> -->
      <script >

         function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
         }

         function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
         }

         function openNavR() {
         document.getElementById("mySidenavR").style.width = "450px";

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
//get complaint info for each Classroom
function selectRoomNum(str){

    if (str=="") {
  document.getElementById("complaintTable").innerHTML="";
  return;
}
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() {
  if (this.readyState==4 && this.status==200) {

    document.getElementById("Ctable").innerHTML=this.responseText;
    document.getElementById("pbd").style.display="block";

  };
}
xmlhttp.open("GET","getComplaint.php?q="+str,true);
xmlhttp.send();

}


          //map
         var map = L.map('map').setView([21.651644, 39.716137], 19);

           googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
             maxZoom: 20,
             subdomains:['mt0','mt1','mt2','mt3']
         });

         googleSat.addTo(map);

         //MarkerA
         var singleMarkerA = L.marker([21.651846, 39.715863]).on('click', LoadA);
         singleMarkerA.addTo(map);

       //MarkerB
       var singleMarkerB = L.marker([21.651690, 39.716594]).on('click', LoadB);
       singleMarkerB.addTo(map);

         // reload table in menue
         $(document).ready(function() {

           // reload table in B
            function RefreshTable() {
                $( "#complaintTable" ).load( "map8.php #complaintTable" );
            }
            singleMarkerB.on("click", RefreshTable);
            // reload table in A
            function RefreshTable() {
                $( "#complaintTable" ).load( "map8.php #complaintTable" );
            }
            singleMarkerA.on("click", RefreshTable);
         });

          //search in table
         function myFunction() {
         var input, filter, table, tr, td, i, txtValue;
         input = document.getElementById("dev-table-filter");
         filter = input.value.toUpperCase();
         table = document.getElementById("dev-table");
         tr = table.getElementsByTagName("tr");
         for (i = 0; i < tr.length; i++) {
           td = tr[i].getElementsByTagName("td")[0];
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
   </body>



</html>
