<html>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>

  <!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
  <body id="body" >
  <div class ="" id="flyoutMenu" onblur="toggleMenu();">
<?php // TODO: scroll bar adjesment ?>

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
          <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "muqu";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }


            ?>

            <?php
            $qury = mysqli_query($conn,"select complaintId ,date,category,status,description,roomNum from complaint");
             $romNumerquery = mysqli_query($conn,"select roomNumber from classroom");
             //$result = $conn->query($sql);
             if ($qury-> num_rows >0){
               while ($row = $qury-> fetch_assoc()) {
                 echo "<tr><td>".$row["complaintId"]."</td>"."<td>".$row["date"]."</td>"."<td>".$row["category"]."</td>"."<td>".$row["status"]."</td></tr>";
               }
               echo "</tbody>";

             }
             else {

               echo "no result";
             }
             $conn->close();
             ?>

          </tbody>
        </table>
      </div>
  </div>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sliding Menu</title>
</head>


  <button id="roundButton"></button>
  <div id="flyoutMenu">
    <h2><a href="#">Home</a></h2>
    <h2><a href="#">About</a></h2>
    <h2><a href="#">Contact</a></h2>
    <h2><a href="#">Search</a></h2>


  </div>


  <script>
var roundButton = document.querySelector("#roundButton")
var flyoutMenu = document.querySelector("#flyoutMenu")
var body = document.querySelector("#body")

roundButton.addEventListener("click", showMenu, false);
flyoutMenu.addEventListener("click", hidMenu, false);

function showMenu(e){
  flyoutMenu.classList.add("show");
  document.body.style.overflow="hidden";
}
// function hidMenu(e){
//   flyoutMenu.classList.remove("show");
//   document.body.style.overflow="auto";
//
//
// }

  </script>
</body>

</html>

<style media="screen">
  body {
  background-color: #EEE;
  font-family: Helvetica, Arial, sans-serif;
  padding: 25px;
  margin: 0;
  overflow: auto;
}

#container li {
  margin-bottom: 10px;
}

#roundButton {
  background-color: #ff9696;
  margin-bottom: 20px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 10px solid #a6002d;
  outline: none;
  transition: transform .3s cubic-bezier(0, .52, 0, 1);
s
}

#roundButton:hover {
  background-color: #ff9696;
  cursor: pointer;
  border-color: #a6002d;
  transform: scale(1.2, 1.2);
}

#roundButton:active {
  border-color: #003557;
  background-color: #FFF;
}
#flyoutMenu {
  width: 50vw;
  height: 45vh;
  background-color: #FFF;
  position: fixed;
  top: 0;
  left: 0;
  transform: translate3d(-100vw, 0, 0);
  transition: transform .3s cubic-bezier(0, .52, 0, 1);
  /* overflow: scroll; */
  /* z-index: 1000; */
}
#flyoutMenu.show{
  transform: translate3d(0vw,0,0)
}

#flyoutMenu h2 a {
  color: #333;
  margin-left: 15px;
  text-decoration: none;
}
#flyoutMenu h2 a:hover {
  text-decoration: underline;
}



</style>
