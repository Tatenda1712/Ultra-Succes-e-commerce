<?php
ob_start();
//include header.php file
include('header.php');
?>

<?php
//include cart item if it is not empty
count($product->getData('cart')) ? include('files/_cart-items.php'):include('files/notFound/_cartNotFound.php');


//include wishlist item if it is not empty
count($product->getData('wishlist')) ? include('files/_wishlist.php'):include('files/notFound/_wishlistNotFound.php');


//include new phones.php file
include('files/_new-phones.php');

?>

<?php

//include footer.php file
include('footer.php');
?>