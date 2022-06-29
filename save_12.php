<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=127.0.0.1;dbname=test", "root", "");
$sql = "SELECT * FROM my_table WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

if (empty($result)) {
    $sql = "INSERT INTO my_table (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);
    $message = "Your data has been saved.";
    $_SESSION['success'] = $message;
    header("Location: /task_12.php");
    exit;
} 

$message = "You should check in on some of those fields below.";
$_SESSION['danger'] = $message;

header("Location: /task_12.php");


?> 