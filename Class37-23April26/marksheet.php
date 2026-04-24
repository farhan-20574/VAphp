<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mark sheet</title>
</head>

<body>

    <h1>Marks Calculator</h1>

    <form method="post">
        <label>English Marks</label>
        <input type="number" name="english"><br>

        <label>Urdu Marks</label>
        <input type="number" name="urdu"><br>

        <label>Computer Marks</label>
        <input type="number" name="computer"><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['english'])) {

        $english = $_POST['english'];
        $urdu = $_POST['urdu'];
        $computer = $_POST['computer'];

        $total = $english + $urdu + $computer;
        $percentage = $total / 3;

        if ($english < 40 || $urdu < 40 || $computer < 40) {
            $status = "Fail";
        } else {
            $status = "Pass";
        }

        if ($percentage >= 80) {
            $grade = "A";
        } elseif ($percentage >= 60) {
            $grade = "B";
        } elseif ($percentage >= 50) {
            $grade = "C";
        } elseif ($percentage >= 40) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        echo "<h3>Total: $total</h3>";
        echo "<h3>Percentage: " . number_format($percentage, 2) . "%</h3>";
        echo "<h3>Status: $status</h3>";
        echo "<h3>Grade: $grade</h3>";
    }
    ?>
</body>

</html>