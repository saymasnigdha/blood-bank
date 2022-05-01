<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>All Donor</title>
</head>

<body>
<?php
    include('header.php')
    ?>
    <div class="container">
<h1>All Donor</h1>
        <div class="text-center">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#id</th>
            <th scope="col">name</th>
            <th scope="col">phone no</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
            <th scope="col">blood group</th>
            <th scope="col">blood quantity</th>
            <th scope="col">age</th>
            <th scope="col">type</th>
            </tr>
        </thead>
             <?php
            include('config.php');

             $sql = "SELECT * FROM donors";
             $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
             if (mysqli_num_rows($result) > 0) {
                 while ($row = mysqli_fetch_assoc($result)) {
             ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone_no']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['blood_group']; ?></td>
            <td><?php echo $row['blood_quantity']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><a href="delete_one_donor.php?phone_no=<?php echo $row['phone_no'];?>" class="btn btn-danger">Delete</a></td>
            <td><a href="donor_info.php?phone_no=<?php echo $row['phone_no'];?> " class="btn btn-warning">View</a></td>
            </tr>
        </tbody>
             <?php
              } 
            }
             ?>
        </table>
                </div>    
            </div>     
        </body>
        
        </html>