<?php
global $conn;
require_once 'concation.php';



if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['add'])  ){
print_r($_POST);
$sql = "INSERT INTO users (name, email, password) VALUES  (:name, :email, :password)";
$stmt =$conn->prepare($sql);
$stmt->execute(array(
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':password' => $_POST['password']
));
    header("Location: signUp.php");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login page</title>
    <style>
        body{
            padding: 10px;
        }
    </style>
</head>

<body>

<p>add a new user</p>
<form method="post">
    <label for="name">name</label>
    <input type="text" name="name" class="name" id="name"/>
    <br>
    <br>
    <label for="email">email</label>
    <input type="text" name="email" class="email" id="email"/>
    <br>
    <br>
    <label for="password">password</label>
    <input type="password" name="password" class="password" id="password"/>
    <br>
    <br>
    <input type="submit" value="add user" name="add"/>
    <a href="login.php">login</a>
<!--<p>-->
<!--    <a href="delete.php">delete page</a>-->
<!---->
<!--</p>-->

</form>

</body>
</html>