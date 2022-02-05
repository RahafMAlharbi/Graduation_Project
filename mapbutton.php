<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <script type="text/javascript"> //script code
    function onclikphp(){
    var rzlt="<?php php_fun();?>"; //call php fun
    alert(rzlt);
    return false ;
  }
    </script>

<form action="" method="post">
  <input type="button"  value="Click me" onclick="onclikphp()"/>

</form>
    <?php
    // connect mysql, php
    $conn = new mysqli("localhost","root","","muqu");
    // get posts table
    $stm = $conn->prepare("select * from worker");
    $stm->execute();
    $result=$stm->get_result();
    while ($row = $result->fetch_assoc()) {
//select  row from database
      echo $row ["userName"]."</br>";
    }

    function php_fun()
    {
      echo " HI ";

    }
    ?>

  </body>
</html>
