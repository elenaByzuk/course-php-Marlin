<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=127.0.0.1;dbname=test", "root", "");
$sql = "SELECT * FROM users_13 WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$result = $statement->fetch(PDO::FETCH_ASSOC);
// var_dump($result); var_dump(!$result); die;

if (!$result) {
    $_SESSION['danger'] = "Неверный логин";
    header("Location: /task_16.php");
    exit;
} 

$passwordVerify = password_verify($password, $result['password']);

if ($passwordVerify) {
    $_SESSION['user'] = $result;
    unset($_SESSION['danger']);
} else {
    $_SESSION['danger'] = "Неверный пароль";
    header("Location: /task_16.php");
    exit;
}

header("Location: /task_17.php");
exit;


?>