<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $Id = $_POST['id'];

    try {
        $sql = "DELETE FROM feedback WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$Id]);

        if ($stmt->rowCount() > 0) {
            echo "Records deleted successfully";
        } else {
            echo "No records deleted";
        }
        header("Location:../feedback.php");
        exit();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location:../feedback.php");
    exit();
}
?>
