<?php 

include "dbcon.php";

$id = $_GET['id'];
$data = "select * from booktable where id=$id";
$query = mysqli_query($con,$data);
$result = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<table class="table">
		<tr class="bg-primary">
			<th>id</th>

			<th>Name</th>
			<th>Email</th>
			<th>phone</th>
			<th>date</th>
			<th>time</th>
			<th>people</th>
			<th>message</th>
			
		</tr>
		<tr>
			<td><?php echo $result['id']?></td>
			<td><?php echo $result['name']?></td>
			<td><?php echo $result['email']?></td>
			<td><?php echo $result['phone']?></td>
			<td><?php echo $result['datee']?></td>
			<td><?php echo $result['timee']?></td>
			<td><?php echo $result['people']?></td>
			<td><?php echo $result['message']?></td>
		</tr>
	
</table>
</div>
</body>
</html>