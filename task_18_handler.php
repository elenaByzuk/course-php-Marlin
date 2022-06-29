<?php

$image = $_FILES['image'];
$imagePath = $image['tmp_name'];
$type = mb_substr($image['type'], 6);
$imageName = uniqid() . "." . $type;

$pdo = new PDO("mysql:host=127.0.0.1;dbname=test", "root", "");
$sql = "INSERT INTO images (image) VALUES (:image)";
$statement = $pdo->prepare($sql);
$statement->execute(['image' => $imageName]);

move_uploaded_file($imagePath, 'img\\demo\\gallery2\\' . $imageName);

header("Location: /task_19.php");
exit;
?>