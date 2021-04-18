<?php

include "dbcon.php";

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['datee'];
$e = $_POST['timee'];
$f = $_POST['people'];
$g = $_POST['message'];

$data = "insert into booktable(name,email,phone,datee,timee,people,message) value ('$a','$b','$c','$d','$e','$f','$g')";
mysqli_query($con,$data);
header('location:../index.php');

?>