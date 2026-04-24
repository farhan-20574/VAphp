<!DOCTYPE html>
<html>

<head>
    <title>Task A PHP</title>
</head>

<body>

    <h1>Task A PHP</h1>
    <p>2 # Create a function add($a, $b) that takes two numbers and returns their sum. Display the result. </p>
    <hr>

    <form method="post">
        <input type="text" name="a" placeholder="Enter first number">
        <input type="text" name="b" placeholder="Enter second number">
        <input type="submit" value="Add">
    </form>
    <?php
    function add($a, $b)
    {
        return $a + $b;
    }

    if ($_POST) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $result = add($a, $b);
        echo "Sum is: " . $result;
    }
    ?>



</body>

</html>