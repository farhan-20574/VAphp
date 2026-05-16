<?php session_start();
$products = [
  1 => ["name" => "Laptop", "price" => 50000],
  2 => ["name" => "Mouse",  "price" => 1500],
  3 => ["name" => "Keyboard","price" => 3000],
];

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['cart'][$id] = $products[$id];
    header("Location: cart.php");
}
?>
<h2>Products</h2>
<?php foreach ($products as $id => $p): ?>
  <p><?= $p['name'] ?> - Rs.<?= $p['price'] ?>
    <a href="?add=<?= $id ?>">Add to Cart</a>
  </p>
<?php endforeach; ?>