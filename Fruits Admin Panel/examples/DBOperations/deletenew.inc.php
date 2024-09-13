<?php
include 'connection.inc.php'; 
if (isset($_POST['save'])) {
    $userId = $_POST['id'];

    try {
        $sql = "DELETE FROM discountedfruits WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$userId]);

        if ($stmt->rowCount() > 0) {
            echo "Records deleted successfully";
        } else {
            echo "No records deleted";
        }

        header("Location:../Discounted_Fruits.php");
        exit();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location:../Discounted_Fruits.php");
    exit();
}
?>
