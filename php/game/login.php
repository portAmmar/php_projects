<pre>
<?php
$message = '';
if (isset($_GET['password'])) {
    if ($_POST['password'] !== 'php123') {
        $message = 'wrong password';
    } else {
        header("Location: game.php");
    }
}
?>
</pre>

<style>
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-decoration: none;
    }

    body {
        padding: 50px;
    }
</style>

<h1>Please Log In</h1>
<form action="./game.php" method="get">
    <label for="name">user name</label>
    <input type="text" id="name" name="name" value="<?= htmlentities(isset($_GET['name']) ? $_GET['name'] : "") ?>">

    <br><br>

    <label for="password">password</label>
    <input type="password" id="password" name="password"
        value="<?= htmlentities(isset($_GET['password']) ? $_GET['password'] : "") ?>">

    <p style="color:red;">
        <?= $message ?>
    </p>

    <input type="submit" name="submit" value="log in">
    <button> <a href="./Index.php">cancel </a> </button>

</form>