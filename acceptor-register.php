<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<title>Acceptor Registration</title>
</head>
<body>
    <?php
    include('header.php')
    ?>
<div class="container-fluid-lg">
<div class="row justify-content-center">
<div class="col-12 col-sm-6 col-md-3">
<div class="form-container">
  <h2>Acceptor Registration</h2>
  <form  action="acceptor_register_action.php" method="POST">
  <div class="form-group">
      <label class="form-text-sm" for="name">Acceptor Name:</label>
      <input type="text" class="form-control form-control-sm" placeholder="Full Name" name="name" required>
	</div>
	<div class="form-group">
    <label for="phone">Phone no:</label>
    <input type="text" class="form-control form-control-sm" placeholder="Enter phone no" name="phone_no" required>
  </div>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control form-control-sm" name="email" required>
  </div>
	<div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control form-control-sm"  placeholder="Enter age" name="age" required>
	</div>
	<div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control form-control-sm" name="address" required>
  </div>
  <div class="form-group">
      <label for="blood_group">Blood Group:</label>
      <input type="text" class="form-control form-control-sm" name="blood_group" required>
  </div>
  <div class="form-group">
      <label for="blood_quantity">Blood Quantity:</label>
      <input type="text" class="form-control form-control-sm" name="blood_quantity" placeholder="How many bags" required>
  </div>
 
  <button type="submit" class="btn btn-primary btn-block form-control form-control-sm">Submit</button>
  <a class="backpage" href="index.php">already have an account</a>
  </form>
  </div>
  </div>
</div>
</div>
</body>
</html>