<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $title = $_POST['title'];

    try {
        $sql = "UPDATE newsoonsection SET title = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$title,$userId]);
        $con = null;
        $stmt = null;
        header("Location:../LastEvents.php");
        die();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

else {
    header("Location:../LastEvents.php");
}
?>
