<?php
require_once "../connect-db.php";
try {
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (\Throwable $th) {
    echo "d" . $th->getMessage() . "";
    die();
}
?>