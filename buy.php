<div class="jumbotron">

	<h1> ABC Pvt Ltd <small> This is the life </small> </h1>

</div>



<div class="container">

	<div class="row"> <!--row 1-->
		<div class="col-md-4"><!--col 1-->

		</div>
		

		<div class="col-md-4"><!--col 2-->


<?php page_show();?>




		</div>

		<div class="col-md-4"><!--col 3-->

		</div>

	</div>
</div>


<?php

function page_show()
{

	if(isset($_COOKIE['count']))
	{
	echo '<table border=1 width="100%">';
	echo '<th>Item No</th><th>Item</th><th>Price</th><th>Quantity</th><th>Sub Total</th>';

	$j = $_COOKIE['count'];
	for($i=1; $i <$j+1;$i++)
	{
	$a = GetItem($_COOKIE['cart'][$i]['item']);
	$b = GetPrice($_COOKIE['cart'][$i]['item']);
	$c = $b * $_COOKIE['cart'][$i]['qty'];
	echo '<tr>';
	echo '<td>'.$_COOKIE['cart'][$i]['item'].'</td>';
	echo '<td>'.$a.'</td>';
	echo '<td>'.$b.'</td>';
	echo '<td>'.$_COOKIE['cart'][$i]['qty'].'</td>';
	echo '<td>'.$c.'</td>';
	echo '</tr>';
	}
	echo '</table>';
	}
	else{
	echo 'Your cart is Empty';
	}

}

function GetItem($no)
{
mysql_connect('localhost','root','');
mysql_select_db('web132');
$sql = "SELECT model FROM items WHERE ItemNo=$no";
$output = mysql_query($sql);
$data = mysql_fetch_array($output);
return $data[0];
}

function GetPrice($no)
{
mysql_connect('localhost','root','');
mysql_select_db('web132');
$sql = "SELECT price FROM items WHERE ItemNo=$no";
$output = mysql_query($sql);
$data = mysql_fetch_array($output);
return $data[0];
}

?>