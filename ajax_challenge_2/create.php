<?php
$conn = mysqli_connect("localhost", "root", "", "ajaxTest");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];

$sql = "INSERT INTO `users`( `fname`, `lname`, `email`) VALUES ('$fname','$lname', '$email')";
if (mysqli_query($conn, $sql)) {
    echo "Success";
}
