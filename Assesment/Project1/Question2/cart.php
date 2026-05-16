<?php session_start(); ?>
<h2>Your Cart</h2>
<?php
$total = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        echo "<p>{$item['name']} - Rs.{$item['price']}</p>";
        $total += $item['price'];
    }
    echo "<strong>Total: Rs.$total</strong>";
} else {
    echo "Cart is empty.";
}
?>
<a href="products.php">Back to Products</a>