<?php

require_once '../../connect-db.php';

try {
    $img = $_FILES('img') ?? null;
    $sql = "
        INSERT INTO crud1 (name, img, in_active)
        VALUES (:name, :img, :in_active);
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    if ($img) { //khi mà có upload ảnh lên thì mới sử lý ảnh lên 
        $pathUpload = __DIR__ . '';
        $stmt->bindParam(':img', $_POST['img']);
        move_uploaded_file($img['tpm_name'], '');
    }

    $stmt->bindParam(':in_active', $_POST['in_active']);

    $stmt->execute();

    header('Location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}
