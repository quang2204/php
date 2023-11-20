<?php
require_once "../../connect-db.php";

try {

    $sql = "
     INSERT INTO users (name, email, password,img)
     VALUES (:name,:email,:password,:img);";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":name", $_POST["name"]);
    $stmt->bindParam(":email", $_POST["Email"]);
    $stmt->bindParam(":password", $_POST["password"]);
    $stmt->bindParam(":img", $_POST["img"]);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (\Throwable $th) {
    echo "d" . $th->getMessage() . "";
    die();
}
?>