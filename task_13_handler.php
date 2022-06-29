<?php
session_start();

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$pdo = new PDO("mysql:host=127.0.0.1;dbname=test", "root", "");
$sql = "SELECT * FROM users_13 WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);


if (!empty($result)) {
    $message = "Этот эл адрес уже занят другим пользователем";
    $_SESSION['danger'] =  $message;
    header("Location: /task_13.php");
    exit;
} 

$sql = "INSERT INTO users_13 (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$data = [
    'email' => $email,
    'password' => $password
];

$statement->execute($data);

header("Location: /task_13.php");

?>