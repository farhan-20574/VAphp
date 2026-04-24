<!DOCTYPE html>
<html>

<head>
    <title>Task A PHP</title>
</head>

<body>

    <h1>Task A PHP</h1>
    <p>3 # Write a PHP function to subtract two numbers using parameters and return the result. </p>
    <hr>

    <form method="post">
        <input type="text" name="a" placeholder="Enter first number">
        <input type="text" name="b" placeholder="Enter second number">
        <input type="submit" value="Subtract">
    </form>
    <?php
    function subtract($a, $b)
    {
        return $a - $b;
    }

    if ($_POST) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $result = subtract($a, $b);
        echo "Result is: " . $result;
    }
    ?>



</body>

</html>