<?php
include 'connection.inc.php'; // Ensure this file contains the PDO connection setup

if (isset($_POST['save'])) {
    // Get form data
    $userId = $_POST['id'];

    try {
        $sql = "DELETE FROM trainingcourses WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$userId]);

        // Optionally, you can check if any rows were affected
        if ($stmt->rowCount() > 0) {
            echo "Records deleted successfully";
        } else {
            echo "No records deleted";
        }

        // Redirect after deletion
        header("Location:../TrainingCourses.php");
        exit();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location:../TrainingCourses.php");
    exit();
}
?>
