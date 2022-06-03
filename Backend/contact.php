<?php
// database connection code
if(isset($_POST['name']))
{
// connection
$con = mysqli_connect('localhost', 'root', '','db_connect');

// to get the data

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// insert the data to the database
$sql = "INSERT INTO bio_contact (id, name, email, message) VALUES ('0', '$name', '$email', '$message')";
}
$rs = mysqli_query($con, $sql);
?>
