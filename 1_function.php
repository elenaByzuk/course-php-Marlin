<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

function get_user_by_email($email) {
    $pdo = new PDO("pgsql:host=127.0.0.1;dbname=test", "postgres", "root");
    $sql = "SELECT * FROM users WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}


function add_user($email, $password) {
    $pdo = new PDO("pgsql:host=127.0.0.1;dbname=test", "postgres", "root");
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email, 'password' => $password]);
     
}

function set_flash_message($name, $message) {
    $_SESSION[$name] = $message;
}

function display_flash_message($name) {
    
}

function redirect_to($path) {
    header("Location: /$path.php");
    exit;
}

?>