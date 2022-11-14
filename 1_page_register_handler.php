<?php
session_start();


$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("pgsql:host=127.0.0.1;dbname=test", "postgres", "root");
$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$result = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($result)) {
    $_SESSION['danger'] = "Этот email уже занят другим пользователем.";
    header("Location: /1_page_register.php");
    exit;
}

$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $password]);
$_SESSION['success'] = "Вы успешно зарегистрировались!";

header("Location: /1_page_register.php");
exit;

?>