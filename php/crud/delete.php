<?php
require_once 'PDO.php';
global $conn;
session_start();

if (isset($_GET['user_id'])  ){
$sql = 'SELECT name FROM users WHERE user_id = :user_id';
$stmt = $conn->prepare($sql);
$stmt->execute(array(':user_id'=> $_GET['user_id'] ));
$name = $stmt->fetch(PDO::FETCH_ASSOC)['name'];
global $name;

}

if (isset($_GET['user_id']) && isset($_GET['confirm']) ){
$sql = 'DELETE FROM users WHERE user_id = :user_id';
$stmt = $conn->prepare($sql);
$stmt->execute(array(
    ':user_id' => $_GET['user_id']
));
$_SESSION['delete'] = 'item deleted successfully';
header('Location: index.php');
return;
}

?>


<p>are you sure you want to delete <?= $name ?>?</p>
<form action="">
    <input type="hidden" name="user_id" value="<?= $_GET['user_id'] ?>"/>
<input type="submit" name="confirm" value="delete"/>
</form>
<a href="index.php">cancel</a>