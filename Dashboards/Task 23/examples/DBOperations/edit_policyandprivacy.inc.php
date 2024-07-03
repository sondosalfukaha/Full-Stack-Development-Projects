<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $text = $_POST['text'];

    try {
        $sql = "UPDATE policyandprivacy SET `text` = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$text,$userId]);
        $con = null;
        $stmt = null;
        header("Location:../policyandprivacy.php");
        die();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

else {
    header("Location:../policyandprivacy.php");
}
?>
