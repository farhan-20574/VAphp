<!DOCTYPE html>
<html>

<head>
    <title>Task A PHP</title>
</head>

<body>

    <h1>Task A PHP</h1>
    <p>1 Write a PHP program to create a function that prints "Hello Students" when called. </p>
    <hr>

    <form method="POST">
        <input type="submit" name="call" value="Call Function"><br>
        <label for="">Gretings will show below</label><br>
    </form>
    <?php
    function greet()
    {
        echo "Hello Students";
    }

    if ($_POST) {
        greet();
    }
    ?>

</body>

</html>