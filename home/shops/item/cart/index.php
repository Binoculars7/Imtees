<?php
session_start();


//$product_id = $_SESSION['cart']['id'];
$product_color = $_SESSION['cart']['color'];
$product_size = $_SESSION['cart']['size'];
$product_qty = $_SESSION['cart']['quantity'];


//echo $product_id;
echo $product_color;
echo $product_size;
echo $product_qty;



?>