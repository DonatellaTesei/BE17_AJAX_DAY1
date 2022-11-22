<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "ajaxtest");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($rows as $row) {
    echo "  <p>{$row["fname"]}</p>
                <p>{$row["lname"]}</p>
                <p>{$row["email"]}</p>
                <hr>";
}
