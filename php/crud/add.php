<?php
require_once "pdo.php";
global $conn;

session_start();
//if ( !isset($_SESSION['account']) ){
//    echo "pls ".'<a href="login.php">log in</a>';
//    return;
//}else{
//    echo 'welcome back '. $_SESSION['account'];
//}


if ( isset($_POST['name']) && isset($_POST['email'])){
    $sql = "INSERT INTO  users (name, email) values (:name, :email)";
    $stmt = $conn->prepare($sql);

    $stmt->execute(array(
       ':name' => $_POST['name'],
       ':email' => $_POST['email'] ,
    ));
    $_SESSION['add'] = "item has been added to database";
    header('Location: index.php');

}
?>

<form  method="post">
    <label for="name" class="name" >name :</label>
    <input type="name" name="name" id="name"/>

    <br>
    <br>

    <label for="email" class="email" >your email:</label>
    <input type="email" name="email" id="email"/>
    <br>
    <br>

    <input type="submit" name="add" value="add" id="add"/>
    <a href="./index.php">app</a>
</form>
