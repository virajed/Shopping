<?php



if(isset($_COOKIE['count']))
{
$c = $_COOKIE['count'] + 1;
setcookie('count',$c,time()+7200);
}
else
{ 
setcookie('count',1,time()+7200);
$c = 1;
}

$it = $_POST['itm'];
$q = $_POST['qty'];

setcookie("cart[$c][item]",$it,time()+3600);
setcookie("cart[$c][qty]",$q,time()+3600);

?>