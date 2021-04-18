<?php

include "dbcon.php";
$id = $_POST['id'];
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['datee'];
$e = $_POST['timee'];
$f = $_POST['people'];
$g = $_POST['message'];

$data = "UPDATE booktable set name='$a',email='$b',phone='$c',datee='$d',timee='$e',people='$f',message='$g' where id=$id";
$query = mysqli_query($con,$data);
header('location:table_display.php');

?>