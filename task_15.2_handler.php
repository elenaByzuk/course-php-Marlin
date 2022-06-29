<?php

session_start();
unset($_SESSION['counter']);

header("Location: /task_15.php");
?>