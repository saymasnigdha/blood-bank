<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
<?php
    include('header.php')
    ?>
    <div class="container">

        <div class="text-center">
                <?php
                include('config.php');

                $sql = "SELECT * FROM donors where phone_no = '$_GET[phone_no]' ";
                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <h1>Donor information (Id: <?php echo $row['id'];?>)</h1>
                        <p>
                            <span><b>Username:</b></span> <span><?php echo $row['name']; ?></span>
                        </p>
                        <p>
                            <span><b>Address:</b></span> <span><?php echo $row['address']; ?></span>
                        </p>
                        <p>
                            <span><b>Phone number:</b></span> <span><?php echo $row['phone_no']; ?></span>
                        </p>
                        <p>
                            <span><b>Email:</b></span> <span><?php echo $row['email']; ?></span>
                        </p>
                        <p>
                            <span><b>Blood Quantity:</b></span> <span><?php echo $row['blood_quantity']; ?></span>
                        </p>
                        <p>
                            <span><b>Blood Group:</b></span> <span><?php echo $row['blood_group']; ?></span>
                        </p>     
                        
                        <p>
                            <span><b>Type:</b></span> <span><?php echo $row['type']; ?></span>
                        </p>
                        <p>
                            <span><b>Age:</b></span> <span><?php echo $row['age']; ?></span>
                        </p>
                   <?php } }
                   ?>
                </div>
                
            </div>
            
            
        </body>
        
        </html>