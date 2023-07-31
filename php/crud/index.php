<?php
require_once 'pdo.php';
global $conn;
session_start();
if (isset($_SESSION['add'])){
    echo '<p style="color: green">' .$_SESSION['add'].'</p>';
    unset($_SESSION['add']);
}
if (isset($_SESSION['delete'])){
    echo '<p style="color: red">' .$_SESSION['delete'].'</p>';
    unset($_SESSION['delete']);
}
if (isset($_SESSION['update'])){
    echo '<p style="color: darkmagenta">' .$_SESSION['update'].'</p>';
    unset($_SESSION['update']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$sql = 'SELECT name, email, user_id FROM users';
$stmt = $conn->query($sql);
;
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ){
    echo '<p>';
    echo $row['name'] ." " .$row['email'];
//    echo ' <input type="submit" name="edit" value='. $row["user_id"]. '/>'." /" .' <input type="submit" name="delete" value='. $row["user_id"]. '><a href="delete.php">delete</a> </input>';
    echo ' <a href="edit.php?user_id='.$row["user_id"].'">edit</a>/';
    echo ' <a href="delete.php?user_id='.$row["user_id"].'">delete</a>';
    echo '</p>';
}

?>
<a href="add.php">add new</a>
</body>
</html>
