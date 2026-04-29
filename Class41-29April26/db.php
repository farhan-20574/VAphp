<?php

$conn = mysqli_connect("localhost","root","","vadata");
if(!$conn){
    die("connection failed");
};
echo("Successfully connected vadata ! ")
?>