<?php
    $conn = mysqli_connect("127.0.0.1", "root", "", "ajaxTest");

    $text = trim($_GET["search"]);
    $text = strip_tags($text);
    $text= htmlspecialchars($text);

    $sql = "SELECT * FROM names WHERE fname LIKE '$text%' OR lname LIKE '$text%';"; # "Gh%"

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
        echo "No result";
    }else {
        while($row = mysqli_fetch_assoc($result)){
            echo "  <p>{$row["fname"]}</p>
            <p>{$row["lname"]}</p>
            <hr>";
        }
    }
