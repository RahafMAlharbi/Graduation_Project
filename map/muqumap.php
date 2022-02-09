
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
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

        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
          <div id="map"></div>
              <div class="container ">
                  <h1>Click the filter icon <small>(<i class="glyphicon glyphicon-filter"></i>)</small></h1>
                  	<div class="row">
              			<div class="col-md-6">
              				<div class="panel panel-primary table-wrapper-scroll-y my-custom-scrollbar">
              					<div class="panel-heading">
              						<h3 class="panel-title">Developers</h3>
              						<div class="pull-right">
              							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
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

<style >
  #map { 		height: 400px;
    			width: 600px;
    			max-width: 100%;
    			max-height: 100%;
    		 }
         {
    height: 400px;
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




<script >
//popup table
var template =
'<div class="panel-body">\
  <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />\
</div>\
<table class="table table-hover" id="dev-table">\
  <thead>\
    <tr>\
      <th>#</th>\
      <th>First Name</th>\
      <th>Last Name</th>\
      <th>Username</th>\
    </tr>\
  </thead>\
  <tbody>\
    <tr>\
      <td>1</td>\
      <td>Kilgore</td>\
      <td>Trout</td>\
      <td>kilgore</td>\
    </tr>\
    <tr>\
      <td>2</td>\
      <td>Bob</td>\
      <td>Loblaw</td>\
      <td>boblahblah</td>\
    </tr>\
    <tr>\
      <td>3</td>\
      <td>Holden</td>\
      <td>Caulfield</td>\
      <td>penceyreject</td>\
    </tr>\
  </tbody>\
</table>\
</form>';

var romeNumberpopup =
'<form class="row g-3 needs-validation" novalidate>\
<div class="col-md-3">\
  <label for="validationCustom04" class="form-label">Room Number</label>\
  <select class="form-select" id="validationCustom04" required>\
  </div>\
  </form>\
  ';


  var map = L.map('map').setView([21.651644, 39.716137], 19);

  googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});
googleSat.addTo(map);

//if()
//if(building == "A"){
//marker1
var singleMarker = L.marker([21.651690, 39.716594]);
var popup =singleMarker.bindPopup(romeNumbermap);
popup.addTo(map);
//}

//else if(building == "B"){
//marker2
var singleMarker = L.marker([21.651846, 39.715863]);
//popup with taple
var popup =singleMarker.bindPopup(template);
//}
popup.addTo(map);
//////////////

(function(){
  'use strict';
var $ = jQuery;
$.fn.extend({
  filterTable: function(){
    return this.each(function(){
      $(this).on('keyup', function(e){
        $('.filterTable_no_results').remove();
        var $this = $(this),
                      search = $this.val().toLowerCase(),
                      target = $this.attr('data-filters'),
                      $target = $(target),
                      $rows = $target.find('tbody tr');

        if(search == '') {
          $rows.show();
        } else {
          $rows.each(function(){
            var $this = $(this);
            $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
          })
          if($target.find('tbody tr:visible').size() === 0) {
            var col_count = $target.find('tr').first().find('td').size();
            var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
            $target.find('tbody').append(no_results);
          }
        }
      });
    });
  }
});
$('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
  // attach table filter plugin to inputs
$('[data-action="filter"]').filterTable();

$('.container').on('click', '.panel-heading span.filter', function(e){
  var $this = $(this),
    $panel = $this.parents('.panel');

  $panel.find('.panel-body').slideToggle();
  if($this.css('display') != 'none') {
    $panel.find('.panel-body input').focus();
  }
});
$('[data-toggle="tooltip"]').tooltip();
})

</script>

  </body>
</html>



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
 $romNumerquery = mysqli_query($conn,"select roomNumber from classroom");
 $rowcount=mysqli_num_rows($romNumerquery);
?>
<form class="row g-3 needs-validation" novalidate>
<div class="col-md-3">
  <!-- <label for="validationCustom04" class="form-label">Room Number</label> -->
  <!-- <select class="form-select" id="validationCustom04" required> -->
    <?php
      // for($i=1;$i<=$rowcount;$i++){
      // $row=mysqli_fetch_array($romNumerquery);
     ?>
    <!-- <option value="<?php echo $row["roomNumber"]?>"> <?php echo $row["roomNumber"]?> </option> -->


    <?php
//  }
     ?>
