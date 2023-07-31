<?php
global $conn;
require_once  'concation.php';
require 'delete.php';
if (isset($_POST)){
    $sql = "SELECT * FROM users";
    $stmt = $conn->query($sql);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<table>";

        echo "<tr><td>";
        echo $row['user_id'];
        echo "</td><td>";
        echo $row['name'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td></tr>";

        echo "</table>";
    }

}
?>
<style>
    table, th, td {
        border: 1px black solid;
    }
</style>





