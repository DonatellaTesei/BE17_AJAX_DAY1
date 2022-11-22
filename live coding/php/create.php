<?php
    $conn = mysqli_connect("localhost", "root", "", "ajaxtest");

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    $sql = "INSERT INTO `names`( `fname`, `lname`) VALUES ('$fname','$lname')";
    if(mysqli_query($conn, $sql)){
        echo "Success";
    }
?>