<?php
require_once('mysql_db/db.php');
$cus = 'test';// $_POST['cus'];//isset($_POST['itm'])? $_POST['itm'] : 'test';

$qty = $_POST['qty']; //isset($_POST['prc'])? $_POST['prc'] : '100';

$date = '2017/5/5';//$_POST[];

$item = 1;

$sql = "INSERT INTO orders(o_customer,o_date) VALUES('$cus','$date')";

//echo $sql;
$ono = insert_id($sql);


$sql = "INSERT INTO order_detail(o_no,i_code,qty) VALUES('$ono','$item','$qty')";

//echo $sql;
echo insert($sql);
?>