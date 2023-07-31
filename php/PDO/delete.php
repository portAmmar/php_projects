<?php
global $conn;
require_once 'concation.php';

if(isset($_POST['deleteBtn'])){
    $sql = "DELETE FROM users WHERE  user_id =:id";
    $stmt =$conn->prepare($sql);
    $stmt->execute(array(
        ':id' => $_POST['delete']
    ));
    header("Location: ". $_SERVER('PHP_SELF'));
    echo 'deleted sucesfully';
}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>delete page</title>
    <style>
        body{
            padding: 10px;
        }
    </style>
</head>

<body>

<p>delete user</p>
<form method="post">


    <label for="delete"></label>
    <input type="text" id="delete" name="delete">
    <input type="submit" value="delete" name="deleteBtn"/>
    <br>
    <br>
    <br>

</form>

</body>
</html>
