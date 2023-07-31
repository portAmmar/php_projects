<?php
require_once 'pdo.php';
global $conn;
session_start();

if (isset($_GET['user_id'])  ){
    $sql = 'SELECT name,email,user_id FROM users WHERE user_id = :user_id';
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':user_id'=> $_GET['user_id'] ));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $name = $data['name'];
    $email = $data['email'];
    $id = $data['user_id'];
    global $name ,$email, $id;
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['id']) ){
    $sql = 'UPDATE users SET name = :name, email = :email WHERE user_id = :user_id';
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(
       ':name' => $_POST['name'],
       ':email' => $_POST['email'],
       ':user_id' => $_POST['id'],
    ));
    $_SESSION['update'] = 'item has been updated';
    header('Location: index.php');
}

?>

<form method="post">
    <label for="name">name</label>
    <input type="text" name="name" id="name" value='<?= $name ?>'/>
    <br>
    <br>
    <label for="email">email</label>
    <input type="email" name="email" id="email" value='<?= $email ?>' />
    <input type="hidden" name="id"  value='<?= $id ?>' />
    <br>
    <br>
    <input type="submit" name="edit" value="confirm"/>
    <a href="index.php">cancel</a>
</form>
