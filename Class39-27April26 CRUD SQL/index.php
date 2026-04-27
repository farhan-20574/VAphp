<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
<h2>Student FORM</h2>
    
<form action="" method="post">
    
   Name:<input type="text" name="name"><br><br>
   Email:<input type="text" name="email"><br><br>
   Password:<input type="text" name="pasword"><br><br>
   :<input type="submit" value="create" name="submit">
</form>
<?php
 include "db.php"
if($_POST['submit']){
    
}
// if($_POST){
//     $name =$_POST['name'];
//     echo "Hello".$name;
// }
?>
</body>
</html>