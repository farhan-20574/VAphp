<?php include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    mysqli_query($conn, "INSERT INTO students (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
}
?>
<form method="POST">
  Name:  <input type="text" name="name"><br>
  Email: <input type="email" name="email"><br>
  <input type="submit" value="Save">
</form>