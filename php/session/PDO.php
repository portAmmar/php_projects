<?php
$servername = "localhost";
$username = "root";
$password = "1234";

    $conn = new PDO("mysql:host=$servername;dbname=session_app", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>