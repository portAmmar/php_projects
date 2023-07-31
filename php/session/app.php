<?php
require_once "PDO.php";
require_once "delete.php";
global $conn;
if ( !isset($_SESSION['account']) ){
    echo "pls ".'<a href="login.php">log in</a>';
    return;
}else{
    if ( isset($_SESSION['success']) ) {
        echo "<p style='color: green'>you are logged in<p>";
        unset($_SESSION['success']);
    }
    if ( isset($_SESSION['add']) ) {
        echo "<p style='color: green'>" . $_SESSION['add'] . "<p>";
        unset($_SESSION['add']);
    }

    $sql = "SELECT * FROM notes";
    $stmt = $conn->query("SELECT note, note_id, note_repeat, note_num FROM notes");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<br>";
    foreach ( $rows as $row ) {
        echo "<table>";
        echo "<tr><td>";
        echo($row['note_num']);
        echo("</td><td>");
        echo($row['note']);
        echo("</td><td>");
        echo($row['note_repeat']);
        echo("</td><td>");
        echo('<form method="post"><input type="hidden" ');
        echo('name="note_id" value="'.$row['note_id'].'">'."\n");
        echo('<input type="submit" value="Del" name="delete">');
        echo("\n</form>\n");
        echo("</td></tr>\n");
        echo "</table>";
    }
}



?>

<br>
<style>

    table{
        background-color: #eee;
        display: flex;
        align-items: center;
        width: 200px;
    }
    td:last-of-type{
        padding: 5px 50px;
        }


</style>

<p>
<a href="add.php">add</a>
    |
<a href="logout.php">log out</a>
</p>
