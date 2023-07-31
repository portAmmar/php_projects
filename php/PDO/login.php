<?php
require_once "concation.php";
global $conn;

if ( isset($_POST['email']) && isset($_POST['password'])){

    $sql = "SELECT name FROM users WHERE email = :e AND PASSWORD = :p";
    $stmt = $conn->prepare($sql);

    $stmt->execute(array(
        ':e' => $_POST['email'],
        ':p' => $_POST['password'],
    ));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row === false){
        echo "<p style='color: red'>wrong info</p>    ";

    }else{
        echo "<h1 style='color: green'>welcome back </h1>";
        unset($_POST);
        header("Location: show_users.php");

//        echo "welcome back";
    }
//        header("Location : login.php");
}
?>
<style>
    form{
        display: block;
        padding: 20px;
    }
</style>
<form  method="post">

<label for="email">email</label>
<input type="email" name="email" id="email"/>
    <br>
    <br>
<label for="password">password</label>
<input type="text" name="password" id="password"/>
    <br>
    <br>

<input type="submit" value="login" name="login"/>
<a href="signUp.php">sign up</a>
</form>
