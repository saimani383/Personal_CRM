<?php
$conn = mysqli_connect("localhost","root","","personal_crm");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>