<?php
// addToCart.php
include "../config.php";
    session_start();

if (isset($_POST['color']) && isset($_POST['size']) && isset($_POST['quantity'])) {
    $color = $_POST['color'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $order_id = $_SESSION['order_id'];
    $product_id = $_SESSION['product_id'];
    $price = $_SESSION['pricing'];
    $img_url = $_SESSION['img_url'];

    
    $sql = "INSERT INTO `addcart`(`NAME`, `SIZE`, `QTY`, `PRICE`, `IMAGE_URL`, `PRODUCT_ID`, `ORDER_ID`) VALUES ('$color','$size','$quantity', '$price', '$img_url', '$product_id','$order_id')";
    $query = mysqli_query($conn, $sql);
    
    
    // Store these values in a session or a database

    $_SESSION['cart'][] = array(
        'color' => $color,
        'size' => $size,
        'quantity' => $quantity
    );



    echo json_encode(array('status' => 'success', 'message' => 'Item added to cart.'));
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Missing parameters.'));
}
?>
