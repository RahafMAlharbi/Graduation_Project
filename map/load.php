<?php
// Opens a connection to a MySQL server.


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muqu";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = mysqli_query($conn,"select userId ,userName FROM manager");
$rows = array();

while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;

}

$indexed = array_map('array_values', $rows);
//  $array = array_filter($indexed);

echo json_encode($indexed);
if (!$rows) {
    return null;
}

$conn->close();
?>
