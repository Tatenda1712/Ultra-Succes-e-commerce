<?php
//require mysql connection
require('database/DBcontroller.php');

//require product php class
require('database/product.php');

//require cart php class
require('database/Cart.php');

//DB controller object
$db=new DBcontroller();

//product object
$product=new product($db);
$product_shuffle=$product->getData();

//Cart object
$Cart=new Cart($db);

?>
