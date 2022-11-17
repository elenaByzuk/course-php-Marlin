<?php
session_start();

require '1_function.php';

$email = $_POST['email'];
$password = $_POST['password'];
$result = get_user_by_email($email);

if (!empty($result)){
    set_flash_message('danger', 'Этот email уже занят другим пользователем.', 'alert');
    redirect_to('1_page_register');
}

add_user($email, $password);
set_flash_message('success', 'Вы успешно зарегистрировались!', 'success');
redirect_to('1_page_register');


// $pdo = new PDO("pgsql:host=127.0.0.1;dbname=test", "postgres", "root");
// $sql = "SELECT * FROM users WHERE email=:email";
// $statement = $pdo->prepare($sql);
// $statement->execute(['email' => $email]);
// $result = $statement->fetch(PDO::FETCH_ASSOC);

// if (!empty($result)) {
//     $_SESSION['danger'] = "Этот email уже занят другим пользователем.";
//     header("Location: /1_page_register.php");
//     exit;
// }

// $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
// $statement = $pdo->prepare($sql);
// $statement->execute(['email' => $email, 'password' => $password]);
// $_SESSION['success'] = "Вы успешно зарегистрировались!";

// header("Location: /1_page_register.php");
// exit;

?>