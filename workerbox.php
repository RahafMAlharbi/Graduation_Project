<?php
// mysql connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muqu";

$con = mysqli_connect($servername, $username, $password, $dbname) or die("Error: " . mysqli_error($con));

// fetch records
$result = @mysqli_query($con, "SELECT * FROM complaint pk, assign fk where pk.complaintId =fk.compliantId") or die("Error: " . mysqli_error($con));


?>

<!DOCTYPE html>
<html>
<header>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





</header>
<head>
  <style>
  table1{
  border:1px solid black;
  border-collapse: collapse;
  }
  td{
  border:1px solid black;
  }
  </style>

    <title>Worker page</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
<body>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <form method="post" action="worker.php">

            <table class="table " id="dev-table">
              <thead class="table table-sm table-hover table-dark text-muted " >
                    <tr>
                    <th>  </th>
                    <th scope="col">ID  </th>
                    <th scope="col">DATE</th>
                    <th scope="col">Category</th>
                    <th scope="col">View</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td scope="row"><input name="chk_id[]" type="checkbox" class='chkbox' value="<?php echo $row['complaintId']; ?>"/></td>
                  <td><input type="" name="chk_complaint[]" value="<?php echo $row['complaintId'];?>"></td>
                  <td><input type ="" name="chk_date[]" value="<?php echo $row['date'];?>"></td>
                  <td><input type ="" name="chk_category[]" value="<?php echo $row['category'];?>"></td>


                    <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    View </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>              </td>
                  <td><input type="hidden"  name="chk_wrkid[]" value="<?php echo $row['userId'];?>"></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <button type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal">Uncompleted</button>
          <button type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal">Completed</button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
