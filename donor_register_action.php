<?php
include('config.php');
$sql = "INSERT INTO donors(name,address,blood_group,blood_quantity,age,email,phone_no)
    values('$_POST[name]', '$_POST[address]','$_POST[blood_group]','$_POST[blood_quantity]','$_POST[age]', '$_POST[email]', '$_POST[phone_no]')";
$phone_no = $_POST['phone_no'];
if (mysqli_query($conn, $sql)) {
    header('Location:donor_info.php?phone_no='.$phone_no);
 } else {
 
    echo "insert failed:" . mysqli_error($conn);
 }

mysqli_close($conn);
