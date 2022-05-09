<?php
session_start();
session_destroy();
header('Location: loginbase.php');
exit;
?>
