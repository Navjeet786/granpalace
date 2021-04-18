<?php

include "dbcon.php";
$id = $_GET['id'];
$a = "DELETE from restaurant where id=$id";
$query = mysqli_query($con,$a);
header('location:insert_display.php');
?>