<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
           integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
           crossorigin=""/>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
           integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
           crossorigin=""></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Bootstrap CSS Reference-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!--Website Style Sheet Reference-->
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body>
      <style media="screen">
      #complaintTable{
        /* display: none; */
        padding:10px 10px 30px 0;
      }

#dev-table{
margin: 10px 10px 10px px;

}
#roomN{
width: 399px;
}
#dev-table-filter{
width: 360px;

}


.panel > .panel-heading {
 background-image: none;
 /* background-color: #345e73; */
 color: white;
 /* border-color: #345e73; */
}
#Ctable{
/* border-color: #345e73; */

}
tr{
/* border-bottom: 1px solid #345e73; */
}
#pb,#dev-table{
background-color: #ffffff; filter: alpha(opacity=40); opacity: 0.95;border:1px #345e73 solid;
}
#pbd{
display: none;

}
#content1{
display: none;

}
      #map {
      height: 500px;
      width: 1300px;
      margin:00px 0px 100px 00px ;
      border-radius: 10px;
    }

      .sidenavR{
      background-color:#fff;
      height:495px;

      overflow-x:hidden;
      /* padding:30px 10px 10px 20px; */
      position:absolute;
      right:0;
      /* margin: 274px 00px 00 00px; */
      /* box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); */
      border-radius: 30px;

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
      .mySidenavR{margin: 250px 30px 00px 00px;}
      .cardS{
        /* position: absolute; */

        margin: 50px;

      /* top: 70%; */
      background: rgba( 255, 255, 255, 0.2 );
      box-shadow: 0 8px 32px 0 rgba(19, 22, 60, 0.37);
      backdrop-filter: blur( 6px );
      -webkit-backdrop-filter: blur( 6px );
      border-radius: 10px;
      border: 1px solid rgba( 255, 255, 255, 0.18 );
      height: 200px;
      width: 200px;
      }
      #carddice{
        /* position: absolute; */
        margin: 300px 50px 50px 10px;
        border:3px #345e73 solid;
        /* margin: 50px; */

        /* margin: 00px 0px 00px 80px; */

      /* top: 70%; */
      background: rgba( 255, 255, 255, 0.2 );
      /* background:#666; */
      /* box-shadow: 0 8px 32px 0 rgba(19, 22, 60, 0.37); */
      backdrop-filter: blur( 6px );
      -webkit-backdrop-filter: blur( 6px );
      border-radius: 10px;
      /* border: 1px solid rgba(0, 0, 0, 1); */
      height: 400px;
      width: 300px;
      }
      #{
        margin: 200px 0px 0px 0px;
        padding: 00px 00px 00px 90px;

      }
      #cardinfo{
        /* margin: 00px 30px 100px 35px; */
        margin: 130px 0px 0px 0px;

        width: 1000px;
        height: 1px;
        border:3px #345e73 solid;


      }
      #example2 {
        /* position: relative; */
        /* padding :00px 100px 50px 50px ; */
        /* border: 2px solid black; */
        /* background-repeat: no-repeat; */
        background-color:#2d3873;
        background-image: linear-gradient(to bottom right, #0D3749, #B2D5E2);
        border-radius: 10px;

        /* background-size: 1000px 900px 900px 900px; */
         /* height: 40em; */
        /* width: 1270px;  */
        /* padding :50px 50px 50px 50px ;
        margin:200px 00 200px 100 ; */
        /* background-color: greenyellow; */

      }
#s2{
  width: 126px;
  height: 119px;

}
#cardinfo{
  /* margin: 00px 30px 100px 35px; */
  margin: 130px 0px 0px 0px;

  width: 1000px;
  height: 1px;
  border:3px #345e73 solid;


}
      </style>

        <!--  Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <div class="container">
        <div class="row">
           <!-- <div class="col-md-4"> -->

           <div id="map" class="col-md-4 position-relative"></div>
<!-- </div> -->
                    <div id="mySidenavR" class="end-0 position-absolute col-md-2 sidenavR   sidebar  navbar">
                    <!-- <div id="mySidenavR" class="sidenavR position-absolute top-00 start-0 translate-middle-y navbar "> -->
                    <a href="javascript:void(0)" class="closebtn position-absolute" onclick="closeNavR()">×</a>

                    <div id="content1" class="position-sticky ">
                      <div id="complaint">
                        <h2 class"panel-title lead" >View Complaints</h2>
                      </div>
                       <!-- <a href="javascript:void(0)" class="closebtn position-absolute" onclick="closeNavR()">×</a> -->
                       <form class="form-inline" action="/action_page.php">
                          <div class="form-group" >

                             <h4 class="lead">Select Classroom Number</h4>

                             <select  class="form-select form-select-lg  form-control " aria-label=".form-select-lg example" id="roomN" onchange="selectRoomNum(this.value)" >
                             </select>
                               </div>

                             <div id = "complaintTable"  class="">

                            <div class="form-group" id="pbd" >
                             <div class="panel" id="paneltb">
                               <div class="panel-heading">
                                 <h3 class="panel-title   lead">Complaint</h3>
                                 <div class="pull-right">
                                   <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                     <!-- <i class="glyphicon glyphicon-filter"></i> -->
                                   </span>
                                 </div>
                               </div>

                               <div class="panel-body" id="pb" >
                                 <input type="text"  onkeyup="myFunction()"type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Enter Complaint ID" />
                               </div>
                               <table class="table table-hover  table-bordered table- " id="dev-table">
                                 <thead class="">
                                   <tr >
                                     <th>ID</th>
                                     <th>Date</th>
                                     <th>Category</th>
                                     <th>Status</th>

                                   </tr>
                                 </thead>
                                 <tbody id="Ctable"  class="">
                          </tbody>

                               </table>

                          </div>
                        </div>

                       </form>

                    </div>

                 </div>
       </div>
       </div>



       <!-- <div class="row" >
          <div class="container jumbotron"> -->

                 <!-- <div id="example2" class=" row p-5 mb-4 ">
                   <div id="" class="p-5 mb-4 position-relative" style="height:900px" style="width:">

                   <div class="d-flex position-relative align-items-center  start-50 translate-middle top-50" style="height:900px" style="width:">

                   <div class="cardS card1 col-sm-2 ms-3">

                 </div>

                 <div class="cardS card2 col-sm-2 ms-5">
               </div>
               <div class="cardS card3 col-sm-2 ms-5">
             </div>
             <div class="cardS card4 col-sm-2 ms-5 ">
           </div>
                 </div>
               </div>

               <!-- </div>
             </div> -->

</div>
<div class="container pt-5 mb-5" id="example2">
  <!-- <h2 class="pb-2 border-bottom">Columns with icons</h2> -->
  <div class="row g-4 py-5 row-cols-1 pt-5 row-cols-lg-3 ps-5">
    <div class="cardS feature col">
      <!-- <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
      </div> -->

    </div>
    <div class="cardS feature col">

      <!-- <img src="/s2.png.png" alt="Girl in a jacket"> -->
      <!-- <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
      </div>
      <h2>Featured title</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      <a href="#" class="icon-link">
        Call to action
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a> -->
    </div>
    <div class="cardS feature col position-relative">
      <div class="position-absolute top-50 start-50 translate-middle">
        <img id="s2" src="s2.png" class="ms-2">

        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
      </div>
      <!-- <h2>Featured title</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      <a href="#" class="icon-link">
        Call to action
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a> -->
    </div>
    <div class="cardS feature col">
      <!-- <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
      </div>
      <h2>Featured title</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      <a href="#" class="icon-link">
        Call to action
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a> -->
    </div>
  </div>
</div>

<div class="container  pt-5 mb-5 row cardinfo position-relative mb-5">
        <!-- <div id="cardinfo" class="position-relative mb-5" style="" > -->
          <!-- <div id="" class="p-5 mb-4 position-relative" style="height:900px" style="width:"> -->

          <!-- <div class="d-flex align-items-center position-absolute start-50 translate-middle top-50" style="height:900px" style="width:"> -->

          <div id="carddice" class="mb-5   position-absolute top-50 start-0 translate-middle-y feature col">

        </div>


    <div id="carddice" class="mb-5 position-absolute top-50 end-0 translate-middle-y feature col">
      hooo
  </div>

        </div>
  <!-- </div> -->

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
    </div>
</div>
</div>
<script >

   function openNav() {
   document.getElementById("mySidenav").style.width = "250px";
   }

   function closeNav() {
   document.getElementById("mySidenav").style.width = "0";

   }

   function openNavR() {
   document.getElementById("mySidenavR").style.width = "450px";
   document.getElementById("content1").style.display="block";


   }

   function closeNavR() {
   document.getElementById("mySidenavR").style.width = "0";
   document.getElementById("content1").style.display="none";
   document.getElementById("mySidenavR").style.border = "#fff";



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
var x
if (str=="") {
document.getElementById("complaintTable").innerHTML="";
return;
}
console.log(str)
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() {
if (this.readyState==4 && this.status==200) {

border(document.getElementById("Ctable").innerHTML=this.responseText.length);
document.getElementById("Ctable").innerHTML=this.responseText;

// border(x);
// alert(document.getElementById("Ctable").innerHTML.value);
document.getElementById("pbd").style.display="block";
};
}

xmlhttp.open("GET","getComplaint.php?q="+str,true);
xmlhttp.send();
// var x=document.getElementById("Ctable").value;
// alert(x.length);




}

function border(x){
if(x==60)
document.getElementById("mySidenavR").style.border="9px solid rgba(35, 210, 68, 0.76)";

else
document.getElementById("mySidenavR").style.border="9px solid rgba(231, 23, 73, 0.77) ";

// alert(x);

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
      singleMarkerB.on("click", RefreshTable);
      // document.getElementById("pbd").style.display="block";


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
