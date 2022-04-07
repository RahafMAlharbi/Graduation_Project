<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

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
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



      <title>Map</title>
      <style >
         .sidenavR{background-color:#fff;
         height:495px;

         overflow-x:hidden;
         padding:30px 10px 10px 20px;
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
width: 399px;
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
#content{
  display: none;

}
#mySidenavR{
margin: 250px 30px 00px 00px;
/* margin: 274px 00px 00 00px; */


}
#body1 {
  /* padding :00px 200px 50px 50px ; */

}
#example2 {
  /* position: relative; */
  padding :00px 100px 50px 50px ;
  /* border: 2px solid black; */
  /* background-repeat: no-repeat; */
  background-color:#2d3873;
  background-image: linear-gradient(to bottom right, #0D3749, #B2D5E2);
  border-radius: 10px;

  /* background-size: 1000px 900px 900px 900px; */
  height: 700px;
  width: 1270px;
  /* padding :50px 50px 50px 50px ;
  margin:200px 00 200px 100 ; */
  background-color: greenyellow;

}

#map {
height: 500px;
width: 1250px;
margin:00px 200px 100px 20px ;
border-radius: 10px;
/* padding :00px 50px 50px 50px ; */


/* padding :00px 50px 50px 50px ; */
/* margin:00px 00 50px 100 ; */
/* padding :00px 0px 50px 0px ; */

}
#mapmenue{
  height: 900px;
  width: 1350px;
}
body{
  margin: 200px 00px 0px 00px;
  padding: 00px 0px 100px 00px;


}
/* .bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
} */
.card{
  /* position: absolute; */

  /* margin: 25% 50px 500px 100px; */

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
.card1
{
  /* padding: 00px 00px 100px 00px; */


  /* position: absolute;

  right: 70%; */

}
.card2
{
  /* position: absolute;

  right: 50%; */

}
.card3
{
  /* position: absolute;

  right: 30%; */

}
.card4
{
  /* position: absolute;

  right: 10%; */

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
      <!-- <div class="jumbotron text-center">
         <h1>Main page </h1>
      </div> -->

   <div id="body1" class="container">

     <div id="mapmenue" class="  position-relative">
       <!-- side nav bar -->

       <div id="mySidenavR" class="sidenavR position-absolute bottom-00 end-0 translate-middle-y   sidebar  navbar">
       <!-- <div id="mySidenavR" class="sidenavR position-absolute top-00 start-0 translate-middle-y navbar "> -->

       <div id="content" class="position-sticky">
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
                    <tbody id="Ctable"  class="">
             </tbody>

                  </table>

             </div>
           </div>

          </form>

       </div>
       </div>
    </div>
    <div class="">

       <div id="map"></div>
       </div>
  </div>

    <!-- bg-light -->



          <!-- //// -->
     <div class="container">

            <div id="example2" class="p-5 mb-4 position-relative">
              <div id="" class="p-5 mb-4 position-relative" style="height:900px" style="width:">

              <div class="d-flex align-items-center position-absolute start-50 translate-middle top-50" style="height:900px" style="width:">

              <div class="card card1 col-sm-3 ms-3">

            </div>

            <div class="card card2 col-sm-3 ms-5">
          </div>
          <div class="card card3 col-sm-3 ms-5">
        </div>
        <div class="card card4 col-sm-3 ms-5 ">
      </div>
            </div>
          </div>

          </div>
        </div>
  </div>


      <!-- <div class="container"> -->

  <!-- <h2>Hello World</h2>
  <p>Here, the background image is set to 300px wide and 100px high.</p> -->


<!-- </div> -->

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
         document.getElementById("content").style.display="block";


         }

         function closeNavR() {
         document.getElementById("mySidenavR").style.width = "0";
         document.getElementById("content").style.display="none";
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



</html>
