<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
  
<?php include_once('head.php'); ?>
</head>

<body>
<?php

$no = isset($_GET["p"]) ? $_GET["p"] : 1;

//include_once('page'.$no.'.php');
include_once('mysql_db/db.php');
include_once($no.'.php');

?>


</body>

</html>