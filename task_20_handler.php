<?php

function reArrayFiles(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);
    
    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

function saveImage($image) {
    // var_dump($image);die;
    $imagePath = $image['tmp_name'];
    $type = mb_substr($image['type'], 6);
    $imageName = uniqid() . "." . $type;
    
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=test", "root", "");
    $sql = "INSERT INTO images (image) VALUES (:image)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['image' => $imageName]);

    move_uploaded_file($imagePath, 'img\\demo\\gallery2\\' . $imageName);
}

$images = reArrayFiles($_FILES['images']);

foreach ($images as $image) {
    saveImage($image);
}

header("Location: /task_20.php");
exit;

?>