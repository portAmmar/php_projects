<?php
$servername = "localhost";
$username = "root";
$password = "1234";

 $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
