<?php 
include "dbcon.php";

$id = $_GET['id'];
$a = "select * from restaurant where id = $id";
$b = mysqli_query($con,$a);
$result = mysqli_fetch_array($b);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<?php include "../header.php" ?>
</head>
<body>

            <form action="insert_update.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                	<input type="hidden" name="id" value="<?php echo$result['id']?>">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required value="<?php echo$result['name']?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required value="<?php echo$result['email']?>">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required value="<?php echo$result['subject']?>">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required><?php echo$result['message']?>"</textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit"
                >Send Message</button></div>

            </form>
</body>
</html>