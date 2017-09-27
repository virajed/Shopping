<?php
require_once('mysql_db/db.php');
$item = isset($_POST['itm'])? $_POST['itm'] : 'test';
$price = isset($_POST['prc'])? $_POST['prc'] : '100';
//$item = $_POST[];

$sql = "INSERT INTO items(item,unitprice) VALUES('$item','$price')";
echo $sql;

//include_once('check.php');
echo insert($sql);

	/*
	$host = 'localhost';
	$user = 'root';
	$ps = '';
	$dbname = 'dbitem';

	$conn = mysqli_connect($host,$user,$ps,$dbname) or die("Unable to connect");
	mysqli_query($conn,$sql);
	//*/

?>