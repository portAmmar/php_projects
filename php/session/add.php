<?php
require_once "PDO.php";
global $conn;

session_start();
if ( !isset($_SESSION['account']) ){
    echo "pls ".'<a href="login.php">log in</a>';
    return;
}else{
    echo 'welcome back '. $_SESSION['account'];
}


if ( isset($_POST['number']) && isset($_POST['repeat']) && isset($_POST['note']) && isset($_POST['add'])){
    $sql = "INSERT INTO  notes (note, note_repeat, note_num) values (:note, :note_repeat, :note_num)";
    $stmt = $conn->prepare($sql);

    $stmt->execute(array(
       ':note' => $_POST['note'],
       ':note_repeat' => $_POST['repeat'] + 0,
       ':note_num' => $_POST['number'] + 0
    ));
    $_SESSION['add'] = "item has been added to database";
    header('Location: app.php');

}
?>

<form  method="post">
    <label for="number" class="number" >note num:</label>
    <input type="number" name="number" id="number"/>

    <br>
    <br>
    <label for="repeat" class="repeat" >repeat:</label>
    <input type="number" name="repeat" id="repeat"/>
    <br>
    <br>
    <label for="note" class="note" >your note:</label>
    <input type="text" name="note" id="note"/>
    <br>
    <br>

    <input type="submit" name="add" value="add" id="add"/>
    <a href="./app.php">app</a>
</form>
