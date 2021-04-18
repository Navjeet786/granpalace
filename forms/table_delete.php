<?php

include "dbcon.php";

$id = $_GET['id'];
$a = "DELETE from booktable where id=$id";
$data = mysqli_query($con,$a);
header('location:table_display.php');

?>