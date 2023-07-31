<pre>
    <?php

    error_reporting(E_ALL ^ E_WARNING);
    if (!$_GET['name']) {
        echo 'log in first';
        exit();
        // die("“Sorry! Can’t Continue Further!”");
    }

    $name = $_GET['name'];
    if (isset($_POST['play'])) {


        $choices = ["Rock", "Paper", 'Scissors'];
        $pcChoice = $choices[rand(0, 2)];
        $myChoice = $_POST["human"] == 3 ? $choices[rand(0, 2)] : $choices[$_POST["human"]];
    }

    if (isset($_POST['logout']))
        header('location: ./index.php')





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

<h1>Rock Paper Scissors</h1>
<p>Welcome:
    <?= $name ?>
</p>

<form method="post">
    <select name="human">
        <option value="-1">Select</option>
        <option value="0">Rock</option>
        <option value="1">Paper</option>
        <option value="2">Scissors</option>
        <option value="3">Test</option>
    </select>
    <input type="submit" name="play" value="Play">
    <input type="submit" name="logout" value="Logout">
</form>

<pre style="background-color:#eee;padding:20px;border-radius:10px;">
Please select a strategy and press Play.
<?php
if (isset($_POST['play'])) {
    if ($_POST["human"] != -1) {

        echo "your choice = " . $myChoice . "      pc choice = $pcChoice \n";
    }
    if ($pcChoice == $myChoice) {
        echo " tie";
    } elseif ($pcChoice > $myChoice) {
        echo "pc wins";
    } elseif ($pcChoice < $myChoice) {
        echo "you win   ";

    }
}



?>


</pre>