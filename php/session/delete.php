<?php
require_once 'PDO.php';
global $conn;
session_start();
if ( !isset($_SESSION['account']) ){
    echo "pls ".'<a href="login.php">log in</a>';
    return;
}else{
    echo 'welcome back '. $_SESSION['account'];
}

if (isset($_POST['note_id']) && isset($_POST['delete']) ){
$sql = 'DELETE FROM notes WHERE note_id = :note_id';
$stmt = $conn->prepare($sql);
$stmt->execute(array(
    ':note_id' => $_POST['note_id']
));
header('Location: app.php');

}
