<!DOCTYPE html>
<html>

<head>
    <title>Task A PHP</title>
</head>

<body>

    <h1>Task A PHP</h1>
    <p>4 Create a function multiply($a, $b) and display the multiplication result using return keyword.</p>
    <hr>

    <form method="post">
        <input type="text" name="a" placeholder="Enter first number">
        <input type="text" name="b" placeholder="Enter second number">
        <input type="submit" value="Multiply">
    </form>
    <?php
    function multiply($a, $b)
    {
        return $a * $b;
    }

    if ($_POST) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $result = multiply($a, $b);
        echo "Result is: " . $result;
    }
    ?>



</body>

</html>