<?php
include 'connection.inc.php';

if (isset($_POST['save'])) {
    $userId = $_POST['id'];
    $filename = $_FILES["Image"]["name"];
    $tempname = $_FILES["Image"]["tmp_name"];
    $folder = "Uploads/" . $filename;

    try {
        $sql = "UPDATE news SET `image`=? WHERE `id`=?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$filename,$userId]);
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>Image uploaded successfully!</h3>";
        } else {
            echo "<h3>Failed to upload image!</h3>";
        }
        $con = null;
        $stmt = null;
        header("Location:../Latestnews.php");
        die();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

else {
    header("Location:../Latestnews.php");
}
?>
