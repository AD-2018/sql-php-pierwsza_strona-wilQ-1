<?php
    $servername = "mysql-wilczekbartosz.alwaysdata.net";
    $username = "219956";
    $password = "Galareta123";
    $dbname = "wilczekbartosz_sql";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>
