<?php
include "../../config.php";
session_start();

if (isset($_SESSION['order_id'])) {
    $order_id = $_SESSION['order_id'];
}else{
    $order_id = "";
}



// Fetch data from the database
$sql = "SELECT `ID`, `NAME`, `SIZE`, `QTY`, `PRODUCT_ID`, `ORDER_ID`, `PRICE`, `IMAGE_URL` 
        FROM `addcart` 
        WHERE `ORDER_ID` = '$order_id'";
$query = mysqli_query($conn, $sql);

// Initialize total amount
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to the external CSS file -->
</head>
<body>
    <div class="checkout-container">
        <a href="../../">Back</a>
        <h1 class="title">Checkout Items</h1>
        <table class="checkout-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Item Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($query && mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $id = $row['ID'];
                        $name = $row['NAME'];
                        $size = $row['SIZE'];
                        $qty = $row['QTY'];
                        $price = $row['PRICE'];
                        $image_url = $row['IMAGE_URL']; // Assuming an IMAGE_URL column exists
                        $item_total = $price * $qty;
                        $total += $item_total;

                        if ($name == 'White') {
                            echo "
                            <tr>
                                <td><img src='../../images/".$image_url."' alt='$name' class='product-image'></td>
                                <td><div style='background:".$name."; border:1px solid black; padding:1em 0.1em; border-radius:50%; width:30px; text-align:center; margin:auto; opacity:0.7;'></div></td>
                                <td>$size</td>
                                <td>$qty</td>
                                <td>$$price</td>
                                <td>$$item_total</td>
                            </tr>
                        ";
                        }else{
                             echo "
                            <tr>
                                <td><img src='../../images/".$image_url."' alt='$name' class='product-image'></td>
                                <td><div style='background:".$name."; padding:1em 0.1em; border-radius:50%; width:30px; text-align:center; margin:auto; opacity:0.7;'></div></td>
                                <td>$size</td>
                                <td>$qty</td>
                                <td>$$price</td>
                                <td>$$item_total</td>
                            </tr>
                        ";
                        }

                       
                    }
                } else {
                    echo "
                        <tr>
                            <td colspan='6' class='no-items'>No items found in your cart.</td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>

        <!-- Total Section -->
        <div class="total-section">
            <h2 class="payable_amount">Total: $<?php echo number_format($total, 2); ?></h2>
            <button class="payment-button" onclick="makePayment()">Make Payment</button>
        </div>
    </div>

    <script>
        function makePayment() {
            alert('Redirecting to payment gateway...');
            // Add payment gateway logic here
        }
    </script>
</body>
</html>
