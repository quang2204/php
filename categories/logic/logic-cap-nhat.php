<?php

require_once '../../connect-db.php';

try {
    $sql = "
        UPDATE crud1 
        SET 
            name = :name,
            img = :img,
            in_active = :in_active
        WHERE 
            id = :id;
    ";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':img', $_POST['img']); // Cái này hôm sau học upload thì sửa lại
    $stmt->bindParam(':in_active', $_POST['in_active']);
    $stmt->bindParam(':id', $_POST['id']);

    $stmt->execute();

    header('Location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}