<?php
$id = $_GET['id'];
$image = $_GET['image'];

$pdo = new PDO("mysql:host=127.0.0.1;dbname=test", "root", "");
$sql = "SELECT * FROM images WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->execute(['id' => $id]);
$result = $statement->fetch(PDO::FETCH_ASSOC);


unlink('img\\demo\\gallery2\\' . $result['image']);

$sql = "DELETE FROM images WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->execute(['id' => $id]);

header("Location: /task_19.php");
exit;