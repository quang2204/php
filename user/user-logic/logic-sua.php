<?php

require_once '../../connect-db.php';

try {
    $sql = "
        UPDATE users 
        SET 
            name = :name,
            email = :email,
            password = :password,
            img = :img
        WHERE 
            id = :id;
    ";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->bindParam(':email', $_POST['Email']);
    $stmt->bindParam(':img', $_POST['img']);
    $stmt->bindParam(':id', $_POST['id']);

    $stmt->execute();

    header('Location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}