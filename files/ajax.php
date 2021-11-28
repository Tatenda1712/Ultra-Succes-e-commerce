<?php
//require mysql connection
require('../database/DBcontroller.php');

//require product php class
require('../database/product.php');

//DB controller object
$db=new DBcontroller();

//product object
$product=new product($db);

if(isset($_POST['itemid'])){
  $result=$product->getProduct($_POST['itemid']);
  echo json_encode($result);
}

?>