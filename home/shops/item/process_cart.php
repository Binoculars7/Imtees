<?php
// addToCart.php

if (isset($_POST['color']) && isset($_POST['size']) && isset($_POST['quantity'])) {
    $color = $_POST['color'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    
    // Store these values in a session or a database
    session_start();
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
