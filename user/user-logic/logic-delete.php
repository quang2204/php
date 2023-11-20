<?php
require_once '../../connect-db.php';

try {
    $delete = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $delete);
    $stmt->execute();
    header('Location: ../index.php');
} catch (Exception $e) {
    die($e->getMessage());
}
?>