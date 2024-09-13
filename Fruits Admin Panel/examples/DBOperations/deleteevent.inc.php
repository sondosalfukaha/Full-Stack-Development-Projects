<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    try {
        $sql = "DELETE FROM burger WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$userId]);
        header("Location:../Burger.php");
        exit();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location:../Burger.php");
    exit();
}
?>
