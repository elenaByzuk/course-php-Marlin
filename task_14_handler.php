<?php
session_start();

$_SESSION['text'] = $_POST['text'];

header("Location: /task_14.php");
?>