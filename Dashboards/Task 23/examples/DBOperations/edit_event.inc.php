<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $date = $_POST['date'];
    $title = $_POST['title'];

    try {
        $sql = "UPDATE newevent SET date = ?, title = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$date,$title,$userId]);
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
