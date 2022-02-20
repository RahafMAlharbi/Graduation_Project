<?php
// Opens a connection to a MySQL server.

$servername = "localhost";
$username = "roor";
$password = "";
$connection=mysqli_connect ($servername, $username, $password);
if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}
