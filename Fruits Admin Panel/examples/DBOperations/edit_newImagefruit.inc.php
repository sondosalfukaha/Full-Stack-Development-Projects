<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "Uploads/" . $filename;

    try {
        $sql = "UPDATE newfruits SET `imagePath`=? WHERE `id`=?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$filename,$userId]);
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>Image uploaded successfully!</h3>";
        } else {
            echo "<h3>Failed to upload image!</h3>";
        }
        $con = null;
        $stmt = null;
        header("Location:../NEW FRUITS.php");
        die();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

else {
    header("Location:../NEW FRUITS.php");
}
?>
