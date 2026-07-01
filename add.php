<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];

$sql = "INSERT INTO contacts(name,email,phone,company)
VALUES('$name','$email','$phone','$company')";

if(mysqli_query($conn,$sql)){
    header("Location:view.php");
}
else{
    echo "Error";
}
?>