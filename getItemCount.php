<?php

include'db_connection.php';

$sum3 ="SELECT Sum(quantity) FROM cart";
$result4 = $con -> query($sum3);


$sum4 = mysqli_fetch_array($result4);
$sum5= $sum4["Sum(quantity)"];

if($sum5==null)
echo "Cart (0 Items)";
else
echo "Cart ( $sum5 )";

















?>