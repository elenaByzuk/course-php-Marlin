<?php

session_start();
$_SESSION['counter'] = $_POST['counter'];

if (isset($_POST['counter'])) {
    $_SESSION['counter']++;
}

header("Location: /task_15.php");
?>
