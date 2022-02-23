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
<head>
    <title>Worker page</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
<body>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="index.php" method="post">
            <?php if (isset($_GET['msg'])) { ?>
            <p class="alert alert-success"><?php echo $_GET['msg']; ?></p>
            <?php } ?>
            <table border="1" class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>  </th>
                    <th>ID  </th>
                    <th>DATE</th>
                    <th>Category</th>

                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><input name="chk_id[]" type="checkbox" class='chkbox' value="<?php echo $row['complaintId']; ?>"/></td>
                    <td><?php echo $row['complaintId']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            </form>
        </div>
    </div>
</div>

</body>
</html>
