<?php
$text = $_POST['text'];
$pdo = new PDO("pgsql:host=127.0.0.1;dbname=test", "postgres", "root");
$sql = "INSERT INTO my_table (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("Location: /task_11.php");
?>