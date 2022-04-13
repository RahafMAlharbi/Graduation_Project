<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <head>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!--Website Style Sheet Reference-->
    <link href="css/style.css" rel="stylesheet" />
      <title></title>


    </head>

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
                              .mySidenavR{margin: 550px 30px 00px 00px;}
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
                              <div class="b-example-divider p-5">

                                <header class="p-3 mb-3 border-bottom">
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
                                <!--  Bootstrap Bundle with Popper -->
                                <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->

                                <div class="container ">
                                <div class="row ">
                                   <!-- <div class="col-md-4"> -->

                                   <div id="map" class=" col-md-4 position-relative"></div>
                            <!-- </div> -->
                            <!-- <div class="col-md-4  pb-5"> -->

                                            <div id="mySidenavR" class="  top-50 end-0 translate-middle-y top-50 position-absolute col-md-2 sidenavR   sidebar  navbar mt-5">
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
                                <!-- </div> -->
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

                            <!-- <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                            </div>
                            </div> -->



                            <!-- footer -->


                                                        <footer class="bg-light text-center ">
                                                        <div class="container p-4">
                                                          <section class="mb-4">

                                                            <svg xmlns="" width="28" height="28" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                               <a         href="https://twitter.com/">
                                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                                        </svg>

                                                        <svg xmlns="" width="28" height="28" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                            <a href="https://outlook.live.com/owa/">
                                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                                      </svg>





                                                      <svg xmlns="" width="28" height="28" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                        <a         href="https://www.instagram.com/">
                                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>

                                                      </svg>



                                                        <svg xmlns="" width="28" height="28" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                          <a         href="https://twitter.com/">

                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>

                                                        </svg>

                                                      </footer>
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






</html>
