<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $title = $_POST['title'];
    $phonenumber = $_POST['phonenumber'];

    try {
        $sql = "UPDATE location SET `title` = ?, `phonenumber` = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$title,$phonenumber,$userId]);
        $con = null;
        $stmt = null;
        header("Location:../Location.php");
        die();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

else {
    header("Location:../Location.php");
}
?>
