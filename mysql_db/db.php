<?php

$host = 'localhost'; //These are not working. Why?
$user = 'root';
$ps = '';
$dbname = 'dbitem';


function connect()
{
	///*
	$host = 'localhost';
	$user = 'root';
	$ps = '';
	$dbname = 'dbitem';
	//*/

	$con = mysqli_connect($host,$user,$ps,$dbname) or die("Unable to connect");
	return $con;
	
}

function insert($sql)
{

	$conn = connect();

	$ok = mysqli_query($conn,$sql);

	if($ok==1)
	{
		return 'Done';
	}
	else{return mysqli_error($conn);}
}

function insert_id($sql)
{

	$conn = connect();

	$ok = mysqli_query($conn,$sql);

	if($ok==1)
	{
		return mysqli_insert_id($conn);
	}
	else{return -1;}
}


?>