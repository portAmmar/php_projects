<?php
session_start();

//if ( isset($_POST['password']) && isset($_POST['sub']) ){
//header('Location: app.php');
//
//}
//if (isset($_SESSION['fail']) || isset($_SESSION['success']) ){
//    echo "good";
//
//}

if ( isset($_POST['password'])  ){
    $pw = $_POST['password'];
    if ( $pw === "0000" ) {
        $_SESSION['success'] = true;
        $_SESSION['account'] = $_POST['email'];
        header('Location: app.php');
        return;
    }else{
        $_SESSION['fail'] = true;
        header( 'Location: login.php');
        return;
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login page</title>
    <style>*{font-family:Franklin Gothic Medium; }</style>
</head>
<body>
<p>notes login</p>
<?php
if ( isset($_SESSION['fail']) ) {
    echo "<p style='color: red'>wrong password<p>";
    unset($_SESSION['fail']);
}
?>
<form  method="post">
    <label for="email" class="email" >your E-mail:</label>
    <input type="email" name="email" id="email"/>

    <br>
    <br>
    <label for="password" class="password" >your password:</label>
    <input type="text" name="password" id="password"/>
    <br>
    <br>

    <input type="submit" name="sub" value="log in" id="sub"/>
    <a href="./app.php">app</a>
</form>
</body>
</html>